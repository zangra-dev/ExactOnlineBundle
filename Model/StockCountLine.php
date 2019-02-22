<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class StockCountLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCountLines
 *
 * @property string $ID Primary key
 * @property BatchNumbers $BatchNumbers The collection of batch numbers that belong to the items included in this stock count
 * @property float $CostPrice Cost price of the item that is used to create the stock count
 * @property string $CountedBy Counted by
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Item Reference to the item for which the stock is counted
 * @property string $ItemCode Item code
 * @property float $ItemCostPrice Current standard/actual item cost price
 * @property string $ItemDescription Description of item
 * @property bool $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $QuantityDifference The difference between the current quantity in stock and the new quantity in stock. For example specify -1 for this field to correct the quantity if one item in stock is broken.
 * @property float $QuantityInStock The current quantity available in stock
 * @property float $QuantityNew The new quantity in stock. Use this field to correct the quantity when the items in stock are physically counted.
 * @property SerialNumbers $SerialNumbers The collection of serial numbers that belong to the items included in this stock count
 * @property string $StockCountID Identifies the stock count. All the lines of a stock count have the same StockCountID
 * @property string $StockKeepingUnit Stock item's unit description
 * @property string $StorageLocation This property is package specific (Stock count can have multiple lines for the same item only if it is for multiple storage locations).
 * @property string $StorageLocationCode Storage location code
 * @property string $StorageLocationDescription Storage location description
 */
class StockCountLine extends Model 
{

        protected $ID;
        protected $BatchNumbers;
        protected $CostPrice;
        protected $CountedBy;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Division;
        protected $Item;
        protected $ItemCode;
        protected $ItemCostPrice;
        protected $ItemDescription;
        protected $ItemDivisable;
        protected $LineNumber;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $QuantityDifference;
        protected $QuantityInStock;
        protected $QuantityNew;
        protected $SerialNumbers;
        protected $StockCountID;
        protected $StockKeepingUnit;
        protected $StorageLocation;
        protected $StorageLocationCode;
        protected $StorageLocationDescription;
        protected $url = 'inventory/StockCountLines';


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
    public function getBatchNumbers()
    {
        return $this->BatchNumbers;
    }

    /**
     * @param mixed $BatchNumbers
     *
     * @return self
     */
    public function setBatchNumbers($BatchNumbers)
    {
        $this->BatchNumbers = $BatchNumbers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostPrice()
    {
        return $this->CostPrice;
    }

    /**
     * @param mixed $CostPrice
     *
     * @return self
     */
    public function setCostPrice($CostPrice)
    {
        $this->CostPrice = $CostPrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountedBy()
    {
        return $this->CountedBy;
    }

    /**
     * @param mixed $CountedBy
     *
     * @return self
     */
    public function setCountedBy($CountedBy)
    {
        $this->CountedBy = $CountedBy;

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
    public function getItemCostPrice()
    {
        return $this->ItemCostPrice;
    }

    /**
     * @param mixed $ItemCostPrice
     *
     * @return self
     */
    public function setItemCostPrice($ItemCostPrice)
    {
        $this->ItemCostPrice = $ItemCostPrice;

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
    public function getItemDivisable()
    {
        return $this->ItemDivisable;
    }

    /**
     * @param mixed $ItemDivisable
     *
     * @return self
     */
    public function setItemDivisable($ItemDivisable)
    {
        $this->ItemDivisable = $ItemDivisable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }

    /**
     * @param mixed $LineNumber
     *
     * @return self
     */
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;

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
    public function getQuantityDifference()
    {
        return $this->QuantityDifference;
    }

    /**
     * @param mixed $QuantityDifference
     *
     * @return self
     */
    public function setQuantityDifference($QuantityDifference)
    {
        $this->QuantityDifference = $QuantityDifference;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityInStock()
    {
        return $this->QuantityInStock;
    }

    /**
     * @param mixed $QuantityInStock
     *
     * @return self
     */
    public function setQuantityInStock($QuantityInStock)
    {
        $this->QuantityInStock = $QuantityInStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityNew()
    {
        return $this->QuantityNew;
    }

    /**
     * @param mixed $QuantityNew
     *
     * @return self
     */
    public function setQuantityNew($QuantityNew)
    {
        $this->QuantityNew = $QuantityNew;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSerialNumbers()
    {
        return $this->SerialNumbers;
    }

    /**
     * @param mixed $SerialNumbers
     *
     * @return self
     */
    public function setSerialNumbers($SerialNumbers)
    {
        $this->SerialNumbers = $SerialNumbers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStockCountID()
    {
        return $this->StockCountID;
    }

    /**
     * @param mixed $StockCountID
     *
     * @return self
     */
    public function setStockCountID($StockCountID)
    {
        $this->StockCountID = $StockCountID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStockKeepingUnit()
    {
        return $this->StockKeepingUnit;
    }

    /**
     * @param mixed $StockKeepingUnit
     *
     * @return self
     */
    public function setStockKeepingUnit($StockKeepingUnit)
    {
        $this->StockKeepingUnit = $StockKeepingUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageLocation()
    {
        return $this->StorageLocation;
    }

    /**
     * @param mixed $StorageLocation
     *
     * @return self
     */
    public function setStorageLocation($StorageLocation)
    {
        $this->StorageLocation = $StorageLocation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageLocationCode()
    {
        return $this->StorageLocationCode;
    }

    /**
     * @param mixed $StorageLocationCode
     *
     * @return self
     */
    public function setStorageLocationCode($StorageLocationCode)
    {
        $this->StorageLocationCode = $StorageLocationCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageLocationDescription()
    {
        return $this->StorageLocationDescription;
    }

    /**
     * @param mixed $StorageLocationDescription
     *
     * @return self
     */
    public function setStorageLocationDescription($StorageLocationDescription)
    {
        $this->StorageLocationDescription = $StorageLocationDescription;

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