<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class StockCount extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCounts
 *
 * @property string $StockCountID Primary key
 * @property string $CountedBy Stock count user
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the stock count
 * @property int $Division Division code
 * @property int $EntryNumber Entry number of the stock transactions
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OffsetGLInventory Offset GL account of inventory
 * @property string $OffsetGLInventoryCode GLAccount code
 * @property string $OffsetGLInventoryDescription GLAccount description
 * @property int $Source Source of stock count entry: 1-Manual entry, 2-Import, 3-Stock count, 4-Web service
 * @property int $Status Stock count status: 12-Draft, 21-Processed
 * @property string $StockCountDate Stock count date
 * @property StockCountLines $StockCountLines Collection of stock count lines
 * @property int $StockCountNumber Human readable id of the stock count
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 */
class StockCount extends Model 
{

        protected $primaryKey = 'StockCountID';
        protected $StockCountID;
        protected $CountedBy;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $EntryNumber;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $OffsetGLInventory;
        protected $OffsetGLInventoryCode;
        protected $OffsetGLInventoryDescription;
        protected $Source;
        protected $Status;
        protected $StockCountDate;
        protected $StockCountLines;
        protected $StockCountNumber;
        protected $Warehouse;
        protected $WarehouseCode;
        protected $WarehouseDescription;
        protected $url = 'inventory/StockCounts';


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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     *
     * @return self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

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
    public function getEntryNumber()
    {
        return $this->EntryNumber;
    }

    /**
     * @param mixed $EntryNumber
     *
     * @return self
     */
    public function setEntryNumber($EntryNumber)
    {
        $this->EntryNumber = $EntryNumber;

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
    public function getOffsetGLInventory()
    {
        return $this->OffsetGLInventory;
    }

    /**
     * @param mixed $OffsetGLInventory
     *
     * @return self
     */
    public function setOffsetGLInventory($OffsetGLInventory)
    {
        $this->OffsetGLInventory = $OffsetGLInventory;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOffsetGLInventoryCode()
    {
        return $this->OffsetGLInventoryCode;
    }

    /**
     * @param mixed $OffsetGLInventoryCode
     *
     * @return self
     */
    public function setOffsetGLInventoryCode($OffsetGLInventoryCode)
    {
        $this->OffsetGLInventoryCode = $OffsetGLInventoryCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOffsetGLInventoryDescription()
    {
        return $this->OffsetGLInventoryDescription;
    }

    /**
     * @param mixed $OffsetGLInventoryDescription
     *
     * @return self
     */
    public function setOffsetGLInventoryDescription($OffsetGLInventoryDescription)
    {
        $this->OffsetGLInventoryDescription = $OffsetGLInventoryDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * @param mixed $Source
     *
     * @return self
     */
    public function setSource($Source)
    {
        $this->Source = $Source;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStockCountDate()
    {
        return $this->StockCountDate;
    }

    /**
     * @param mixed $StockCountDate
     *
     * @return self
     */
    public function setStockCountDate($StockCountDate)
    {
        $this->StockCountDate = $StockCountDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStockCountLines()
    {
        return $this->StockCountLines;
    }

    /**
     * @param mixed $StockCountLines
     *
     * @return self
     */
    public function setStockCountLines($StockCountLines)
    {
        $this->StockCountLines = $StockCountLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStockCountNumber()
    {
        return $this->StockCountNumber;
    }

    /**
     * @param mixed $StockCountNumber
     *
     * @return self
     */
    public function setStockCountNumber($StockCountNumber)
    {
        $this->StockCountNumber = $StockCountNumber;

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