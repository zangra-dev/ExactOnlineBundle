<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ReceivableList extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReceivablesList
 *
 * @property int $HID Human readable ID, Primary key
 * @property string $AccountCode Code of the Account
 * @property string $AccountId Reference to the account
 * @property string $AccountName Name of Account
 * @property float $Amount Amount
 * @property float $AmountInTransit Amount in transit
 * @property string $CurrencyCode Code of Currency
 * @property string $Description Description
 * @property string $DueDate Date the invoice should be paid
 * @property int $EntryNumber Entry number
 * @property string $Id Obsolete
 * @property string $InvoiceDate Invoice date
 * @property int $InvoiceNumber Invoice number
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $YourRef Your reference
 */
class ReceivableList extends Model 
{

    	protected $primaryKey = 'HID';
    	protected $fillable = [
		protected $AccountCode;
		protected $AccountId;
		protected $AccountName;
		protected $Amount;
		protected $AmountInTransit;
		protected $CurrencyCode;
		protected $Description;
		protected $DueDate;
		protected $EntryNumber;
		protected $HID;
		protected $Id;
		protected $InvoiceDate;
		protected $InvoiceNumber;
		protected $JournalCode;
		protected $JournalDescription;
		protected $YourRef;
		protected $url = 'read/financial/ReceivablesList';

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
    public function getFillable()
    {
        return $this->fillable;
    }

    /**
     * @param mixed $fillable
     *
     * @return self
     */
    public function setFillable($fillable)
    {
        $this->fillable = $fillable;

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
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param mixed $AccountId
     *
     * @return self
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;

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
    public function getAmountInTransit()
    {
        return $this->AmountInTransit;
    }

    /**
     * @param mixed $AmountInTransit
     *
     * @return self
     */
    public function setAmountInTransit($AmountInTransit)
    {
        $this->AmountInTransit = $AmountInTransit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param mixed $CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;

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
    public function getHID()
    {
        return $this->HID;
    }

    /**
     * @param mixed $HID
     *
     * @return self
     */
    public function setHID($HID)
    {
        $this->HID = $HID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     *
     * @return self
     */
    public function setId($Id)
    {
        $this->Id = $Id;

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