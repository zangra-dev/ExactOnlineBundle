<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ReportingBalance extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialReportingBalance
 *
 * @property int $ID Record ID
 * @property float $Amount The sum of the amounts of all transactions in the grouping.
 * @property float $AmountCredit The sum of the amounts of all credit transactions in the grouping.
 * @property float $AmountDebit The sum of the amounts of all debit transactions in the grouping.
 * @property string $BalanceType Balance type of the G/L account: B = Balance Sheet, W = Profit & Loss.
 * @property string $CostCenterCode The code of the cost center.
 * @property string $CostCenterDescription The description of the cost center.
 * @property string $CostUnitCode The code of the cost unit.
 * @property string $CostUnitDescription The description of the cost unit.
 * @property int $Count The number of transactions in the grouping.
 * @property int $Division Division code
 * @property string $GLAccount G/L account
 * @property string $GLAccountCode The code of the G/L account.
 * @property string $GLAccountDescription The description of the G/L account.
 * @property int $ReportingPeriod The reporting period of the transactions in the grouping.
 * @property int $ReportingYear The reporting year of the transactions in the grouping.
 * @property int $Status Status: 20 = Open, 50 = Processed. To get 'after entry' results, both Open and Processed amounts have to be included. This is by default, so it requires no extra filtering.
 * @property int $Type The type of the transactions in the grouping.
 */
class ReportingBalance extends Model 
{
        protected $primaryKey = 'ID';
        protected $ID;
        protected $Amount;
        protected $AmountCredit;
        protected $AmountDebit;
        protected $BalanceType;
        protected $CostCenterCode;
        protected $CostCenterDescription;
        protected $CostUnitCode;
        protected $CostUnitDescription;
        protected $Count;
        protected $Division;
        protected $GLAccount;
        protected $GLAccountCode;
        protected $GLAccountDescription;
        protected $ReportingPeriod;
        protected $ReportingYear;
        protected $Status;
        protected $Type;
        protected $url = 'financial/ReportingBalance';

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
    public function getAmountCredit()
    {
        return $this->AmountCredit;
    }

    /**
     * @param mixed $AmountCredit
     *
     * @return self
     */
    public function setAmountCredit($AmountCredit)
    {
        $this->AmountCredit = $AmountCredit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountDebit()
    {
        return $this->AmountDebit;
    }

    /**
     * @param mixed $AmountDebit
     *
     * @return self
     */
    public function setAmountDebit($AmountDebit)
    {
        $this->AmountDebit = $AmountDebit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBalanceType()
    {
        return $this->BalanceType;
    }

    /**
     * @param mixed $BalanceType
     *
     * @return self
     */
    public function setBalanceType($BalanceType)
    {
        $this->BalanceType = $BalanceType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostCenterCode()
    {
        return $this->CostCenterCode;
    }

    /**
     * @param mixed $CostCenterCode
     *
     * @return self
     */
    public function setCostCenterCode($CostCenterCode)
    {
        $this->CostCenterCode = $CostCenterCode;

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
    public function getCostUnitCode()
    {
        return $this->CostUnitCode;
    }

    /**
     * @param mixed $CostUnitCode
     *
     * @return self
     */
    public function setCostUnitCode($CostUnitCode)
    {
        $this->CostUnitCode = $CostUnitCode;

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
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param mixed $Count
     *
     * @return self
     */
    public function setCount($Count)
    {
        $this->Count = $Count;

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
