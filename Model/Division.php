<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Division extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=hrmDivisions
 *
 * @property int $Code Primary key
 * @property int $BlockingStatus Values: 0 = Not blocked 1 = Backup 2 = Conversion busy 3 = Conversion shadow 4 = Conversion waiting 5 = Copy data waiting 6 = Copy data buzy 100 = Wait for deletion 101 = Deleted 102 = Deletion failed
 * @property string $Country Country of the division. Is used for determination of legislation
 * @property string $CountryDescription Description of Country
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $Currency Default currency of the division
 * @property string $CurrencyDescription Description of Currency
 * @property string $Customer Owner account of the division
 * @property string $Description Description of Country
 * @property int $HID Number that customers give to the division
 * @property bool $Main True for the main (hosting) division
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $SiretNumber Siret Number of the division (France)
 * @property string $StartDate Date on which the division becomes active
 * @property int $Status Values: 0 = Not blocked 1 = Backup 2 = Conversion busy 3 = Conversion shadow 4 = Conversion waiting 5 = Copy data waiting 6 = Copy data buzy 100 = Wait for deletion 101 = Deleted 102 = Deletion failed
 * @property string $TaxOfficeNumber Number of your local tax authority (Germany)
 * @property string $TaxReferenceNumber Local tax reference number (Germany)
 * @property string $VATNumber VAT number
 * @property string $Website Customer value, hyperlink to external website
 */
class Division extends Model 
{
        protected $primaryKey = 'Code';
        protected $Code;
        protected $BlockingStatus;
        protected $Country;
        protected $CountryDescription;
        protected $Created;
        protected $Creator;
        protected $Currency;
        protected $CurrencyDescription;
        protected $Customer;
        protected $Description;
        protected $HID;
        protected $Main;
        protected $Modified;
        protected $Modifier;
        protected $SiretNumber;
        protected $StartDate;
        protected $Status;
        protected $TaxOfficeNumber;
        protected $TaxReferenceNumber;
        protected $VATNumber;
        protected $Website;
        protected $url = 'hrm/Divisions';

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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param mixed $Code
     *
     * @return self
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockingStatus()
    {
        return $this->BlockingStatus;
    }

    /**
     * @param mixed $BlockingStatus
     *
     * @return self
     */
    public function setBlockingStatus($BlockingStatus)
    {
        $this->BlockingStatus = $BlockingStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     *
     * @return self
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryDescription()
    {
        return $this->CountryDescription;
    }

    /**
     * @param mixed $CountryDescription
     *
     * @return self
     */
    public function setCountryDescription($CountryDescription)
    {
        $this->CountryDescription = $CountryDescription;

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
    public function getCreator()
    {
        return $this->Creator;
    }

    /**
     * @param mixed $Creator
     *
     * @return self
     */
    public function setCreator($Creator)
    {
        $this->Creator = $Creator;

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
    public function getCurrencyDescription()
    {
        return $this->CurrencyDescription;
    }

    /**
     * @param mixed $CurrencyDescription
     *
     * @return self
     */
    public function setCurrencyDescription($CurrencyDescription)
    {
        $this->CurrencyDescription = $CurrencyDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param mixed $Customer
     *
     * @return self
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;

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
    public function getMain()
    {
        return $this->Main;
    }

    /**
     * @param mixed $Main
     *
     * @return self
     */
    public function setMain($Main)
    {
        $this->Main = $Main;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->Modified;
    }

    /**
     * @param mixed $Modified
     *
     * @return self
     */
    public function setModified($Modified)
    {
        $this->Modified = $Modified;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifier()
    {
        return $this->Modifier;
    }

    /**
     * @param mixed $Modifier
     *
     * @return self
     */
    public function setModifier($Modifier)
    {
        $this->Modifier = $Modifier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSiretNumber()
    {
        return $this->SiretNumber;
    }

    /**
     * @param mixed $SiretNumber
     *
     * @return self
     */
    public function setSiretNumber($SiretNumber)
    {
        $this->SiretNumber = $SiretNumber;

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
    public function getTaxOfficeNumber()
    {
        return $this->TaxOfficeNumber;
    }

    /**
     * @param mixed $TaxOfficeNumber
     *
     * @return self
     */
    public function setTaxOfficeNumber($TaxOfficeNumber)
    {
        $this->TaxOfficeNumber = $TaxOfficeNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxReferenceNumber()
    {
        return $this->TaxReferenceNumber;
    }

    /**
     * @param mixed $TaxReferenceNumber
     *
     * @return self
     */
    public function setTaxReferenceNumber($TaxReferenceNumber)
    {
        $this->TaxReferenceNumber = $TaxReferenceNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATNumber()
    {
        return $this->VATNumber;
    }

    /**
     * @param mixed $VATNumber
     *
     * @return self
     */
    public function setVATNumber($VATNumber)
    {
        $this->VATNumber = $VATNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param mixed $Website
     *
     * @return self
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;

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
