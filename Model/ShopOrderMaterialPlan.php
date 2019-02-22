<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ShopOrderMaterialPlan extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderMaterialPlans
 *
 * @property string $ID Primary key
 * @property int $Backflush Indicates if this is a backflush step
 * @property int $CalculatorType Calculator type
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the material
 * @property string $DetailDrawing Detail drawing reference
 * @property int $Division Division code
 * @property string $Item Reference to Items table
 * @property string $ItemCode Item Code
 * @property string $ItemDescription Description of Item
 * @property string $ItemPictureUrl URL of the material item's picture
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Line notes
 * @property float $PlannedAmountFC Planned amount in the currency of the transaction
 * @property string $PlannedDate Date that the material is required.
 * @property float $PlannedPriceFC Planned price of the material
 * @property float $PlannedQuantity Intended quantity
 * @property float $PlannedQuantityFactor Intended quantity unit factor
 * @property string $ShopOrder Reference to ShopOrders table
 * @property int $Status Line status
 * @property string $StatusDescription Description of Status
 * @property int $Type Type
 * @property string $Unit Unit
 * @property string $UnitDescription Unit description
 */
class ShopOrderMaterialPlan extends Model 
{
        protected $ID;
        protected $Backflush;
        protected $CalculatorType;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $DetailDrawing;
        protected $Division;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $ItemPictureUrl;
        protected $LineNumber;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $PlannedAmountFC;
        protected $PlannedDate;
        protected $PlannedPriceFC;
        protected $PlannedQuantity;
        protected $PlannedQuantityFactor;
        protected $ShopOrder;
        protected $Status;
        protected $StatusDescription;
        protected $Type;
        protected $Unit;
        protected $UnitDescription;
        protected $url = 'manufacturing/ShopOrderMaterialPlans';

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
    public function getItemCode()
    {
        return $this->ItemCode;
    }

    /**
     * @param mixed $ItemCode
     *
     * @return self
     */
    public function setItemCode($ItemCode)
    {
        $this->ItemCode = $ItemCode;

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
    public function getItemPictureUrl()
    {
        return $this->ItemPictureUrl;
    }

    /**
     * @param mixed $ItemPictureUrl
     *
     * @return self
     */
    public function setItemPictureUrl($ItemPictureUrl)
    {
        $this->ItemPictureUrl = $ItemPictureUrl;

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
    public function getPlannedAmountFC()
    {
        return $this->PlannedAmountFC;
    }

    /**
     * @param mixed $PlannedAmountFC
     *
     * @return self
     */
    public function setPlannedAmountFC($PlannedAmountFC)
    {
        $this->PlannedAmountFC = $PlannedAmountFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedDate()
    {
        return $this->PlannedDate;
    }

    /**
     * @param mixed $PlannedDate
     *
     * @return self
     */
    public function setPlannedDate($PlannedDate)
    {
        $this->PlannedDate = $PlannedDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedPriceFC()
    {
        return $this->PlannedPriceFC;
    }

    /**
     * @param mixed $PlannedPriceFC
     *
     * @return self
     */
    public function setPlannedPriceFC($PlannedPriceFC)
    {
        $this->PlannedPriceFC = $PlannedPriceFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedQuantity()
    {
        return $this->PlannedQuantity;
    }

    /**
     * @param mixed $PlannedQuantity
     *
     * @return self
     */
    public function setPlannedQuantity($PlannedQuantity)
    {
        $this->PlannedQuantity = $PlannedQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedQuantityFactor()
    {
        return $this->PlannedQuantityFactor;
    }

    /**
     * @param mixed $PlannedQuantityFactor
     *
     * @return self
     */
    public function setPlannedQuantityFactor($PlannedQuantityFactor)
    {
        $this->PlannedQuantityFactor = $PlannedQuantityFactor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrder()
    {
        return $this->ShopOrder;
    }

    /**
     * @param mixed $ShopOrder
     *
     * @return self
     */
    public function setShopOrder($ShopOrder)
    {
        $this->ShopOrder = $ShopOrder;

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
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * @param mixed $Unit
     *
     * @return self
     */
    public function setUnit($Unit)
    {
        $this->Unit = $Unit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitDescription()
    {
        return $this->UnitDescription;
    }

    /**
     * @param mixed $UnitDescription
     *
     * @return self
     */
    public function setUnitDescription($UnitDescription)
    {
        $this->UnitDescription = $UnitDescription;

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
