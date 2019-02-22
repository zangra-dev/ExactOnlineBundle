<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class BillOfMaterialVersion extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingBillOfMaterialVersions
 *
 * @property string $ID Primary key
 * @property float $BatchQuantity Batch Quantity of Item Version
 * @property string $CadDrawingUrl Cad drawing URL
 * @property float $CalculatedCostPrice Calculated Cost Price of Item Version
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item version
 * @property int $Division Division code
 * @property int $IsDefault Indicates if this is the default item version that will be assigned when a item is selected
 * @property string $Item Reference to Items table
 * @property string $ItemDescription Description of Item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Line notes
 * @property int $OrderLeadDays Order lead days for item
 * @property int $ProductionLeadDays Production lead time in days of Item version
 * @property int $Status Statuses of Item version: 10-Engineering change pending, 20-Engineering change approved, 30-Active & 40-Historic
 * @property string $StatusDescription Description of Status
 * @property int $Type Type of Item version: 10-Sales bill of material, 20-Manufacturing recipe
 * @property string $TypeDescription Description of Type
 * @property string $VersionDate Version date
 * @property int $VersionNumber Version Number
 */
class BillOfMaterialVersion extends Model 
{
        protected $ID;
        protected $BatchQuantity;
        protected $CadDrawingUrl;
        protected $CalculatedCostPrice;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $IsDefault;
        protected $Item;
        protected $ItemDescription;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $OrderLeadDays;
        protected $ProductionLeadDays;
        protected $Status;
        protected $StatusDescription;
        protected $Type;
        protected $TypeDescription;
        protected $VersionDate;
        protected $VersionNumber;
        protected $url = 'manufacturing/BillOfMaterialVersions';

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
    public function getBatchQuantity()
    {
        return $this->BatchQuantity;
    }

    /**
     * @param mixed $BatchQuantity
     *
     * @return self
     */
    public function setBatchQuantity($BatchQuantity)
    {
        $this->BatchQuantity = $BatchQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCadDrawingUrl()
    {
        return $this->CadDrawingUrl;
    }

    /**
     * @param mixed $CadDrawingUrl
     *
     * @return self
     */
    public function setCadDrawingUrl($CadDrawingUrl)
    {
        $this->CadDrawingUrl = $CadDrawingUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCalculatedCostPrice()
    {
        return $this->CalculatedCostPrice;
    }

    /**
     * @param mixed $CalculatedCostPrice
     *
     * @return self
     */
    public function setCalculatedCostPrice($CalculatedCostPrice)
    {
        $this->CalculatedCostPrice = $CalculatedCostPrice;

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
    public function getIsDefault()
    {
        return $this->IsDefault;
    }

    /**
     * @param mixed $IsDefault
     *
     * @return self
     */
    public function setIsDefault($IsDefault)
    {
        $this->IsDefault = $IsDefault;

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
    public function getOrderLeadDays()
    {
        return $this->OrderLeadDays;
    }

    /**
     * @param mixed $OrderLeadDays
     *
     * @return self
     */
    public function setOrderLeadDays($OrderLeadDays)
    {
        $this->OrderLeadDays = $OrderLeadDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductionLeadDays()
    {
        return $this->ProductionLeadDays;
    }

    /**
     * @param mixed $ProductionLeadDays
     *
     * @return self
     */
    public function setProductionLeadDays($ProductionLeadDays)
    {
        $this->ProductionLeadDays = $ProductionLeadDays;

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
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }

    /**
     * @param mixed $StatusDescription
     *
     * @return self
     */
    public function setStatusDescription($StatusDescription)
    {
        $this->StatusDescription = $StatusDescription;

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
    public function getTypeDescription()
    {
        return $this->TypeDescription;
    }

    /**
     * @param mixed $TypeDescription
     *
     * @return self
     */
    public function setTypeDescription($TypeDescription)
    {
        $this->TypeDescription = $TypeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVersionDate()
    {
        return $this->VersionDate;
    }

    /**
     * @param mixed $VersionDate
     *
     * @return self
     */
    public function setVersionDate($VersionDate)
    {
        $this->VersionDate = $VersionDate;

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
