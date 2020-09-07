<?php

namespace ExactOnlineBundle\Manager;

use Doctrine\ORM\EntityManager;
use ExactOnlineBundle\DAO\Connection;
use ExactOnlineBundle\DAO\Exception\ApiException;
use Symfony\Component\HttpFoundation\Request;
use Exception;

/**
 * Exact Manager
 * Author: Jefferson Bianchi / Maxime Lambot / Nils Méchin
 * Email : jefferson@zangra.com / maxime@zangra.com. / nils@zangra.com.
 */
abstract class ExactManager
{
    protected $list = [];
    protected $model;
    protected $config;
    protected $em;
    protected $logger;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @param mixed $code
     */
    public function init($code = null)
    {
        try {
            Connection::setConfig($this->config, $this->em);

            if (Connection::isExpired()) {
                if (null == $code) {
                    Connection::getAuthorization();
                }
                Connection::setCode($code);
                Connection::getAccessToken();
            }
        } catch (ApiException $e) {
            $errorMessage = "Can't initiate connection: ". $e->getStatusCode();
            throw new ApiException($errorMessage, $e->getStatusCode());
        }
    }

    public function refreshToken()
    {
        Connection::setConfig($this->config, $this->em);
        Connection::refreshAccessToken();
    }

    /**
     * @param mixed $name
     * @param mixed $version
     *
     * @return object
     */
    public function getModel($name, $version = 'normal')
    {
        try {
            if ('extended' === $version) {
                $classname = $cname = 'ExactOnlineBundle\\Model\\Xml\\'.$name;
            } else {
                $classname = $cname = 'ExactOnlineBundle\\Model\\'.$name;
            }

            $this->model = new $classname();

            return $this;
        } catch (ApiException $e) {
            throw new ApiException("Model doesn't exist : ", $e->getStatusCode());
        }
    }

    /**
     * Check hash code from Exact webhook.
     *
     * "Content":{"Topic":"SalesOrders","ClientId":"63824703-cf5c-4143-be7d-db3113b83b0e","Division":441609,"Action":"Update","Key":"19cee073-095e-46d1-8d2d-f3fc97ba5bc1","ExactOnlineEndpoint":"https://start.exac    tonline.be/api/v1/441609/salesorder/SalesOrders(guid'19cee073-095e-46d1-8d2d-f3fc97ba5bc1')","EventCreatedOn":"2020-01-06T16:26:08.587"},"HashCode":"3ACBC7840E4DD3CA10A1803124DC1D4A04B2CCD18EFB9E9BB666CC4C75876DC5"}
     *
     * @param string $data     Content of 'Content' received data from Exact
     *                         including brackets: {"Topic":...589"}
     * @param string $hashCode Hash code comming from Exact
     *
     * @return bool
     */
    public function checkWebhookHash(Request $request)
    {
        echo $this->config['webhookSecret'];
        if (!empty($request->getContent())) {
            $data = $request->getContent();
            $data = json_decode($data);

            if (!isset($data->HashCode) || empty($data->HashCode)) {
                throw new ApiException('Forbidden, No HashCode', 403);
            }

            if (!$this->caclulateHash(json_encode($data->Content, JSON_UNESCAPED_SLASHES), $data->HashCode)) {
                throw new ApiException('Bad HashCode, no match', 401);
            }
        } else {
            throw new ApiException('Forbidden (no data)', 403);
        }

        return true;
    }

    /**
     * Assert passewd value is a GUID.
     *
     * @param string $guid a GUID string probably
     *
     * @return bool
     */
    protected function assertGuid($guid)
    {
        $UUIDv4 = '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';

        return 1 === preg_match($UUIDv4, $guid);
    }

    /**
     * @return PrimaryKey field
     */
    public function getKeyField()
    {
        if (method_exists($this->model, 'getPrimaryKey')) {
            $primaryKey = $this->model->getPrimaryKey();
        } else {
            $primaryKey = 'ID';
        }

        return $primaryKey;
    }

    private function caclulateHash($data, $hashCode)
    {
        if (empty($this->config['webhookSecret'])) {
            throw new ApiException('No Webhook Secret', 401);
        }

        $calculatedHash = hash_hmac('sha256', $data, $this->config['webhookSecret']);

        return strtoupper($calculatedHash) === $hashCode;
    }
}
