<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class BillOfMaterialMaterial extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingBillOfMaterialMaterials
 *
 * @property string $ID Primary key
 * @property float $AverageCost Item average cost available when average cost method is used
 * @property int $Backflush Indicates if this is a backflush item
 * @property int $CalculatorType Calculator type
 * @property float $CostBatch Cost batch
 * @property string $CostCenter Cost center
 * @property string $CostCenterDescription Cost center description
 * @property string $CostUnit Cost unit
 * @property string $CostUnitDescription Cost unit description
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the material
 * @property string $DetailDrawing Detail drawing reference
 * @property int $Division Division code
 * @property string $ItemVersion Key of item version
 * @property int $LineNumber Line number
 * @property float $NetWeight Net weight
 * @property string $NetWeightUnit Net weight unit of measure
 * @property string $Notes Notes
 * @property string $PartItem Key of part item
 * @property string $PartItemCode Part item code
 * @property float $PartItemCostPriceStandard Item standard cost available when standard cost method is used
 * @property string $PartItemDescription Part item description
 * @property float $Quantity Quantity
 * @property float $QuantityBatch Quantity batch
 * @property string $syscreated Creation date
 * @property string $syscreator User ID of creator
 * @property string $sysmodified Modified date
 * @property string $sysmodifier User ID of modifier
 * @property int $Type Material type 1 indicates material, 2 indicates byproduct
 */
class BillOfMaterialMaterial extends Model 
{
        protected $ID;
        protected $AverageCost;
        protected $Backflush;
        protected $CalculatorType;
        protected $CostBatch;
        protected $CostCenter;
        protected $CostCenterDescription;
        protected $CostUnit;
        protected $CostUnitDescription;
        protected $CreatorFullName;
        protected $Description;
        protected $DetailDrawing;
        protected $Division;
        protected $ItemVersion;
        protected $LineNumber;
        protected $NetWeight;
        protected $NetWeightUnit;
        protected $Notes;
        protected $PartItem;
        protected $PartItemCode;
        protected $PartItemCostPriceStandard;
        protected $PartItemDescription;
        protected $Quantity;
        protected $QuantityBatch;
        protected $syscreated;
        protected $syscreator;
        protected $sysmodified;
        protected $sysmodifier;
        protected $Type;
        protected $url = 'manufacturing/BillOfMaterialMaterials';

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
    public function getAverageCost()
    {
        return $this->AverageCost;
    }

    /**
     * @param mixed $AverageCost
     *
     * @return self
     */
    public function setAverageCost($AverageCost)
    {
        $this->AverageCost = $AverageCost;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBackflush()
    {
        return $this->Backflush;
    }

    /**
     * @param mixed $Backflush
     *
     * @return self
     */
    public function setBackflush($Backflush)
    {
        $this->Backflush = $Backflush;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCalculatorType()
    {
        return $this->CalculatorType;
    }

    /**
     * @param mixed $CalculatorType
     *
     * @return self
     */
    public function setCalculatorType($CalculatorType)
    {
        $this->CalculatorType = $CalculatorType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostBatch()
    {
        return $this->CostBatch;
    }

    /**
     * @param mixed $CostBatch
     *
     * @return self
     */
    public function setCostBatch($CostBatch)
    {
        $this->CostBatch = $CostBatch;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }

    /**
     * @param mixed $CostCenter
     *
     * @return self
     */
    public function setCostCenter($CostCenter)
    {
        $this->CostCenter = $CostCenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostCenterDescription()
    {
        return $this->CostCenterDescription;
    }

    /**
     * @param mixed $CostCenterDescription
     *
     * @return self
     */
    public function setCostCenterDescription($CostCenterDescription)
    {
        $this->CostCenterDescription = $CostCenterDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostUnit()
    {
        return $this->CostUnit;
    }

    /**
     * @param mixed $CostUnit
     *
     * @return self
     */
    public function setCostUnit($CostUnit)
    {
        $this->CostUnit = $CostUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostUnitDescription()
    {
        return $this->CostUnitDescription;
    }

    /**
     * @param mixed $CostUnitDescription
     *
     * @return self
     */
    public function setCostUnitDescription($CostUnitDescription)
    {
        $this->CostUnitDescription = $CostUnitDescription;

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
    public function getDetailDrawing()
    {
        return $this->DetailDrawing;
    }

    /**
     * @param mixed $DetailDrawing
     *
     * @return self
     */
    public function setDetailDrawing($DetailDrawing)
    {
        $this->DetailDrawing = $DetailDrawing;

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
    public function getItemVersion()
    {
        return $this->ItemVersion;
    }

    /**
     * @param mixed $ItemVersion
     *
     * @return self
     */
    public function setItemVersion($ItemVersion)
    {
        $this->ItemVersion = $ItemVersion;

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
    public function getNetWeight()
    {
        return $this->NetWeight;
    }

    /**
     * @param mixed $NetWeight
     *
     * @return self
     */
    public function setNetWeight($NetWeight)
    {
        $this->NetWeight = $NetWeight;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNetWeightUnit()
    {
        return $this->NetWeightUnit;
    }

    /**
     * @param mixed $NetWeightUnit
     *
     * @return self
     */
    public function setNetWeightUnit($NetWeightUnit)
    {
        $this->NetWeightUnit = $NetWeightUnit;

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
    public function getPartItem()
    {
        return $this->PartItem;
    }

    /**
     * @param mixed $PartItem
     *
     * @return self
     */
    public function setPartItem($PartItem)
    {
        $this->PartItem = $PartItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartItemCode()
    {
        return $this->PartItemCode;
    }

    /**
     * @param mixed $PartItemCode
     *
     * @return self
     */
    public function setPartItemCode($PartItemCode)
    {
        $this->PartItemCode = $PartItemCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartItemCostPriceStandard()
    {
        return $this->PartItemCostPriceStandard;
    }

    /**
     * @param mixed $PartItemCostPriceStandard
     *
     * @return self
     */
    public function setPartItemCostPriceStandard($PartItemCostPriceStandard)
    {
        $this->PartItemCostPriceStandard = $PartItemCostPriceStandard;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartItemDescription()
    {
        return $this->PartItemDescription;
    }

    /**
     * @param mixed $PartItemDescription
     *
     * @return self
     */
    public function setPartItemDescription($PartItemDescription)
    {
        $this->PartItemDescription = $PartItemDescription;

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
    public function getQuantityBatch()
    {
        return $this->QuantityBatch;
    }

    /**
     * @param mixed $QuantityBatch
     *
     * @return self
     */
    public function setQuantityBatch($QuantityBatch)
    {
        $this->QuantityBatch = $QuantityBatch;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyscreated()
    {
        return $this->syscreated;
    }

    /**
     * @param mixed $syscreated
     *
     * @return self
     */
    public function setSyscreated($syscreated)
    {
        $this->syscreated = $syscreated;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyscreator()
    {
        return $this->syscreator;
    }

    /**
     * @param mixed $syscreator
     *
     * @return self
     */
    public function setSyscreator($syscreator)
    {
        $this->syscreator = $syscreator;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSysmodified()
    {
        return $this->sysmodified;
    }

    /**
     * @param mixed $sysmodified
     *
     * @return self
     */
    public function setSysmodified($sysmodified)
    {
        $this->sysmodified = $sysmodified;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSysmodifier()
    {
        return $this->sysmodifier;
    }

    /**
     * @param mixed $sysmodifier
     *
     * @return self
     */
    public function setSysmodifier($sysmodifier)
    {
        $this->sysmodifier = $sysmodifier;

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
