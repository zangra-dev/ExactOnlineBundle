<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SalesEntry extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesentrySalesEntries
 *
 * @property string $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property float $AmountDC Amount in the default currency of the company. For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property float $AmountFC Amount in the currency of the transaction. For the header this is the sum of all lines, including VAT
 * @property int $BatchNumber The number of the batch of entries. Normally a batch consists of multiple entries. Batchnumbers are filled for invoices created by: - Fixed entries - Prolongation (only available with module hosting)
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency for the invoice. By default this is the currency of the administration
 * @property string $Customer Reference to customer (account)
 * @property string $CustomerName Name of customer
 * @property string $Description Description. Can be different for header and lines
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the invoice
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property string $EntryDate The date when the invoice is entered
 * @property int $EntryNumber Entry number
 * @property string $ExternalLinkDescription Description of ExternalLink
 * @property string $ExternalLinkReference Reference of ExternalLink
 * @property int $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property bool $IsExtraDuty Indicates whether the invoice has extra duty
 * @property string $Journal The journal code. Every invoice should be linked to a sales journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $OrderNumber Number to indentify the invoice. Order numbers are not unique. Default the number is based on a setting for the first free number
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $ProcessNumber
 * @property float $Rate Foreign currency rate
 * @property int $ReportingPeriod The period of the transaction lines. The period should exist in the period date table
 * @property int $ReportingYear The financial year to which the entry belongs. The financial year should exist in the period date table
 * @property bool $Reversal Indicates if amounts are reversed
 * @property array $SalesEntryLines Collection of lines
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property int $Type Type: 20 = Sales entry, 21 = Sales credit note
 * @property string $TypeDescription Description of Type
 * @property float $VATAmountDC Vat amount in the default currency of the company
 * @property float $VATAmountFC Vat amount in the currency of the transaction
 * @property string $YourRef The invoice number of the customer
 */
class SalesEntry extends Model 
{
        protected $primaryKey = 'EntryID';
        protected $saleEntryLines;
        protected $EntryID;
        protected $AmountDC;
        protected $AmountFC;
        protected $BatchNumber;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $Customer;
        protected $CustomerName;
        protected $Description;
        protected $Division;
        protected $Document;
        protected $DocumentNumber;
        protected $DocumentSubject;
        protected $DueDate;
        protected $EntryDate;
        protected $EntryNumber;
        protected $ExternalLinkDescription;
        protected $ExternalLinkReference;
        protected $InvoiceNumber;
        protected $IsExtraDuty;
        protected $Journal;
        protected $JournalDescription;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $OrderNumber;
        protected $PaymentCondition;
        protected $PaymentConditionDescription;
        protected $PaymentReference;
        protected $ProcessNumber;
        protected $Rate;
        protected $ReportingPeriod;
        protected $ReportingYear;
        protected $Reversal;
        protected $SalesEntryLines;
        protected $Status;
        protected $StatusDescription;
        protected $Type;
        protected $TypeDescription;
        protected $VATAmountDC;
        protected $VATAmountFC;
        protected $YourRef;
        protected $url = 'salesentry/SalesEntries'
    

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
    public function getSaleEntryLines()
    {
        return $this->saleEntryLines;
    }

    /**
     * @param mixed $saleEntryLines
     *
     * @return self
     */
    public function setSaleEntryLines($saleEntryLines)
    {
        $this->saleEntryLines = $saleEntryLines;

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
    public function getBatchNumber()
    {
        return $this->BatchNumber;
    }

    /**
     * @param mixed $BatchNumber
     *
     * @return self
     */
    public function setBatchNumber($BatchNumber)
    {
        $this->BatchNumber = $BatchNumber;

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
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param mixed $Customer
     *
     * @return self
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }

    /**
     * @param mixed $CustomerName
     *
     * @return self
     */
    public function setCustomerName($CustomerName)
    {
        $this->CustomerName = $CustomerName;

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
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param mixed $DocumentNumber
     *
     * @return self
     */
    public function setDocumentNumber($DocumentNumber)
    {
        $this->DocumentNumber = $DocumentNumber;

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
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param mixed $EntryDate
     *
     * @return self
     */
    public function setEntryDate($EntryDate)
    {
        $this->EntryDate = $EntryDate;

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
    public function getExternalLinkDescription()
    {
        return $this->ExternalLinkDescription;
    }

    /**
     * @param mixed $ExternalLinkDescription
     *
     * @return self
     */
    public function setExternalLinkDescription($ExternalLinkDescription)
    {
        $this->ExternalLinkDescription = $ExternalLinkDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalLinkReference()
    {
        return $this->ExternalLinkReference;
    }

    /**
     * @param mixed $ExternalLinkReference
     *
     * @return self
     */
    public function setExternalLinkReference($ExternalLinkReference)
    {
        $this->ExternalLinkReference = $ExternalLinkReference;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param mixed $InvoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsExtraDuty()
    {
        return $this->IsExtraDuty;
    }

    /**
     * @param mixed $IsExtraDuty
     *
     * @return self
     */
    public function setIsExtraDuty($IsExtraDuty)
    {
        $this->IsExtraDuty = $IsExtraDuty;

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
    public function getJournalDescription()
    {
        return $this->JournalDescription;
    }

    /**
     * @param mixed $JournalDescription
     *
     * @return self
     */
    public function setJournalDescription($JournalDescription)
    {
        $this->JournalDescription = $JournalDescription;

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
    public function getPaymentConditionDescription()
    {
        return $this->PaymentConditionDescription;
    }

    /**
     * @param mixed $PaymentConditionDescription
     *
     * @return self
     */
    public function setPaymentConditionDescription($PaymentConditionDescription)
    {
        $this->PaymentConditionDescription = $PaymentConditionDescription;

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
     * @return mixed
     */
    public function getProcessNumber()
    {
        return $this->ProcessNumber;
    }

    /**
     * @param mixed $ProcessNumber
     *
     * @return self
     */
    public function setProcessNumber($ProcessNumber)
    {
        $this->ProcessNumber = $ProcessNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->Rate;
    }

    /**
     * @param mixed $Rate
     *
     * @return self
     */
    public function setRate($Rate)
    {
        $this->Rate = $Rate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReportingPeriod()
    {
        return $this->ReportingPeriod;
    }

    /**
     * @param mixed $ReportingPeriod
     *
     * @return self
     */
    public function setReportingPeriod($ReportingPeriod)
    {
        $this->ReportingPeriod = $ReportingPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReportingYear()
    {
        return $this->ReportingYear;
    }

    /**
     * @param mixed $ReportingYear
     *
     * @return self
     */
    public function setReportingYear($ReportingYear)
    {
        $this->ReportingYear = $ReportingYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReversal()
    {
        return $this->Reversal;
    }

    /**
     * @param mixed $Reversal
     *
     * @return self
     */
    public function setReversal($Reversal)
    {
        $this->Reversal = $Reversal;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesEntryLines()
    {
        return $this->SalesEntryLines;
    }

    /**
     * @param mixed $SalesEntryLines
     *
     * @return self
     */
    public function setSalesEntryLines($SalesEntryLines)
    {
        $this->SalesEntryLines = $SalesEntryLines;

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
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }

    /**
     * @param mixed $StatusDescription
     *
     * @return self
     */
    public function setStatusDescription($StatusDescription)
    {
        $this->StatusDescription = $StatusDescription;

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
    public function getTypeDescription()
    {
        return $this->TypeDescription;
    }

    /**
     * @param mixed $TypeDescription
     *
     * @return self
     */
    public function setTypeDescription($TypeDescription)
    {
        $this->TypeDescription = $TypeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmountDC()
    {
        return $this->VATAmountDC;
    }

    /**
     * @param mixed $VATAmountDC
     *
     * @return self
     */
    public function setVATAmountDC($VATAmountDC)
    {
        $this->VATAmountDC = $VATAmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmountFC()
    {
        return $this->VATAmountFC;
    }

    /**
     * @param mixed $VATAmountFC
     *
     * @return self
     */
    public function setVATAmountFC($VATAmountFC)
    {
        $this->VATAmountFC = $VATAmountFC;

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
