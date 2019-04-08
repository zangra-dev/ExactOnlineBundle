<?php

namespace aibianchi\ExactOnlineBundle\Model;

use aibianchi\ExactOnlineBundle\Model\Base\Model;

/**
 * Class ShopOrder
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrders
 *
 * @property string $ID Primary key
 * @property string $CADDrawingURL URL to CAD Drawing Specified on Manufacturing Bill of Material
 * @property string $Costcenter The cost center linked to the shop order
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit The cost unit linked to the shop order
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the shop order
 * @property int $Division Division code
 * @property string $EntryDate Date on which the shop order was placed
 * @property int $IsBatch Does the material plan's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the material plan's item
 * @property int $IsInPlanning Indicator that Shop order is in planning
 * @property int $IsOnHold Indicator if the Shop order is on hold
 * @property int $IsReleased Indicator that the Shop order has been released to production
 * @property int $IsSerial Does the material plan's item use serial numbers
 * @property string $Item Reference to the item
 * @property string $ItemCode Code of the item created by this shop order
 * @property string $ItemDescription Description of the item created by this shop order
 * @property string $ItemPictureUrl URL of the item created by this shop order
 * @property string $ItemVersion Reference to ItemVersion
 * @property string $ItemVersionDescription Description of Item Version
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes - only viewed internally
 * @property string $PlannedDate Planned end date of this shop order
 * @property float $PlannedQuantity Planned quantity
 * @property string $PlannedStartDate Planned start date of this shop order
 * @property float $ProducedQuantity Produced quantity
 * @property int $ProductionLeadDays Production lead days
 * @property string $Project Reference to Project
 * @property string $ProjectDescription Description of Project
 * @property float $ReadyToShipQuantity Quantity ready to ship
 * @property int $SalesOrderLineCount Number of sales orders linked to this shop order
 * @property salesorderlines $SalesOrderLines Collection of Sales order lines
 * @property int $ShopOrderByProductPlanBackflushCount Number of shop order by-product plans, which are backflushed, for this shop order
 * @property int $ShopOrderByProductPlanCount Number of shop order by-product plans for this shop order
 * @property string $ShopOrderMain Shop order main
 * @property int $ShopOrderMainNumber Shop order main number
 * @property int $ShopOrderMaterialPlanBackflushCount Number of shop order material plans, which are backflushed, for this shop order
 * @property int $ShopOrderMaterialPlanCount Number of shop order material plans for this shop order
 * @property shopordermaterialplans $ShopOrderMaterialPlans Collection of Shop order Material plans
 * @property int $ShopOrderNumber Unique number to indentify the shop order
 * @property string $ShopOrderNumberString Unique number to indentify the shop order (as a string to allow OData filtering, e.g. $filter=substringof('123',ShopOrderNumberString) eq true
 * @property string $ShopOrderParent Shop order parent
 * @property int $ShopOrderParentNumber Shop order parent number
 * @property int $ShopOrderRoutingStepPlanCount Number of shop order routing step plans for this shop order
 * @property shoporderroutingstepplans $ShopOrderRoutingStepPlans Collection of Shop order Routing step plans
 * @property int $Status Indicates the type of Shop Order: 10 Open, 20 In process, 30 Finished, 40 Completed
 * @property int $SubShopOrderCount The count of material lines of this shop order, which have been linked to a sub order
 * @property int $Type Overall status of the line: 9040 Regular
 * @property string $Unit Unit of the item created by this shop order
 * @property string $UnitDescription Unit description of the unit of the item created by this shop order
 * @property string $Warehouse Reference to the Warehouse associated with the Shop order
 * @property string $YourRef Your reference (of the customer)
 */
class ShopOrder extends Model
{
    protected $ID;
    protected $CADDrawingURL;
    protected $Costcenter;
    protected $CostcenterDescription;
    protected $Costunit;
    protected $CostunitDescription;
    protected $Created;
    protected $Creator;
    protected $CreatorFullName;
    protected $Description;
    protected $Division;
    protected $EntryDate;
    protected $IsBatch;
    protected $IsFractionAllowedItem;
    protected $IsInPlanning;
    protected $IsOnHold;
    protected $IsReleased;
    protected $IsSerial;
    protected $Item;
    protected $ItemCode;
    protected $ItemDescription;
    protected $ItemPictureUrl;
    protected $ItemVersion;
    protected $ItemVersionDescription;
    protected $Modified;
    protected $Modifier;
    protected $ModifierFullName;
    protected $Notes;
    protected $PlannedDate;
    protected $PlannedQuantity;
    protected $PlannedStartDate;
    protected $ProducedQuantity;
    protected $ProductionLeadDays;
    protected $Project;
    protected $ProjectDescription;
    protected $ReadyToShipQuantity;
    protected $SalesOrderLineCount;
    protected $SalesOrderLines;
    protected $ShopOrderByProductPlanBackflushCount;
    protected $ShopOrderByProductPlanCount;
    protected $ShopOrderMain;
    protected $ShopOrderMainNumber;
    protected $ShopOrderMaterialPlanBackflushCount;
    protected $ShopOrderMaterialPlanCount;
    protected $ShopOrderMaterialPlans;
    protected $ShopOrderNumber;
    protected $ShopOrderNumberString;
    protected $ShopOrderParent;
    protected $ShopOrderParentNumber;
    protected $ShopOrderRoutingStepPlanCount;
    protected $ShopOrderRoutingStepPlans;
    protected $Status;
    protected $SubShopOrderCount;
    protected $Type;
    protected $Unit;
    protected $UnitDescription;
    protected $Warehouse;
    protected $YourRef;
    protected $url = 'manufacturing/ShopOrders';



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
    public function getCADDrawingURL()
    {
        return $this->CADDrawingURL;
    }

    /**
     * @param mixed $CADDrawingURL
     *
     * @return self
     */
    public function setCADDrawingURL($CADDrawingURL)
    {
        $this->CADDrawingURL = $CADDrawingURL;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostcenter()
    {
        return $this->Costcenter;
    }

    /**
     * @param mixed $Costcenter
     *
     * @return self
     */
    public function setCostcenter($Costcenter)
    {
        $this->Costcenter = $Costcenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostcenterDescription()
    {
        return $this->CostcenterDescription;
    }

    /**
     * @param mixed $CostcenterDescription
     *
     * @return self
     */
    public function setCostcenterDescription($CostcenterDescription)
    {
        $this->CostcenterDescription = $CostcenterDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostunit()
    {
        return $this->Costunit;
    }

    /**
     * @param mixed $Costunit
     *
     * @return self
     */
    public function setCostunit($Costunit)
    {
        $this->Costunit = $Costunit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostunitDescription()
    {
        return $this->CostunitDescription;
    }

    /**
     * @param mixed $CostunitDescription
     *
     * @return self
     */
    public function setCostunitDescription($CostunitDescription)
    {
        $this->CostunitDescription = $CostunitDescription;

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
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param mixed $EntryDate
     *
     * @return self
     */
    public function setEntryDate($EntryDate)
    {
        $this->EntryDate = $EntryDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsBatch()
    {
        return $this->IsBatch;
    }

    /**
     * @param mixed $IsBatch
     *
     * @return self
     */
    public function setIsBatch($IsBatch)
    {
        $this->IsBatch = $IsBatch;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsFractionAllowedItem()
    {
        return $this->IsFractionAllowedItem;
    }

    /**
     * @param mixed $IsFractionAllowedItem
     *
     * @return self
     */
    public function setIsFractionAllowedItem($IsFractionAllowedItem)
    {
        $this->IsFractionAllowedItem = $IsFractionAllowedItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsInPlanning()
    {
        return $this->IsInPlanning;
    }

    /**
     * @param mixed $IsInPlanning
     *
     * @return self
     */
    public function setIsInPlanning($IsInPlanning)
    {
        $this->IsInPlanning = $IsInPlanning;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsOnHold()
    {
        return $this->IsOnHold;
    }

    /**
     * @param mixed $IsOnHold
     *
     * @return self
     */
    public function setIsOnHold($IsOnHold)
    {
        $this->IsOnHold = $IsOnHold;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsReleased()
    {
        return $this->IsReleased;
    }

    /**
     * @param mixed $IsReleased
     *
     * @return self
     */
    public function setIsReleased($IsReleased)
    {
        $this->IsReleased = $IsReleased;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsSerial()
    {
        return $this->IsSerial;
    }

    /**
     * @param mixed $IsSerial
     *
     * @return self
     */
    public function setIsSerial($IsSerial)
    {
        $this->IsSerial = $IsSerial;

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
    public function getItemVersionDescription()
    {
        return $this->ItemVersionDescription;
    }

    /**
     * @param mixed $ItemVersionDescription
     *
     * @return self
     */
    public function setItemVersionDescription($ItemVersionDescription)
    {
        $this->ItemVersionDescription = $ItemVersionDescription;

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
    public function getPlannedStartDate()
    {
        return $this->PlannedStartDate;
    }

    /**
     * @param mixed $PlannedStartDate
     *
     * @return self
     */
    public function setPlannedStartDate($PlannedStartDate)
    {
        $this->PlannedStartDate = $PlannedStartDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProducedQuantity()
    {
        return $this->ProducedQuantity;
    }

    /**
     * @param mixed $ProducedQuantity
     *
     * @return self
     */
    public function setProducedQuantity($ProducedQuantity)
    {
        $this->ProducedQuantity = $ProducedQuantity;

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
    public function getProject()
    {
        return $this->Project;
    }

    /**
     * @param mixed $Project
     *
     * @return self
     */
    public function setProject($Project)
    {
        $this->Project = $Project;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectDescription()
    {
        return $this->ProjectDescription;
    }

    /**
     * @param mixed $ProjectDescription
     *
     * @return self
     */
    public function setProjectDescription($ProjectDescription)
    {
        $this->ProjectDescription = $ProjectDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReadyToShipQuantity()
    {
        return $this->ReadyToShipQuantity;
    }

    /**
     * @param mixed $ReadyToShipQuantity
     *
     * @return self
     */
    public function setReadyToShipQuantity($ReadyToShipQuantity)
    {
        $this->ReadyToShipQuantity = $ReadyToShipQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderLineCount()
    {
        return $this->SalesOrderLineCount;
    }

    /**
     * @param mixed $SalesOrderLineCount
     *
     * @return self
     */
    public function setSalesOrderLineCount($SalesOrderLineCount)
    {
        $this->SalesOrderLineCount = $SalesOrderLineCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderLines()
    {
        return $this->SalesOrderLines;
    }

    /**
     * @param mixed $SalesOrderLines
     *
     * @return self
     */
    public function setSalesOrderLines($SalesOrderLines)
    {
        $this->SalesOrderLines = $SalesOrderLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderByProductPlanBackflushCount()
    {
        return $this->ShopOrderByProductPlanBackflushCount;
    }

    /**
     * @param mixed $ShopOrderByProductPlanBackflushCount
     *
     * @return self
     */
    public function setShopOrderByProductPlanBackflushCount($ShopOrderByProductPlanBackflushCount)
    {
        $this->ShopOrderByProductPlanBackflushCount = $ShopOrderByProductPlanBackflushCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderByProductPlanCount()
    {
        return $this->ShopOrderByProductPlanCount;
    }

    /**
     * @param mixed $ShopOrderByProductPlanCount
     *
     * @return self
     */
    public function setShopOrderByProductPlanCount($ShopOrderByProductPlanCount)
    {
        $this->ShopOrderByProductPlanCount = $ShopOrderByProductPlanCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderMain()
    {
        return $this->ShopOrderMain;
    }

    /**
     * @param mixed $ShopOrderMain
     *
     * @return self
     */
    public function setShopOrderMain($ShopOrderMain)
    {
        $this->ShopOrderMain = $ShopOrderMain;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderMainNumber()
    {
        return $this->ShopOrderMainNumber;
    }

    /**
     * @param mixed $ShopOrderMainNumber
     *
     * @return self
     */
    public function setShopOrderMainNumber($ShopOrderMainNumber)
    {
        $this->ShopOrderMainNumber = $ShopOrderMainNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderMaterialPlanBackflushCount()
    {
        return $this->ShopOrderMaterialPlanBackflushCount;
    }

    /**
     * @param mixed $ShopOrderMaterialPlanBackflushCount
     *
     * @return self
     */
    public function setShopOrderMaterialPlanBackflushCount($ShopOrderMaterialPlanBackflushCount)
    {
        $this->ShopOrderMaterialPlanBackflushCount = $ShopOrderMaterialPlanBackflushCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderMaterialPlanCount()
    {
        return $this->ShopOrderMaterialPlanCount;
    }

    /**
     * @param mixed $ShopOrderMaterialPlanCount
     *
     * @return self
     */
    public function setShopOrderMaterialPlanCount($ShopOrderMaterialPlanCount)
    {
        $this->ShopOrderMaterialPlanCount = $ShopOrderMaterialPlanCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderMaterialPlans()
    {
        return $this->ShopOrderMaterialPlans;
    }

    /**
     * @param mixed $ShopOrderMaterialPlans
     *
     * @return self
     */
    public function setShopOrderMaterialPlans($ShopOrderMaterialPlans)
    {
        $this->ShopOrderMaterialPlans = $ShopOrderMaterialPlans;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderNumber()
    {
        return $this->ShopOrderNumber;
    }

    /**
     * @param mixed $ShopOrderNumber
     *
     * @return self
     */
    public function setShopOrderNumber($ShopOrderNumber)
    {
        $this->ShopOrderNumber = $ShopOrderNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderNumberString()
    {
        return $this->ShopOrderNumberString;
    }

    /**
     * @param mixed $ShopOrderNumberString
     *
     * @return self
     */
    public function setShopOrderNumberString($ShopOrderNumberString)
    {
        $this->ShopOrderNumberString = $ShopOrderNumberString;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderParent()
    {
        return $this->ShopOrderParent;
    }

    /**
     * @param mixed $ShopOrderParent
     *
     * @return self
     */
    public function setShopOrderParent($ShopOrderParent)
    {
        $this->ShopOrderParent = $ShopOrderParent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderParentNumber()
    {
        return $this->ShopOrderParentNumber;
    }

    /**
     * @param mixed $ShopOrderParentNumber
     *
     * @return self
     */
    public function setShopOrderParentNumber($ShopOrderParentNumber)
    {
        $this->ShopOrderParentNumber = $ShopOrderParentNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderRoutingStepPlanCount()
    {
        return $this->ShopOrderRoutingStepPlanCount;
    }

    /**
     * @param mixed $ShopOrderRoutingStepPlanCount
     *
     * @return self
     */
    public function setShopOrderRoutingStepPlanCount($ShopOrderRoutingStepPlanCount)
    {
        $this->ShopOrderRoutingStepPlanCount = $ShopOrderRoutingStepPlanCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopOrderRoutingStepPlans()
    {
        return $this->ShopOrderRoutingStepPlans;
    }

    /**
     * @param mixed $ShopOrderRoutingStepPlans
     *
     * @return self
     */
    public function setShopOrderRoutingStepPlans($ShopOrderRoutingStepPlans)
    {
        $this->ShopOrderRoutingStepPlans = $ShopOrderRoutingStepPlans;

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
    public function getSubShopOrderCount()
    {
        return $this->SubShopOrderCount;
    }

    /**
     * @param mixed $SubShopOrderCount
     *
     * @return self
     */
    public function setSubShopOrderCount($SubShopOrderCount)
    {
        $this->SubShopOrderCount = $SubShopOrderCount;

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
    public function getWarehouse()
    {
        return $this->Warehouse;
    }

    /**
     * @param mixed $Warehouse
     *
     * @return self
     */
    public function setWarehouse($Warehouse)
    {
        $this->Warehouse = $Warehouse;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getYourRef()
    {
        return $this->YourRef;
    }

    /**
     * @param mixed $YourRef
     *
     * @return self
     */
    public function setYourRef($YourRef)
    {
        $this->YourRef = $YourRef;

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
