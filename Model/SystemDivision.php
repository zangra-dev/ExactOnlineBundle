<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SystemDivision extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemDivisions
 *
 * @property int $Code Primary key
 * @property string $AddressLine1 Address line 1
 * @property string $AddressLine2 Address line 2
 * @property string $AddressLine3 Address line 3
 * @property string $ChamberOfCommerceNumber Chamber of commerce number
 * @property string $City City
 * @property string $Country Country of the division. Is used for determination of legislation
 * @property string $Created Creation date
 * @property string $Currency Default currency
 * @property bool $Current True when this division is most recently used by the API
 * @property string $Customer Owner account of the division
 * @property string $CustomerCode Owner account code of the division
 * @property string $CustomerName Owner account name of the division
 * @property string $Description Description
 * @property string $Email Email address
 * @property int $Hid Company number that is assigned by the customer
 * @property bool $IsMainDivision True if the division is the main division
 * @property string $Modified Last modified date
 * @property string $Phone Phone number
 * @property string $Postcode Postcode
 * @property string $State State/Province code
 * @property int $Status Follow the Division Status 0 for Inactive, 1 for Active and 2 for Archived Divisions
 * @property string $VATNumber The number under which the account is known at the Value Added Tax collection agency
 */
class SystemDivision extends Model 
{
        protected $primaryKey = 'Code';
        protected $Code;
        protected $AddressLine1;
        protected $AddressLine2;
        protected $AddressLine3;
        protected $ChamberOfCommerceNumber;
        protected $City;
        protected $Country;
        protected $Created;
        protected $Currency;
        protected $Current;
        protected $Customer;
        protected $CustomerCode;
        protected $CustomerName;
        protected $Description;
        protected $Email;
        protected $Hid;
        protected $IsMainDivision;
        protected $Modified;
        protected $Phone;
        protected $Postcode;
        protected $State;
        protected $Status;
        protected $VATNumber;
        protected $url = 'system/Divisions';

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
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * @param mixed $AddressLine1
     *
     * @return self
     */
    public function setAddressLine1($AddressLine1)
    {
        $this->AddressLine1 = $AddressLine1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    /**
     * @param mixed $AddressLine2
     *
     * @return self
     */
    public function setAddressLine2($AddressLine2)
    {
        $this->AddressLine2 = $AddressLine2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine3()
    {
        return $this->AddressLine3;
    }

    /**
     * @param mixed $AddressLine3
     *
     * @return self
     */
    public function setAddressLine3($AddressLine3)
    {
        $this->AddressLine3 = $AddressLine3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChamberOfCommerceNumber()
    {
        return $this->ChamberOfCommerceNumber;
    }

    /**
     * @param mixed $ChamberOfCommerceNumber
     *
     * @return self
     */
    public function setChamberOfCommerceNumber($ChamberOfCommerceNumber)
    {
        $this->ChamberOfCommerceNumber = $ChamberOfCommerceNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     *
     * @return self
     */
    public function setCity($City)
    {
        $this->City = $City;

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
    public function getCurrent()
    {
        return $this->Current;
    }

    /**
     * @param mixed $Current
     *
     * @return self
     */
    public function setCurrent($Current)
    {
        $this->Current = $Current;

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
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }

    /**
     * @param mixed $CustomerCode
     *
     * @return self
     */
    public function setCustomerCode($CustomerCode)
    {
        $this->CustomerCode = $CustomerCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }

    /**
     * @param mixed $CustomerName
     *
     * @return self
     */
    public function setCustomerName($CustomerName)
    {
        $this->CustomerName = $CustomerName;

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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     *
     * @return self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHid()
    {
        return $this->Hid;
    }

    /**
     * @param mixed $Hid
     *
     * @return self
     */
    public function setHid($Hid)
    {
        $this->Hid = $Hid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsMainDivision()
    {
        return $this->IsMainDivision;
    }

    /**
     * @param mixed $IsMainDivision
     *
     * @return self
     */
    public function setIsMainDivision($IsMainDivision)
    {
        $this->IsMainDivision = $IsMainDivision;

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
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     *
     * @return self
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param mixed $Postcode
     *
     * @return self
     */
    public function setPostcode($Postcode)
    {
        $this->Postcode = $Postcode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     *
     * @return self
     */
    public function setState($State)
    {
        $this->State = $State;

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
