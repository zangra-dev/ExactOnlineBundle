<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GeneralJournalEntry extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntries
 *
 * @property string $EntryID Primary key
 * @property string $Currency Currency code
 * @property int $EntryNumber Entry number
 * @property float $ExchangeRate Exchange rate
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property GeneralJournalEntryLines $GeneralJournalEntryLines Collection of lines
 * @property string $JournalCode Code of Journal
 * @property bool $Reversal Indicates that amounts are reversed
 */
class GeneralJournalEntry extends Model 
{

    protected $primaryKey = 'EntryID';
    protected $generalJournalEntryLines;
    protected $EntryID;
    protected $Currency;
    protected $EntryNumber;
    protected $ExchangeRate;
    protected $FinancialPeriod;
    protected $FinancialYear;
    protected $GeneralJournalEntryLines;
    protected $JournalCode;
    protected $Reversal;
    protected $url = 'generaljournalentry/GeneralJournalEntries';


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
    public function getGeneralJournalEntryLines()
    {
        return $this->generalJournalEntryLines;
    }

    /**
     * @param mixed $generalJournalEntryLines
     *
     * @return self
     */
    public function setGeneralJournalEntryLines($generalJournalEntryLines)
    {
        $this->generalJournalEntryLines = $generalJournalEntryLines;

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
    public function getGeneralJournalEntryLines()
    {
        return $this->GeneralJournalEntryLines;
    }

    /**
     * @param mixed $GeneralJournalEntryLines
     *
     * @return self
     */
    public function setGeneralJournalEntryLines($GeneralJournalEntryLines)
    {
        $this->GeneralJournalEntryLines = $GeneralJournalEntryLines;

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
