<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Units extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsUnits
 *
 * @property string $ID Primary key
 * @property bool $Active Indicates whether a unit is in use
 * @property string $Code Unique code for the unit
 * @property string $Description Description
 * @property int $Division Division code
 * @property int $Main	Indicates the main unit per division. Will be used when creating new item
 * @property string $TimeUnit If Type = 'T' (time) then this fields indicates the type of time frame. yy = Year, mm = Month, wk = Week, dd = Day, hh = Hour, mi = Minute, ss = Second
 * @property string $Type Type 'Time' is especially important for contracts.

 */
class Units extends Model 
{
        protected $ID;
        protected $Active;
        protected $Code;
        protected $Description;
        protected $Division;
        protected $Main;
        protected $TimeUnit;
        protected $Type;
        protected $url = 'logistics/Units';

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
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param mixed $Active
     *
     * @return self
     */
    public function setActive($Active)
    {
        $this->Active = $Active;

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
    public function getTimeUnit()
    {
        return $this->TimeUnit;
    }

    /**
     * @param mixed $TimeUnit
     *
     * @return self
     */
    public function setTimeUnit($TimeUnit)
    {
        $this->TimeUnit = $TimeUnit;

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