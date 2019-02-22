<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Transaction extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionTransactions
 *
 * @property string $EntryID Primary key
 * @property float $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Date Date
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Document linked to the sales or purchase transaction.
 * @property int $DocumentNumber Number of the document.
 * @property string $DocumentSubject Subject of the document.
 * @property int $EntryNumber Entry number
 * @property string $ExternalLinkDescription Description of the external link.
 * @property string $ExternalLinkReference External link in a sales or purchase transaction.
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property bool $IsExtraDuty 0 =  Financial entry without extra duty, 1 = Financial entry with extra duty
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property float $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property string $PaymentConditionCode Code of PaymentCondition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property TransactionLines $TransactionLines Collection of lines
 * @property int $Type The transaction type.10 = Opening balance142 = Issue to parent20 = Sales entry145 = Shop order time entry21 = Sales credit note146 = Shop order time entry reversal30 = Purchase entry147 = Shop order by-product receipt31 = Purchase credit note148 = Shop order by-product reversal40 = Cash flow150 = Requirement issue50 = VAT return151 = Requirement reversal70 = Asset - Depreciation152 = Returned from parent71 = Asset - Investment155 = Subcontract Issue72 = Asset - Revaluation156 = Subcontract reversal73 = Asset - Transfer158 = Shop order completed74 = Asset - Split162 = Finish assembly75 = Asset - Discontinue170 = Payroll76 = Asset - Sales180 = Stock revaluation80 = Revaluation181 = Financial revaluation82 = Exchange rate difference195 = Stock count83 = Payment difference290 = Correction entry84 = Deferred revenue310 = Period closing85 = Tracking number:Revaluation320 = Year end reflection86 = Deferred cost321 = Year end costing87 = VAT on prepayment322 = Year end profits to gross profit90 = Other323 = Year end costs to gross profit120 = Delivery324 = Year end tax121 = Sales return325 = Year end gross profit to net p/l130 = Receipt326 = Year end net p/l to balance sheet131 = Purchase return327 = Year end closing balance140 = Shop order stock receipt328 = Year start opening balance141 = Shop order stock reversal3000 = Budget
 * @property string $TypeDescription The description of the transaction type
 */
class Transaction extends Model 
{
        protected $primaryKey = 'EntryID';
        protected $EntryID;
        protected $ClosingBalanceFC;
        protected $Created;
        protected $Date;
        protected $Description;
        protected $Division;
        protected $Document;
        protected $DocumentNumber;
        protected $DocumentSubject;
        protected $EntryNumber;
        protected $ExternalLinkDescription;
        protected $ExternalLinkReference;
        protected $FinancialPeriod;
        protected $FinancialYear;
        protected $IsExtraDuty;
        protected $JournalCode;
        protected $JournalDescription;
        protected $Modified;
        protected $OpeningBalanceFC;
        protected $PaymentConditionCode;
        protected $PaymentConditionDescription;
        protected $PaymentReference;
        protected $Status;
        protected $StatusDescription;
        protected $TransactionLines;
        protected $Type;
        protected $TypeDescription;
        protected $url = 'financialtransaction/Transactions';

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
    public function getClosingBalanceFC()
    {
        return $this->ClosingBalanceFC;
    }

    /**
     * @param mixed $ClosingBalanceFC
     *
     * @return self
     */
    public function setClosingBalanceFC($ClosingBalanceFC)
    {
        $this->ClosingBalanceFC = $ClosingBalanceFC;

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
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     *
     * @return self
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

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
    public function getJournalCode()
    {
        return $this->JournalCode;
    }

    /**
     * @param mixed $JournalCode
     *
     * @return self
     */
    public function setJournalCode($JournalCode)
    {
        $this->JournalCode = $JournalCode;

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
    public function getOpeningBalanceFC()
    {
        return $this->OpeningBalanceFC;
    }

    /**
     * @param mixed $OpeningBalanceFC
     *
     * @return self
     */
    public function setOpeningBalanceFC($OpeningBalanceFC)
    {
        $this->OpeningBalanceFC = $OpeningBalanceFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentConditionCode()
    {
        return $this->PaymentConditionCode;
    }

    /**
     * @param mixed $PaymentConditionCode
     *
     * @return self
     */
    public function setPaymentConditionCode($PaymentConditionCode)
    {
        $this->PaymentConditionCode = $PaymentConditionCode;

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
    public function getTransactionLines()
    {
        return $this->TransactionLines;
    }

    /**
     * @param mixed $TransactionLines
     *
     * @return self
     */
    public function setTransactionLines($TransactionLines)
    {
        $this->TransactionLines = $TransactionLines;

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
