<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ProfitLossOverview extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialProfitLossOverview
 *
 * @property int $CurrentYear Current year, Primary key
 * @property float $CostsCurrentPeriod Costs in current period
 * @property float $CostsCurrentYear Costs in current year
 * @property float $CostsPreviousYear Costs in previous year
 * @property float $CostsPreviousYearPeriod Costs in period of previous year
 * @property string $CurrencyCode Currency Code
 * @property int $CurrentPeriod Current period
 * @property int $PreviousYear Previous year
 * @property int $PreviousYearPeriod Period in previous year
 * @property float $ResultCurrentPeriod Results of current period
 * @property float $ResultCurrentYear
 * @property float $ResultPreviousYear
 * @property float $ResultPreviousYearPeriod Results of period in previous year
 * @property float $RevenueCurrentPeriod Revenue in current period
 * @property float $RevenueCurrentYear Revenue in current year
 * @property float $RevenuePreviousYear Revenue in previous year
 * @property float $RevenuePreviousYearPeriod Revenue in period of previous year
 */
class ProfitLossOverview extends Model 
{
        protected $primaryKey = 'CurrentYear';
        protected $CostsCurrentPeriod;
        protected $CostsCurrentYear;
        protected $CostsPreviousYear;
        protected $CostsPreviousYearPeriod;
        protected $CurrencyCode;
        protected $CurrentYear;
        protected $CurrentPeriod;
        protected $PreviousYear;
        protected $PreviousYearPeriod;
        protected $ResultCurrentPeriod;
        protected $ResultCurrentYear;
        protected $ResultPreviousYear;
        protected $ResultPreviousYearPeriod;
        protected $RevenueCurrentPeriod;
        protected $RevenueCurrentYear;
        protected $RevenuePreviousYear;
        protected $RevenuePreviousPeriod;
        protected $url = 'read/financial/ProfitLossOverview';

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
    public function getCostsCurrentPeriod()
    {
        return $this->CostsCurrentPeriod;
    }

    /**
     * @param mixed $CostsCurrentPeriod
     *
     * @return self
     */
    public function setCostsCurrentPeriod($CostsCurrentPeriod)
    {
        $this->CostsCurrentPeriod = $CostsCurrentPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostsCurrentYear()
    {
        return $this->CostsCurrentYear;
    }

    /**
     * @param mixed $CostsCurrentYear
     *
     * @return self
     */
    public function setCostsCurrentYear($CostsCurrentYear)
    {
        $this->CostsCurrentYear = $CostsCurrentYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostsPreviousYear()
    {
        return $this->CostsPreviousYear;
    }

    /**
     * @param mixed $CostsPreviousYear
     *
     * @return self
     */
    public function setCostsPreviousYear($CostsPreviousYear)
    {
        $this->CostsPreviousYear = $CostsPreviousYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostsPreviousYearPeriod()
    {
        return $this->CostsPreviousYearPeriod;
    }

    /**
     * @param mixed $CostsPreviousYearPeriod
     *
     * @return self
     */
    public function setCostsPreviousYearPeriod($CostsPreviousYearPeriod)
    {
        $this->CostsPreviousYearPeriod = $CostsPreviousYearPeriod;

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
    public function getCurrentYear()
    {
        return $this->CurrentYear;
    }

    /**
     * @param mixed $CurrentYear
     *
     * @return self
     */
    public function setCurrentYear($CurrentYear)
    {
        $this->CurrentYear = $CurrentYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrentPeriod()
    {
        return $this->CurrentPeriod;
    }

    /**
     * @param mixed $CurrentPeriod
     *
     * @return self
     */
    public function setCurrentPeriod($CurrentPeriod)
    {
        $this->CurrentPeriod = $CurrentPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreviousYear()
    {
        return $this->PreviousYear;
    }

    /**
     * @param mixed $PreviousYear
     *
     * @return self
     */
    public function setPreviousYear($PreviousYear)
    {
        $this->PreviousYear = $PreviousYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreviousYearPeriod()
    {
        return $this->PreviousYearPeriod;
    }

    /**
     * @param mixed $PreviousYearPeriod
     *
     * @return self
     */
    public function setPreviousYearPeriod($PreviousYearPeriod)
    {
        $this->PreviousYearPeriod = $PreviousYearPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResultCurrentPeriod()
    {
        return $this->ResultCurrentPeriod;
    }

    /**
     * @param mixed $ResultCurrentPeriod
     *
     * @return self
     */
    public function setResultCurrentPeriod($ResultCurrentPeriod)
    {
        $this->ResultCurrentPeriod = $ResultCurrentPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResultCurrentYear()
    {
        return $this->ResultCurrentYear;
    }

    /**
     * @param mixed $ResultCurrentYear
     *
     * @return self
     */
    public function setResultCurrentYear($ResultCurrentYear)
    {
        $this->ResultCurrentYear = $ResultCurrentYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResultPreviousYear()
    {
        return $this->ResultPreviousYear;
    }

    /**
     * @param mixed $ResultPreviousYear
     *
     * @return self
     */
    public function setResultPreviousYear($ResultPreviousYear)
    {
        $this->ResultPreviousYear = $ResultPreviousYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResultPreviousYearPeriod()
    {
        return $this->ResultPreviousYearPeriod;
    }

    /**
     * @param mixed $ResultPreviousYearPeriod
     *
     * @return self
     */
    public function setResultPreviousYearPeriod($ResultPreviousYearPeriod)
    {
        $this->ResultPreviousYearPeriod = $ResultPreviousYearPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevenueCurrentPeriod()
    {
        return $this->RevenueCurrentPeriod;
    }

    /**
     * @param mixed $RevenueCurrentPeriod
     *
     * @return self
     */
    public function setRevenueCurrentPeriod($RevenueCurrentPeriod)
    {
        $this->RevenueCurrentPeriod = $RevenueCurrentPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevenueCurrentYear()
    {
        return $this->RevenueCurrentYear;
    }

    /**
     * @param mixed $RevenueCurrentYear
     *
     * @return self
     */
    public function setRevenueCurrentYear($RevenueCurrentYear)
    {
        $this->RevenueCurrentYear = $RevenueCurrentYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevenuePreviousYear()
    {
        return $this->RevenuePreviousYear;
    }

    /**
     * @param mixed $RevenuePreviousYear
     *
     * @return self
     */
    public function setRevenuePreviousYear($RevenuePreviousYear)
    {
        $this->RevenuePreviousYear = $RevenuePreviousYear;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevenuePreviousPeriod()
    {
        return $this->RevenuePreviousPeriod;
    }

    /**
     * @param mixed $RevenuePreviousPeriod
     *
     * @return self
     */
    public function setRevenuePreviousPeriod($RevenuePreviousPeriod)
    {
        $this->RevenuePreviousPeriod = $RevenuePreviousPeriod;

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
