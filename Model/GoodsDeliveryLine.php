<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GoodsDeliveryLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderGoodsDeliveryLines
 *
 * @property string $ID Primary key
 * @property StockBatchNumbers $BatchNumbers Collection of batch numbers
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $DeliveryDate Date of goods delivery
 * @property string $Description Description of sales order delivery
 * @property int $Division Division code
 * @property string $EntryID The EntryID identifies the goods delivery. All the lines of a goods delivery have the same EntryID
 * @property string $Item Reference to item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property float $QuantityDelivered Quantity delivered
 * @property float $QuantityOrdered Quantity ordered
 * @property string $SalesOrderLineID Reference to sales order
 * @property int $SalesOrderLineNumber Sales order line number
 * @property int $SalesOrderNumber Sales order number
 * @property StockSerialNumbers $SerialNumbers Collection of serial numbers
 * @property string $StorageLocation Reference to storage location
 * @property string $StorageLocationCode Storage location code
 * @property string $StorageLocationDescription Storage location description
 * @property string $TrackingNumber Reference to tracking number
 * @property string $Unitcode Code of item unit
 */
class GoodsDeliveryLine extends Model 
{
        protected $ID;
        protected $BatchNumbers;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $DeliveryDate;
        protected $Description;
        protected $Division;
        protected $EntryID;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $LineNumber;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $QuantityDelivered;
        protected $QuantityOrdered;
        protected $SalesOrderLineID;
        protected $SalesOrderLineNumber;
        protected $SalesOrderNumber;
        protected $SerialNumbers;
        protected $StorageLocation;
        protected $StorageLocationCode;
        protected $StorageLocationDescription;
        protected $TrackingNumber;
        protected $Unitcode;
        protected $url = 'salesorder/GoodsDeliveryLines';


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
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param mixed $DeliveryDate
     *
     * @return self
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;

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
    public function getEntryID()
    {
        return $this->EntryID;
    }

    /**
     * @param mixed $EntryID
     *
     * @return self
     */
    public function setEntryID($EntryID)
    {
        $this->EntryID = $EntryID;

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
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param mixed $Notes
     *
     * @return self
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityDelivered()
    {
        return $this->QuantityDelivered;
    }

    /**
     * @param mixed $QuantityDelivered
     *
     * @return self
     */
    public function setQuantityDelivered($QuantityDelivered)
    {
        $this->QuantityDelivered = $QuantityDelivered;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityOrdered()
    {
        return $this->QuantityOrdered;
    }

    /**
     * @param mixed $QuantityOrdered
     *
     * @return self
     */
    public function setQuantityOrdered($QuantityOrdered)
    {
        $this->QuantityOrdered = $QuantityOrdered;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderLineID()
    {
        return $this->SalesOrderLineID;
    }

    /**
     * @param mixed $SalesOrderLineID
     *
     * @return self
     */
    public function setSalesOrderLineID($SalesOrderLineID)
    {
        $this->SalesOrderLineID = $SalesOrderLineID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderLineNumber()
    {
        return $this->SalesOrderLineNumber;
    }

    /**
     * @param mixed $SalesOrderLineNumber
     *
     * @return self
     */
    public function setSalesOrderLineNumber($SalesOrderLineNumber)
    {
        $this->SalesOrderLineNumber = $SalesOrderLineNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderNumber()
    {
        return $this->SalesOrderNumber;
    }

    /**
     * @param mixed $SalesOrderNumber
     *
     * @return self
     */
    public function setSalesOrderNumber($SalesOrderNumber)
    {
        $this->SalesOrderNumber = $SalesOrderNumber;

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
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param mixed $TrackingNumber
     *
     * @return self
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitcode()
    {
        return $this->Unitcode;
    }

    /**
     * @param mixed $Unitcode
     *
     * @return self
     */
    public function setUnitcode($Unitcode)
    {
        $this->Unitcode = $Unitcode;

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