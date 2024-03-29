<?php

namespace ExactOnlineBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use ExactOnlineBundle\DAO\Connection;
use ExactOnlineBundle\DAO\Exception\ApiException;
use ExactOnlineBundle\Model\Base\Model;

/**
 * Author: Jefferson Bianchi <jefferson@zangra.com>
 * Author: Nils méchin <nils@zangra.com>
 * Author: Maxime Lambot <maxime@lambot.com>.
 */
class ExactJsonApi extends ExactManager
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em);
    }

    public function setConfig($config)
    {
        parent::setConfig($config);
    }

    public function persist($entity)
    {
        usleep(Connection::getRateLimitDelay());
        $json = $entity->toJson();

        return $this->request($entity->getUrl(), 'POST', $json);
    }

    public function remove($entity)
    {
        usleep(Connection::getRateLimitDelay());

        $json = $entity->toJson();
        $keyField = $this->getKeyField();
        $getter = 'get'.$keyField;
        $url = $entity->getUrl()."(guid'".$entity->{$getter}()."')";

        return $this->request($url, 'DELETE', $json);
    }

    public function delete($_url)
    {
        return $this->request($_url, 'DELETE');
    }

    public function update($entity)
    {
        usleep(Connection::getRateLimitDelay());

        $json = $entity->toJson();
        $keyField = $this->getKeyField();
        $getter = 'get'.$keyField;
        // Sometime, when you do multiple export it keep old entity and will not search the correct KeyField
        // So, is the getter does not exist, force by default the getID
        if (!method_exists($entity, $getter)) {
            $getter = 'getID';
        }
        $url = $entity->getUrl()."(guid'".$entity->{$getter}()."')";

        $result = $this->request($url, 'PUT', $json);
        if ('ErrorDoPersist' == $result) {
            $result = $this->persist($entity);
        }

        return $result;
    }

    public function get($asObject = false, string $_url = '')
    {
        if (empty($_url)) {
            $url = $this->model->getUrl();
        } else {
            $url = $_url;
        }

        $data = $this->request($url, 'GET');

        if ($asObject) {
            // TODO Is probably not right after refactoring method below
            return $this->createCollection($data);
        }

        return $data;
    }

    public function post($json, string $_url = '')
    {
        $url = (empty($_url)) ? $this->model->getUrl() : $_url;

        return $this->request($url, 'POST', $json);
    }

    public function put($json, string $_url = '')
    {
        if (empty($_url)) {
            $data = json_decode($json);
            $keyField = $this->getKeyField();
            $url = $this->model->getUrl()."(guid'".$data->{$keyField}."')";
        } else {
            $url = $_url;
        }

        return $this->request($url, 'PUT', $json);
    }

    /**
     * @return int
     */
    public function count()
    {
        $url = $this->model->getUrl().'\\'.'$count';

        return $this->request($url, 'GET');
    }

    /**
     * getList with pagination
     * Warning: Usually this limit, also known as page size, is 60 records but it may vary per end point.
     * https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Content-resttips.
     */
    public function getList(string $select = null, string $orderBy = null, int $page = null, int $maxPerPage = 60)
    {
        if (null !== $page) {
            if ($maxPerPage >= 60) {
                throw new ApiException('60 records maximum per page', 406);
            }

            $total = $this->count();

            if ($maxPerPage > $total) {
                throw new ApiException('Maximum records is: '.$total, 406);
            }

            $nbrPages = ceil($total / $maxPerPage);
            $skip = ($page * $maxPerPage) - $maxPerPage;

            $url = $this->model->getUrl().'\\?'.'$skip='.$skip.'&$top='.$maxPerPage;
        } else {
            $url = $this->model->getUrl().'\\?'.'&$top='.$maxPerPage;
        }
        if (null != $select) {
            $url = $url.'&$select='.$select;
        }
        if (null !== $orderBy) {
            $url = $url.'&$orderby='.$orderBy;
        }
        $data = $this->request($url, 'GET');

        if (!is_array($data)) {
            return $data;
        }

        return $this->createCollection($data);
    }

    /**
     *    array('field' => 'searchMe'),   // Criteria
     *    array('date' => 'desc'),        // Order by
     *    5,                              // limit.
     *
     * @param mixed $limit
     *
     *    @return array
     */
    public function findBy(array|string $criteria, string $select = null, string $orderBy = null, $limit = 60): object|string
    {
        if (is_array($criteria)) {
            // Check if current criteria (value) is a guid
            $guidString = $this->assertGuid(current($criteria)) ? 'guid' : '';
            $url = $this->model->getUrl().'\\?'.'$filter='.key($criteria).' eq '.$guidString."'".current($criteria)."'";
        } else {
            $url = $this->model->getUrl().'\\?$filter='.$criteria;
        }
        if (null != $select) {
            $url = $url.'&$select='.$select;
        }
        if ($limit > 0) {
            $url = $url.'&$top='.$limit;
        }
        if (null !== $orderBy) {
            $url = $url.'&$orderby='.$orderBy;
        }

        $data = $this->request($url, 'GET');

        if (!is_array($data)) {
            return $data;
        }

        return $this->createCollection($data);
    }

    /**
     * @param mixed $guid
     * @param mixed $filter
     *
     *  @return object
     */
    public function find($guid, $filter = true)
    {
        $keyField = $this->getKeyField();
        if ($filter) {
            $url = $this->model->getUrl().'?'.'$filter='.$keyField.' eq guid'."'".$guid."'";
        } else {
            $url = $this->model->getUrl().'?'.$keyField.'=guid'."'".$guid."'";
        }

        $data = $this->request($url, 'GET');

        return is_array($data) ? $this->isSingleObject($data) : $data;
    }

    private function request($url, $method, $data = null)
    {
        Connection::setContentType('json');

        return Connection::Request($url, $method, $data);
    }

    /**
     * @return object
     */
    private function isSingleObject(array $data)
    {
        $data = (isset($data[0]) && is_array($data[0])) ? $data[0] : $data;
        $object = $this->model;
        foreach ($data as $key => $item) {
            $setter = 'set'.$key;
            if (method_exists($object, $setter)) {
                $object->{$setter}($item);
            }
        }

        return $object;
    }

    /**
     *
     */
    private function createCollection(array $data): self
    {
        $this->collection->clear();
        foreach ($data as $keyD => $item) {
            $object = clone $this->model;
            foreach ($item as $key => $value) {
                $setter = 'set'.$key;
                if (method_exists($object, $setter)) {
                    $object->{$setter}($value);
                }
            }
            $this->collection->add($object);
        }

        return $this;
    }
}
