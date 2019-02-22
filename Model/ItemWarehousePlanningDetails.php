<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ItemWarehousePlanningDetails extends Model
 *
 * @package Paibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehousePlanningDetails
 *
 * @property string $Item Primary key
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property string $PlannedDate Date which quantity in stock is planned to change
 * @property float $PlannedQuantity Amount by which quantity in stock is planned to change
 * @property string $PlanningSourceDescription Human readable description of the PlanningSource (translated to user's language) - Examples: Purchase Order, Sales Order, Shop Order, etc.
 * @property string $PlanningSourceID ID of the PlanningSource
 * @property int $PlanningSourceLineNumber Line number of the PlanningSource if the PlanningSourceType supports line numbers
 * @property int $PlanningSourceNumber Human readable number of the PlanningSource - Examples: Shop order number '201600001' or Sales order number '2016020001'
 * @property string $PlanningSourceUrl REST API URL of this specific PlanningSource and PlanningSourceID (Assembly orders and warehouse transfers not supported over REST)
 * @property int $PlanningType Type of the PlanningSource - 120=GoodsDelivery, 124=WarehouseTransferDelivery, 130=GoodsReceipt, 134=WarehouseTransferReceipt, 140=ShopOrderStockReceipt, 147=ShopOrderByProductReceipt, 150=ShopOrderRequirement, 160=AssemblyOrderReceipt, 165=AssemblyOrderIssue
 * @property string $PlanningTypeDescription Human readable description of the PlanningSourceType (translated to user's language) - Examples: 'Shop order stock receipt' or 'Goods delivery'
 * @property string $Warehouse ID of warehouse
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 */
class ItemWarehousePlanningDetails extends Model 
{

        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $PlannedDate;
        protected $PlannedQuantity;
        protected $PlanningSourceDescription;
        protected $PlanningSourceID;
        protected $PlanningSourceLineNumber;
        protected $PlanningSourceUrl;
        protected $PlanningType;
        protected $PlanningTypeDescription;
        protected $Warehouse;
        protected $WarehouseCode;
        protected $WarehouseDescription;
        protected $url = 'inventory/ItemWarehousePlanningDetails';

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     * @param mixed $Item
     *
     * @return self
     */
    public function setItem($Item)
    {
        $this->Item = $Item;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemCode()
    {
        return $this->ItemCode;
    }

    /**
     * @param mixed $ItemCode
     *
     * @return self
     */
    public function setItemCode($ItemCode)
    {
        $this->ItemCode = $ItemCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }

    /**
     * @param mixed $ItemDescription
     *
     * @return self
     */
    public function setItemDescription($ItemDescription)
    {
        $this->ItemDescription = $ItemDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedDate()
    {
        return $this->PlannedDate;
    }

    /**
     * @param mixed $PlannedDate
     *
     * @return self
     */
    public function setPlannedDate($PlannedDate)
    {
        $this->PlannedDate = $PlannedDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedQuantity()
    {
        return $this->PlannedQuantity;
    }

    /**
     * @param mixed $PlannedQuantity
     *
     * @return self
     */
    public function setPlannedQuantity($PlannedQuantity)
    {
        $this->PlannedQuantity = $PlannedQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningSourceDescription()
    {
        return $this->PlanningSourceDescription;
    }

    /**
     * @param mixed $PlanningSourceDescription
     *
     * @return self
     */
    public function setPlanningSourceDescription($PlanningSourceDescription)
    {
        $this->PlanningSourceDescription = $PlanningSourceDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningSourceID()
    {
        return $this->PlanningSourceID;
    }

    /**
     * @param mixed $PlanningSourceID
     *
     * @return self
     */
    public function setPlanningSourceID($PlanningSourceID)
    {
        $this->PlanningSourceID = $PlanningSourceID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningSourceLineNumber()
    {
        return $this->PlanningSourceLineNumber;
    }

    /**
     * @param mixed $PlanningSourceLineNumber
     *
     * @return self
     */
    public function setPlanningSourceLineNumber($PlanningSourceLineNumber)
    {
        $this->PlanningSourceLineNumber = $PlanningSourceLineNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningSourceUrl()
    {
        return $this->PlanningSourceUrl;
    }

    /**
     * @param mixed $PlanningSourceUrl
     *
     * @return self
     */
    public function setPlanningSourceUrl($PlanningSourceUrl)
    {
        $this->PlanningSourceUrl = $PlanningSourceUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningType()
    {
        return $this->PlanningType;
    }

    /**
     * @param mixed $PlanningType
     *
     * @return self
     */
    public function setPlanningType($PlanningType)
    {
        $this->PlanningType = $PlanningType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningTypeDescription()
    {
        return $this->PlanningTypeDescription;
    }

    /**
     * @param mixed $PlanningTypeDescription
     *
     * @return self
     */
    public function setPlanningTypeDescription($PlanningTypeDescription)
    {
        $this->PlanningTypeDescription = $PlanningTypeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouse()
    {
        return $this->Warehouse;
    }

    /**
     * @param mixed $Warehouse
     *
     * @return self
     */
    public function setWarehouse($Warehouse)
    {
        $this->Warehouse = $Warehouse;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouseCode()
    {
        return $this->WarehouseCode;
    }

    /**
     * @param mixed $WarehouseCode
     *
     * @return self
     */
    public function setWarehouseCode($WarehouseCode)
    {
        $this->WarehouseCode = $WarehouseCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouseDescription()
    {
        return $this->WarehouseDescription;
    }

    /**
     * @param mixed $WarehouseDescription
     *
     * @return self
     */
    public function setWarehouseDescription($WarehouseDescription)
    {
        $this->WarehouseDescription = $WarehouseDescription;

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
