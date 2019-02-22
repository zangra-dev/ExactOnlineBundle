<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SalesInvoice extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesInvoices
 *
 * @property string $InvoiceID Primary key
 * @property float $AmountDC For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property float $AmountDiscount Discount amount in the default currency of the company
 * @property float $AmountDiscountExclVat Discount amount exclude VAT in the default currency of the company
 * @property float $AmountFC For the header this is the sum of all lines, including VAT
 * @property float $AmountFCExclVat For the header this is the sum of all lines, excluding VAT
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency for the invoice. Default this is the currency of the administration
 * @property string $DeliverTo Delivery account for invoice
 * @property string $DeliverToAddress Address of delivery as per invoice delivery account
 * @property string $DeliverToContactPerson Delivery account person for invoice
 * @property string $DeliverToContactPersonFullName Name of delivery account's contact person as per invoice
 * @property string $DeliverToName Name of the delivery account's customer as per invoice
 * @property string $Description Description. Can be different for header and lines
 * @property float $Discount Discount percentage
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the invoice
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property float $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid by the customer to your G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property string $InvoiceDate Official date for the invoice. When the invoice is entered it's equal to the field 'EntryDate'. During the printing process the invoice date can be entered
 * @property int $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property string $InvoiceTo Reference to the Customer who will receive the invoice
 * @property string $InvoiceToContactPerson Reference to the Contact person of the customer who will receive the invoice
 * @property string $InvoiceToContactPersonFullName Name of the contact person of the customer who will receive the invoice
 * @property string $InvoiceToName Name of the customer who will receive the invoice
 * @property bool $IsExtraDuty Indicates whether the invoice has extra duty
 * @property string $Journal The journal code. Every invoice should be linked to a sales journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OrderDate Order date
 * @property string $OrderedBy Customer who ordered the invoice
 * @property string $OrderedByContactPerson Contact person of customer who ordered the invoice
 * @property string $OrderedByContactPersonFullName Name of contact person of customer who ordered the invoice
 * @property string $OrderedByName Name of customer who ordered the invoice
 * @property int $OrderNumber Number to identify the order. By default the number is based on a setting for the first free number, but you can post your own number.
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference Payment reference for sales invoice
 * @property string $Remarks Extra remarks
 * @property SalesInvoiceLines $SalesInvoiceLines Collection of lines
 * @property string $Salesperson Sales representative
 * @property string $SalespersonFullName Name of sales representative
 * @property int $StarterSalesInvoiceStatus Starter Sales invoice status (for starter functionality)
 * @property string $StarterSalesInvoiceStatusDescription Description of StarterSalesInvoiceStatus
 * @property int $Status The status of the entry. 10 = draft. During the creation of an invoice draft records occur in the draft modus if during an invoice a new page with lines is triggered. If the user leaves the invoice in an abnormal way the draft invoices can be recovered. Draft invoices are not included in financial reports, balances etc. 20 = open. Open invoices can be changed. New invoices get the status open by default. 50 = processed. Processed invoices can't be changed anymore. Processing is done via printing. Processed invoices can't be reopened
 * @property string $StatusDescription Description of Status
 * @property string $TaxSchedule Obsolete
 * @property string $TaxScheduleCode Obsolete
 * @property string $TaxScheduleDescription Obsolete
 * @property int $Type Indicates the type of invoice Values: 8020 - Sales invoices, 8021 - Sales credit note
 * @property string $TypeDescription Description of the type
 * @property float $VATAmountDC Total VAT amount in the default currency of the company
 * @property float $VATAmountFC Total VAT amount in the currency of the transaction
 * @property float $WithholdingTaxAmountFC Withholding tax amount applied to sales invoice
 * @property float $WithholdingTaxBaseAmount Withholding tax base amount to calculate withholding amount
 * @property float $WithholdingTaxPercentage Withholding tax percentage applied to sales invoice
 * @property string $YourRef The invoice number of the customer
 */
class SalesInvoice extends Model 
{

        protected $primaryKey = 'InvoiceID';
        protected $InvoiceID;
        protected $AmountDC;
        protected $AmountDiscount;
        protected $AmountDiscountExclVat;
        protected $AmountFC;
        protected $AmountFCExclVat;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $DeliverTo;
        protected $DeliverToAddress;
        protected $DeliverToContactPerson;
        protected $DeliverToContactPersonFullName;
        protected $DeliverToName;
        protected $Description;
        protected $Discount;
        protected $Division;
        protected $Document;
        protected $DocumentNumber;
        protected $DocumentSubject;
        protected $DueDate;
        protected $ExtraDutyAmountFC;
        protected $GAccountAmountFC;
        protected $InvoiceDate;
        protected $InvoiceNumber;
        protected $InvoiceTo;
        protected $InvoiceToContactPerson;
        protected $InvoiceToContactPersonFullName;
        protected $InvoiceToName;
        protected $IsExtraDuty;
        protected $Journal;
        protected $JournalDescription;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $OrderDate;
        protected $OrderedBy;
        protected $OrderedByContactPerson;
        protected $OrderedByContactPersonFullName;
        protected $OrderedByName;
        protected $OrderNumber;
        protected $PaymentCondition;
        protected $PaymentConditionDescription;
        protected $PaymentReference;
        protected $Remarks;
        protected $SalesInvoiceLines;
        protected $Salesperson;
        protected $SalespersonFullName;
        protected $StarterSalesInvoiceStatus;
        protected $StarterSalesInvoiceStatusDescription;
        protected $Status;
        protected $StatusDescription;
        protected $TaxSchedule;
        protected $TaxScheduleCode;
        protected $TaxScheduleDescription;
        protected $Type;
        protected $TypeDescription;
        protected $VATAmountDC;
        protected $VATAmountFC;
        protected $WithholdingTaxAmountFC;
        protected $WithholdingTaxBaseAmount;
        protected $WithholdingTaxPercentage;
        protected $YourRef;
        protected $url = 'salesinvoice/SalesInvoices';

    /**
     * Updates the SalesInvoiceLines collection on a SalesInvoice if it's been detected as a deferred collection.
     * Fetches results and stores them on this object.
     *
     * @return mixed
     */
    public function getSalesInvoiceLines() {
        if(array_key_exists('__deferred', $this->attributes['SalesInvoiceLines'])) {
            $this->attributes['SalesInvoiceLines'] = (new SalesInvoiceLine($this->connection()))->filter("InvoiceID eq guid'{$this->InvoiceID}'");
        }
        return $this->attributes['SalesInvoiceLines'];
    }

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
    public function getAmountDiscount()
    {
        return $this->AmountDiscount;
    }

    /**
     * @param mixed $AmountDiscount
     *
     * @return self
     */
    public function setAmountDiscount($AmountDiscount)
    {
        $this->AmountDiscount = $AmountDiscount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountDiscountExclVat()
    {
        return $this->AmountDiscountExclVat;
    }

    /**
     * @param mixed $AmountDiscountExclVat
     *
     * @return self
     */
    public function setAmountDiscountExclVat($AmountDiscountExclVat)
    {
        $this->AmountDiscountExclVat = $AmountDiscountExclVat;

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
    public function getAmountFCExclVat()
    {
        return $this->AmountFCExclVat;
    }

    /**
     * @param mixed $AmountFCExclVat
     *
     * @return self
     */
    public function setAmountFCExclVat($AmountFCExclVat)
    {
        $this->AmountFCExclVat = $AmountFCExclVat;

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
    public function getDeliverTo()
    {
        return $this->DeliverTo;
    }

    /**
     * @param mixed $DeliverTo
     *
     * @return self
     */
    public function setDeliverTo($DeliverTo)
    {
        $this->DeliverTo = $DeliverTo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliverToAddress()
    {
        return $this->DeliverToAddress;
    }

    /**
     * @param mixed $DeliverToAddress
     *
     * @return self
     */
    public function setDeliverToAddress($DeliverToAddress)
    {
        $this->DeliverToAddress = $DeliverToAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliverToContactPerson()
    {
        return $this->DeliverToContactPerson;
    }

    /**
     * @param mixed $DeliverToContactPerson
     *
     * @return self
     */
    public function setDeliverToContactPerson($DeliverToContactPerson)
    {
        $this->DeliverToContactPerson = $DeliverToContactPerson;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliverToContactPersonFullName()
    {
        return $this->DeliverToContactPersonFullName;
    }

    /**
     * @param mixed $DeliverToContactPersonFullName
     *
     * @return self
     */
    public function setDeliverToContactPersonFullName($DeliverToContactPersonFullName)
    {
        $this->DeliverToContactPersonFullName = $DeliverToContactPersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliverToName()
    {
        return $this->DeliverToName;
    }

    /**
     * @param mixed $DeliverToName
     *
     * @return self
     */
    public function setDeliverToName($DeliverToName)
    {
        $this->DeliverToName = $DeliverToName;

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
    public function getExtraDutyAmountFC()
    {
        return $this->ExtraDutyAmountFC;
    }

    /**
     * @param mixed $ExtraDutyAmountFC
     *
     * @return self
     */
    public function setExtraDutyAmountFC($ExtraDutyAmountFC)
    {
        $this->ExtraDutyAmountFC = $ExtraDutyAmountFC;

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
    public function getInvoiceTo()
    {
        return $this->InvoiceTo;
    }

    /**
     * @param mixed $InvoiceTo
     *
     * @return self
     */
    public function setInvoiceTo($InvoiceTo)
    {
        $this->InvoiceTo = $InvoiceTo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToContactPerson()
    {
        return $this->InvoiceToContactPerson;
    }

    /**
     * @param mixed $InvoiceToContactPerson
     *
     * @return self
     */
    public function setInvoiceToContactPerson($InvoiceToContactPerson)
    {
        $this->InvoiceToContactPerson = $InvoiceToContactPerson;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToContactPersonFullName()
    {
        return $this->InvoiceToContactPersonFullName;
    }

    /**
     * @param mixed $InvoiceToContactPersonFullName
     *
     * @return self
     */
    public function setInvoiceToContactPersonFullName($InvoiceToContactPersonFullName)
    {
        $this->InvoiceToContactPersonFullName = $InvoiceToContactPersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToName()
    {
        return $this->InvoiceToName;
    }

    /**
     * @param mixed $InvoiceToName
     *
     * @return self
     */
    public function setInvoiceToName($InvoiceToName)
    {
        $this->InvoiceToName = $InvoiceToName;

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
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param mixed $OrderDate
     *
     * @return self
     */
    public function setOrderDate($OrderDate)
    {
        $this->OrderDate = $OrderDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedBy()
    {
        return $this->OrderedBy;
    }

    /**
     * @param mixed $OrderedBy
     *
     * @return self
     */
    public function setOrderedBy($OrderedBy)
    {
        $this->OrderedBy = $OrderedBy;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedByContactPerson()
    {
        return $this->OrderedByContactPerson;
    }

    /**
     * @param mixed $OrderedByContactPerson
     *
     * @return self
     */
    public function setOrderedByContactPerson($OrderedByContactPerson)
    {
        $this->OrderedByContactPerson = $OrderedByContactPerson;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedByContactPersonFullName()
    {
        return $this->OrderedByContactPersonFullName;
    }

    /**
     * @param mixed $OrderedByContactPersonFullName
     *
     * @return self
     */
    public function setOrderedByContactPersonFullName($OrderedByContactPersonFullName)
    {
        $this->OrderedByContactPersonFullName = $OrderedByContactPersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedByName()
    {
        return $this->OrderedByName;
    }

    /**
     * @param mixed $OrderedByName
     *
     * @return self
     */
    public function setOrderedByName($OrderedByName)
    {
        $this->OrderedByName = $OrderedByName;

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
     * @param mixed $SalesInvoiceLines
     *
     * @return self
     */
    public function setSalesInvoiceLines($SalesInvoiceLines)
    {
        $this->SalesInvoiceLines = $SalesInvoiceLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesperson()
    {
        return $this->Salesperson;
    }

    /**
     * @param mixed $Salesperson
     *
     * @return self
     */
    public function setSalesperson($Salesperson)
    {
        $this->Salesperson = $Salesperson;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalespersonFullName()
    {
        return $this->SalespersonFullName;
    }

    /**
     * @param mixed $SalespersonFullName
     *
     * @return self
     */
    public function setSalespersonFullName($SalespersonFullName)
    {
        $this->SalespersonFullName = $SalespersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStarterSalesInvoiceStatus()
    {
        return $this->StarterSalesInvoiceStatus;
    }

    /**
     * @param mixed $StarterSalesInvoiceStatus
     *
     * @return self
     */
    public function setStarterSalesInvoiceStatus($StarterSalesInvoiceStatus)
    {
        $this->StarterSalesInvoiceStatus = $StarterSalesInvoiceStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStarterSalesInvoiceStatusDescription()
    {
        return $this->StarterSalesInvoiceStatusDescription;
    }

    /**
     * @param mixed $StarterSalesInvoiceStatusDescription
     *
     * @return self
     */
    public function setStarterSalesInvoiceStatusDescription($StarterSalesInvoiceStatusDescription)
    {
        $this->StarterSalesInvoiceStatusDescription = $StarterSalesInvoiceStatusDescription;

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
    public function getWithholdingTaxAmountFC()
    {
        return $this->WithholdingTaxAmountFC;
    }

    /**
     * @param mixed $WithholdingTaxAmountFC
     *
     * @return self
     */
    public function setWithholdingTaxAmountFC($WithholdingTaxAmountFC)
    {
        $this->WithholdingTaxAmountFC = $WithholdingTaxAmountFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWithholdingTaxBaseAmount()
    {
        return $this->WithholdingTaxBaseAmount;
    }

    /**
     * @param mixed $WithholdingTaxBaseAmount
     *
     * @return self
     */
    public function setWithholdingTaxBaseAmount($WithholdingTaxBaseAmount)
    {
        $this->WithholdingTaxBaseAmount = $WithholdingTaxBaseAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWithholdingTaxPercentage()
    {
        return $this->WithholdingTaxPercentage;
    }

    /**
     * @param mixed $WithholdingTaxPercentage
     *
     * @return self
     */
    public function setWithholdingTaxPercentage($WithholdingTaxPercentage)
    {
        $this->WithholdingTaxPercentage = $WithholdingTaxPercentage;

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
