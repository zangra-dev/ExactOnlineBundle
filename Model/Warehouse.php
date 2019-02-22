<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Warehouse extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryWarehouses
 *
 * @property string $ID Primary key
 * @property string $Code Code of the warehouse
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $DefaultStorageLocation The default storage location of this warehouse. Warehouses can have a default storage location in packages Manufacturing Premium or Wholesale Premium
 * @property string $DefaultStorageLocationCode Default storage location's code
 * @property string $DefaultStorageLocationDescription Default storage location's description
 * @property string $Description The description of the warehouse
 * @property int $Division Division code
 * @property string $EMail Email address
 * @property int $Main Indicates if this is the main warehouse. There's always exactly one main warehouse per administration
 * @property string $ManagerUser User reponsible for the warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $UseStorageLocations Indicates if this warehouse is using storage locations. The storage locations will not be removed when when this is deactivated
 */
class Warehouse extends Model 
{
        protected $ID;
        protected $Code;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $DefaultStorageLocation;
        protected $DefaultStorageLocationCode;
        protected $DefaultStorageLocationDescription;
        protected $Description;
        protected $Division;
        protected $EMail;
        protected $Main;
        protected $ManagerUser;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $UseStorageLocations;
        protected $url = 'inventory/Warehouses';


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
    public function getDefaultStorageLocation()
    {
        return $this->DefaultStorageLocation;
    }

    /**
     * @param mixed $DefaultStorageLocation
     *
     * @return self
     */
    public function setDefaultStorageLocation($DefaultStorageLocation)
    {
        $this->DefaultStorageLocation = $DefaultStorageLocation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultStorageLocationCode()
    {
        return $this->DefaultStorageLocationCode;
    }

    /**
     * @param mixed $DefaultStorageLocationCode
     *
     * @return self
     */
    public function setDefaultStorageLocationCode($DefaultStorageLocationCode)
    {
        $this->DefaultStorageLocationCode = $DefaultStorageLocationCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultStorageLocationDescription()
    {
        return $this->DefaultStorageLocationDescription;
    }

    /**
     * @param mixed $DefaultStorageLocationDescription
     *
     * @return self
     */
    public function setDefaultStorageLocationDescription($DefaultStorageLocationDescription)
    {
        $this->DefaultStorageLocationDescription = $DefaultStorageLocationDescription;

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
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param mixed $EMail
     *
     * @return self
     */
    public function setEMail($EMail)
    {
        $this->EMail = $EMail;

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
    public function getManagerUser()
    {
        return $this->ManagerUser;
    }

    /**
     * @param mixed $ManagerUser
     *
     * @return self
     */
    public function setManagerUser($ManagerUser)
    {
        $this->ManagerUser = $ManagerUser;

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
    public function getUseStorageLocations()
    {
        return $this->UseStorageLocations;
    }

    /**
     * @param mixed $UseStorageLocations
     *
     * @return self
     */
    public function setUseStorageLocations($UseStorageLocations)
    {
        $this->UseStorageLocations = $UseStorageLocations;

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