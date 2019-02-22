<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class InvoiceSalesOrder extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceInvoiceSalesOrders
 *
 * @property string $ID Primary key
 * @property int $CreateMode Invoice creation mode- 0: Per customer 1: Per sales order
 * @property int $DeliveryNumber Stock entries entry number.
 * @property string $EndDate Stock entries entry end date.
 * @property string $Errors Errors in the process.
 * @property int $InvoiceMode Invoice quantity processing mode- 0:By quantity delivered 1:By quantity ordered.
 * @property string $JournalCode Code of Journal
 * @property int $NumberOfCreatedInvoices Number of invoices successfully created.
 * @property int $NumberOfFailedInvoices Number of invoices failed to create.
 * @property SalesOrderIDs $SalesOrderIDs Collection of Sales order IDs.
 * @property string $StartDate Stock entries entry start date.
 * @property string $UserInvoiceDate Possibility to override the InvoiceDate during creation of sales invoice from sales orders. Works only for integration with Intuit QuickBooks.
 */
class InvoiceSalesOrder extends Model 
{
        protected $ID;
        protected $CreateMode;
        protected $DeliveryNumber;
        protected $EndDate;
        protected $Errors;
        protected $InvoiceMode;
        protected $JournalCode;
        protected $NumberOfCreatedInvoices;
        protected $NumberOfFailedInvoices;
        protected $SalesOrderIDs;
        protected $StartDate;
        protected $UserInvoiceDate;
        protected $url = 'salesinvoice/InvoiceSalesOrders';

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
    public function getCreateMode()
    {
        return $this->CreateMode;
    }

    /**
     * @param mixed $CreateMode
     *
     * @return self
     */
    public function setCreateMode($CreateMode)
    {
        $this->CreateMode = $CreateMode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryNumber()
    {
        return $this->DeliveryNumber;
    }

    /**
     * @param mixed $DeliveryNumber
     *
     * @return self
     */
    public function setDeliveryNumber($DeliveryNumber)
    {
        $this->DeliveryNumber = $DeliveryNumber;

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
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * @param mixed $Errors
     *
     * @return self
     */
    public function setErrors($Errors)
    {
        $this->Errors = $Errors;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceMode()
    {
        return $this->InvoiceMode;
    }

    /**
     * @param mixed $InvoiceMode
     *
     * @return self
     */
    public function setInvoiceMode($InvoiceMode)
    {
        $this->InvoiceMode = $InvoiceMode;

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
    public function getNumberOfCreatedInvoices()
    {
        return $this->NumberOfCreatedInvoices;
    }

    /**
     * @param mixed $NumberOfCreatedInvoices
     *
     * @return self
     */
    public function setNumberOfCreatedInvoices($NumberOfCreatedInvoices)
    {
        $this->NumberOfCreatedInvoices = $NumberOfCreatedInvoices;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfFailedInvoices()
    {
        return $this->NumberOfFailedInvoices;
    }

    /**
     * @param mixed $NumberOfFailedInvoices
     *
     * @return self
     */
    public function setNumberOfFailedInvoices($NumberOfFailedInvoices)
    {
        $this->NumberOfFailedInvoices = $NumberOfFailedInvoices;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderIDs()
    {
        return $this->SalesOrderIDs;
    }

    /**
     * @param mixed $SalesOrderIDs
     *
     * @return self
     */
    public function setSalesOrderIDs($SalesOrderIDs)
    {
        $this->SalesOrderIDs = $SalesOrderIDs;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param mixed $StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserInvoiceDate()
    {
        return $this->UserInvoiceDate;
    }

    /**
     * @param mixed $UserInvoiceDate
     *
     * @return self
     */
    public function setUserInvoiceDate($UserInvoiceDate)
    {
        $this->UserInvoiceDate = $UserInvoiceDate;

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
