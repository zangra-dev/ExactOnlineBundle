<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ItemGroup extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=logisticsItemGroups
 *
 * @property string $ID Primary key
 * @property string $Code Code of the item group
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item group
 * @property int $Division Division code
 * @property string $GLCosts GL account on which the costs of items of this group will be booked
 * @property string $GLCostsCode Code of GLCosts
 * @property string $GLCostsDescription Description of GLCosts
 * @property string $GLRevenue GL account on which the revenue for items of this group will be booked
 * @property string $GLRevenueCode Code of GLRevenue
 * @property string $GLRevenueDescription Description of GLRevenue
 * @property string $GLStock GL account on which stock entries will be booked for items of this group
 * @property string $GLStockCode Code of GLStock
 * @property string $GLStockDescription Description of GLStock
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 */
class ItemGroup extends Model 
{
        protected $ID;
        protected $Code;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $GLCosts;
        protected $GLCostsCode;
        protected $GLCostsDescription;
        protected $GLRevenue;
        protected $GLRevenueCode;
        protected $GLRevenueDescription;
        protected $GLStock;
        protected $GLStockCode;
        protected $GLStockDescription;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $url = 'logistics/ItemGroups';

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
    public function getGLCosts()
    {
        return $this->GLCosts;
    }

    /**
     * @param mixed $GLCosts
     *
     * @return self
     */
    public function setGLCosts($GLCosts)
    {
        $this->GLCosts = $GLCosts;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLCostsCode()
    {
        return $this->GLCostsCode;
    }

    /**
     * @param mixed $GLCostsCode
     *
     * @return self
     */
    public function setGLCostsCode($GLCostsCode)
    {
        $this->GLCostsCode = $GLCostsCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLCostsDescription()
    {
        return $this->GLCostsDescription;
    }

    /**
     * @param mixed $GLCostsDescription
     *
     * @return self
     */
    public function setGLCostsDescription($GLCostsDescription)
    {
        $this->GLCostsDescription = $GLCostsDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLRevenue()
    {
        return $this->GLRevenue;
    }

    /**
     * @param mixed $GLRevenue
     *
     * @return self
     */
    public function setGLRevenue($GLRevenue)
    {
        $this->GLRevenue = $GLRevenue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLRevenueCode()
    {
        return $this->GLRevenueCode;
    }

    /**
     * @param mixed $GLRevenueCode
     *
     * @return self
     */
    public function setGLRevenueCode($GLRevenueCode)
    {
        $this->GLRevenueCode = $GLRevenueCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLRevenueDescription()
    {
        return $this->GLRevenueDescription;
    }

    /**
     * @param mixed $GLRevenueDescription
     *
     * @return self
     */
    public function setGLRevenueDescription($GLRevenueDescription)
    {
        $this->GLRevenueDescription = $GLRevenueDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLStock()
    {
        return $this->GLStock;
    }

    /**
     * @param mixed $GLStock
     *
     * @return self
     */
    public function setGLStock($GLStock)
    {
        $this->GLStock = $GLStock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLStockCode()
    {
        return $this->GLStockCode;
    }

    /**
     * @param mixed $GLStockCode
     *
     * @return self
     */
    public function setGLStockCode($GLStockCode)
    {
        $this->GLStockCode = $GLStockCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLStockDescription()
    {
        return $this->GLStockDescription;
    }

    /**
     * @param mixed $GLStockDescription
     *
     * @return self
     */
    public function setGLStockDescription($GLStockDescription)
    {
        $this->GLStockDescription = $GLStockDescription;

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
    public function getModifierFullName()
    {
        return $this->ModifierFullName;
    }

    /**
     * @param mixed $ModifierFullName
     *
     * @return self
     */
    public function setModifierFullName($ModifierFullName)
    {
        $this->ModifierFullName = $ModifierFullName;

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