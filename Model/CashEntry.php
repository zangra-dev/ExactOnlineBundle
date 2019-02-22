<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class CashEntry extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=financialtransactionCashEntries
 *
 * @property string $EntryID Primary key (read-only)
 * @property float $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property string $Created Creation date (read-only)
 * @property float $Currency Closing balance in the currency of the transaction
 * @property int $Division Division code (read-only)
 * @property int $EntryNumber Entry number
 * @property int $FinancialPeriod Fiancial period
 * @property int $FinancialYear Fiancial year
 * @property CashEntryLines $CashEntryLines Collection of lines
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal (read-only)
 * @property string $Modified Last modified date (read-only)
 * @property float $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed (read-only)
 * @property string $StatusDescription Description of Status (read-only)
 */
class CashEntry extends Model 
{
    protected $primaryKey = 'EntryID';
    protected $cashEntryLines ;
    protected $EntryID;
    protected $ClosingBalanceFC;
    protected $Created;
    protected $Currency;
    protected $Division;
    protected $EntryNumber;
    protected $FinancialPeriod;
    protected $FinancialYear;
    protected $CashEntryLines;
    protected $JournalCode;
    protected $JournalDescription;
    protected $Modified;
    protected $OpeningBalanceFC;
    protected $Status;
    protected $StatusDescription;
    protected $url = 'financialtransaction/CashEntries';


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
    public function getCashEntryLines()
    {
        return $this->cashEntryLines;
    }

    /**
     * @param mixed $cashEntryLines
     *
     * @return self
     */
    public function setCashEntryLines($cashEntryLines)
    {
        $this->cashEntryLines = $cashEntryLines;

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
    public function getCashEntryLines()
    {
        return $this->CashEntryLines;
    }

    /**
     * @param mixed $CashEntryLines
     *
     * @return self
     */
    public function setCashEntryLines($CashEntryLines)
    {
        $this->CashEntryLines = $CashEntryLines;

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

