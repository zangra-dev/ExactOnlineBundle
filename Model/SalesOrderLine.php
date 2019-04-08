<?php

namespace aibianchi\ExactOnlineBundle\Model;

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SalesOrderLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrderLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property float $CostPriceFC Item cost price
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $DeliveryDate Delivery date of this line
 * @property string $Description Description
 * @property float $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property int $Division Division code
 * @property string $Item Reference to the item that is sold in this sales order line
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $ItemVersion Item Version
 * @property string $ItemVersionDescription Description of Item Version
 * @property int $LineNumber Line number
 * @property float $Margin Sales margin of the sales order line
 * @property float $NetPrice Net price of the sales order line
 * @property string $Notes Extra notes
 * @property string $OrderID The OrderID identifies the sales order. All the lines of a sales order have the same OrderID
 * @property int $OrderNumber Number of sales order
 * @property string $Pricelist Price list
 * @property string $PricelistDescription Description of Pricelist
 * @property string $Project The project to which the sales order line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property string $PurchaseOrder Purchase order that is linked to the sales order
 * @property string $PurchaseOrderLine Purchase order line of the purchase order that is linked to the sales order
 * @property int $PurchaseOrderLineNumber Number of the purchase order line
 * @property int $PurchaseOrderNumber Number of the purchase order
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property float $QuantityDelivered The number of items delivered
 * @property float $QuantityInvoiced The number of items invoiced
 * @property string $ShopOrder Reference to ShopOrder
 * @property string $TaxSchedule Tax schedule linked
 * @property string $TaxScheduleCode Code of the tax schedule
 * @property string $TaxScheduleDescription Description of the tax schedule
 * @property string $UnitCode Code of item unit
 * @property string $UnitDescription Description of Unit
 * @property float $UnitPrice Price per unit in the currency of the transaction
 * @property int $UseDropShipment Indicates if drop shipment is used (delivery directly to customer, invoice to wholesaler)
 * @property float $VATAmount VAT amount in the currency of the transaction
 * @property string $VATCode VAT code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the sales order is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesOrderLine extends Model
{
        protected $ID;
        protected $AmountDC;
        protected $AmountFC;
        protected $CostCenter;
        protected $CostCenterDescription;
        protected $CostPriceFC;
        protected $CostUnit;
        protected $CostUnitDescription;
        protected $DeliveryDate;
        protected $Description;
        protected $Discount;
        protected $Division;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $ItemVersion;
        protected $ItemVersionDescription;
        protected $LineNumber;
        protected $Margin;
        protected $NetPrice;
        protected $Notes;
        protected $OrderID;
        protected $OrderNumber;
        protected $Pricelist;
        protected $PricelistDescription;
        protected $Project;
        protected $ProjectDescription;
        protected $PurchaseOrder;
        protected $PurchaseOrderLine;
        protected $PurchaseOrderLineNumber;
        protected $PurchaseOrderNumber;
        protected $Quantity;
        protected $QuantityDelivered;
        protected $QuantityInvoiced;
        protected $ShopOrder;
        protected $TaxSchedule;
        protected $TaxScheduleCode;
        protected $TaxScheduleDescription;
        protected $UnitCode;
        protected $UnitDescription;
        protected $UnitPrice;
        protected $UseDropShipment;
        protected $VATAmount;
        protected $VATCode;
        protected $VATCodeDescription;
        protected $VATPercentage;
        protected $url = 'salesorder/SalesOrderLines';

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
    public function getAmountDC()
    {
        return $this->AmountDC;
    }

    /**
     * @param mixed $AmountDC
     *
     * @return self
     */
    public function setAmountDC($AmountDC)
    {
        $this->AmountDC = $AmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountFC()
    {
        return $this->AmountFC;
    }

    /**
     * @param mixed $AmountFC
     *
     * @return self
     */
    public function setAmountFC($AmountFC)
    {
        $this->AmountFC = $AmountFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }

    /**
     * @param mixed $CostCenter
     *
     * @return self
     */
    public function setCostCenter($CostCenter)
    {
        $this->CostCenter = $CostCenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostCenterDescription()
    {
        return $this->CostCenterDescription;
    }

    /**
     * @param mixed $CostCenterDescription
     *
     * @return self
     */
    public function setCostCenterDescription($CostCenterDescription)
    {
        $this->CostCenterDescription = $CostCenterDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostPriceFC()
    {
        return $this->CostPriceFC;
    }

    /**
     * @param mixed $CostPriceFC
     *
     * @return self
     */
    public function setCostPriceFC($CostPriceFC)
    {
        $this->CostPriceFC = $CostPriceFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostUnit()
    {
        return $this->CostUnit;
    }

    /**
     * @param mixed $CostUnit
     *
     * @return self
     */
    public function setCostUnit($CostUnit)
    {
        $this->CostUnit = $CostUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostUnitDescription()
    {
        return $this->CostUnitDescription;
    }

    /**
     * @param mixed $CostUnitDescription
     *
     * @return self
     */
    public function setCostUnitDescription($CostUnitDescription)
    {
        $this->CostUnitDescription = $CostUnitDescription;

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
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param mixed $Discount
     *
     * @return self
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

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
    public function getItemVersion()
    {
        return $this->ItemVersion;
    }

    /**
     * @param mixed $ItemVersion
     *
     * @return self
     */
    public function setItemVersion($ItemVersion)
    {
        $this->ItemVersion = $ItemVersion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemVersionDescription()
    {
        return $this->ItemVersionDescription;
    }

    /**
     * @param mixed $ItemVersionDescription
     *
     * @return self
     */
    public function setItemVersionDescription($ItemVersionDescription)
    {
        $this->ItemVersionDescription = $ItemVersionDescription;

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
    public function getNetPrice()
    {
        return $this->NetPrice;
    }

    /**
     * @param mixed $NetPrice
     *
     * @return self
     */
    public function setNetPrice($NetPrice)
    {
        $this->NetPrice = $NetPrice;

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
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @param mixed $OrderID
     *
     * @return self
     */
    public function setOrderID($OrderID)
    {
        $this->OrderID = $OrderID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }

    /**
     * @param mixed $OrderNumber
     *
     * @return self
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPricelist()
    {
        return $this->Pricelist;
    }

    /**
     * @param mixed $Pricelist
     *
     * @return self
     */
    public function setPricelist($Pricelist)
    {
        $this->Pricelist = $Pricelist;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPricelistDescription()
    {
        return $this->PricelistDescription;
    }

    /**
     * @param mixed $PricelistDescription
     *
     * @return self
     */
    public function setPricelistDescription($PricelistDescription)
    {
        $this->PricelistDescription = $PricelistDescription;

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
    public function getPurchaseOrder()
    {
        return $this->PurchaseOrder;
    }

    /**
     * @param mixed $PurchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
        $this->PurchaseOrder = $PurchaseOrder;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderLine()
    {
        return $this->PurchaseOrderLine;
    }

    /**
     * @param mixed $PurchaseOrderLine
     *
     * @return self
     */
    public function setPurchaseOrderLine($PurchaseOrderLine)
    {
        $this->PurchaseOrderLine = $PurchaseOrderLine;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderLineNumber()
    {
        return $this->PurchaseOrderLineNumber;
    }

    /**
     * @param mixed $PurchaseOrderLineNumber
     *
     * @return self
     */
    public function setPurchaseOrderLineNumber($PurchaseOrderLineNumber)
    {
        $this->PurchaseOrderLineNumber = $PurchaseOrderLineNumber;

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
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param mixed $Quantity
     *
     * @return self
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;

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
    public function getQuantityInvoiced()
    {
        return $this->QuantityInvoiced;
    }

    /**
     * @param mixed $QuantityInvoiced
     *
     * @return self
     */
    public function setQuantityInvoiced($QuantityInvoiced)
    {
        $this->QuantityInvoiced = $QuantityInvoiced;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrder()
    {
        return $this->ShopOrder;
    }

    /**
     * @param mixed $ShopOrder
     *
     * @return self
     */
    public function setShopOrder($ShopOrder)
    {
        $this->ShopOrder = $ShopOrder;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxSchedule()
    {
        return $this->TaxSchedule;
    }

    /**
     * @param mixed $TaxSchedule
     *
     * @return self
     */
    public function setTaxSchedule($TaxSchedule)
    {
        $this->TaxSchedule = $TaxSchedule;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxScheduleCode()
    {
        return $this->TaxScheduleCode;
    }

    /**
     * @param mixed $TaxScheduleCode
     *
     * @return self
     */
    public function setTaxScheduleCode($TaxScheduleCode)
    {
        $this->TaxScheduleCode = $TaxScheduleCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxScheduleDescription()
    {
        return $this->TaxScheduleDescription;
    }

    /**
     * @param mixed $TaxScheduleDescription
     *
     * @return self
     */
    public function setTaxScheduleDescription($TaxScheduleDescription)
    {
        $this->TaxScheduleDescription = $TaxScheduleDescription;

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
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param mixed $UnitPrice
     *
     * @return self
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUseDropShipment()
    {
        return $this->UseDropShipment;
    }

    /**
     * @param mixed $UseDropShipment
     *
     * @return self
     */
    public function setUseDropShipment($UseDropShipment)
    {
        $this->UseDropShipment = $UseDropShipment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmount()
    {
        return $this->VATAmount;
    }

    /**
     * @param mixed $VATAmount
     *
     * @return self
     */
    public function setVATAmount($VATAmount)
    {
        $this->VATAmount = $VATAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATCode()
    {
        return $this->VATCode;
    }

    /**
     * @param mixed $VATCode
     *
     * @return self
     */
    public function setVATCode($VATCode)
    {
        $this->VATCode = $VATCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATCodeDescription()
    {
        return $this->VATCodeDescription;
    }

    /**
     * @param mixed $VATCodeDescription
     *
     * @return self
     */
    public function setVATCodeDescription($VATCodeDescription)
    {
        $this->VATCodeDescription = $VATCodeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATPercentage()
    {
        return $this->VATPercentage;
    }

    /**
     * @param mixed $VATPercentage
     *
     * @return self
     */
    public function setVATPercentage($VATPercentage)
    {
        $this->VATPercentage = $VATPercentage;

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