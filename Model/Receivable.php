<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Receivable extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowReceivables
 * 
 * @property string $ID  Identifier of the receivable.
 * @property string $Account The customer from which the receivable will come.
 * @property string $AccountBankAccountID The bank account of the customer, from which the receivable will come.
 * @property string $AccountBankAccountNumber The bank account number of the customer, from which the receivable will come.
 * @property string $AccountCode The code of the customer from which the receivable will come.
 * @property string $AccountContact Contact person copied from the purchase invoice linked to the related purchase entry.
 * @property string $AccountContactName Name of the contact person of the customer.
 * @property string $AccountName Name of the customer.
 * @property float $AmountDC The amount in default currency (division currency). Receivables are matched on this amount.
 * @property float $AmountDiscountDC The amount of the discount in the default currency.
 * @property float $AmountDiscountFC The amount of the discount. This is in the amount of the selected currency.
 * @property float $AmountFC The amount of the receivable. This is in the amount of the selected currency.
 * @property string $BankAccountID Own bank account to which the receivable will be done.
 * @property string $BankAccountNumber Own bank account number to which the receivable will be done.
 * @property string $CashflowTransactionBatchCode When processing receivables, all receivable with the same processing data are put in a batch. This field contains the code of that batch.
 * @property string $Created Creation date.
 * @property string $Creator User ID of the creator.
 * @property string $CreatorFullName Name of the creator.
 * @property string $Currency The currency of the receivable. This currency can only deviate from the division currency if the module Currency is in the license.
 * @property string $Description Description.
 * @property string $DirectDebitMandate Direct Debit Mandate used to collect the receivable.
 * @property string $DirectDebitMandateDescription Description of the mandate.
 * @property int $DirectDebitMandatePaymentType Payment type of the mandate.
 * @property string $DirectDebitMandateReference Unique mandate reference.
 * @property int $DirectDebitMandateType Type of the mandate.
 * @property string $DiscountDueDate Date before which the payment by the customer must be done to be eligible for discount.
 * @property int $Division Division code.
 * @property string $Document Document that is created when processing collections. The bank export file is attached to the document.
 * @property int $DocumentNumber Number of the document.
 * @property string $DocumentSubject Subject of the document.
 * @property string $DueDate Date before which the payment by the customer must be done.
 * @property string $EndDate Date since when the receivable is no longer an outstanding item. This is the highest invoice date of all matched receivables.
 * @property int $EndPeriod Period since when the receivable is no longer an outstanding item. This is the highest period of all matched receivables.
 * @property string $EndToEndID The value of the tag 'EndToEndID' when generating a SEPA file.
 * @property int $EndYear Year (of period) since when the receivable is no longer an outstanding item. This is the highest year of all matched receivables. Used in combination with EndPeriod.
 * @property string $EntryDate Processing date of the receivable.
 * @property string $EntryID The unique identifier for a set of receivables. A receivable can be split so that one part is received on a different date. In that case the two records get a different EntryID.
 * @property int $EntryNumber Entry number of the linked transaction.
 * @property string $GLAccount G/L account of the payment. Must be of type 20 (Accounts receivable).
 * @property string $GLAccountCode Code of the G/L account.
 * @property string $GLAccountDescription Description of the G/L account.
 * @property string $InvoiceDate Invoice date of the linked transaction.
 * @property int $InvoiceNumber Invoice number of the linked transaction.
 * @property int $IsBatchBooking Boolean indicating whether the receivable is part of a batch booking.
 * @property bool $IsFullyPaid Boolean indicating whether the receivable was fully paid by the customer.
 * @property string $Journal Journal of the linked transaction.
 * @property string $JournalDescription Description of the journal.
 * @property string $LastPaymentDate Last payment date.
 * @property string $Modified Last modified date.
 * @property string $Modifier User ID of modifier.
 * @property string $ModifierFullName Name of modifier.
 * @property string $PaymentCondition Payment condition of the linked transaction.
 * @property string $PaymentConditionDescription Description of the payment condition.
 * @property int $PaymentDays Number of days between invoice date and due date.
 * @property int $PaymentDaysDiscount Number of days between invoice date and due date of the discount.
 * @property float $PaymentDiscountPercentage Payment discount percentage.
 * @property string $PaymentInformationID PaymentInformationID tag from the SEPA xml file.
 * @property string $PaymentMethod Method of payment.
 * @property string $PaymentReference Payment reference for the receivable that may be included In the bank export file
 * @property float $RateFC Exchange rate from receivable currency to division currency. AmountFC * RateFC = AmountDC.
 * @property int $ReceivableBatchNumber Number assigned during the processing of receivables.
 * @property string $ReceivableSelected Date and time since when the receivable is selected to be collected.
 * @property string $ReceivableSelector User who selected the receivable to be collected.
 * @property string $ReceivableSelectorFullName Name of the receivable selector.
 * @property int $Source The source of the receivable.
 * @property int $Status The status of the receivable.
 * @property float $TransactionAmountDC Total amount of the linked transaction in default currency (division currency).
 * @property float $TransactionAmountFC Total amount of the linked transaction in the selected currency.
 * @property string $TransactionDueDate Due date of the linked transaction.
 * @property string $TransactionEntryID Linked transaction. Use this as reference to SalesEntries.
 * @property string $TransactionID Linked transaction line. Use this as reference to BankEntryLines and CashEntryLines.
 * @property bool $TransactionIsReversal Indicates if the linked transaction is a reversal entry.
 * @property int $TransactionReportingPeriod Period of the linked transaction.
 * @property int $TransactionReportingYear Year of the linked transaction.
 * @property int $TransactionStatus Status of the linked transaction.
 * @property int $TransactionType Type of the linked transaction.
 * @property string $YourRef Invoice number. In case the receivable belongs to a bank entry line and is matched with one invoice, YourRef is filled with the YourRef of this invoice.
 */
class Receivable extends Model 
{
        protected $primaryKey = 'ID';
        protected $Account;
        protected $AccountBankAccountID;
        protected $AccountBankAccountNumber;
        protected $AccountCode;
        protected $AccountContact;
        protected $AccountContactName;
        protected $AccountName;
        protected $AmountDC;
        protected $AmountDiscountDC;
        protected $AmountDiscountFC;
        protected $AmountFC;
        protected $BankAccountID;
        protected $BankAccountNumber;
        protected $CashflowTransactionBatchCode;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $Description;
        protected $DirectDebitMandate;
        protected $DirectDebitMandateDescription;
        protected $DirectDebitMandatePaymentType;
        protected $DirectDebitMandateReference;
        protected $DirectDebitMandateType;
        protected $DiscountDueDate;
        protected $Division;
        protected $Document;
        protected $DocumentNumber;
        protected $DocumentSubject;
        protected $DueDate;
        protected $EndDate;
        protected $EndPeriod;
        protected $EndToEndID;
        protected $EndYear;
        protected $EntryDate;
        protected $EntryID;
        protected $EntryNumber;
        protected $GLAccount;
        protected $GLAccountCode;
        protected $GLAccountDescription;
        protected $InvoiceDate;
        protected $InvoiceNumber;
        protected $IsBatchBooking;
        protected $IsFullyPaid;
        protected $Journal;
        protected $JournalDescription;
        protected $LastPaymentDate;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $PaymentCondition;
        protected $PaymentConditionDescription;
        protected $PaymentDays;
        protected $PaymentDaysDiscount;
        protected $PaymentDiscountPercentage;
        protected $PaymentInformationID;
        protected $PaymentMethod;
        protected $PaymentReference;
        protected $RateFC;
        protected $ReceivableBatchNumber;
        protected $ReceivableSelected;
        protected $ReceivableSelector;
        protected $ReceivableSelectorFullName;
        protected $Source;
        protected $Status;
        protected $TransactionAmountDC;
        protected $TransactionAmountFC;
        protected $TransactionDueDate;
        protected $TransactionEntryID;
        protected $TransactionID;
        protected $TransactionIsReversal;
        protected $TransactionReportingPeriod;
        protected $TransactionReportingYear;
        protected $TransactionStatus;
        protected $TransactionType;
        protected $YourRef;
        protected $url = 'cashflow/Receivables';

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
    public function getAccountBankAccountID()
    {
        return $this->AccountBankAccountID;
    }

    /**
     * @param mixed $AccountBankAccountID
     *
     * @return self
     */
    public function setAccountBankAccountID($AccountBankAccountID)
    {
        $this->AccountBankAccountID = $AccountBankAccountID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountBankAccountNumber()
    {
        return $this->AccountBankAccountNumber;
    }

    /**
     * @param mixed $AccountBankAccountNumber
     *
     * @return self
     */
    public function setAccountBankAccountNumber($AccountBankAccountNumber)
    {
        $this->AccountBankAccountNumber = $AccountBankAccountNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }

    /**
     * @param mixed $AccountCode
     *
     * @return self
     */
    public function setAccountCode($AccountCode)
    {
        $this->AccountCode = $AccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountContact()
    {
        return $this->AccountContact;
    }

    /**
     * @param mixed $AccountContact
     *
     * @return self
     */
    public function setAccountContact($AccountContact)
    {
        $this->AccountContact = $AccountContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountContactName()
    {
        return $this->AccountContactName;
    }

    /**
     * @param mixed $AccountContactName
     *
     * @return self
     */
    public function setAccountContactName($AccountContactName)
    {
        $this->AccountContactName = $AccountContactName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param mixed $AccountName
     *
     * @return self
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;

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
    public function getAmountDiscountDC()
    {
        return $this->AmountDiscountDC;
    }

    /**
     * @param mixed $AmountDiscountDC
     *
     * @return self
     */
    public function setAmountDiscountDC($AmountDiscountDC)
    {
        $this->AmountDiscountDC = $AmountDiscountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountDiscountFC()
    {
        return $this->AmountDiscountFC;
    }

    /**
     * @param mixed $AmountDiscountFC
     *
     * @return self
     */
    public function setAmountDiscountFC($AmountDiscountFC)
    {
        $this->AmountDiscountFC = $AmountDiscountFC;

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
    public function getBankAccountID()
    {
        return $this->BankAccountID;
    }

    /**
     * @param mixed $BankAccountID
     *
     * @return self
     */
    public function setBankAccountID($BankAccountID)
    {
        $this->BankAccountID = $BankAccountID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountNumber()
    {
        return $this->BankAccountNumber;
    }

    /**
     * @param mixed $BankAccountNumber
     *
     * @return self
     */
    public function setBankAccountNumber($BankAccountNumber)
    {
        $this->BankAccountNumber = $BankAccountNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCashflowTransactionBatchCode()
    {
        return $this->CashflowTransactionBatchCode;
    }

    /**
     * @param mixed $CashflowTransactionBatchCode
     *
     * @return self
     */
    public function setCashflowTransactionBatchCode($CashflowTransactionBatchCode)
    {
        $this->CashflowTransactionBatchCode = $CashflowTransactionBatchCode;

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
    public function getDirectDebitMandate()
    {
        return $this->DirectDebitMandate;
    }

    /**
     * @param mixed $DirectDebitMandate
     *
     * @return self
     */
    public function setDirectDebitMandate($DirectDebitMandate)
    {
        $this->DirectDebitMandate = $DirectDebitMandate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectDebitMandateDescription()
    {
        return $this->DirectDebitMandateDescription;
    }

    /**
     * @param mixed $DirectDebitMandateDescription
     *
     * @return self
     */
    public function setDirectDebitMandateDescription($DirectDebitMandateDescription)
    {
        $this->DirectDebitMandateDescription = $DirectDebitMandateDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectDebitMandatePaymentType()
    {
        return $this->DirectDebitMandatePaymentType;
    }

    /**
     * @param mixed $DirectDebitMandatePaymentType
     *
     * @return self
     */
    public function setDirectDebitMandatePaymentType($DirectDebitMandatePaymentType)
    {
        $this->DirectDebitMandatePaymentType = $DirectDebitMandatePaymentType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectDebitMandateReference()
    {
        return $this->DirectDebitMandateReference;
    }

    /**
     * @param mixed $DirectDebitMandateReference
     *
     * @return self
     */
    public function setDirectDebitMandateReference($DirectDebitMandateReference)
    {
        $this->DirectDebitMandateReference = $DirectDebitMandateReference;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectDebitMandateType()
    {
        return $this->DirectDebitMandateType;
    }

    /**
     * @param mixed $DirectDebitMandateType
     *
     * @return self
     */
    public function setDirectDebitMandateType($DirectDebitMandateType)
    {
        $this->DirectDebitMandateType = $DirectDebitMandateType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountDueDate()
    {
        return $this->DiscountDueDate;
    }

    /**
     * @param mixed $DiscountDueDate
     *
     * @return self
     */
    public function setDiscountDueDate($DiscountDueDate)
    {
        $this->DiscountDueDate = $DiscountDueDate;

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
    public function getEndPeriod()
    {
        return $this->EndPeriod;
    }

    /**
     * @param mixed $EndPeriod
     *
     * @return self
     */
    public function setEndPeriod($EndPeriod)
    {
        $this->EndPeriod = $EndPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndToEndID()
    {
        return $this->EndToEndID;
    }

    /**
     * @param mixed $EndToEndID
     *
     * @return self
     */
    public function setEndToEndID($EndToEndID)
    {
        $this->EndToEndID = $EndToEndID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndYear()
    {
        return $this->EndYear;
    }

    /**
     * @param mixed $EndYear
     *
     * @return self
     */
    public function setEndYear($EndYear)
    {
        $this->EndYear = $EndYear;

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
    public function getGLAccount()
    {
        return $this->GLAccount;
    }

    /**
     * @param mixed $GLAccount
     *
     * @return self
     */
    public function setGLAccount($GLAccount)
    {
        $this->GLAccount = $GLAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAccountCode()
    {
        return $this->GLAccountCode;
    }

    /**
     * @param mixed $GLAccountCode
     *
     * @return self
     */
    public function setGLAccountCode($GLAccountCode)
    {
        $this->GLAccountCode = $GLAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAccountDescription()
    {
        return $this->GLAccountDescription;
    }

    /**
     * @param mixed $GLAccountDescription
     *
     * @return self
     */
    public function setGLAccountDescription($GLAccountDescription)
    {
        $this->GLAccountDescription = $GLAccountDescription;

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
    public function getIsBatchBooking()
    {
        return $this->IsBatchBooking;
    }

    /**
     * @param mixed $IsBatchBooking
     *
     * @return self
     */
    public function setIsBatchBooking($IsBatchBooking)
    {
        $this->IsBatchBooking = $IsBatchBooking;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsFullyPaid()
    {
        return $this->IsFullyPaid;
    }

    /**
     * @param mixed $IsFullyPaid
     *
     * @return self
     */
    public function setIsFullyPaid($IsFullyPaid)
    {
        $this->IsFullyPaid = $IsFullyPaid;

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
    public function getLastPaymentDate()
    {
        return $this->LastPaymentDate;
    }

    /**
     * @param mixed $LastPaymentDate
     *
     * @return self
     */
    public function setLastPaymentDate($LastPaymentDate)
    {
        $this->LastPaymentDate = $LastPaymentDate;

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
    public function getPaymentDays()
    {
        return $this->PaymentDays;
    }

    /**
     * @param mixed $PaymentDays
     *
     * @return self
     */
    public function setPaymentDays($PaymentDays)
    {
        $this->PaymentDays = $PaymentDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentDaysDiscount()
    {
        return $this->PaymentDaysDiscount;
    }

    /**
     * @param mixed $PaymentDaysDiscount
     *
     * @return self
     */
    public function setPaymentDaysDiscount($PaymentDaysDiscount)
    {
        $this->PaymentDaysDiscount = $PaymentDaysDiscount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentDiscountPercentage()
    {
        return $this->PaymentDiscountPercentage;
    }

    /**
     * @param mixed $PaymentDiscountPercentage
     *
     * @return self
     */
    public function setPaymentDiscountPercentage($PaymentDiscountPercentage)
    {
        $this->PaymentDiscountPercentage = $PaymentDiscountPercentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentInformationID()
    {
        return $this->PaymentInformationID;
    }

    /**
     * @param mixed $PaymentInformationID
     *
     * @return self
     */
    public function setPaymentInformationID($PaymentInformationID)
    {
        $this->PaymentInformationID = $PaymentInformationID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param mixed $PaymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;

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
    public function getRateFC()
    {
        return $this->RateFC;
    }

    /**
     * @param mixed $RateFC
     *
     * @return self
     */
    public function setRateFC($RateFC)
    {
        $this->RateFC = $RateFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceivableBatchNumber()
    {
        return $this->ReceivableBatchNumber;
    }

    /**
     * @param mixed $ReceivableBatchNumber
     *
     * @return self
     */
    public function setReceivableBatchNumber($ReceivableBatchNumber)
    {
        $this->ReceivableBatchNumber = $ReceivableBatchNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceivableSelected()
    {
        return $this->ReceivableSelected;
    }

    /**
     * @param mixed $ReceivableSelected
     *
     * @return self
     */
    public function setReceivableSelected($ReceivableSelected)
    {
        $this->ReceivableSelected = $ReceivableSelected;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceivableSelector()
    {
        return $this->ReceivableSelector;
    }

    /**
     * @param mixed $ReceivableSelector
     *
     * @return self
     */
    public function setReceivableSelector($ReceivableSelector)
    {
        $this->ReceivableSelector = $ReceivableSelector;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceivableSelectorFullName()
    {
        return $this->ReceivableSelectorFullName;
    }

    /**
     * @param mixed $ReceivableSelectorFullName
     *
     * @return self
     */
    public function setReceivableSelectorFullName($ReceivableSelectorFullName)
    {
        $this->ReceivableSelectorFullName = $ReceivableSelectorFullName;

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
    public function getTransactionAmountDC()
    {
        return $this->TransactionAmountDC;
    }

    /**
     * @param mixed $TransactionAmountDC
     *
     * @return self
     */
    public function setTransactionAmountDC($TransactionAmountDC)
    {
        $this->TransactionAmountDC = $TransactionAmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionAmountFC()
    {
        return $this->TransactionAmountFC;
    }

    /**
     * @param mixed $TransactionAmountFC
     *
     * @return self
     */
    public function setTransactionAmountFC($TransactionAmountFC)
    {
        $this->TransactionAmountFC = $TransactionAmountFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionDueDate()
    {
        return $this->TransactionDueDate;
    }

    /**
     * @param mixed $TransactionDueDate
     *
     * @return self
     */
    public function setTransactionDueDate($TransactionDueDate)
    {
        $this->TransactionDueDate = $TransactionDueDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionEntryID()
    {
        return $this->TransactionEntryID;
    }

    /**
     * @param mixed $TransactionEntryID
     *
     * @return self
     */
    public function setTransactionEntryID($TransactionEntryID)
    {
        $this->TransactionEntryID = $TransactionEntryID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    /**
     * @param mixed $TransactionID
     *
     * @return self
     */
    public function setTransactionID($TransactionID)
    {
        $this->TransactionID = $TransactionID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionIsReversal()
    {
        return $this->TransactionIsReversal;
    }

    /**
     * @param mixed $TransactionIsReversal
     *
     * @return self
     */
    public function setTransactionIsReversal($TransactionIsReversal)
    {
        $this->TransactionIsReversal = $TransactionIsReversal;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionReportingPeriod()
    {
        return $this->TransactionReportingPeriod;
    }

    /**
     * @param mixed $TransactionReportingPeriod
     *
     * @return self
     */
    public function setTransactionReportingPeriod($TransactionReportingPeriod)
    {
        $this->TransactionReportingPeriod = $TransactionReportingPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionReportingYear()
    {
        return $this->TransactionReportingYear;
    }

    /**
     * @param mixed $TransactionReportingYear
     *
     * @return self
     */
    public function setTransactionReportingYear($TransactionReportingYear)
    {
        $this->TransactionReportingYear = $TransactionReportingYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionStatus()
    {
        return $this->TransactionStatus;
    }

    /**
     * @param mixed $TransactionStatus
     *
     * @return self
     */
    public function setTransactionStatus($TransactionStatus)
    {
        $this->TransactionStatus = $TransactionStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }

    /**
     * @param mixed $TransactionType
     *
     * @return self
     */
    public function setTransactionType($TransactionType)
    {
        $this->TransactionType = $TransactionType;

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
