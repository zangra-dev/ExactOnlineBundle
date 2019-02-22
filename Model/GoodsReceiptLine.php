<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GoodsReceiptLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderGoodsReceiptLines
 *
 * @property string $ID Primary key
 * @property StockBatchNumbers $BatchNumbers Collection of batch numbers
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description Goods receipt line description
 * @property int $Division Division code
 * @property string $GoodsReceiptID All the lines of a goods receipt have the same GoodsReceiptID
 * @property string $Item ID of the received item
 * @property string $ItemCode Code of the received item
 * @property string $ItemDescription Item description
 * @property string $ItemUnitCode Unit code of the purchase
 * @property int $LineNumber Line number
 * @property string $Location ID of the storage location in the warehouse where the item is received
 * @property string $LocationCode Code of the storage location in the warehouse where the item is received
 * @property string $LocationDescription Description of the storage location in the warehouse where the item is received
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes Notes
 * @property string $Project Reference to project
 * @property string $ProjectCode Project code
 * @property string $ProjectDescription Project description
 * @property string $PurchaseOrderID Reference to purchase order
 * @property string $PurchaseOrderLineID ID of the purchase order line that is received
 * @property int $PurchaseOrderNumber Order number of the purchase order that is received
 * @property float $QuantityOrdered Quantity ordered
 * @property float $QuantityReceived Quantity received
 * @property StockSerialNumbers $SerialNumbers Collection of serial numbers
 * @property string $SupplierItemCode Supplier item code
 */
class GoodsReceiptLine extends Model 
{
        protected $ID;
        protected $BatchNumbers;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $GoodsReceiptID;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $ItemUnitCode;
        protected $LineNumber;
        protected $Location;
        protected $LocationCode;
        protected $LocationDescription;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $Project;
        protected $ProjectCode;
        protected $ProjectDescription;
        protected $PurchaseOrderID;
        protected $PurchaseOrderLineID;
        protected $PurchaseOrderNumber;
        protected $QuantityOrdered;
        protected $QuantityReceived;
        protected $SerialNumbers;
        protected $SupplierItemCode;
        protected $url = 'purchaseorder/GoodsReceiptLines';


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
    public function getGoodsReceiptID()
    {
        return $this->GoodsReceiptID;
    }

    /**
     * @param mixed $GoodsReceiptID
     *
     * @return self
     */
    public function setGoodsReceiptID($GoodsReceiptID)
    {
        $this->GoodsReceiptID = $GoodsReceiptID;

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
    public function getItemUnitCode()
    {
        return $this->ItemUnitCode;
    }

    /**
     * @param mixed $ItemUnitCode
     *
     * @return self
     */
    public function setItemUnitCode($ItemUnitCode)
    {
        $this->ItemUnitCode = $ItemUnitCode;

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
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param mixed $Location
     *
     * @return self
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param mixed $LocationCode
     *
     * @return self
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationDescription()
    {
        return $this->LocationDescription;
    }

    /**
     * @param mixed $LocationDescription
     *
     * @return self
     */
    public function setLocationDescription($LocationDescription)
    {
        $this->LocationDescription = $LocationDescription;

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
    public function getProject()
    {
        return $this->Project;
    }

    /**
     * @param mixed $Project
     *
     * @return self
     */
    public function setProject($Project)
    {
        $this->Project = $Project;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectCode()
    {
        return $this->ProjectCode;
    }

    /**
     * @param mixed $ProjectCode
     *
     * @return self
     */
    public function setProjectCode($ProjectCode)
    {
        $this->ProjectCode = $ProjectCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectDescription()
    {
        return $this->ProjectDescription;
    }

    /**
     * @param mixed $ProjectDescription
     *
     * @return self
     */
    public function setProjectDescription($ProjectDescription)
    {
        $this->ProjectDescription = $ProjectDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderID()
    {
        return $this->PurchaseOrderID;
    }

    /**
     * @param mixed $PurchaseOrderID
     *
     * @return self
     */
    public function setPurchaseOrderID($PurchaseOrderID)
    {
        $this->PurchaseOrderID = $PurchaseOrderID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderLineID()
    {
        return $this->PurchaseOrderLineID;
    }

    /**
     * @param mixed $PurchaseOrderLineID
     *
     * @return self
     */
    public function setPurchaseOrderLineID($PurchaseOrderLineID)
    {
        $this->PurchaseOrderLineID = $PurchaseOrderLineID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderNumber()
    {
        return $this->PurchaseOrderNumber;
    }

    /**
     * @param mixed $PurchaseOrderNumber
     *
     * @return self
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;

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
    public function getQuantityReceived()
    {
        return $this->QuantityReceived;
    }

    /**
     * @param mixed $QuantityReceived
     *
     * @return self
     */
    public function setQuantityReceived($QuantityReceived)
    {
        $this->QuantityReceived = $QuantityReceived;

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
    public function getSupplierItemCode()
    {
        return $this->SupplierItemCode;
    }

    /**
     * @param mixed $SupplierItemCode
     *
     * @return self
     */
    public function setSupplierItemCode($SupplierItemCode)
    {
        $this->SupplierItemCode = $SupplierItemCode;

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