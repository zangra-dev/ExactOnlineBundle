<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PurchaseOrderLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrderLines
 *
 * @property string $ID  Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the purchase order line
 * @property float $Discount Discount in percentage for item
 * @property int $Division Division code
 * @property string $Expense Expense related to the Work Breakdown Structure of the selected project. Only available with a professional service license
 * @property string $ExpenseDescription Description of expense. Only available with a professional service license
 * @property float $InStock The current stock level of items shown in stock unit. The information is displayed only for items with the stock property selected.
 * @property float $InvoicedQuantity Quantity of item that has been invoiced
 * @property string $Item Reference to the item for purchase order
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property bool $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NetPrice The net price is the unit price (VAT code taken into account) with any discount applied
 * @property string $Notes Notes
 * @property string $Project Reference to project. Only available with a professional service license
 * @property string $ProjectCode Project code. Only available with a professional service license
 * @property string $ProjectDescription Description of the project. Only available with a professional service license
 * @property float $ProjectedStock The current stock level + the planned quantity to be received - the planned quantity to deliver shown in stock unit.
 * @property string $PurchaseOrderID Identifies the purchase order. All the lines of a purchase order have the same PurchaseOrderID
 * @property float $Quantity Quantity in item units
 * @property float $QuantityInPurchaseUnits Quantity in purchase units. Use this field when creating a purchase order
 * @property bool $Rebill Indicates whether the purchase order line needs to be rebilled. Only available with a professional service license
 * @property string $ReceiptDate Date the goods are expected to be received
 * @property float $ReceivedQuantity Quantity of goods received
 * @property string $SalesOrder Sales order that is linked to a back to back sales order in purchase order
 * @property string $SalesOrderLine Sales order line of the sales order that is linked to a back to back sales order in purchase order
 * @property int $SalesOrderLineNumber Number of the sales order line
 * @property int $SalesOrderNumber Number of the sales order
 * @property string $SupplierItemCode Code the supplier uses for this item
 * @property string $Unit Code of item unit
 * @property string $UnitDescription Description of unit
 * @property float $UnitPrice Item price per purchase unit
 * @property float $VATAmount Amount of VAT charges calculated from total amount and vat percentage
 * @property string $VATCode The VAT code used when the invoice was registered
 * @property string $VATDescription Description of vat code
 * @property float $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 */
class PurchaseOrderLine extends Model 
{
        protected $ID;
        protected $AmountDC;
        protected $AmountFC;
        protected $CostCenter;
        protected $CostCenterDescription;
        protected $CostUnit;
        protected $CostUnitDescription;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Discount;
        protected $Division;
        protected $Expense;
        protected $ExpenseDescription;
        protected $InStock;
        protected $InvoicedQuantity;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $ItemDivisable;
        protected $LineNumber;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $NetPrice;
        protected $Notes;
        protected $Project;
        protected $ProjectCode;
        protected $ProjectDescription;
        protected $ProjectedStock;
        protected $PurchaseOrderID;
        protected $Quantity;
        protected $QuantityInPurchaseUnits;
        protected $Rebill;
        protected $ReceiptDate;
        protected $ReceivedQuantity;
        protected $SalesOrder;
        protected $SalesOrderLine;
        protected $SalesOrderLineNumber;
        protected $SalesOrderNumber;
        protected $SupplierItemCode;
        protected $Unit;
        protected $UnitDescription;
        protected $UnitPrice;
        protected $VATAmount;
        protected $VATCode;
        protected $VATDescription;
        protected $VATPercentage;
        protected $url = 'purchaseorder/PurchaseOrderLines';

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
    public function getInStock()
    {
        return $this->InStock;
    }

    /**
     * @param mixed $InStock
     *
     * @return self
     */
    public function setInStock($InStock)
    {
        $this->InStock = $InStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoicedQuantity()
    {
        return $this->InvoicedQuantity;
    }

    /**
     * @param mixed $InvoicedQuantity
     *
     * @return self
     */
    public function setInvoicedQuantity($InvoicedQuantity)
    {
        $this->InvoicedQuantity = $InvoicedQuantity;

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
    public function getQuantityInPurchaseUnits()
    {
        return $this->QuantityInPurchaseUnits;
    }

    /**
     * @param mixed $QuantityInPurchaseUnits
     *
     * @return self
     */
    public function setQuantityInPurchaseUnits($QuantityInPurchaseUnits)
    {
        $this->QuantityInPurchaseUnits = $QuantityInPurchaseUnits;

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
    public function getReceivedQuantity()
    {
        return $this->ReceivedQuantity;
    }

    /**
     * @param mixed $ReceivedQuantity
     *
     * @return self
     */
    public function setReceivedQuantity($ReceivedQuantity)
    {
        $this->ReceivedQuantity = $ReceivedQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrder()
    {
        return $this->SalesOrder;
    }

    /**
     * @param mixed $SalesOrder
     *
     * @return self
     */
    public function setSalesOrder($SalesOrder)
    {
        $this->SalesOrder = $SalesOrder;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderLine()
    {
        return $this->SalesOrderLine;
    }

    /**
     * @param mixed $SalesOrderLine
     *
     * @return self
     */
    public function setSalesOrderLine($SalesOrderLine)
    {
        $this->SalesOrderLine = $SalesOrderLine;

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
    public function getVATDescription()
    {
        return $this->VATDescription;
    }

    /**
     * @param mixed $VATDescription
     *
     * @return self
     */
    public function setVATDescription($VATDescription)
    {
        $this->VATDescription = $VATDescription;

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
