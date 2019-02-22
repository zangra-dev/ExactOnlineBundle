<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GLTransactionType extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLTransactionTypes
 *
 * @property int $ID
 * @property string $Description
 * @property string $DescriptionSuffix
 */
class GLTransactionType extends Model 
{

        protected $ID;
        protected $Description;
        protected $DescriptionSuffix;
   		protected $url = 'financial/GLTransactionTypes';


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
    public function getDescriptionSuffix()
    {
        return $this->DescriptionSuffix;
    }

    /**
     * @param mixed $DescriptionSuffix
     *
     * @return self
     */
    public function setDescriptionSuffix($DescriptionSuffix)
    {
        $this->DescriptionSuffix = $DescriptionSuffix;

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
