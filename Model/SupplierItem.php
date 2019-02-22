<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SupplierItem extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsSupplierItem
 *
 * @property string $ID Primary key
 * @property string $CountryOfOrigin Country of origin code
 * @property string $CountryOfOriginDescription Description of country of origin
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency of item price
 * @property string $CurrencyDescription Description of currency of item price
 * @property int $Division Division code
 * @property int $DropShipment Indicates that the supplier will deliver the item directly to customer. Values: 0 = No, 1 = Yes, 2 = Optional
 * @property string $Item Item ID
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property bool $MainSupplier Indicates this is a main supplier
 * @property float $MinimumQuantity Minimum quantity of the item for purchase, only available for Wholesale & Distribution (Premium only)
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $PurchaseLeadTime The number of days between placing an order with a supplier and receiving items from the supplier
 * @property float $PurchasePrice Purchase price
 * @property string $PurchaseUnit Unit code
 * @property string $PurchaseUnitDescription Description of unit
 * @property float $PurchaseUnitFactor This is the multiplication factor when going from default item unit to the unit of this price
 * @property string $PurchaseVATCode VAT code
 * @property string $PurchaseVATCodeDescription Description of VAT
 * @property string $Supplier Supplier ID
 * @property string $SupplierCode Supplier code
 * @property string $SupplierDescription Description of supplier
 * @property string $SupplierItemCode Supplier’s item code
 */
class SupplierItem extends Model 
{
        protected $ID;
        protected $CountryOfOrigin;
        protected $CountryOfOriginDescription;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $CurrencyDescription;
        protected $Division;
        protected $DropShipment;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $MainSupplier;
        protected $MinimumQuantity;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $PurchaseLeadTime;
        protected $PurchasePrice;
        protected $PurchaseUnit;
        protected $PurchaseUnitDescription;
        protected $PurchaseUnitFactor;
        protected $PurchaseVATCode;
        protected $PurchaseVATCodeDescription;
        protected $Supplier;
        protected $SupplierCode;
        protected $SupplierDescription;
        protected $SupplierItemCode;
        protected $url = 'logistics/SupplierItem';


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
    public function getCountryOfOrigin()
    {
        return $this->CountryOfOrigin;
    }

    /**
     * @param mixed $CountryOfOrigin
     *
     * @return self
     */
    public function setCountryOfOrigin($CountryOfOrigin)
    {
        $this->CountryOfOrigin = $CountryOfOrigin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryOfOriginDescription()
    {
        return $this->CountryOfOriginDescription;
    }

    /**
     * @param mixed $CountryOfOriginDescription
     *
     * @return self
     */
    public function setCountryOfOriginDescription($CountryOfOriginDescription)
    {
        $this->CountryOfOriginDescription = $CountryOfOriginDescription;

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
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param mixed $Currency
     *
     * @return self
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrencyDescription()
    {
        return $this->CurrencyDescription;
    }

    /**
     * @param mixed $CurrencyDescription
     *
     * @return self
     */
    public function setCurrencyDescription($CurrencyDescription)
    {
        $this->CurrencyDescription = $CurrencyDescription;

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
    public function getDropShipment()
    {
        return $this->DropShipment;
    }

    /**
     * @param mixed $DropShipment
     *
     * @return self
     */
    public function setDropShipment($DropShipment)
    {
        $this->DropShipment = $DropShipment;

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
    public function getMainSupplier()
    {
        return $this->MainSupplier;
    }

    /**
     * @param mixed $MainSupplier
     *
     * @return self
     */
    public function setMainSupplier($MainSupplier)
    {
        $this->MainSupplier = $MainSupplier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinimumQuantity()
    {
        return $this->MinimumQuantity;
    }

    /**
     * @param mixed $MinimumQuantity
     *
     * @return self
     */
    public function setMinimumQuantity($MinimumQuantity)
    {
        $this->MinimumQuantity = $MinimumQuantity;

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
    public function getPurchaseLeadTime()
    {
        return $this->PurchaseLeadTime;
    }

    /**
     * @param mixed $PurchaseLeadTime
     *
     * @return self
     */
    public function setPurchaseLeadTime($PurchaseLeadTime)
    {
        $this->PurchaseLeadTime = $PurchaseLeadTime;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchasePrice()
    {
        return $this->PurchasePrice;
    }

    /**
     * @param mixed $PurchasePrice
     *
     * @return self
     */
    public function setPurchasePrice($PurchasePrice)
    {
        $this->PurchasePrice = $PurchasePrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseUnit()
    {
        return $this->PurchaseUnit;
    }

    /**
     * @param mixed $PurchaseUnit
     *
     * @return self
     */
    public function setPurchaseUnit($PurchaseUnit)
    {
        $this->PurchaseUnit = $PurchaseUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseUnitDescription()
    {
        return $this->PurchaseUnitDescription;
    }

    /**
     * @param mixed $PurchaseUnitDescription
     *
     * @return self
     */
    public function setPurchaseUnitDescription($PurchaseUnitDescription)
    {
        $this->PurchaseUnitDescription = $PurchaseUnitDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseUnitFactor()
    {
        return $this->PurchaseUnitFactor;
    }

    /**
     * @param mixed $PurchaseUnitFactor
     *
     * @return self
     */
    public function setPurchaseUnitFactor($PurchaseUnitFactor)
    {
        $this->PurchaseUnitFactor = $PurchaseUnitFactor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseVATCode()
    {
        return $this->PurchaseVATCode;
    }

    /**
     * @param mixed $PurchaseVATCode
     *
     * @return self
     */
    public function setPurchaseVATCode($PurchaseVATCode)
    {
        $this->PurchaseVATCode = $PurchaseVATCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseVATCodeDescription()
    {
        return $this->PurchaseVATCodeDescription;
    }

    /**
     * @param mixed $PurchaseVATCodeDescription
     *
     * @return self
     */
    public function setPurchaseVATCodeDescription($PurchaseVATCodeDescription)
    {
        $this->PurchaseVATCodeDescription = $PurchaseVATCodeDescription;

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
    public function getSupplierDescription()
    {
        return $this->SupplierDescription;
    }

    /**
     * @param mixed $SupplierDescription
     *
     * @return self
     */
    public function setSupplierDescription($SupplierDescription)
    {
        $this->SupplierDescription = $SupplierDescription;

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