<?php

namespace aibianchi\ExactOnlineBundle\Manager;

use Doctrine\ORM\EntityManager;
use aibianchi\ExactOnlineBundle\DAO\Connection;
use aibianchi\ExactOnlineBundle\DAO\Exception\ApiException;
use aibianchi\ExactOnlineBundle\Model\BillOfMaterialMaterial;

/**
 * Exact Manager
 * Author: Jefferson Bianchi
 * Mail  : Jefferson@aibianchi.com
 */
class ExactManager {

    private $list = array();
    private $model;
    private $config;
    private $em;
    private $logger;


    public function __construct(EntityManager $em){
            $this->em = $em;
    }

    public function setConfig($config){
        $this->config = $config;


    }


    /**
    * @return void
    */
    public function init($code){

        try{
            Connection::setConfig($this->config, $this->em, $this->logger);

            if (Connection::isExpired()){

                if ($code == null){
                    Connection::getAuthorization();
                }
                Connection::setCode($code);
                Connection::getAccessToken();
            }

        }catch (ApiException $e) {
                throw new Exception("Can't initiate connection: ", $e->getCode());

        }

    }

    public function refreshToken(){

        Connection::setConfig($this->config, $this->em, $this->logger);
        Connection::refreshAccessToken();
    }

    /**
    * @return Object
    */
    public function getModel($name){

        try{
            $classname   = $cname = "aibianchi\\ExactOnlineBundle\\Model\\".$name;
            $this->model = new $classname();
            return $this;
        }catch (ApiException $e) {
            throw new ApiException("Model doesn't existe : ", $e->getStatusCode());
        }
    }

    /**
    * @return void
    */
    public function persist($entity){

        $json = $entity->toJson();
        Connection::Request($entity->getUrl(), "POST", $json);

    }

    /**
    * @return void
    */
    public function remove($entity){

        $json     = $entity->toJson();
        $keyField = $this->getKeyField();
        $getter   = "get".$keyField;
        $url      = $entity->getUrl()."(guid'".$entity->$getter()."')";
        Connection::Request($url, "DELETE", $json);

    }

    /**
    * @return void
    */
    public function update($entity){
        $skipNullValues = true;
        $json     = $entity->toJson($skipNullValues);
        $keyField = $this->getKeyField();
        $getter   = "get".$keyField;
        $url      = $entity->getUrl()."(guid'".$entity->$getter()."')";
        Connection::Request($url, "PUT", $json);

    }

    /**
    * @return integer
    */
    public function count(){
        $url  =  $this->model->getUrl()."\\"."\$count";
        $data =  Connection::Request($url, "GET");
        return $data;
    }

    /**
    * getList with pagination
    * Warning: Usually this limit, also known as page size, is 60 records but it may vary per end point.
    * https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Content-resttips
    * @return Object Collection
    */
    public function getList($page = 1, $maxPerPage = 5){

        if ($maxPerPage>=60){
            throw new ApiException("60 records maximum per page", 406);
        }

        $total    = $this->count();

        if ($maxPerPage>$total){
            throw new ApiException("Maximum records is: ".$total, 406);
        }

        $nbrPages = ceil($total/$maxPerPage);
        $skip     = ($page*$maxPerPage)-$maxPerPage;

        if ($this->model instanceof BillOfMaterialMaterial){
            $url      = $this->model->getUrl()."\\?"."&\$top=".$maxPerPage;

        }else{
            $url      = $this->model->getUrl()."\\?"."\$skip=".$skip."&\$top=".$maxPerPage;
        }

        $data     = Connection::Request($url, "GET");

        return $this->isArrayCollection($this->model,$data);

    }

    /**
    *    array('field' => 'searchMe'),   // Criteria
    *    array('date' => 'desc'),        // Order by
    *    5,                              // limit
    *    @return array
    */
    public function findBy(array $criteria, array $select = null, array $orderby = null, $limit  = 5){

        // Check if current criteria (value) is a guid
        $guidString = $this->assertGuid(current($criteria)) ? 'guid' : '';

        $url = $this->model->getUrl()."\?"."\$filter=".key($criteria)." eq ".$guidString."'".current($criteria)."'";

        if ($select != null){
            $url = $url."&\$select=";
            for ($i=0; $i<count($select); $i++){
                $url = $url.$select[$i].", ";
            }

        }

        if ($limit>0){
            $url = $url."&\$top=".$limit;
        }

        if ($orderby != null){
            $url = $url."&\$orderby=".key($orderby)." ".current($orderby);
        }

        $data =  Connection::Request($url, "GET");

        return $this->isArrayCollection($this->model,$data);

    }

    /**
    *
    *  @return Object
    */
    public function find($guid){

        $keyField = $this->getKeyField();

        $url  = $this->model->getUrl()."\?"."\$filter=".$keyField." eq guid"."'".$guid."'";
        $data = Connection::Request($url,"GET");

        return $this->isSingleObject($data);

    }

    /**
    *
    * @return PrimaryKey field
    */
    private function getKeyField(){

        if ( method_exists($this->model, "getPrimaryKey" ) ){
            $primaryKey = $this->model->getPrimaryKey();
        }else{
            $primaryKey = "ID";
        }

        return $primaryKey;
    }

    /**
    * @return Object
    */
    private function isSingleObject($data){

            $object = $this->model;
            foreach ($data as $key => $item){
                    $setter = "set".$key;
                    if(method_exists($object, $setter)){
                        $object->$setter($item);

                    }
            }
            return $object;
    }

    /**
    * @return Object collection
    */
    private function isArrayCollection($entity, $data){

            foreach ($data as $keyD => $item){
                   $object = new $entity();
                   foreach($item as $key => $value) {
                        $setter = "set".$key;
                        if(method_exists($object, $setter)){
                            $object->$setter($value);
                        }
                    }
                array_push ($this->list, $object);
            }

        return $this->list;
    }

    /**
     * Assert passewd value is a GUID.
     *
     * @param  string $guid A GUID string probably.
     * @return bool
     */
    private function assertGuid($guid)
    {
        $UUIDv4 = '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';

        return 1 === preg_match($UUIDv4, $guid);
    }
}

?>