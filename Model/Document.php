<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Document extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocuments
 *
 * @property string $ID Primary key
 * @property string $Account ID of the related account of this document
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Body Body of this document
 * @property string $Category ID of the category of this document
 * @property string $CategoryDescription Description of Category
 * @property string $Contact ID of the related contact of this document
 * @property string $Created Creation date
 * @property string $CreatorFullName Name of creator
 * @property float $Currency Amount in the currency of the transaction
 * @property string $DocumentDate Entry date of the incoming document
 * @property string $DocumentFolder The Id of document folder
 * @property string $FinancialTransactionEntryID Reference to the financial transaction
 * @property int $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property string $Language The language code of the document
 * @property string $Opportunity The opportunity linked to the document
 * @property int $SalesInvoiceNumber 'Our reference' of the transaction that belongs to this document
 * @property int $SalesOrderNumber Number of the sales order
 * @property int $ShopOrderNumber Number of the shop order
 * @property string $Subject Subject of this document
 * @property int $Type ID of the type of this document
 * @property string $TypeDescription Description of Type
 */
class Document extends Model 
{
        protected $ID;
        protected $Account;
        protected $AmountFC;
        protected $Body;
        protected $Category;
        protected $CategoryDescription;
        protected $Contact;
        protected $Created;
        protected $CreatorFullName;
        protected $Currency;
        protected $DocumentDate;
        protected $DocumentFolder;
        protected $FinancialTransactionEntryID;
        protected $HID;
        protected $Language;
        protected $Opportunity;
        protected $SalesInvoiceNumber;
        protected $SalesOrderNumber;
        protected $ShopOrderNumber;
        protected $Subject;
        protected $Type;
        protected $TypeDescription;
        protected $url = 'documents/Documents';

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
    public function getBody()
    {
        return $this->Body;
    }

    /**
     * @param mixed $Body
     *
     * @return self
     */
    public function setBody($Body)
    {
        $this->Body = $Body;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param mixed $Category
     *
     * @return self
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryDescription()
    {
        return $this->CategoryDescription;
    }

    /**
     * @param mixed $CategoryDescription
     *
     * @return self
     */
    public function setCategoryDescription($CategoryDescription)
    {
        $this->CategoryDescription = $CategoryDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param mixed $Contact
     *
     * @return self
     */
    public function setContact($Contact)
    {
        $this->Contact = $Contact;

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
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * @param mixed $DocumentDate
     *
     * @return self
     */
    public function setDocumentDate($DocumentDate)
    {
        $this->DocumentDate = $DocumentDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentFolder()
    {
        return $this->DocumentFolder;
    }

    /**
     * @param mixed $DocumentFolder
     *
     * @return self
     */
    public function setDocumentFolder($DocumentFolder)
    {
        $this->DocumentFolder = $DocumentFolder;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinancialTransactionEntryID()
    {
        return $this->FinancialTransactionEntryID;
    }

    /**
     * @param mixed $FinancialTransactionEntryID
     *
     * @return self
     */
    public function setFinancialTransactionEntryID($FinancialTransactionEntryID)
    {
        $this->FinancialTransactionEntryID = $FinancialTransactionEntryID;

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
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param mixed $Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpportunity()
    {
        return $this->Opportunity;
    }

    /**
     * @param mixed $Opportunity
     *
     * @return self
     */
    public function setOpportunity($Opportunity)
    {
        $this->Opportunity = $Opportunity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesInvoiceNumber()
    {
        return $this->SalesInvoiceNumber;
    }

    /**
     * @param mixed $SalesInvoiceNumber
     *
     * @return self
     */
    public function setSalesInvoiceNumber($SalesInvoiceNumber)
    {
        $this->SalesInvoiceNumber = $SalesInvoiceNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderNumber()
    {
        return $this->SalesOrderNumber;
    }

    /**
     * @param mixed $SalesOrderNumber
     *
     * @return self
     */
    public function setSalesOrderNumber($SalesOrderNumber)
    {
        $this->SalesOrderNumber = $SalesOrderNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderNumber()
    {
        return $this->ShopOrderNumber;
    }

    /**
     * @param mixed $ShopOrderNumber
     *
     * @return self
     */
    public function setShopOrderNumber($ShopOrderNumber)
    {
        $this->ShopOrderNumber = $ShopOrderNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param mixed $Subject
     *
     * @return self
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;

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
    public function getTypeDescription()
    {
        return $this->TypeDescription;
    }

    /**
     * @param mixed $TypeDescription
     *
     * @return self
     */
    public function setTypeDescription($TypeDescription)
    {
        $this->TypeDescription = $TypeDescription;

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
