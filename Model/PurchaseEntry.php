<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PurchaseEntry extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseEntryPurchaseEntries
 *
 * @property string $EntryID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property int $BatchNumber Batch number
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to document
 * @property int $DocumentNumber Document number
 * @property string $DocumentSubject Document subject
 * @property string $DueDate Date when payment should be done
 * @property string $EntryDate Entry date
 * @property int $EntryNumber Entry number
 * @property string $ExternalLinkDescription Description of ExternalLink
 * @property string $ExternalLinkReference External link
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid to the suppliers G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property int $InvoiceNumber Invoice number
 * @property string $Journal Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $OrderNumber Order number
 * @property string $PaymentCondition Payment condition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $ProcessNumber
 * @property array $PurchaseEntryLines Collection of lines
 * @property float $Rate Currency exchange rate
 * @property int $ReportingPeriod Reporting period
 * @property int $ReportingYear Reporting year
 * @property bool $Reversal Indicates that amounts are reversed
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property string $Supplier Reference to supplier (account)
 * @property string $SupplierName Name of supplier
 * @property int $Type Type: 30 = Purchase entry, 31 = Purchase credit note
 * @property string $TypeDescription Description of Type
 * @property float $VATAmountDC Vat Amount in the default currency of the company
 * @property float $VATAmountFC Vat Amount in the currency of the transaction
 * @property string $YourRef Your reference
 */
class PurchaseEntry extends Model 
{
        protected $primaryKey = 'EntryID';
        protected $purchaseEntryLines = [];
        protected $EntryID;
        protected $AmountDC;
        protected $AmountFC;
        protected $BatchNumber;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
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
        protected $GAccountAmountFC;
        protected $InvoiceNumber;
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
        protected $PurchaseEntryLines;
        protected $Rate;
        protected $ReportingPeriod;
        protected $ReportingYear;
        protected $Reversal;
        protected $Status;
        protected $StatusDescription;
        protected $Supplier;
        protected $SupplierName;
        protected $Type;
        protected $TypeDescription;
        protected $VATAmountDC;
        protected $VATAmountFC;
        protected $YourRef;
        protected $url = 'purchaseentry/PurchaseEntries';
    

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
    public function getPurchaseEntryLines()
    {
        return $this->purchaseEntryLines;
    }

    /**
     * @param mixed $purchaseEntryLines
     *
     * @return self
     */
    public function setPurchaseEntryLines($purchaseEntryLines)
    {
        $this->purchaseEntryLines = $purchaseEntryLines;

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
    public function getGAccountAmountFC()
    {
        return $this->GAccountAmountFC;
    }

    /**
     * @param mixed $GAccountAmountFC
     *
     * @return self
     */
    public function setGAccountAmountFC($GAccountAmountFC)
    {
        $this->GAccountAmountFC = $GAccountAmountFC;

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
    public function getPurchaseEntryLines()
    {
        return $this->PurchaseEntryLines;
    }

    /**
     * @param mixed $PurchaseEntryLines
     *
     * @return self
     */
    public function setPurchaseEntryLines($PurchaseEntryLines)
    {
        $this->PurchaseEntryLines = $PurchaseEntryLines;

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
