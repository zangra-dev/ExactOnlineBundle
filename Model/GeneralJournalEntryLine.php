<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GeneralJournalEntryLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntryLines
 *
 * @property string $ID Primary key
 * @property string $Account Reference to account
 * @property float $AmountFC Amount in the currency of the transaction. If an 'Including' VAT code is used this amount includes the VAT amount.
 * @property float $AmountVATFC Vat amount in the currency of the transaction. If you want to set this in a POST you have to specify VATCode as well.
 * @property string $Asset Reference to asset
 * @property string $CostCenter Reference to cost center
 * @property string $CostUnit Reference to cost unit
 * @property string $Date Entry date
 * @property string $Description Description
 * @property string $Document Reference to document
 * @property string $EntryID Reference to header of the entry
 * @property string $GLAccount General ledger account
 * @property string $Notes Extra remarks
 * @property string $OffsetID
 * @property int $OurRef Our ref of general journal entry
 * @property string $Project Reference to project
 * @property float $Quantity
 * @property string $VATCode VATCode can only be used if the general journal has VAT enabled. VAT Lines will be automatically created if the VATCode is specified when creating a new general journal entry.
 * @property float $VATPercentage Vat percentage
 */
class GeneralJournalEntryLine extends Model 
{
        protected $ID;
        protected $Account;
        protected $AmountFC;
        protected $AmountVATFC;
        protected $Asset;
        protected $CostCenter;
        protected $CostUnit;
        protected $Date;
        protected $Description;
        protected $Document;
        protected $EntryID;
        protected $GLAccount;
        protected $Notes;
        protected $OffsetID;
        protected $OurRef;
        protected $Project;
        protected $Quantity;
        protected $VATCode;
        protected $VATPercentage;
        protected $url = 'generaljournalentry/GeneralJournalEntryLines';

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
    public function getAmountVATFC()
    {
        return $this->AmountVATFC;
    }

    /**
     * @param mixed $AmountVATFC
     *
     * @return self
     */
    public function setAmountVATFC($AmountVATFC)
    {
        $this->AmountVATFC = $AmountVATFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAsset()
    {
        return $this->Asset;
    }

    /**
     * @param mixed $Asset
     *
     * @return self
     */
    public function setAsset($Asset)
    {
        $this->Asset = $Asset;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }

    /**
     * @param mixed $CostCenter
     *
     * @return self
     */
    public function setCostCenter($CostCenter)
    {
        $this->CostCenter = $CostCenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostUnit()
    {
        return $this->CostUnit;
    }

    /**
     * @param mixed $CostUnit
     *
     * @return self
     */
    public function setCostUnit($CostUnit)
    {
        $this->CostUnit = $CostUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     *
     * @return self
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

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
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param mixed $Notes
     *
     * @return self
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOffsetID()
    {
        return $this->OffsetID;
    }

    /**
     * @param mixed $OffsetID
     *
     * @return self
     */
    public function setOffsetID($OffsetID)
    {
        $this->OffsetID = $OffsetID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOurRef()
    {
        return $this->OurRef;
    }

    /**
     * @param mixed $OurRef
     *
     * @return self
     */
    public function setOurRef($OurRef)
    {
        $this->OurRef = $OurRef;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->Project;
    }

    /**
     * @param mixed $Project
     *
     * @return self
     */
    public function setProject($Project)
    {
        $this->Project = $Project;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param mixed $Quantity
     *
     * @return self
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATCode()
    {
        return $this->VATCode;
    }

    /**
     * @param mixed $VATCode
     *
     * @return self
     */
    public function setVATCode($VATCode)
    {
        $this->VATCode = $VATCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATPercentage()
    {
        return $this->VATPercentage;
    }

    /**
     * @param mixed $VATPercentage
     *
     * @return self
     */
    public function setVATPercentage($VATPercentage)
    {
        $this->VATPercentage = $VATPercentage;

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
