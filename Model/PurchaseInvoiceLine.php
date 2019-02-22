<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PurchaseInvoiceLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchasePurchaseInvoiceLines
 *
 * @property string $ID A guid that uniqely identifies the invoice line.
 * @property float $Amount In a GET request the line amount is always returned excluding VAT.In a POST request the line amount has to be submitted either including or excluding the VAT amount. This depends on the type (including or excluding) of the VAT code.
 * @property string $CostCenter The code of the cost center that is linked to this invoice line.
 * @property string $CostUnit The code of the cost unit that is linked to this invoice line.
 * @property string $Currency The currency of the line amount. The total invoice amount and all individual line amounts are in the same currency.
 * @property string $Description Description of the invoice line.
 * @property float $Discount The discount given on the default price. A value of 0.1 translates to 10% discount.
 * @property string $Expense Expense related to the Work Breakdown Structure of the selected project. Only available with a professional service license
 * @property string $ExpenseDescription Description of expense. Only available with a professional service license
 * @property string $InvoiceID The unique identifier of the purchase invoice this line belongs to.
 * @property int $InvoiceType Purchase invoice type.
 * @property string $Item string that identifies the purchase item. In a POST request either the Item or the PurchaseOrderLine has to be supplied.
 * @property string $ItemUnit The default unit of the purchased item.
 * @property int $LineNumber The sequence number of the line.
 * @property string $Modified The date and time the invoice line was last modified.
 * @property float $NetPrice The net price that has to be paid per unit. NetPrice = UnitPrice * (1.0 - Discount).Depending on the type of the VAT code the net price is including or excluding VAT.
 * @property string $Notes The user can enter notes related to the invoice line here.
 * @property string $Project The project linked to the purchase invoice line. This field is only applicable for Manufacturing and Professional Services.
 * @property string $PurchaseOrderLine string that identifies the purchase order line that is being invoiced. When doing a POST either the Item or the PurchaseOrderLine has to be supplied.The values of the purchase order line such as Quantity, Item and Amount will be copied to the purchase invoice line.
 * @property float $Quantity The number of purchased items in purchase units. The purchase unit is defined on the item card and it can also be found using the logistics/SupplierItem api endpoint.For divisible items the quantity can be a fractional number, otherwise it is an integer.
 * @property float $QuantityInDefaultUnits The number of purchased items in default units. An item has both a default unit and a purchase unit, for example piece and box with a box containing 12 pieces. The multiplication factor (12 in this example) between the default unit and purchase unit is maintained on the item card. When you GET a purchase invoice line for 1 box of items the field Quantity = 1 and QuantityInDefaultUnits = 12.
 * @property bool $Rebill Indicates whether the purchase invoice line needs to be rebilled. Only available with a professional service license
 * @property string $Unit The code of the unit in which the item is purchased. For example piece, box or kg. The value is taken from the purchase unit in the item card.
 * @property float $UnitPrice The default purchase price per unit.Depending on the type of the VAT code the unit price is including or excluding VAT.
 * @property float $VATAmount The VAT amount of the invoice line.
 * @property string $VATCode The VAT code used for the invoice line.
 * @property float $VATPercentage The VAT percentage.
 */
class PurchaseInvoiceLine extends Model 
{
        protected $ID;
        protected $Amount;
        protected $CostCenter;
        protected $CostUnit;
        protected $Currency;
        protected $Description;
        protected $Discount;
        protected $Expense;
        protected $ExpenseDescription;
        protected $InvoiceID;
        protected $InvoiceType;
        protected $Item;
        protected $ItemUnit;
        protected $LineNumber;
        protected $Modified;
        protected $NetPrice;
        protected $Notes;
        protected $Project;
        protected $PurchaseOrderLine;
        protected $Quantity;
        protected $QuantityInDefaultUnits;
        protected $Rebill;
        protected $Unit;
        protected $UnitPrice;
        protected $VATAmount;
        protected $VATCode;
        protected $VATPercentage;
        protected $url = 'purchase/PurchaseInvoiceLines';


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
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param mixed $Amount
     *
     * @return self
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

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
    public function getExpense()
    {
        return $this->Expense;
    }

    /**
     * @param mixed $Expense
     *
     * @return self
     */
    public function setExpense($Expense)
    {
        $this->Expense = $Expense;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpenseDescription()
    {
        return $this->ExpenseDescription;
    }

    /**
     * @param mixed $ExpenseDescription
     *
     * @return self
     */
    public function setExpenseDescription($ExpenseDescription)
    {
        $this->ExpenseDescription = $ExpenseDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }

    /**
     * @param mixed $InvoiceID
     *
     * @return self
     */
    public function setInvoiceID($InvoiceID)
    {
        $this->InvoiceID = $InvoiceID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceType()
    {
        return $this->InvoiceType;
    }

    /**
     * @param mixed $InvoiceType
     *
     * @return self
     */
    public function setInvoiceType($InvoiceType)
    {
        $this->InvoiceType = $InvoiceType;

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
    public function getQuantityInDefaultUnits()
    {
        return $this->QuantityInDefaultUnits;
    }

    /**
     * @param mixed $QuantityInDefaultUnits
     *
     * @return self
     */
    public function setQuantityInDefaultUnits($QuantityInDefaultUnits)
    {
        $this->QuantityInDefaultUnits = $QuantityInDefaultUnits;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRebill()
    {
        return $this->Rebill;
    }

    /**
     * @param mixed $Rebill
     *
     * @return self
     */
    public function setRebill($Rebill)
    {
        $this->Rebill = $Rebill;

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