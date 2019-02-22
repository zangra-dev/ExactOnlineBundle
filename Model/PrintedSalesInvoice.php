<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PrintedSalesInvoice extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesinvoicePrintedSalesInvoices
 *
 * @property string $InvoiceID Primary key, Reference to EntryID of SalesInvoice
 * @property int $Division Division code
 * @property string $Document Contains the id of the document that was created
 * @property string $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property string $DocumentCreationSuccess Contains information if a document was succesfully created
 * @property string $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email
 * @property string $EmailCreationError Contains the error message if an error occurred during the creation of the email
 * @property string $EmailCreationSuccess Contains confirmation that an email was sent. If an email cannot be delivered this property will still show confirmation that the email was sent.
 * @property string $EmailLayout Based on this layout the email text is produced
 * @property string $ExtraText Extra text that can be added to the printed document and email
 * @property string $InvoiceDate Date of the invoice
 * @property string $PostboxMessageCreationError Contains the error message if an error occurred during the sending of a postbox message
 * @property string $PostboxMessageCreationSuccess Contains information if a postbox message was succesfully sent
 * @property string $PostboxSender The postbox from where the message is sent
 * @property int $ReportingPeriod Reporting period
 * @property int $ReportingYear Reporting year
 * @property bool $SendEmailToCustomer Set to True if an email containing the invoice should be sent to the invoice customer
 * @property bool $SendInvoiceToCustomerPostbox Set to True if a postbox message containing the invoice should be sent to the invoice customer
 * @property bool $SendOutputBasedOnAccount Set to True if the output preference should be taken from the account. It will be either Paper, Email, Digital postbox. This option overrules both SendEmailToCustomer and SendInvoiceToCustomerPostbox.
 */
class PrintedSalesInvoice extends Model 
{
    
        protected $primaryKey = 'InvoiceID';
        protected $InvoiceID;
        protected $Division;
        protected $Document;
        protected $DocumentCreationError;
        protected $DocumentCreationSuccess;
        protected $DocumentLayout;
        protected $EmailCreationError;
        protected $EmailCreationSuccess;
        protected $EmailLayout;
        protected $ExtraText;
        protected $InvoiceDate;
        protected $PostboxMessageCreationError;
        protected $PostboxMessageCreationSuccess;
        protected $PostboxSender;
        protected $ReportingPeriod;
        protected $ReportingYear;
        protected $SendEmailToCustomer;
        protected $SendInvoiceToCustomerPostbox;
        protected $SendOutputBasedOnAccount;
        protected $url = 'salesinvoice/PrintedSalesInvoices';



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
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }

    /**
     * @param mixed $InvoiceID
     *
     * @return self
     */
    public function setInvoiceID($InvoiceID)
    {
        $this->InvoiceID = $InvoiceID;

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
    public function getDocumentCreationError()
    {
        return $this->DocumentCreationError;
    }

    /**
     * @param mixed $DocumentCreationError
     *
     * @return self
     */
    public function setDocumentCreationError($DocumentCreationError)
    {
        $this->DocumentCreationError = $DocumentCreationError;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentCreationSuccess()
    {
        return $this->DocumentCreationSuccess;
    }

    /**
     * @param mixed $DocumentCreationSuccess
     *
     * @return self
     */
    public function setDocumentCreationSuccess($DocumentCreationSuccess)
    {
        $this->DocumentCreationSuccess = $DocumentCreationSuccess;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentLayout()
    {
        return $this->DocumentLayout;
    }

    /**
     * @param mixed $DocumentLayout
     *
     * @return self
     */
    public function setDocumentLayout($DocumentLayout)
    {
        $this->DocumentLayout = $DocumentLayout;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailCreationError()
    {
        return $this->EmailCreationError;
    }

    /**
     * @param mixed $EmailCreationError
     *
     * @return self
     */
    public function setEmailCreationError($EmailCreationError)
    {
        $this->EmailCreationError = $EmailCreationError;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailCreationSuccess()
    {
        return $this->EmailCreationSuccess;
    }

    /**
     * @param mixed $EmailCreationSuccess
     *
     * @return self
     */
    public function setEmailCreationSuccess($EmailCreationSuccess)
    {
        $this->EmailCreationSuccess = $EmailCreationSuccess;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailLayout()
    {
        return $this->EmailLayout;
    }

    /**
     * @param mixed $EmailLayout
     *
     * @return self
     */
    public function setEmailLayout($EmailLayout)
    {
        $this->EmailLayout = $EmailLayout;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtraText()
    {
        return $this->ExtraText;
    }

    /**
     * @param mixed $ExtraText
     *
     * @return self
     */
    public function setExtraText($ExtraText)
    {
        $this->ExtraText = $ExtraText;

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
    public function getPostboxMessageCreationError()
    {
        return $this->PostboxMessageCreationError;
    }

    /**
     * @param mixed $PostboxMessageCreationError
     *
     * @return self
     */
    public function setPostboxMessageCreationError($PostboxMessageCreationError)
    {
        $this->PostboxMessageCreationError = $PostboxMessageCreationError;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostboxMessageCreationSuccess()
    {
        return $this->PostboxMessageCreationSuccess;
    }

    /**
     * @param mixed $PostboxMessageCreationSuccess
     *
     * @return self
     */
    public function setPostboxMessageCreationSuccess($PostboxMessageCreationSuccess)
    {
        $this->PostboxMessageCreationSuccess = $PostboxMessageCreationSuccess;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostboxSender()
    {
        return $this->PostboxSender;
    }

    /**
     * @param mixed $PostboxSender
     *
     * @return self
     */
    public function setPostboxSender($PostboxSender)
    {
        $this->PostboxSender = $PostboxSender;

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
    public function getSendEmailToCustomer()
    {
        return $this->SendEmailToCustomer;
    }

    /**
     * @param mixed $SendEmailToCustomer
     *
     * @return self
     */
    public function setSendEmailToCustomer($SendEmailToCustomer)
    {
        $this->SendEmailToCustomer = $SendEmailToCustomer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendInvoiceToCustomerPostbox()
    {
        return $this->SendInvoiceToCustomerPostbox;
    }

    /**
     * @param mixed $SendInvoiceToCustomerPostbox
     *
     * @return self
     */
    public function setSendInvoiceToCustomerPostbox($SendInvoiceToCustomerPostbox)
    {
        $this->SendInvoiceToCustomerPostbox = $SendInvoiceToCustomerPostbox;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendOutputBasedOnAccount()
    {
        return $this->SendOutputBasedOnAccount;
    }

    /**
     * @param mixed $SendOutputBasedOnAccount
     *
     * @return self
     */
    public function setSendOutputBasedOnAccount($SendOutputBasedOnAccount)
    {
        $this->SendOutputBasedOnAccount = $SendOutputBasedOnAccount;

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
