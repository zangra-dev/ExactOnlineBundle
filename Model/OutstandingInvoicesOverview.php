<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class OutstandingInvoicesOverview extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialOutstandingInvoicesOverview
 *
 * @property string $CurrencyCode Primary key
 * @property float $OutstandingPayableInvoiceAmount Total invoice amount to be paid
 * @property float $OutstandingPayableInvoiceCount Number of invoices to be paid
 * @property float $OutstandingReceivableInvoiceAmount Total invoice amount to be received
 * @property float $OutstandingReceivableInvoiceCount Number of invoices to be received
 * @property float $OverduePayableInvoiceAmount Total payable invoice amount that is overdue
 * @property float $OverduePayableInvoiceCount Number of payable invoices that are overdue
 * @property float $OverdueReceivableInvoiceAmount Total receivable invoice amount that is overdue
 * @property float $OverdueReceivableInvoiceCount Number of receivable invoices that are overdue
 */
class OutstandingInvoicesOverview extends Model 
{

    protected $primaryKey = 'CurrencyCode';
    protected $CurrencyCode;
    protected $OutstandingPayableInvoiceAmount;
    protected $OutstandingPayableInvoiceCount;
    protected $OutstandingReceivableInvoiceAmount;
    protected $OutstandingReceivableInvoiceCount;
    protected $OverduePayableInvoiceAmount;
    protected $OverduePayableInvoiceCount;
    protected $OverdueReceivableInvoiceAmount;
    protected $OverdueReceivableInvoiceCount;
    protected $url = 'read/financial/OutstandingInvoicesOverview';


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
    public function getOutstandingPayableInvoiceAmount()
    {
        return $this->OutstandingPayableInvoiceAmount;
    }

    /**
     * @param mixed $OutstandingPayableInvoiceAmount
     *
     * @return self
     */
    public function setOutstandingPayableInvoiceAmount($OutstandingPayableInvoiceAmount)
    {
        $this->OutstandingPayableInvoiceAmount = $OutstandingPayableInvoiceAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutstandingPayableInvoiceCount()
    {
        return $this->OutstandingPayableInvoiceCount;
    }

    /**
     * @param mixed $OutstandingPayableInvoiceCount
     *
     * @return self
     */
    public function setOutstandingPayableInvoiceCount($OutstandingPayableInvoiceCount)
    {
        $this->OutstandingPayableInvoiceCount = $OutstandingPayableInvoiceCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutstandingReceivableInvoiceAmount()
    {
        return $this->OutstandingReceivableInvoiceAmount;
    }

    /**
     * @param mixed $OutstandingReceivableInvoiceAmount
     *
     * @return self
     */
    public function setOutstandingReceivableInvoiceAmount($OutstandingReceivableInvoiceAmount)
    {
        $this->OutstandingReceivableInvoiceAmount = $OutstandingReceivableInvoiceAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutstandingReceivableInvoiceCount()
    {
        return $this->OutstandingReceivableInvoiceCount;
    }

    /**
     * @param mixed $OutstandingReceivableInvoiceCount
     *
     * @return self
     */
    public function setOutstandingReceivableInvoiceCount($OutstandingReceivableInvoiceCount)
    {
        $this->OutstandingReceivableInvoiceCount = $OutstandingReceivableInvoiceCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOverduePayableInvoiceAmount()
    {
        return $this->OverduePayableInvoiceAmount;
    }

    /**
     * @param mixed $OverduePayableInvoiceAmount
     *
     * @return self
     */
    public function setOverduePayableInvoiceAmount($OverduePayableInvoiceAmount)
    {
        $this->OverduePayableInvoiceAmount = $OverduePayableInvoiceAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOverduePayableInvoiceCount()
    {
        return $this->OverduePayableInvoiceCount;
    }

    /**
     * @param mixed $OverduePayableInvoiceCount
     *
     * @return self
     */
    public function setOverduePayableInvoiceCount($OverduePayableInvoiceCount)
    {
        $this->OverduePayableInvoiceCount = $OverduePayableInvoiceCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOverdueReceivableInvoiceAmount()
    {
        return $this->OverdueReceivableInvoiceAmount;
    }

    /**
     * @param mixed $OverdueReceivableInvoiceAmount
     *
     * @return self
     */
    public function setOverdueReceivableInvoiceAmount($OverdueReceivableInvoiceAmount)
    {
        $this->OverdueReceivableInvoiceAmount = $OverdueReceivableInvoiceAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOverdueReceivableInvoiceCount()
    {
        return $this->OverdueReceivableInvoiceCount;
    }

    /**
     * @param mixed $OverdueReceivableInvoiceCount
     *
     * @return self
     */
    public function setOverdueReceivableInvoiceCount($OverdueReceivableInvoiceCount)
    {
        $this->OverdueReceivableInvoiceCount = $OverdueReceivableInvoiceCount;

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
