<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ItemExtraField extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=logisticsItemExtraField
 *
 * @property string $Description Description of item
 * @property ItemID $ItemID Primary key
 * @property string $Modified Last modified date
 * @property float $Number Number of Field Order
 * @property string $Value Value of the selected List
 *
 */

class ItemExtraField extends Model 
{
    
        protected $Description;
        protected $ItemID;
        protected $Modified;
        protected $Number;
        protected $Value;
        protected $url = 'read/logistics/ItemExtraField';

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
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     * @param mixed $ItemID
     *
     * @return self
     */
    public function setItemID($ItemID)
    {
        $this->ItemID = $ItemID;

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
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param mixed $Number
     *
     * @return self
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param mixed $Value
     *
     * @return self
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

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