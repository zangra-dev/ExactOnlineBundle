<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GoodsDelivery extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderGoodsDeliveries
 *
 * @property string $EntryID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $DeliveryAccount Reference to account for delivery
 * @property string $DeliveryAccountCode Delivery account code
 * @property string $DeliveryAccountName Account name
 * @property string $DeliveryAddress Reference to shipping address
 * @property string $DeliveryContact Reference to contact for delivery
 * @property string $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property string $DeliveryDate Date of goods delivery
 * @property int $DeliveryNumber Delivery number
 * @property string $Description Header description
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the sales order delivery
 * @property string $DocumentSubject Document Subject
 * @property int $EntryNumber Entry number
 * @property GoodsDeliveryLines $GoodsDeliveryLines Collection of lines
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Remarks Remarks
 * @property string $ShippingMethod Reference to shipping method
 * @property string $ShippingMethodCode Code of shipping method
 * @property string $ShippingMethodDescription Description of shipping method
 * @property string $TrackingNumber Reference to header tracking number
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 */
class GoodsDelivery extends Model 
{
        protected $primaryKey = 'EntryID';
        protected $EntryID;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $DeliveryAccount;
        protected $DeliveryAccountCode;
        protected $DeliveryAccountName;
        protected $DeliveryAddress;
        protected $DeliveryContact;
        protected $DeliveryContactPersonFullName;
        protected $DeliveryDate;
        protected $DeliveryNumber;
        protected $Description;
        protected $Division;
        protected $Document;
        protected $DocumentSubject;
        protected $EntryNumber;
        protected $GoodsDeliveryLines;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Remarks;
        protected $ShippingMethod;
        protected $ShippingMethodCode;
        protected $ShippingMethodDescription;
        protected $TrackingNumber;
        protected $Warehouse;
        protected $WarehouseCode;
        protected $WarehouseDescription;
        protected $url = 'salesorder/GoodsDeliveries';


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
    public function getDeliveryAccount()
    {
        return $this->DeliveryAccount;
    }

    /**
     * @param mixed $DeliveryAccount
     *
     * @return self
     */
    public function setDeliveryAccount($DeliveryAccount)
    {
        $this->DeliveryAccount = $DeliveryAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountCode()
    {
        return $this->DeliveryAccountCode;
    }

    /**
     * @param mixed $DeliveryAccountCode
     *
     * @return self
     */
    public function setDeliveryAccountCode($DeliveryAccountCode)
    {
        $this->DeliveryAccountCode = $DeliveryAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountName()
    {
        return $this->DeliveryAccountName;
    }

    /**
     * @param mixed $DeliveryAccountName
     *
     * @return self
     */
    public function setDeliveryAccountName($DeliveryAccountName)
    {
        $this->DeliveryAccountName = $DeliveryAccountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param mixed $DeliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryContact()
    {
        return $this->DeliveryContact;
    }

    /**
     * @param mixed $DeliveryContact
     *
     * @return self
     */
    public function setDeliveryContact($DeliveryContact)
    {
        $this->DeliveryContact = $DeliveryContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryContactPersonFullName()
    {
        return $this->DeliveryContactPersonFullName;
    }

    /**
     * @param mixed $DeliveryContactPersonFullName
     *
     * @return self
     */
    public function setDeliveryContactPersonFullName($DeliveryContactPersonFullName)
    {
        $this->DeliveryContactPersonFullName = $DeliveryContactPersonFullName;

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
    public function getDeliveryNumber()
    {
        return $this->DeliveryNumber;
    }

    /**
     * @param mixed $DeliveryNumber
     *
     * @return self
     */
    public function setDeliveryNumber($DeliveryNumber)
    {
        $this->DeliveryNumber = $DeliveryNumber;

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
    public function getGoodsDeliveryLines()
    {
        return $this->GoodsDeliveryLines;
    }

    /**
     * @param mixed $GoodsDeliveryLines
     *
     * @return self
     */
    public function setGoodsDeliveryLines($GoodsDeliveryLines)
    {
        $this->GoodsDeliveryLines = $GoodsDeliveryLines;

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
    public function getShippingMethod()
    {
        return $this->ShippingMethod;
    }

    /**
     * @param mixed $ShippingMethod
     *
     * @return self
     */
    public function setShippingMethod($ShippingMethod)
    {
        $this->ShippingMethod = $ShippingMethod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethodCode()
    {
        return $this->ShippingMethodCode;
    }

    /**
     * @param mixed $ShippingMethodCode
     *
     * @return self
     */
    public function setShippingMethodCode($ShippingMethodCode)
    {
        $this->ShippingMethodCode = $ShippingMethodCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethodDescription()
    {
        return $this->ShippingMethodDescription;
    }

    /**
     * @param mixed $ShippingMethodDescription
     *
     * @return self
     */
    public function setShippingMethodDescription($ShippingMethodDescription)
    {
        $this->ShippingMethodDescription = $ShippingMethodDescription;

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
