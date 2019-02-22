<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class QuotationLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMQuotationLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Description By default this contains the item description
 * @property float $Discount Discount given on the default price. This is stored as a fraction. ie 5.5% is stored as .055
 * @property int $Division Division code
 * @property string $Item Reference to the item that is sold in this quotation line
 * @property string $ItemDescription Description of the item
 * @property int $LineNumber Indicates the sequence of the lines within one quotation
 * @property float $NetPrice Net price of the quotation line
 * @property string $Notes Extra notes
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $QuotationID Identifies the quotation. All the lines of a quotation have the same QuotationID
 * @property int $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property string $UnitCode Code of the item unit
 * @property string $UnitDescription Description of the item unit
 * @property float $UnitPrice Price per item unit
 * @property float $VATAmountFC VAT amount of the line in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the quotation is invoiced
 * @property string $VATDescription Description of the VAT code
 * @property float $VATPercentage The VAT percentage of the VAT code
 * @property int $VersionNumber Number indicating the different reviews which are made for the quotation
 */
class QuotationLine extends Model 
{
        protected $ID;
        protected $AmountDC;
        protected $AmountFC;
        protected $Description;
        protected $Discount;
        protected $Division;
        protected $Item;
        protected $ItemDescription;
        protected $LineNumber;
        protected $NetPrice;
        protected $Notes;
        protected $Quantity;
        protected $QuotationID;
        protected $QuotationNumber;
        protected $UnitCode;
        protected $UnitDescription;
        protected $UnitPrice;
        protected $VATAmountFC;
        protected $VATCode;
        protected $VATDescription;
        protected $VATPercentage;
        protected $VersionNumber;
        protected $url = 'crm/QuotationLines';


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
    public function getQuotationID()
    {
        return $this->QuotationID;
    }

    /**
     * @param mixed $QuotationID
     *
     * @return self
     */
    public function setQuotationID($QuotationID)
    {
        $this->QuotationID = $QuotationID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuotationNumber()
    {
        return $this->QuotationNumber;
    }

    /**
     * @param mixed $QuotationNumber
     *
     * @return self
     */
    public function setQuotationNumber($QuotationNumber)
    {
        $this->QuotationNumber = $QuotationNumber;

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
    public function getVATDescription()
    {
        return $this->VATDescription;
    }

    /**
     * @param mixed $VATDescription
     *
     * @return self
     */
    public function setVATDescription($VATDescription)
    {
        $this->VATDescription = $VATDescription;

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
    public function getVersionNumber()
    {
        return $this->VersionNumber;
    }

    /**
     * @param mixed $VersionNumber
     *
     * @return self
     */
    public function setVersionNumber($VersionNumber)
    {
        $this->VersionNumber = $VersionNumber;

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
