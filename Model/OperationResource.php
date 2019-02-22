<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class OperationResource extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingOperationResources
 *
 * @property string $ID Primary key
 * @property string $Account Reference to Accounts
 * @property float $AttendedPercentage Attended percentage
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Reference to Currencies
 * @property int $Division Division code
 * @property float $EfficiencyPercentage Efficiency percentage
 * @property int $IsPrimary Indicates if this is the primary operation of the workcenter
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Operation Reference to Operations
 * @property string $OperationDescription Description of Operation
 * @property int $PurchaseLeadDays Lead days from purchase
 * @property string $PurchaseUnit Unit of purchased item from supplier
 * @property string $PurchaseVATCode VAT code used for purchased item from supplier
 * @property float $Run Used in conjuction with RunMethod and EfficiencyPercentage to determine PlannedRunHours
 * @property int $RunMethod Reference to OperationRunMethods
 * @property float $Setup Used in conjunction with SetupCount and SetupUnit to determine PlannedSetupHours
 * @property string $SetupUnit Reference to TimeUnits
 * @property int $Type Reference to RoutingStepTypes
 * @property string $Workcenter Reference to Workcenter
 * @property string $WorkcenterDescription Description of Workcenter
 */
class OperationResource extends Model 
{
        protected $ID;
        protected $Account;
        protected $AttendedPercentage;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $Division;
        protected $EfficiencyPercentage;
        protected $IsPrimary;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Operation;
        protected $OperationDescription;
        protected $PurchaseLeadDays;
        protected $PurchaseUnit;
        protected $PurchaseVATCode;
        protected $Run;
        protected $RunMethod;
        protected $Setup;
        protected $SetupUnit;
        protected $Type;
        protected $Workcenter;
        protected $WorkcenterDescription;
        protected $url = 'manufacturing/OperationResources';

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
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param mixed $Currency
     *
     * @return self
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

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
    public function getIsPrimary()
    {
        return $this->IsPrimary;
    }

    /**
     * @param mixed $IsPrimary
     *
     * @return self
     */
    public function setIsPrimary($IsPrimary)
    {
        $this->IsPrimary = $IsPrimary;

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
    public function getPurchaseLeadDays()
    {
        return $this->PurchaseLeadDays;
    }

    /**
     * @param mixed $PurchaseLeadDays
     *
     * @return self
     */
    public function setPurchaseLeadDays($PurchaseLeadDays)
    {
        $this->PurchaseLeadDays = $PurchaseLeadDays;

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
    public function getPurchaseVATCode()
    {
        return $this->PurchaseVATCode;
    }

    /**
     * @param mixed $PurchaseVATCode
     *
     * @return self
     */
    public function setPurchaseVATCode($PurchaseVATCode)
    {
        $this->PurchaseVATCode = $PurchaseVATCode;

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
