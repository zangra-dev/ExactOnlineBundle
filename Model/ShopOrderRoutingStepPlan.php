<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ShopOrderRoutingStepPlan extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderRoutingStepPlans
 *
 * @property string $ID Primary key
 * @property string $Account Reference to Account providing the Outsourced item
 * @property string $AccountName Account name
 * @property string $AccountNumber Account number
 * @property float $AttendedPercentage Attended Percentage
 * @property int $Backflush Indicates if this is a backflush step
 * @property float $CostPerItem Total cost / Shop order planned quantity
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the operation
 * @property int $Division Division code
 * @property float $EfficiencyPercentage Efficiency Percentage
 * @property int $FactorType Conversion factor type between Shop order Item and Subcontract purchase Unit
 * @property int $LineNumber Sequential order of the operation
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property string $Operation Reference to Operations
 * @property string $OperationCode Code of the routing step operation
 * @property string $OperationDescription Description of the operation step
 * @property string $OperationResource Reference to OperationResources
 * @property string $PlannedEndDate Planned end date
 * @property float $PlannedRunHours Planned run hours
 * @property float $PlannedSetupHours Planned setup hours
 * @property string $PlannedStartDate Planned start date
 * @property float $PlannedTotalHours Setup hours + Run hours
 * @property string $PurchaseUnit Reference to Units
 * @property float $PurchaseUnitFactor Purchase Unit Factor
 * @property float $PurchaseUnitPriceFC Purchase Unit Price in the currency of the transaction
 * @property float $PurchaseUnitQuantity Purchase unit quantity of the plan
 * @property int $RoutingStepType Reference to RoutingStepTypes
 * @property float $Run Used in conjunction with RunMethod, and EfficiencyPercentage to determine PlannedRunHours
 * @property int $RunMethod Reference to OperationMethod
 * @property string $RunMethodDescription Description of RunMethod
 * @property float $Setup Used in conjunction with SetupCount and Setup Unit to determine PlannedSetupHours
 * @property string $SetupUnit Reference to TimeUnits
 * @property string $ShopOrder Reference to Shop orders
 * @property int $Status Reference to OperationStatus
 * @property string $StatusDescription Description of Status
 * @property int $SubcontractedLeadDays Subcontracted lead days
 * @property timetransactions $TimeTransactions Collection of TimeTransactions
 * @property float $TotalCostDC Total cost of the routing line
 * @property string $Workcenter Reference to Workcenters
 * @property string $WorkcenterCode Workcenter code
 * @property string $WorkcenterDescription Workcenter description
 */
class ShopOrderRoutingStepPlan extends Model 
{

        protected $ID;
        protected $Account;
        protected $AccountName;
        protected $AccountNumber;
        protected $AttendedPercentage;
        protected $Backflush;
        protected $CostPerItem;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $EfficiencyPercentage;
        protected $FactorType;
        protected $LineNumber;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $Operation;
        protected $OperationCode;
        protected $OperationDescription;
        protected $OperationResource;
        protected $PlannedEndDate;
        protected $PlannedRunHours;
        protected $PlannedSetupHours;
        protected $PlannedStartDate;
        protected $PlannedTotalHours;
        protected $PurchaseUnit;
        protected $PurchaseUnitFactor;
        protected $PurchaseUnitPriceFC;
        protected $PurchaseUnitQuantity;
        protected $RoutingStepType;
        protected $Run;
        protected $RunMethod;
        protected $RunMethodDescription;
        protected $Setup;
        protected $SetupUnit;
        protected $ShopOrder;
        protected $Status;
        protected $StatusDescription;
        protected $SubcontractedLeadDays;
        protected $TimeTransactions;
        protected $TotalCostDC;
        protected $Workcenter;
        protected $WorkcenterCode;
        protected $WorkcenterDescription;
        protected $url = 'manufacturing/ShopOrderRoutingStepPlans';

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
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param mixed $Account
     *
     * @return self
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param mixed $AccountName
     *
     * @return self
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param mixed $AccountNumber
     *
     * @return self
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttendedPercentage()
    {
        return $this->AttendedPercentage;
    }

    /**
     * @param mixed $AttendedPercentage
     *
     * @return self
     */
    public function setAttendedPercentage($AttendedPercentage)
    {
        $this->AttendedPercentage = $AttendedPercentage;

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
    public function getCostPerItem()
    {
        return $this->CostPerItem;
    }

    /**
     * @param mixed $CostPerItem
     *
     * @return self
     */
    public function setCostPerItem($CostPerItem)
    {
        $this->CostPerItem = $CostPerItem;

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
    public function getEfficiencyPercentage()
    {
        return $this->EfficiencyPercentage;
    }

    /**
     * @param mixed $EfficiencyPercentage
     *
     * @return self
     */
    public function setEfficiencyPercentage($EfficiencyPercentage)
    {
        $this->EfficiencyPercentage = $EfficiencyPercentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFactorType()
    {
        return $this->FactorType;
    }

    /**
     * @param mixed $FactorType
     *
     * @return self
     */
    public function setFactorType($FactorType)
    {
        $this->FactorType = $FactorType;

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
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * @param mixed $Operation
     *
     * @return self
     */
    public function setOperation($Operation)
    {
        $this->Operation = $Operation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperationCode()
    {
        return $this->OperationCode;
    }

    /**
     * @param mixed $OperationCode
     *
     * @return self
     */
    public function setOperationCode($OperationCode)
    {
        $this->OperationCode = $OperationCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperationDescription()
    {
        return $this->OperationDescription;
    }

    /**
     * @param mixed $OperationDescription
     *
     * @return self
     */
    public function setOperationDescription($OperationDescription)
    {
        $this->OperationDescription = $OperationDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperationResource()
    {
        return $this->OperationResource;
    }

    /**
     * @param mixed $OperationResource
     *
     * @return self
     */
    public function setOperationResource($OperationResource)
    {
        $this->OperationResource = $OperationResource;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedEndDate()
    {
        return $this->PlannedEndDate;
    }

    /**
     * @param mixed $PlannedEndDate
     *
     * @return self
     */
    public function setPlannedEndDate($PlannedEndDate)
    {
        $this->PlannedEndDate = $PlannedEndDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedRunHours()
    {
        return $this->PlannedRunHours;
    }

    /**
     * @param mixed $PlannedRunHours
     *
     * @return self
     */
    public function setPlannedRunHours($PlannedRunHours)
    {
        $this->PlannedRunHours = $PlannedRunHours;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlannedSetupHours()
    {
        return $this->PlannedSetupHours;
    }

    /**
     * @param mixed $PlannedSetupHours
     *
     * @return self
     */
    public function setPlannedSetupHours($PlannedSetupHours)
    {
        $this->PlannedSetupHours = $PlannedSetupHours;

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
    public function getPlannedTotalHours()
    {
        return $this->PlannedTotalHours;
    }

    /**
     * @param mixed $PlannedTotalHours
     *
     * @return self
     */
    public function setPlannedTotalHours($PlannedTotalHours)
    {
        $this->PlannedTotalHours = $PlannedTotalHours;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseUnit()
    {
        return $this->PurchaseUnit;
    }

    /**
     * @param mixed $PurchaseUnit
     *
     * @return self
     */
    public function setPurchaseUnit($PurchaseUnit)
    {
        $this->PurchaseUnit = $PurchaseUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseUnitFactor()
    {
        return $this->PurchaseUnitFactor;
    }

    /**
     * @param mixed $PurchaseUnitFactor
     *
     * @return self
     */
    public function setPurchaseUnitFactor($PurchaseUnitFactor)
    {
        $this->PurchaseUnitFactor = $PurchaseUnitFactor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseUnitPriceFC()
    {
        return $this->PurchaseUnitPriceFC;
    }

    /**
     * @param mixed $PurchaseUnitPriceFC
     *
     * @return self
     */
    public function setPurchaseUnitPriceFC($PurchaseUnitPriceFC)
    {
        $this->PurchaseUnitPriceFC = $PurchaseUnitPriceFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseUnitQuantity()
    {
        return $this->PurchaseUnitQuantity;
    }

    /**
     * @param mixed $PurchaseUnitQuantity
     *
     * @return self
     */
    public function setPurchaseUnitQuantity($PurchaseUnitQuantity)
    {
        $this->PurchaseUnitQuantity = $PurchaseUnitQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoutingStepType()
    {
        return $this->RoutingStepType;
    }

    /**
     * @param mixed $RoutingStepType
     *
     * @return self
     */
    public function setRoutingStepType($RoutingStepType)
    {
        $this->RoutingStepType = $RoutingStepType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRun()
    {
        return $this->Run;
    }

    /**
     * @param mixed $Run
     *
     * @return self
     */
    public function setRun($Run)
    {
        $this->Run = $Run;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRunMethod()
    {
        return $this->RunMethod;
    }

    /**
     * @param mixed $RunMethod
     *
     * @return self
     */
    public function setRunMethod($RunMethod)
    {
        $this->RunMethod = $RunMethod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRunMethodDescription()
    {
        return $this->RunMethodDescription;
    }

    /**
     * @param mixed $RunMethodDescription
     *
     * @return self
     */
    public function setRunMethodDescription($RunMethodDescription)
    {
        $this->RunMethodDescription = $RunMethodDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSetup()
    {
        return $this->Setup;
    }

    /**
     * @param mixed $Setup
     *
     * @return self
     */
    public function setSetup($Setup)
    {
        $this->Setup = $Setup;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSetupUnit()
    {
        return $this->SetupUnit;
    }

    /**
     * @param mixed $SetupUnit
     *
     * @return self
     */
    public function setSetupUnit($SetupUnit)
    {
        $this->SetupUnit = $SetupUnit;

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
    public function getSubcontractedLeadDays()
    {
        return $this->SubcontractedLeadDays;
    }

    /**
     * @param mixed $SubcontractedLeadDays
     *
     * @return self
     */
    public function setSubcontractedLeadDays($SubcontractedLeadDays)
    {
        $this->SubcontractedLeadDays = $SubcontractedLeadDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeTransactions()
    {
        return $this->TimeTransactions;
    }

    /**
     * @param mixed $TimeTransactions
     *
     * @return self
     */
    public function setTimeTransactions($TimeTransactions)
    {
        $this->TimeTransactions = $TimeTransactions;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalCostDC()
    {
        return $this->TotalCostDC;
    }

    /**
     * @param mixed $TotalCostDC
     *
     * @return self
     */
    public function setTotalCostDC($TotalCostDC)
    {
        $this->TotalCostDC = $TotalCostDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkcenter()
    {
        return $this->Workcenter;
    }

    /**
     * @param mixed $Workcenter
     *
     * @return self
     */
    public function setWorkcenter($Workcenter)
    {
        $this->Workcenter = $Workcenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkcenterCode()
    {
        return $this->WorkcenterCode;
    }

    /**
     * @param mixed $WorkcenterCode
     *
     * @return self
     */
    public function setWorkcenterCode($WorkcenterCode)
    {
        $this->WorkcenterCode = $WorkcenterCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkcenterDescription()
    {
        return $this->WorkcenterDescription;
    }

    /**
     * @param mixed $WorkcenterDescription
     *
     * @return self
     */
    public function setWorkcenterDescription($WorkcenterDescription)
    {
        $this->WorkcenterDescription = $WorkcenterDescription;

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
