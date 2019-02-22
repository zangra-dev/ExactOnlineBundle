<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ItemWarehouse extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouses
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property float $CurrentStock Quantity that is currently on stock, sales/purchase orders excluded
 * @property string $DefaultStorageLocation This is a default storage location
 * @property string $DefaultStorageLocationCode Default storage location's code
 * @property string $DefaultStorageLocationDescription Default storage location's description
 * @property int $Division Division code
 * @property string $item Item ID
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property bool $ItemIsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property string $ItemUnit The standard unit code of this item
 * @property string $ItemUnitDescription Description of item's unit
 * @property float $MaximumStock Maximum number of stock could enter warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $PlannedStockIn The quantity still open to be received based on i.e. purchase orders and assembly orders.
 * @property float $PlannedStockOut The quantity still open to be delivered based on i.e. sales orders and assembly orders.
 * @property string $PlanningDetailsUrl URL of the stock planning details of this record
 * @property float $ProjectedStock The quantity of stock projected given all planned future stock changes
 * @property float $ReorderPoint Reorder point when stock depletes
 * @property float $ReservedStock The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property float $SafetyStock Safety stock
 * @property string $StorageLocationUrl URL pointing to details of which storage locations this ItemWarehouse's stock is located
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 */
class ItemWarehouse extends Model 
{

        protected $ID;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $CurrentStock;
        protected $DefaultStorageLocation;
        protected $DefaultStorageLocationCode;
        protected $DefaultStorageLocationDescription;
        protected $Division;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $ItemIsFractionAllowedItem;
        protected $ItemUnit;
        protected $ItemUnitDescription;
        protected $MaximumStock;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $PlannedStockIn;
        protected $PlannedStockOut;
        protected $PlanningDetailsUrl;
        protected $ProjectedStock;
        protected $ReorderPoint;
        protected $ReservedStock;
        protected $SafetyStock;
        protected $StorageLocationUrl;
        protected $Warehouse;
        protected $WarehouseCode;
        protected $WarehouseDescription;
        protected $url = 'inventory/ItemWarehouses';

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     *
     * @return self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->Created;
    }

    /**
     * @param mixed $Created
     *
     * @return self
     */
    public function setCreated($Created)
    {
        $this->Created = $Created;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->Creator;
    }

    /**
     * @param mixed $Creator
     *
     * @return self
     */
    public function setCreator($Creator)
    {
        $this->Creator = $Creator;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatorFullName()
    {
        return $this->CreatorFullName;
    }

    /**
     * @param mixed $CreatorFullName
     *
     * @return self
     */
    public function setCreatorFullName($CreatorFullName)
    {
        $this->CreatorFullName = $CreatorFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrentStock()
    {
        return $this->CurrentStock;
    }

    /**
     * @param mixed $CurrentStock
     *
     * @return self
     */
    public function setCurrentStock($CurrentStock)
    {
        $this->CurrentStock = $CurrentStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultStorageLocation()
    {
        return $this->DefaultStorageLocation;
    }

    /**
     * @param mixed $DefaultStorageLocation
     *
     * @return self
     */
    public function setDefaultStorageLocation($DefaultStorageLocation)
    {
        $this->DefaultStorageLocation = $DefaultStorageLocation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultStorageLocationCode()
    {
        return $this->DefaultStorageLocationCode;
    }

    /**
     * @param mixed $DefaultStorageLocationCode
     *
     * @return self
     */
    public function setDefaultStorageLocationCode($DefaultStorageLocationCode)
    {
        $this->DefaultStorageLocationCode = $DefaultStorageLocationCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultStorageLocationDescription()
    {
        return $this->DefaultStorageLocationDescription;
    }

    /**
     * @param mixed $DefaultStorageLocationDescription
     *
     * @return self
     */
    public function setDefaultStorageLocationDescription($DefaultStorageLocationDescription)
    {
        $this->DefaultStorageLocationDescription = $DefaultStorageLocationDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->Division;
    }

    /**
     * @param mixed $Division
     *
     * @return self
     */
    public function setDivision($Division)
    {
        $this->Division = $Division;

        return $this;
    }

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
    public function getItemIsFractionAllowedItem()
    {
        return $this->ItemIsFractionAllowedItem;
    }

    /**
     * @param mixed $ItemIsFractionAllowedItem
     *
     * @return self
     */
    public function setItemIsFractionAllowedItem($ItemIsFractionAllowedItem)
    {
        $this->ItemIsFractionAllowedItem = $ItemIsFractionAllowedItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemUnit()
    {
        return $this->ItemUnit;
    }

    /**
     * @param mixed $ItemUnit
     *
     * @return self
     */
    public function setItemUnit($ItemUnit)
    {
        $this->ItemUnit = $ItemUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemUnitDescription()
    {
        return $this->ItemUnitDescription;
    }

    /**
     * @param mixed $ItemUnitDescription
     *
     * @return self
     */
    public function setItemUnitDescription($ItemUnitDescription)
    {
        $this->ItemUnitDescription = $ItemUnitDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaximumStock()
    {
        return $this->MaximumStock;
    }

    /**
     * @param mixed $MaximumStock
     *
     * @return self
     */
    public function setMaximumStock($MaximumStock)
    {
        $this->MaximumStock = $MaximumStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->Modified;
    }

    /**
     * @param mixed $Modified
     *
     * @return self
     */
    public function setModified($Modified)
    {
        $this->Modified = $Modified;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifier()
    {
        return $this->Modifier;
    }

    /**
     * @param mixed $Modifier
     *
     * @return self
     */
    public function setModifier($Modifier)
    {
        $this->Modifier = $Modifier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifierFullName()
    {
        return $this->ModifierFullName;
    }

    /**
     * @param mixed $ModifierFullName
     *
     * @return self
     */
    public function setModifierFullName($ModifierFullName)
    {
        $this->ModifierFullName = $ModifierFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedStockIn()
    {
        return $this->PlannedStockIn;
    }

    /**
     * @param mixed $PlannedStockIn
     *
     * @return self
     */
    public function setPlannedStockIn($PlannedStockIn)
    {
        $this->PlannedStockIn = $PlannedStockIn;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedStockOut()
    {
        return $this->PlannedStockOut;
    }

    /**
     * @param mixed $PlannedStockOut
     *
     * @return self
     */
    public function setPlannedStockOut($PlannedStockOut)
    {
        $this->PlannedStockOut = $PlannedStockOut;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlanningDetailsUrl()
    {
        return $this->PlanningDetailsUrl;
    }

    /**
     * @param mixed $PlanningDetailsUrl
     *
     * @return self
     */
    public function setPlanningDetailsUrl($PlanningDetailsUrl)
    {
        $this->PlanningDetailsUrl = $PlanningDetailsUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectedStock()
    {
        return $this->ProjectedStock;
    }

    /**
     * @param mixed $ProjectedStock
     *
     * @return self
     */
    public function setProjectedStock($ProjectedStock)
    {
        $this->ProjectedStock = $ProjectedStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReorderPoint()
    {
        return $this->ReorderPoint;
    }

    /**
     * @param mixed $ReorderPoint
     *
     * @return self
     */
    public function setReorderPoint($ReorderPoint)
    {
        $this->ReorderPoint = $ReorderPoint;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservedStock()
    {
        return $this->ReservedStock;
    }

    /**
     * @param mixed $ReservedStock
     *
     * @return self
     */
    public function setReservedStock($ReservedStock)
    {
        $this->ReservedStock = $ReservedStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSafetyStock()
    {
        return $this->SafetyStock;
    }

    /**
     * @param mixed $SafetyStock
     *
     * @return self
     */
    public function setSafetyStock($SafetyStock)
    {
        $this->SafetyStock = $SafetyStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageLocationUrl()
    {
        return $this->StorageLocationUrl;
    }

    /**
     * @param mixed $StorageLocationUrl
     *
     * @return self
     */
    public function setStorageLocationUrl($StorageLocationUrl)
    {
        $this->StorageLocationUrl = $StorageLocationUrl;

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
