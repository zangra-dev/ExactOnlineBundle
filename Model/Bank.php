<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Bank extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowBanks
 *
 * @property string $ID Primary key
 * @property string $BankName The name of the bank
 * @property string $BICCode The bank identification code of the bank
 * @property string $Country The country in which the bank is based
 * @property string $Created Creation date
 * @property string $Description The extended description of the bank
 * @property string $Format The account format used by the bank
 * @property string $HomePageAddress The website of the bank
 * @property string $Modified Last modified date
 * @property string $Status The status of the bank. A = Active, P = Passive
 */
class Bank extends Model
{
        protected $ID;
        protected $BankName;
        protected $BICCode;
        protected $Country;
        protected $Created;
        protected $Description;
        protected $Format;
        protected $HomePageAddress;
        protected $Modified;
        protected $Status;
        protected $url = 'cashflow/Banks';


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
    public function getBankName()
    {
        return $this->BankName;
    }

    /**
     * @param mixed $BankName
     *
     * @return self
     */
    public function setBankName($BankName)
    {
        $this->BankName = $BankName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBICCode()
    {
        return $this->BICCode;
    }

    /**
     * @param mixed $BICCode
     *
     * @return self
     */
    public function setBICCode($BICCode)
    {
        $this->BICCode = $BICCode;

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
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * @param mixed $Format
     *
     * @return self
     */
    public function setFormat($Format)
    {
        $this->Format = $Format;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHomePageAddress()
    {
        return $this->HomePageAddress;
    }

    /**
     * @param mixed $HomePageAddress
     *
     * @return self
     */
    public function setHomePageAddress($HomePageAddress)
    {
        $this->HomePageAddress = $HomePageAddress;

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
