<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class TransactionLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionTransactionLines
 *
 * @property string $ID Primary key
 * @property string $Account Reference to account
 * @property string $AccountCode Code of the Account
 * @property string $AccountName Name of the Account
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property float $AmountVATBaseFC Vat base amount in the currency of the transaction
 * @property float $AmountVATFC Vat amount in the currency of the transaction
 * @property string $Asset Reference to asset
 * @property string $AssetCode Code of Asset
 * @property string $AssetDescription Description of Asset
 * @property string $CostCenter Reference to cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency
 * @property string $Date Date
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to document
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate Date that payment should be done
 * @property string $EntryID Reference to header of the entry
 * @property int $EntryNumber Entry number of the header
 * @property float $ExchangeRate Exchange rate
 * @property float $ExtraDutyAmountFC Extra duty amount
 * @property float $ExtraDutyPercentage Extra duty percentage
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $InvoiceNumber Invoice number
 * @property string $Item Reference to item
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $JournalCode The journal code
 * @property string $JournalDescription The journal description
 * @property int $LineNumber Line number
 * @property int $LineType Line type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks
 * @property string $OffsetID OffsetID
 * @property int $OrderNumber Order number
 * @property float $PaymentDiscountAmount Discount amount when paid in time
 * @property string $PaymentReference Payment reference
 * @property string $Project Reference to project
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity
 * @property string $SerialNumber Serial number of item
 * @property int $Status 20 = Open, 50 = Processed
 * @property string $Subscription Reference to subscription
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $TrackingNumber Tracking number of item
 * @property string $TrackingNumberDescription Tracking number description
 * @property int $Type The transaction type.10 = Opening balance142 = Issue to parent20 = Sales entry145 = Shop order time entry21 = Sales credit note146 = Shop order time entry reversal30 = Purchase entry147 = Shop order by-product receipt31 = Purchase credit note148 = Shop order by-product reversal40 = Cash flow150 = Requirement issue50 = VAT return151 = Requirement reversal70 = Asset - Depreciation152 = Returned from parent71 = Asset - Investment155 = Subcontract Issue72 = Asset - Revaluation156 = Subcontract reversal73 = Asset - Transfer158 = Shop order completed74 = Asset - Split162 = Finish assembly75 = Asset - Discontinue170 = Payroll76 = Asset - Sales180 = Stock revaluation80 = Revaluation181 = Financial revaluation82 = Exchange rate difference195 = Stock count83 = Payment difference290 = Correction entry84 = Deferred revenue310 = Period closing85 = Tracking number:Revaluation320 = Year end reflection86 = Deferred cost321 = Year end costing87 = VAT on prepayment322 = Year end profits to gross profit90 = Other323 = Year end costs to gross profit120 = Delivery324 = Year end tax121 = Sales return325 = Year end gross profit to net p/l130 = Receipt326 = Year end net p/l to balance sheet131 = Purchase return327 = Year end closing balance140 = Shop order stock receipt328 = Year start opening balance141 = Shop order stock reversal3000 = Budget
 * @property string $VATCode Vat code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage Vat percentage
 * @property string $VATType Vat type
 * @property string $YourRef Your reference (of customer)
 */
class TransactionLine extends Model 
{
        protected $ID;
        protected $Account;
        protected $AccountCode;
        protected $AccountName;
        protected $AmountDC;
        protected $AmountFC;
        protected $AmountVATBaseFC;
        protected $AmountVATFC;
        protected $Asset;
        protected $AssetCode;
        protected $AssetDescription;
        protected $CostCenter;
        protected $CostCenterDescription;
        protected $CostUnit;
        protected $CostUnitDescription;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $Date;
        protected $Description;
        protected $Division;
        protected $Document;
        protected $DocumentNumber;
        protected $DocumentSubject;
        protected $DueDate;
        protected $EntryID;
        protected $EntryNumber;
        protected $ExchangeRate;
        protected $ExtraDutyAmountFC;
        protected $ExtraDutyPercentage;
        protected $FinancialPeriod;
        protected $FinancialYear;
        protected $GLAccount;
        protected $GLAccountCode;
        protected $GLAccountDescription;
        protected $InvoiceNumber;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $JournalCode;
        protected $JournalDescription;
        protected $LineNumber;
        protected $LineType;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $OffsetID;
        protected $OrderNumber;
        protected $PaymentDiscountAmount;
        protected $PaymentReference;
        protected $Project;
        protected $ProjectCode;
        protected $ProjectDescription;
        protected $Quantity;
        protected $SerialNumber;
        protected $Status;
        protected $Subscription;
        protected $SubscriptionDescription;
        protected $TrackingNumber;
        protected $TrackingNumberDescription;
        protected $Type;
        protected $VATCode;
        protected $VATCodeDescription;
        protected $VATPercentage;
        protected $VATType;
        protected $YourRef;
        protected $url = 'financialtransaction/TransactionLines';

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
    public function getAmountVATBaseFC()
    {
        return $this->AmountVATBaseFC;
    }

    /**
     * @param mixed $AmountVATBaseFC
     *
     * @return self
     */
    public function setAmountVATBaseFC($AmountVATBaseFC)
    {
        $this->AmountVATBaseFC = $AmountVATBaseFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountVATFC()
    {
        return $this->AmountVATFC;
    }

    /**
     * @param mixed $AmountVATFC
     *
     * @return self
     */
    public function setAmountVATFC($AmountVATFC)
    {
        $this->AmountVATFC = $AmountVATFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAsset()
    {
        return $this->Asset;
    }

    /**
     * @param mixed $Asset
     *
     * @return self
     */
    public function setAsset($Asset)
    {
        $this->Asset = $Asset;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssetCode()
    {
        return $this->AssetCode;
    }

    /**
     * @param mixed $AssetCode
     *
     * @return self
     */
    public function setAssetCode($AssetCode)
    {
        $this->AssetCode = $AssetCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssetDescription()
    {
        return $this->AssetDescription;
    }

    /**
     * @param mixed $AssetDescription
     *
     * @return self
     */
    public function setAssetDescription($AssetDescription)
    {
        $this->AssetDescription = $AssetDescription;

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
    public function getExtraDutyPercentage()
    {
        return $this->ExtraDutyPercentage;
    }

    /**
     * @param mixed $ExtraDutyPercentage
     *
     * @return self
     */
    public function setExtraDutyPercentage($ExtraDutyPercentage)
    {
        $this->ExtraDutyPercentage = $ExtraDutyPercentage;

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
    public function getLineType()
    {
        return $this->LineType;
    }

    /**
     * @param mixed $LineType
     *
     * @return self
     */
    public function setLineType($LineType)
    {
        $this->LineType = $LineType;

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
    public function getOffsetID()
    {
        return $this->OffsetID;
    }

    /**
     * @param mixed $OffsetID
     *
     * @return self
     */
    public function setOffsetID($OffsetID)
    {
        $this->OffsetID = $OffsetID;

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
    public function getPaymentDiscountAmount()
    {
        return $this->PaymentDiscountAmount;
    }

    /**
     * @param mixed $PaymentDiscountAmount
     *
     * @return self
     */
    public function setPaymentDiscountAmount($PaymentDiscountAmount)
    {
        $this->PaymentDiscountAmount = $PaymentDiscountAmount;

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
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }

    /**
     * @param mixed $SerialNumber
     *
     * @return self
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;

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
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * @param mixed $Subscription
     *
     * @return self
     */
    public function setSubscription($Subscription)
    {
        $this->Subscription = $Subscription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionDescription()
    {
        return $this->SubscriptionDescription;
    }

    /**
     * @param mixed $SubscriptionDescription
     *
     * @return self
     */
    public function setSubscriptionDescription($SubscriptionDescription)
    {
        $this->SubscriptionDescription = $SubscriptionDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param mixed $TrackingNumber
     *
     * @return self
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumberDescription()
    {
        return $this->TrackingNumberDescription;
    }

    /**
     * @param mixed $TrackingNumberDescription
     *
     * @return self
     */
    public function setTrackingNumberDescription($TrackingNumberDescription)
    {
        $this->TrackingNumberDescription = $TrackingNumberDescription;

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
    public function getVATType()
    {
        return $this->VATType;
    }

    /**
     * @param mixed $VATType
     *
     * @return self
     */
    public function setVATType($VATType)
    {
        $this->VATType = $VATType;

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