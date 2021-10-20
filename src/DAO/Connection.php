<?php

namespace ExactOnlineBundle\DAO;

use Doctrine\ORM\EntityManager;
use ExactOnlineBundle\DAO\Exception\ApiException;
use ExactOnlineBundle\Entity\Exact;
use ExactOnlineBundle\Entity\ExactLocker;
use ExactOnlineBundle\Entity\ExactLogger;
use ExactOnlineBundle\Model\Base\Me;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * Class Connection
 * Author: Jefferson Bianchi / Maxime Lambot / Nils Méchin
 * Email : jefferson@zangra.com / maxime@zangra.com / nils@zangra.com.
 */
class Connection
{
    const CONTENT_TYPE_JSON = 'application/json';
    const CONTENT_TYPE_XML = 'application/xml';

    private static $baseUrl;
    private static $apiUrl;
    private static $authUrl;
    private static $tokenUrl;
    private static $redirectUrl;

    private static $exactClientId;
    private static $exactClientSecret;
    private static $code;
    private static $division;

    private static $em;
    private static $instance = null;
    private static $contentType = self::CONTENT_TYPE_JSON;
    private static $accept = self::CONTENT_TYPE_JSON.';odata=verbose,text/plain';
    private static $xRateLimits = [];

    public static function setConfig(array $config, EntityManager $em, $contentType = 'json')
    {
        self::$em = $em;
        self::$baseUrl = $config['baseUrl'];
        self::$apiUrl = $config['apiUrl'];
        self::$authUrl = $config['authUrl'];
        self::$tokenUrl = $config['tokenUrl'];
        self::$redirectUrl = $config['redirectUrl'];
        self::$exactClientId = $config['clientId'];
        self::$exactClientSecret = $config['clientSecret'];
        self::$division = $config['mainDivision'];
        self::setContentType($contentType);
    }

    /**
     * Return existing instance or creates a new one.
     *
     * @return Connection
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new Connection();
        }

        return static::$instance;
    }

    /**
     * Retrieve authorization code from Exact.
     * Exact api will POST on redirect URL and will be treated in our Controller.
     *
     * @return Redirect
     */
    public static function getAuthorization()
    {
        $url = self::$baseUrl.self::$authUrl;
        $param = [
            'client_id' => self::$exactClientId,
            'redirect_uri' => self::$redirectUrl,
            'response_type' => 'code',
            'force_login' => '1',
        ];
        $query = http_build_query($param);

        header('Location: '.$url.'?'.$query, true, 302);

        exit('Redirect');
    }

    /**
     * Get Token and persist to DB.
     */
    public static function getAccessToken()
    {
        $url = self::$baseUrl.self::$tokenUrl;
        $client = new Client();
        $response = $client->post(
            $url,
            [
                'form_params' => [
                    'code' => self::$code,
                    'client_id' => self::$exactClientId,
                    'grant_type' => 'authorization_code',
                    'client_secret' => self::$exactClientSecret,
                    'redirect_uri' => self::$redirectUrl,
                ],
            ]
        );

        $body = $response->getBody();
        $obj = json_decode((string) $body);
        self::persistExact($obj);
    }

    /**
     * Refresh access token (if expired).
     *
     * @throws ApiException
     */
    public static function refreshAccessToken()
    {
        if (self::isExpired()) {
            }

            $Exact = self::$em->getRepository(Exact::class)->findLast();
            $url = self::$baseUrl.self::$tokenUrl;
            $client = new Client();

            $response = $client->post($url, [
                'form_params' => [
                    'refresh_token' => $Exact->getRefreshToken(),
                    'grant_type' => 'refresh_token',
                    'client_id' => self::$exactClientId,
                    'client_secret' => self::$exactClientSecret,
                ],
            ]);

            $body = $response->getBody();
            $obj = json_decode((string) $body);

            self::persistExact($obj);

        }
    }

    /**
     * Check if Token has expired.
     *
     * @return bool
     */
    public static function isExpired()
    {
        $Exact = self::$em->getRepository('ExactOnlineBundle:Exact')->findLast();

        if (null === $Exact) {
            throw new ApiException('No access token found.', 499);
        }

        $createAt = $Exact->getCreatedAt();
        $now = new \DateTime('now');

        /** @var int Number of seconds the token is valid */
        $lifeSpan = $Exact->getTokenExpires();
        /** @var int Elapsed time */
        $age = ($now->getTimeStamp()) - ($createAt->getTimeStamp());

        // Lifespan (10min)
        if ($lifeSpan < $age) {
            return true;
        }

        return false;
    }

    /**
     * Execute request.
     *
     * @param string     $json
     * @param null|mixed $body
     *
     * @return array
     */
    public static function Request(string $url, string $method, string $json = null)
    {
        self::refreshAccessToken();

        if (self::CONTENT_TYPE_XML === self::$contentType) {
            $url = self::$baseUrl.'docs/'.$url.'&_Division_='.self::$division;
        }

        if (self::CONTENT_TYPE_JSON === self::$contentType) {
            if ('current/Me' == $url) {
                $url = self::$baseUrl.self::$apiUrl.'/'.$url;
            } else {
                $url = self::$baseUrl.self::$apiUrl.'/'.self::$division.'/'.$url;
            }
        }

        try {
            $client = new Client();
            $request = self::createRequest($method, $url, $body);
            $response = $client->send($request);

            self::$xRateLimits['X-RateLimi-Limit'] = $response->getHeader('X-RateLimit-Limit');
            self::$xRateLimits['X-RateLimit-Remaining'] = $response->getHeader('X-RateLimit-Remaining');
            self::$xRateLimits['X-RateLimit-Reset'] = $response->getHeader('X-RateLimit-Reset');
            self::$xRateLimits['X-RateLimit-Minutely-Limit'] = $response->getHeader('X-RateLimit-Minutely-Limit');
            self::$xRateLimits['X-RateLimit-Minutely-Remaining'] = $response->getHeader('X-RateLimit-Minutely-Remaining');
            self::$xRateLimits['X-RateLimit-Minutely-Reset'] = $response->getHeader('X-RateLimit-Minutely-Reset');
        } catch (\Exception $ex) {
            if ('PUT' == $method && 403 == $ex->getResponse()->getStatusCode()) {
                return 'ErrorDoPersist';
            }

            $error = json_decode($ex->getResponse()->getBody()->getContents())->error->message->value;

            if (500 == $ex->getResponse()->getStatusCode()) {
                return $error;
            }

            throw new ApiException($error, $ex->getResponse()->getStatusCode());
        }

        try {
            return self::parseResponse($response, $request->getMethod());
        } catch (ApiException $e) {
            throw new ApiException($e->getMessage(), $e->getStatusCode());
        }
    }

    public static function setContentType($type = 'json')
    {
        if ('xml' === $type) {
            self::$contentType = self::CONTENT_TYPE_XML;
            self::$accept = self::CONTENT_TYPE_XML;
        }

        if ('json' === $type) {
            self::$contentType = self::CONTENT_TYPE_JSON;
            self::$accept = self::CONTENT_TYPE_JSON.';odata=verbose,text/plain';
        }
    }

    /**
     * @return mixed
     */
    public static function getCode()
    {
        return self::$code;
    }

    /**
     * @param mixed $code
     *
     * @return self
     */
    public static function setCode($code)
    {
        self::$code = $code;

        return self::$code;
    }

    /**
     * Get division; makes an api request and returns a filled 'Me' Object.
     *
     * @return string extract current division from Me()
     */
    public static function getDivision()
    {
        $me = new Me();

        return $me->getCurrentDivision();
    }

    public function getXRateLimits()
    {
        return self::$xRateLimits;
    }

    public function getRateLimitDelay()
    {
        if (isset(self::$xRateLimits['X-RateLimit-Minutely-Remaining'])) {
            $limit = (self::$xRateLimits['X-RateLimit-Minutely-Remaining'][0]);
        } else {
            $limit = 300;
        }
        $delay = (60 / $limit) * 1000000;
        if ($delay < 2000000) {
            $delay = 0;
        }

        return intval($delay);
    }

    /**
     * Persist to table 'exact'.
     *
     * @param  object   returned object from Exact with new Tokens
     * @param mixed $obj
     */
    private static function persistExact($obj)
    {
        $Exact = self::$em->getRepository('ExactOnlineBundle:Exact')->findLast();
        if (null != $Exact) {
            $code = $Exact->getCode();
        } else {
            $code = self::$code;
        }

        $exact = new Exact();
        $exact->setAccessToken($obj->access_token);
        $exact->setCode($code);
        $exact->setTokenExpires($obj->expires_in);
        $exact->setRefreshToken($obj->refresh_token);

        self::$em->persist($exact);
        self::$em->flush();
    }

    /**
     * Create Request.
     *
     * @param string $endpoint
     * @param string $body
     *
     * @return GuzzleHttp\Psr7\Request;
     */
    private static function createRequest(string $method = 'GET', $endpoint, $body = null, array $params = [], array $headers = [])
    {
        $headers = array_merge($headers, [
            'Accept' => self::$accept,
            'Content-Type' => self::$contentType,
            'Prefer' => 'return=representation',
            'X-zangra' => 'Exact Online Bundle <https://github.com/zangra-dev/ExactOnlineBundle/>',
        ]);

        if (null === $Exact = self::$em->getRepository(Exact::class)->findLast()) {
            throw new ApiException('No access token found.', 499);
        }

        if (!empty($params)) {
            $endpoint .= '?'.http_build_query($params);
        }

        $headers['Authorization'] = 'Bearer '.$Exact->getAccessToken();

        return new Request($method, $endpoint, $headers, $body);
    }

    private static function parseResponse(Response $response, $method, $returnSingleIfPossible = true)
    {
        if (204 === $response->getStatusCode() && 'POST' == $method) {
            throw new ApiException($response->getReasonPhrase(), $response->getStatusCode());
        }

        if (self::CONTENT_TYPE_XML === self::$contentType) {
            return $response->getBody()->getContents();
        }

        if (self::CONTENT_TYPE_JSON === self::$contentType) {
            return self::parseJSON($response, $returnSingleIfPossible);
        }
    }

    /**
     * Parse JSON response.
     *
     * @param bool $returnSingleIfPossible
     *
     * @return array (associative)
     */
    private static function parseJSON(Response $response, $returnSingleIfPossible = true)
    {
        try {
            Psr7\rewind_body($response);
            $json = json_decode($response->getBody()->getContents(), true);

            if (is_array($json)) {
                if (array_key_exists('d', $json)) {
                    // This code is not used, just keep it a while
                    //
                    // if (array_key_exists('__next', $json['d'])) {
                    //     $nextUrl = $json['d']['__next'];
                    // } else {
                    //     $nextUrl = null;
                    // }

                    if (array_key_exists('results', $json['d'])) {
                        if ($returnSingleIfPossible && 1 == count($json['d']['results'])) {
                            return $json['d']['results'][0];
                        }

                        return $json['d']['results'];
                    }

                    return $json['d'];
                }
            }

            return $json;
        } catch (\ApiException $e) {
            throw new ApiException($e->getMessage(), $e->getStatusCode());
        }
    }
}
