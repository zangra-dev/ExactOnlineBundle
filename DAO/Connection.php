<?php

namespace aibianchi\ExactOnlineBundle\DAO;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7;

use Doctrine\ORM\EntityManager;
use aibianchi\ExactOnlineBundle\DAO\Exception\ApiException;
use aibianchi\ExactOnlineBundle\Model\Base\Me;
use aibianchi\ExactOnlineBundle\Entity\Exact;

/**
 * Class Connection
 * Author: Jefferson Bianchi
 * Email : Jefferson@aibianchi.com
 * @package aibianchi\ExactOnlineBundle\DAO
 *
 */
class Connection
{
    private static $container;

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
    private static $instance;
    private static $country;

    private static $DEBUG_MODE = false;





    public static function setConfig(string $country, array $config, EntityManager $em)
    {
        self::$country                      = $country;
        self::$em                           = $em;
        self::$baseUrl                      = $config["$country"]['baseUrl'];
        self::$apiUrl                       = $config["$country"]['apiUrl'];
        self::$authUrl                      = $config["$country"]['authUrl'];
        self::$tokenUrl                     = $config["$country"]['tokenUrl'];
        self::$redirectUrl                  = $config["$country"]['redirectUrl'];
        self::$exactClientId                = $config["$country"]['clientId'];
        self::$exactClientSecret            = $config["$country"]['clientSecret'];
    }

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /*
    *  Exact api will post on redirect URL
    */
    public static function getAuthorization()
    {
        $url     =  self::$baseUrl.self::$authUrl;
        $param   = array(
                    "client_id"     => self::$exactClientId,
                    "redirect_uri"  => self::$redirectUrl,
                    "response_type" => "code",
                    "force_login"   => "1",
            );
        $query  = http_build_query($param);

        header('Location: '.$url.'?'.$query, true, 302);
        die('Redirect');
    }


    public static function getAccessToken()
    {
        $url      = self::$baseUrl.self::$tokenUrl;
        $client   =  new Client();
        $response = $client->post(
            $url,
            array(
            'form_params' => array(
                'code'          => self::$code,
                'client_id'     => self::$exactClientId,
                'grant_type'    => "authorization_code",
                'client_secret' => self::$exactClientSecret,
                'redirect_uri'  => self::$redirectUrl,
            ))
        );

        $body   = $response->getBody();
        $obj    = json_decode((string) $body);
        self::persistExact($obj);
    }

    private static function persistExact($obj)
    {
        $Exact  = self::$em->getRepository(Exact::class)->findLastByCountry(self::$country);
        if ($Exact != null) {
            $code = $Exact->getCode();
        } else {
            $code = self::$code;
        }

        $exact  = new Exact();
        $exact->setAccessToken($obj->access_token);
        $exact->setCode($code);
        $exact->setTokenExpires($obj->expires_in);
        $exact->setRefreshToken($obj->refresh_token);
        $exact->setCountry(self::$country);

        self::$em->Persist($exact);
        self::$em->flush();
    }


    public static function refreshAccessToken($country)
    {
        self::$country = $country;
        $Exact  = self::$em->getRepository(Exact::class)->findLastByCountry(self::$country);
        $url    = self::$baseUrl.self::$tokenUrl;
        $client =  new Client();

        $response = $client->post($url, array(
            'form_params' => array(
                'refresh_token' => $Exact->getRefreshToken(),
                'grant_type'    => "refresh_token",
                'client_id'     => self::$exactClientId,
                'client_secret' => self::$exactClientSecret
            )
        ));
        $body   = $response->getBody();
        $obj    = json_decode((string) $body);
        self::persistExact($obj);
    }


    public static function isExpired()
    {
        $Exact      = self::$em->getRepository(Exact::class)->findLastByCountry(self::$country);
        if ($Exact == null) {
            return true;
        }
        $createAt   = $Exact->getCreatedAt();
        $now        = new \DateTime("now");
        $expiresIn  = $Exact->getTokenExpires();
        $seconds    = ($now->getTimeStamp()) - ($createAt->getTimeStamp());

        if ($expiresIn-60<$seconds) {
            return true;
        }

        return false;
    }

    private static function createRequest(string $method = 'GET', $endpoint, $body = null, array $params = [], array $headers = [])
    {
        $headers = array_merge($headers, [
            'Accept'        => 'application/json;odata=verbose,text/plain',
            'Content-Type'  => 'application/json',
            'Prefer'        => 'return=representation',
            "X-aibianchi"   => "Exact Online Bundle <https://github.com/AI-Bianchi/ExactOnlineBundle/>"
        ]);
        $Exact   = self::$em->getRepository(Exact::class)->findLastByCountry(self::$country);

        if ($Exact->getAccessToken() == null) {
            throw new ApiException('Access token was not initialized', 498);
        }

        if (!empty($params)) {
            $endpoint .= '?' . http_build_query($params);
        }

        $headers['Authorization'] = 'Bearer '.$Exact->getAccessToken();

        $request = new Request($method, $endpoint, $headers, $body);

        if (self::$DEBUG_MODE) {
            dump($request);
        }

        return $request;
    }


    public static function Request(string $url, string $method, string $json = null)
    {
        if (self::isExpired()) {
            throw new ApiException('Token is expired.', 498);
        }

        try {
            if ($url == "current/Me") {
                $url      = self::$baseUrl.self::$apiUrl."/".$url;
            } else {
                $url      = self::$baseUrl.self::$apiUrl."/".self::getDivision()."/".$url;
            }
            $client   = new Client();
            $request  = self::createRequest($method, $url, $json);
            $response = $client->send($request);
            $array    = self::parseResponse($response);

            if ($array == null) {
                throw new ApiException("no data is present", 204);
            }

            if (self::$DEBUG_MODE) {
                dump($array);
            }

            return $array;
        } catch (ApiException $e) {
            throw new ApiException($e->getMessage(), $e->getStatusCode());
        }
    }

    private static function parseResponse(Response $response, bool $returnSingleIfPossible = true)
    {
        try {
            if ($response->getStatusCode() === 204) {
                throw new ApiException($response->getMessage(), $response->getStatusCode());
            }

            Psr7\rewind_body($response);
            $json = json_decode($response->getBody()->getContents(), true);

            if (is_array($json)) {
                if (array_key_exists('d', $json)) {
                    if (array_key_exists('__next', $json['d'])) {
                        $nextUrl = $json['d']['__next'];
                    } else {
                        $nextUrl = null;
                    }
                    if (array_key_exists('results', $json['d'])) {
                        if ($returnSingleIfPossible && count($json['d']['results']) == 1) {
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
     * @return mixed
     */
    public static function getDivision()
    {
        $me = new Me();
        return $me->getCurrentDivision();
    }
}
