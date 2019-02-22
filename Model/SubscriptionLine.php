<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SubscriptionLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Costcenter Cost center
 * @property string $Costunit Cost unit
 * @property string $Description Description
 * @property float $Discount Discount percentage
 * @property int $Division Division code
 * @property string $EntryID Entry ID
 * @property string $FromDate From date
 * @property string $Item Reference to Item
 * @property string $ItemDescription Description of Item
 * @property int $LineNumber Line number
 * @property int $LineType Reference to LineType
 * @property string $LineTypeDescription Description of LineType
 * @property float $NetPrice Net price in the currency of the transaction
 * @property string $Notes Remarks
 * @property float $Quantity Quantity
 * @property string $ToDate To date
 * @property string $UnitCode Unit code
 * @property string $UnitDescription Description of Unit
 * @property float $UnitPrice Unit price in the currency of the transaction (price * unit factor)
 * @property float $VATAmountFC Vat Amount in the currency of the transaction
 * @property string $VATCode VATCode
 * @property string $VATCodeDescription Description of VATCode
 */
class SubscriptionLine extends Model 
{
        protected $ID;
        protected $AmountDC;
        protected $AmountFC;
        protected $Costcenter;
        protected $Costunit;
        protected $Description;
        protected $Discount;
        protected $Division;
        protected $EntryID;
        protected $FromDate;
        protected $Item;
        protected $ItemDescription;
        protected $LineNumber;
        protected $LineType;
        protected $LineTypeDescription;
        protected $NetPrice;
        protected $Notes;
        protected $Quantity;
        protected $ToDate;
        protected $UnitCode;
        protected $UnitDescription;
        protected $UnitPrice;
        protected $VATAmountFC;
        protected $VATCode;
        protected $VATCodeDescription;
        protected $url = 'subscription/SubscriptionLines';

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
    public function getAmountDC()
    {
        return $this->AmountDC;
    }

    /**
     * @param mixed $AmountDC
     *
     * @return self
     */
    public function setAmountDC($AmountDC)
    {
        $this->AmountDC = $AmountDC;

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
    public function getCostcenter()
    {
        return $this->Costcenter;
    }

    /**
     * @param mixed $Costcenter
     *
     * @return self
     */
    public function setCostcenter($Costcenter)
    {
        $this->Costcenter = $Costcenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostunit()
    {
        return $this->Costunit;
    }

    /**
     * @param mixed $Costunit
     *
     * @return self
     */
    public function setCostunit($Costunit)
    {
        $this->Costunit = $Costunit;

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
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param mixed $Discount
     *
     * @return self
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

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
    public function getFromDate()
    {
        return $this->FromDate;
    }

    /**
     * @param mixed $FromDate
     *
     * @return self
     */
    public function setFromDate($FromDate)
    {
        $this->FromDate = $FromDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     * @param mixed $Item
     *
     * @return self
     */
    public function setItem($Item)
    {
        $this->Item = $Item;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }

    /**
     * @param mixed $ItemDescription
     *
     * @return self
     */
    public function setItemDescription($ItemDescription)
    {
        $this->ItemDescription = $ItemDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }

    /**
     * @param mixed $LineNumber
     *
     * @return self
     */
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineType()
    {
        return $this->LineType;
    }

    /**
     * @param mixed $LineType
     *
     * @return self
     */
    public function setLineType($LineType)
    {
        $this->LineType = $LineType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineTypeDescription()
    {
        return $this->LineTypeDescription;
    }

    /**
     * @param mixed $LineTypeDescription
     *
     * @return self
     */
    public function setLineTypeDescription($LineTypeDescription)
    {
        $this->LineTypeDescription = $LineTypeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNetPrice()
    {
        return $this->NetPrice;
    }

    /**
     * @param mixed $NetPrice
     *
     * @return self
     */
    public function setNetPrice($NetPrice)
    {
        $this->NetPrice = $NetPrice;

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
    public function getToDate()
    {
        return $this->ToDate;
    }

    /**
     * @param mixed $ToDate
     *
     * @return self
     */
    public function setToDate($ToDate)
    {
        $this->ToDate = $ToDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitCode()
    {
        return $this->UnitCode;
    }

    /**
     * @param mixed $UnitCode
     *
     * @return self
     */
    public function setUnitCode($UnitCode)
    {
        $this->UnitCode = $UnitCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitDescription()
    {
        return $this->UnitDescription;
    }

    /**
     * @param mixed $UnitDescription
     *
     * @return self
     */
    public function setUnitDescription($UnitDescription)
    {
        $this->UnitDescription = $UnitDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param mixed $UnitPrice
     *
     * @return self
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmountFC()
    {
        return $this->VATAmountFC;
    }

    /**
     * @param mixed $VATAmountFC
     *
     * @return self
     */
    public function setVATAmountFC($VATAmountFC)
    {
        $this->VATAmountFC = $VATAmountFC;

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
    public function getVATCodeDescription()
    {
        return $this->VATCodeDescription;
    }

    /**
     * @param mixed $VATCodeDescription
     *
     * @return self
     */
    public function setVATCodeDescription($VATCodeDescription)
    {
        $this->VATCodeDescription = $VATCodeDescription;

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