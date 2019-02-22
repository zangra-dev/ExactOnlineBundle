<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class AccountItem extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsAccountItems
 *
 * @property string $ID Item
 * @property string $Account Account
 * @property string $Barcode Barcode
 * @property string $Code Item code
 * @property string $CostPriceCurrency Currency of cost price
 * @property float $CostPriceNew New cost price
 * @property float $CostPriceStandard Standard cost price
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property float $DefaultSalesPrice Default sales price
 * @property string $Description Item Description
 * @property int $Division Division code
 * @property string $EndDate End date
 * @property bool $IsFractionAllowedItem Indicates if decimals are allowed in quantities
 * @property bool $IsSalesItem Indicates if this is a sales item
 * @property bool $IsStockItem Indicates if this is a stock item
 * @property int $IsTaxableItem Indicates if tax needs to be calculated for this item
 * @property int $IsWebshopItem Indicates if this is a webshop item
 * @property string $ItemGroup Item group
 * @property string $ItemGroupCode Code of Item group
 * @property string $ItemGroupDescription Description of Item group
 * @property float $Margin Margin
 * @property float $Markup Markup
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes Extra remarks
 * @property string $PictureName File name of picture
 * @property string $PictureThumbnailUrl Url where thumbnail picture can be retrieved
 * @property string $PictureUrl Url where picture can be retrieved
 * @property float $ProjectedStock
 * @property int $PurchaseLeadDays Number of days before purchase arrives
 * @property float $QuantityToBeConsumed Quantity to be consumed
 * @property float $QuantityToBeDelivered Quantity to be delivered
 * @property float $QuantityToBeProduced Quantity to be produced
 * @property float $QuantityToBeReceived Quantity to be received
 * @property float $ReservedStock Quantity in stock that is reserved
 * @property string $SalesCurrency Currency of sales price
 * @property float $SalesPrice Sales price
 * @property string $SalesVatCode Sales vat code
 * @property string $SalesVatCodeDescription Description of Sales vat code
 * @property string $StartDate Start date
 * @property float $Stock Quantity that is in stock
 * @property string $Unit Unit
 * @property string $UnitCode Code of unit
 * @property string $UnitDescription Description of unit
 * @property string $UnitType Type of unit: A=Area, L=Length, O=Other, T=Time, V=Volume, W=Weight
 */
class AccountItem extends Model
{
        protected $ID;
        protected $Account;
        protected $Barcode;
        protected $Code;
        protected $CostPriceCurrency;
        protected $CostPriceNew;
        protected $CostPriceStandard;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $DefaultSalesPrice;
        protected $Description;
        protected $Division;
        protected $EndDate;
        protected $IsFractionAllowedItem;
        protected $IsSalesItem;
        protected $IsStockItem;
        protected $IsTaxableItem;
        protected $IsWebshopItem;
        protected $ItemGroup;
        protected $ItemGroupCode;
        protected $ItemGroupDescription;
        protected $Margin;
        protected $Markup;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $PictureName;
        protected $PictureThumbnailUrl;
        protected $PictureUrl;
        protected $ProjectedStock;
        protected $PurchaseLeadDays;
        protected $QuantityToBeConsumed;
        protected $QuantityToBeDelivered;
        protected $QuantityToBeProduced;
        protected $QuantityToBeReceived;
        protected $ReservedStock;
        protected $SalesCurrency;
        protected $SalesPrice;
        protected $SalesVatCode;
        protected $SalesVatCodeDescription;
        protected $StartDate;
        protected $Stock;
        protected $Unit;
        protected $UnitCode;
        protected $UnitDescription;
        protected $UnitType;
        protected $url = 'read/logistics/AccountItems';

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
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param mixed $Account
     *
     * @return self
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param mixed $Barcode
     *
     * @return self
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param mixed $Code
     *
     * @return self
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostPriceCurrency()
    {
        return $this->CostPriceCurrency;
    }

    /**
     * @param mixed $CostPriceCurrency
     *
     * @return self
     */
    public function setCostPriceCurrency($CostPriceCurrency)
    {
        $this->CostPriceCurrency = $CostPriceCurrency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostPriceNew()
    {
        return $this->CostPriceNew;
    }

    /**
     * @param mixed $CostPriceNew
     *
     * @return self
     */
    public function setCostPriceNew($CostPriceNew)
    {
        $this->CostPriceNew = $CostPriceNew;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostPriceStandard()
    {
        return $this->CostPriceStandard;
    }

    /**
     * @param mixed $CostPriceStandard
     *
     * @return self
     */
    public function setCostPriceStandard($CostPriceStandard)
    {
        $this->CostPriceStandard = $CostPriceStandard;

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
    public function getDefaultSalesPrice()
    {
        return $this->DefaultSalesPrice;
    }

    /**
     * @param mixed $DefaultSalesPrice
     *
     * @return self
     */
    public function setDefaultSalesPrice($DefaultSalesPrice)
    {
        $this->DefaultSalesPrice = $DefaultSalesPrice;

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
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param mixed $EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsFractionAllowedItem()
    {
        return $this->IsFractionAllowedItem;
    }

    /**
     * @param mixed $IsFractionAllowedItem
     *
     * @return self
     */
    public function setIsFractionAllowedItem($IsFractionAllowedItem)
    {
        $this->IsFractionAllowedItem = $IsFractionAllowedItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsSalesItem()
    {
        return $this->IsSalesItem;
    }

    /**
     * @param mixed $IsSalesItem
     *
     * @return self
     */
    public function setIsSalesItem($IsSalesItem)
    {
        $this->IsSalesItem = $IsSalesItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsStockItem()
    {
        return $this->IsStockItem;
    }

    /**
     * @param mixed $IsStockItem
     *
     * @return self
     */
    public function setIsStockItem($IsStockItem)
    {
        $this->IsStockItem = $IsStockItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsTaxableItem()
    {
        return $this->IsTaxableItem;
    }

    /**
     * @param mixed $IsTaxableItem
     *
     * @return self
     */
    public function setIsTaxableItem($IsTaxableItem)
    {
        $this->IsTaxableItem = $IsTaxableItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsWebshopItem()
    {
        return $this->IsWebshopItem;
    }

    /**
     * @param mixed $IsWebshopItem
     *
     * @return self
     */
    public function setIsWebshopItem($IsWebshopItem)
    {
        $this->IsWebshopItem = $IsWebshopItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemGroup()
    {
        return $this->ItemGroup;
    }

    /**
     * @param mixed $ItemGroup
     *
     * @return self
     */
    public function setItemGroup($ItemGroup)
    {
        $this->ItemGroup = $ItemGroup;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemGroupCode()
    {
        return $this->ItemGroupCode;
    }

    /**
     * @param mixed $ItemGroupCode
     *
     * @return self
     */
    public function setItemGroupCode($ItemGroupCode)
    {
        $this->ItemGroupCode = $ItemGroupCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemGroupDescription()
    {
        return $this->ItemGroupDescription;
    }

    /**
     * @param mixed $ItemGroupDescription
     *
     * @return self
     */
    public function setItemGroupDescription($ItemGroupDescription)
    {
        $this->ItemGroupDescription = $ItemGroupDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMargin()
    {
        return $this->Margin;
    }

    /**
     * @param mixed $Margin
     *
     * @return self
     */
    public function setMargin($Margin)
    {
        $this->Margin = $Margin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarkup()
    {
        return $this->Markup;
    }

    /**
     * @param mixed $Markup
     *
     * @return self
     */
    public function setMarkup($Markup)
    {
        $this->Markup = $Markup;

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
    public function getPictureName()
    {
        return $this->PictureName;
    }

    /**
     * @param mixed $PictureName
     *
     * @return self
     */
    public function setPictureName($PictureName)
    {
        $this->PictureName = $PictureName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureThumbnailUrl()
    {
        return $this->PictureThumbnailUrl;
    }

    /**
     * @param mixed $PictureThumbnailUrl
     *
     * @return self
     */
    public function setPictureThumbnailUrl($PictureThumbnailUrl)
    {
        $this->PictureThumbnailUrl = $PictureThumbnailUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureUrl()
    {
        return $this->PictureUrl;
    }

    /**
     * @param mixed $PictureUrl
     *
     * @return self
     */
    public function setPictureUrl($PictureUrl)
    {
        $this->PictureUrl = $PictureUrl;

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
    public function getPurchaseLeadDays()
    {
        return $this->PurchaseLeadDays;
    }

    /**
     * @param mixed $PurchaseLeadDays
     *
     * @return self
     */
    public function setPurchaseLeadDays($PurchaseLeadDays)
    {
        $this->PurchaseLeadDays = $PurchaseLeadDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityToBeConsumed()
    {
        return $this->QuantityToBeConsumed;
    }

    /**
     * @param mixed $QuantityToBeConsumed
     *
     * @return self
     */
    public function setQuantityToBeConsumed($QuantityToBeConsumed)
    {
        $this->QuantityToBeConsumed = $QuantityToBeConsumed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityToBeDelivered()
    {
        return $this->QuantityToBeDelivered;
    }

    /**
     * @param mixed $QuantityToBeDelivered
     *
     * @return self
     */
    public function setQuantityToBeDelivered($QuantityToBeDelivered)
    {
        $this->QuantityToBeDelivered = $QuantityToBeDelivered;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityToBeProduced()
    {
        return $this->QuantityToBeProduced;
    }

    /**
     * @param mixed $QuantityToBeProduced
     *
     * @return self
     */
    public function setQuantityToBeProduced($QuantityToBeProduced)
    {
        $this->QuantityToBeProduced = $QuantityToBeProduced;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantityToBeReceived()
    {
        return $this->QuantityToBeReceived;
    }

    /**
     * @param mixed $QuantityToBeReceived
     *
     * @return self
     */
    public function setQuantityToBeReceived($QuantityToBeReceived)
    {
        $this->QuantityToBeReceived = $QuantityToBeReceived;

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
    public function getSalesCurrency()
    {
        return $this->SalesCurrency;
    }

    /**
     * @param mixed $SalesCurrency
     *
     * @return self
     */
    public function setSalesCurrency($SalesCurrency)
    {
        $this->SalesCurrency = $SalesCurrency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesPrice()
    {
        return $this->SalesPrice;
    }

    /**
     * @param mixed $SalesPrice
     *
     * @return self
     */
    public function setSalesPrice($SalesPrice)
    {
        $this->SalesPrice = $SalesPrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesVatCode()
    {
        return $this->SalesVatCode;
    }

    /**
     * @param mixed $SalesVatCode
     *
     * @return self
     */
    public function setSalesVatCode($SalesVatCode)
    {
        $this->SalesVatCode = $SalesVatCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesVatCodeDescription()
    {
        return $this->SalesVatCodeDescription;
    }

    /**
     * @param mixed $SalesVatCodeDescription
     *
     * @return self
     */
    public function setSalesVatCodeDescription($SalesVatCodeDescription)
    {
        $this->SalesVatCodeDescription = $SalesVatCodeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param mixed $StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param mixed $Stock
     *
     * @return self
     */
    public function setStock($Stock)
    {
        $this->Stock = $Stock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * @param mixed $Unit
     *
     * @return self
     */
    public function setUnit($Unit)
    {
        $this->Unit = $Unit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitCode()
    {
        return $this->UnitCode;
    }

    /**
     * @param mixed $UnitCode
     *
     * @return self
     */
    public function setUnitCode($UnitCode)
    {
        $this->UnitCode = $UnitCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitDescription()
    {
        return $this->UnitDescription;
    }

    /**
     * @param mixed $UnitDescription
     *
     * @return self
     */
    public function setUnitDescription($UnitDescription)
    {
        $this->UnitDescription = $UnitDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitType()
    {
        return $this->UnitType;
    }

    /**
     * @param mixed $UnitType
     *
     * @return self
     */
    public function setUnitType($UnitType)
    {
        $this->UnitType = $UnitType;

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
