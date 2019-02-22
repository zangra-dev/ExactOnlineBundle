<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PrintedSalesOrder extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesorderPrintedSalesOrders
 *
 * @property string $OrderId Primary key, Reference to OrderId of SalesOrder
 * @property int $Division Division code
 * @property string $Document Contains the id of the document that was created
 * @property string $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property string $DocumentCreationSuccess Contains information if a document was succesfully created
 * @property string $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email
 * @property string $EmailCreationError Contains the error message if an error occurred during the creation of the email
 * @property string $EmailCreationSuccess Contains confirmation that an email was sent. If an email cannot be delivered this property will still show confirmation that the email was sent.
 * @property string $EmailLayout Based on this layout the email text is produced
 * @property string $ExtraText Extra text that can be added to the printed document and email
 * @property bool $SendEmailToCustomer Set to True if an email containing the invoice should be sent to the invoice customer
 * @property string $SenderEmailAddress Email address from which the email will be sent. If not specified, the company email address will be used.
 */
class PrintedSalesOrder extends Model 
{
        protected $primaryKey = 'OrderId';
        protected $OrderId;
        protected $Division;
        protected $Document;
        protected $DocumentCreationError;
        protected $DocumentCreationSuccess;
        protected $DocumentLayout;
        protected $EmailCreationError;
        protected $EmailCreationSuccess;
        protected $EmailLayout;
        protected $ExtraText;
        protected $SendEmailToCustomer;
        protected $SenderEmailAddress;
        protected $url = 'salesorder/PrintedSalesOrders';


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
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param mixed $OrderId
     *
     * @return self
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;

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
    public function getSenderEmailAddress()
    {
        return $this->SenderEmailAddress;
    }

    /**
     * @param mixed $SenderEmailAddress
     *
     * @return self
     */
    public function setSenderEmailAddress($SenderEmailAddress)
    {
        $this->SenderEmailAddress = $SenderEmailAddress;

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