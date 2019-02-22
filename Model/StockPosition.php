<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Entity holding stock position details.
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsStockPosition
 *
 * @property float $InStock Number of items in stock
 * @property string $ItemId Primary key, Item
 * @property float $PlanningIn Number of items that are planned to come in
 * @property float $PlanningOut Number of items that are planned to go out
 */
class StockPosition extends Model 
{
        protected $primaryKey = 'ItemId';
        protected $InStock;
        protected $ItemId;
        protected $PlanningIn;
        protected $PlanningOut;
        protected $url = 'read/logistics/StockPosition';
    

    /**
     * @return mixed
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * @param mixed $primaryKey
     *
     * @return self
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInStock()
    {
        return $this->InStock;
    }

    /**
     * @param mixed $InStock
     *
     * @return self
     */
    public function setInStock($InStock)
    {
        $this->InStock = $InStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param mixed $ItemId
     *
     * @return self
     */
    public function setItemId($ItemId)
    {
        $this->ItemId = $ItemId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningIn()
    {
        return $this->PlanningIn;
    }

    /**
     * @param mixed $PlanningIn
     *
     * @return self
     */
    public function setPlanningIn($PlanningIn)
    {
        $this->PlanningIn = $PlanningIn;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningOut()
    {
        return $this->PlanningOut;
    }

    /**
     * @param mixed $PlanningOut
     *
     * @return self
     */
    public function setPlanningOut($PlanningOut)
    {
        $this->PlanningOut = $PlanningOut;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
