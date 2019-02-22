<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PurchaseInvoice extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model;
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchasePurchaseInvoices
 *
 * @property string $ID A guid that is the unique identifier of the purchase invoice.
 * @property float $Amount The amount including VAT in the currency of the invoice.
 * @property string $ContactPerson string identifying the contact person of the supplier.
 * @property string $Currency The code of the currency of the invoiced amount.
 * @property string $Description The description of the invoice.
 * @property string $Document string identifying a document that is attached to the invoice.
 * @property string $DueDate The date before which the invoice has to be paid.
 * @property int $EntryNumber The unique number of the purchase invoice. The entry number is based on a setting in the purchase journal and incremented for each new purchase invoice.
 * @property float $ExchangeRate The exchange rate between the invoice currency and the default currency of the division.
 * @property int $FinancialPeriod The financial period in which the invoice is entered.
 * @property int $FinancialYear The financial year in which the invoice is entered.
 * @property string $InvoiceDate The date on which the supplier entered the invoice.
 * @property string $Journal The code of the purchase journal in which the invoice is entered.
 * @property string $Modified The date and time the invoice was last modified.
 * @property string $PaymentCondition The code of the payment condition that is used to calculate the due date and discount.
 * @property string $PaymentReference Unique reference to match payments and invoices.
 * @property PurchaseInvoiceLines $PurchaseInvoiceLines The collection of lines that belong to the purchase invoice.
 * @property string $Remarks The user can enter remarks related to the invoice here.
 * @property int $Source Indicates the origin of the invoice. 1 Manual entry, 3 Purchase invoice, 4 Purchase order, 5 Web service.
 * @property int $Status The status of the invoice. 10 Draft, 20 Open, 50 Processed.
 * @property string $Supplier string that identifies the supplier.
 * @property int $Type Indicates the type of the purchase invoice. 8030 Direct purchase invoice, 8031 Direct purchase invoice (Credit), 8033 Purchase invoice, 8034 Purchase invoice (Credit)
 * @property float $VATAmount The total VAT amount of the purchase invoice.
 * @property string $Warehouse string that identifies the warehouse that will receive the purchased goods. This is mandatory for creating a direct purchase invoice.
 * @property string $YourRef The invoice number provided by the supplier.
 */
class PurchaseInvoice extends Model 
{
        protected $ID;
        protected $Amount;
        protected $ContactPerson;
        protected $Currency;
        protected $Description;
        protected $Document;
        protected $DueDate;
        protected $EntryNumber;
        protected $ExchangeRate;
        protected $FinancialPeriod;
        protected $FinancialYear;
        protected $InvoiceDate;
        protected $Journal;
        protected $Modified;
        protected $PaymentCondition;
        protected $PaymentReference;
        protected $PurchaseInvoiceLines;
        protected $Remarks;
        protected $Source;
        protected $Status;
        protected $Supplier;
        protected $Type;
        protected $VATAmount;
        protected $Warehouse;
        protected $YourRef;
        protected $url = 'purchase/PurchaseInvoices';

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
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * @param mixed $ContactPerson
     *
     * @return self
     */
    public function setContactPerson($ContactPerson)
    {
        $this->ContactPerson = $ContactPerson;

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
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * @param mixed $DueDate
     *
     * @return self
     */
    public function setDueDate($DueDate)
    {
        $this->DueDate = $DueDate;

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
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }

    /**
     * @param mixed $ExchangeRate
     *
     * @return self
     */
    public function setExchangeRate($ExchangeRate)
    {
        $this->ExchangeRate = $ExchangeRate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinancialPeriod()
    {
        return $this->FinancialPeriod;
    }

    /**
     * @param mixed $FinancialPeriod
     *
     * @return self
     */
    public function setFinancialPeriod($FinancialPeriod)
    {
        $this->FinancialPeriod = $FinancialPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinancialYear()
    {
        return $this->FinancialYear;
    }

    /**
     * @param mixed $FinancialYear
     *
     * @return self
     */
    public function setFinancialYear($FinancialYear)
    {
        $this->FinancialYear = $FinancialYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * @param mixed $InvoiceDate
     *
     * @return self
     */
    public function setInvoiceDate($InvoiceDate)
    {
        $this->InvoiceDate = $InvoiceDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJournal()
    {
        return $this->Journal;
    }

    /**
     * @param mixed $Journal
     *
     * @return self
     */
    public function setJournal($Journal)
    {
        $this->Journal = $Journal;

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
    public function getPaymentCondition()
    {
        return $this->PaymentCondition;
    }

    /**
     * @param mixed $PaymentCondition
     *
     * @return self
     */
    public function setPaymentCondition($PaymentCondition)
    {
        $this->PaymentCondition = $PaymentCondition;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentReference()
    {
        return $this->PaymentReference;
    }

    /**
     * @param mixed $PaymentReference
     *
     * @return self
     */
    public function setPaymentReference($PaymentReference)
    {
        $this->PaymentReference = $PaymentReference;

        return $this;
    }

    /**
     * @param mixed $PurchaseInvoiceLines
     *
     * @return self
     */
    public function setPurchaseInvoiceLines($PurchaseInvoiceLines)
    {
        $this->PurchaseInvoiceLines = $PurchaseInvoiceLines;

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
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     *
     * @return self
     */
    public function setType($Type)
    {
        $this->Type = $Type;

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
