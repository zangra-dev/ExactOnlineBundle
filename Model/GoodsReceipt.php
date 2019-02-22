<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GoodsReceipt extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderGoodsReceipts
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description Description of the goods receipt
 * @property int $Division Division code
 * @property string $Document Document that is linked to the goods receipt
 * @property string $DocumentSubject Document subject
 * @property int $EntryNumber Entry number of the resulting stock entry
 * @property GoodsReceiptLines $GoodsReceiptLines Collection of receipt lines
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $ReceiptDate Date of the goods receipt
 * @property int $ReceiptNumber Receipt number
 * @property string $Remarks Receipt note
 * @property string $Supplier Account ID of the supplier
 * @property string $SupplierCode Supplier code
 * @property string $SupplierContact ID of the contact person at the supplier
 * @property string $SupplierContactFullName Name of the contact person at the supplier
 * @property string $SupplierName Supplier name
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Warehouse code
 * @property string $WarehouseDescription Description of the warehouse
 * @property string $YourRef The purchase invoice number provided by the supplier
 */
class GoodsReceipt extends Model 
{
        protected $ID;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $Document;
        protected $DocumentSubject;
        protected $EntryNumber;
        protected $GoodsReceiptLines;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $ReceiptDate;
        protected $ReceiptNumber;
        protected $Remarks;
        protected $Supplier;
        protected $SupplierCode;
        protected $SupplierContact;
        protected $SupplierContactFullName;
        protected $SupplierName;
        protected $Warehouse;
        protected $WarehouseCode;
        protected $WarehouseDescription;
        protected $YourRef;
        protected $url = 'purchaseorder/GoodsReceipts';


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
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param mixed $Document
     *
     * @return self
     */
    public function setDocument($Document)
    {
        $this->Document = $Document;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentSubject()
    {
        return $this->DocumentSubject;
    }

    /**
     * @param mixed $DocumentSubject
     *
     * @return self
     */
    public function setDocumentSubject($DocumentSubject)
    {
        $this->DocumentSubject = $DocumentSubject;

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
    public function getGoodsReceiptLines()
    {
        return $this->GoodsReceiptLines;
    }

    /**
     * @param mixed $GoodsReceiptLines
     *
     * @return self
     */
    public function setGoodsReceiptLines($GoodsReceiptLines)
    {
        $this->GoodsReceiptLines = $GoodsReceiptLines;

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
    public function getReceiptDate()
    {
        return $this->ReceiptDate;
    }

    /**
     * @param mixed $ReceiptDate
     *
     * @return self
     */
    public function setReceiptDate($ReceiptDate)
    {
        $this->ReceiptDate = $ReceiptDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiptNumber()
    {
        return $this->ReceiptNumber;
    }

    /**
     * @param mixed $ReceiptNumber
     *
     * @return self
     */
    public function setReceiptNumber($ReceiptNumber)
    {
        $this->ReceiptNumber = $ReceiptNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }

    /**
     * @param mixed $Remarks
     *
     * @return self
     */
    public function setRemarks($Remarks)
    {
        $this->Remarks = $Remarks;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }

    /**
     * @param mixed $Supplier
     *
     * @return self
     */
    public function setSupplier($Supplier)
    {
        $this->Supplier = $Supplier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierCode()
    {
        return $this->SupplierCode;
    }

    /**
     * @param mixed $SupplierCode
     *
     * @return self
     */
    public function setSupplierCode($SupplierCode)
    {
        $this->SupplierCode = $SupplierCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierContact()
    {
        return $this->SupplierContact;
    }

    /**
     * @param mixed $SupplierContact
     *
     * @return self
     */
    public function setSupplierContact($SupplierContact)
    {
        $this->SupplierContact = $SupplierContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierContactFullName()
    {
        return $this->SupplierContactFullName;
    }

    /**
     * @param mixed $SupplierContactFullName
     *
     * @return self
     */
    public function setSupplierContactFullName($SupplierContactFullName)
    {
        $this->SupplierContactFullName = $SupplierContactFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierName()
    {
        return $this->SupplierName;
    }

    /**
     * @param mixed $SupplierName
     *
     * @return self
     */
    public function setSupplierName($SupplierName)
    {
        $this->SupplierName = $SupplierName;

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
    public function getYourRef()
    {
        return $this->YourRef;
    }

    /**
     * @param mixed $YourRef
     *
     * @return self
     */
    public function setYourRef($YourRef)
    {
        $this->YourRef = $YourRef;

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