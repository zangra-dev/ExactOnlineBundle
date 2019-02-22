<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class ProjectWBSByProject extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model;
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectProjectWBSByProject
 *
 * @property string $ID Primary key
 * @property int $AdditionalInvoicing Indicates whether to allow additional invoice on this wbs
 * @property string $BaselineDate Baseline date of this deliverable
 * @property bool $BlockEntry Block time and cost entries
 * @property bool $BlockRebilling Block rebilling
 * @property int $BudgetOverrunHours BudgetOverrunHours: 10-Allowed, 20-Not Allowed
 * @property int $Completed Indicates whether the project WBS is completed
 * @property float $Cost Budget cost of the WBS.
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $DefaultItem Default Item to used for timecost entry
 * @property string $Description Description of the project WBS
 * @property int $Division Division code
 * @property string $EndDate EndDate of the WBS.If it is a deliverable then EndDate is the lastest EndDate of its children
 * @property float $Hours Budget quantity of the WBS.
 * @property int $IsBaseline Indicates whether this is a baseline
 * @property int $Milestone Indicates whether this is a milestone
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $Notes For additional information about wbs
 * @property string $Parent ID of the parent WBS
 * @property string $Project ID of project
 * @property string $ProjectTerm ID of invoice planning
 * @property float $PurchaseMarkupPercentage Markup percentage
 * @property float $Revenue Revenue of the WBS.
 * @property string $StartDate Startdate of the WBS.If it is a deliverable then StartDate is the earliest StartDate of its children
 * @property float $TimeQuantityToAlert Alert when exceeding this time quantity
 * @property int $Type Type: 1-Deliverable, 2-Activity, 3-Expense
 */
class ProjectWBSByProject extends Model 
{
        protected $ID;
        protected $AdditionalInvoicing;
        protected $BaselineDate;
        protected $BlockEntry;
        protected $BlockRebilling;
        protected $BudgetOverrunHours;
        protected $Completed;
        protected $Cost;
        protected $Created;
        protected $Creator;
        protected $DefaultItem;
        protected $Description;
        protected $Division;
        protected $EndDate;
        protected $Hours;
        protected $IsBaseline;
        protected $Milestone;
        protected $Modified;
        protected $Modifier;
        protected $Notes;
        protected $Parent;
        protected $Project;
        protected $ProjectTerm;
        protected $PurchaseMarkupPercentage;
        protected $Revenue;
        protected $StartDate;
        protected $TimeQuantityToAlert;
        protected $Type;
        protected $url = 'read/project/ProjectWBSByProject';

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
    public function getAdditionalInvoicing()
    {
        return $this->AdditionalInvoicing;
    }

    /**
     * @param mixed $AdditionalInvoicing
     *
     * @return self
     */
    public function setAdditionalInvoicing($AdditionalInvoicing)
    {
        $this->AdditionalInvoicing = $AdditionalInvoicing;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBaselineDate()
    {
        return $this->BaselineDate;
    }

    /**
     * @param mixed $BaselineDate
     *
     * @return self
     */
    public function setBaselineDate($BaselineDate)
    {
        $this->BaselineDate = $BaselineDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockEntry()
    {
        return $this->BlockEntry;
    }

    /**
     * @param mixed $BlockEntry
     *
     * @return self
     */
    public function setBlockEntry($BlockEntry)
    {
        $this->BlockEntry = $BlockEntry;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockRebilling()
    {
        return $this->BlockRebilling;
    }

    /**
     * @param mixed $BlockRebilling
     *
     * @return self
     */
    public function setBlockRebilling($BlockRebilling)
    {
        $this->BlockRebilling = $BlockRebilling;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetOverrunHours()
    {
        return $this->BudgetOverrunHours;
    }

    /**
     * @param mixed $BudgetOverrunHours
     *
     * @return self
     */
    public function setBudgetOverrunHours($BudgetOverrunHours)
    {
        $this->BudgetOverrunHours = $BudgetOverrunHours;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompleted()
    {
        return $this->Completed;
    }

    /**
     * @param mixed $Completed
     *
     * @return self
     */
    public function setCompleted($Completed)
    {
        $this->Completed = $Completed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param mixed $Cost
     *
     * @return self
     */
    public function setCost($Cost)
    {
        $this->Cost = $Cost;

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
    public function getDefaultItem()
    {
        return $this->DefaultItem;
    }

    /**
     * @param mixed $DefaultItem
     *
     * @return self
     */
    public function setDefaultItem($DefaultItem)
    {
        $this->DefaultItem = $DefaultItem;

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
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param mixed $EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHours()
    {
        return $this->Hours;
    }

    /**
     * @param mixed $Hours
     *
     * @return self
     */
    public function setHours($Hours)
    {
        $this->Hours = $Hours;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsBaseline()
    {
        return $this->IsBaseline;
    }

    /**
     * @param mixed $IsBaseline
     *
     * @return self
     */
    public function setIsBaseline($IsBaseline)
    {
        $this->IsBaseline = $IsBaseline;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMilestone()
    {
        return $this->Milestone;
    }

    /**
     * @param mixed $Milestone
     *
     * @return self
     */
    public function setMilestone($Milestone)
    {
        $this->Milestone = $Milestone;

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
    public function getParent()
    {
        return $this->Parent;
    }

    /**
     * @param mixed $Parent
     *
     * @return self
     */
    public function setParent($Parent)
    {
        $this->Parent = $Parent;

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
    public function getProjectTerm()
    {
        return $this->ProjectTerm;
    }

    /**
     * @param mixed $ProjectTerm
     *
     * @return self
     */
    public function setProjectTerm($ProjectTerm)
    {
        $this->ProjectTerm = $ProjectTerm;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseMarkupPercentage()
    {
        return $this->PurchaseMarkupPercentage;
    }

    /**
     * @param mixed $PurchaseMarkupPercentage
     *
     * @return self
     */
    public function setPurchaseMarkupPercentage($PurchaseMarkupPercentage)
    {
        $this->PurchaseMarkupPercentage = $PurchaseMarkupPercentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevenue()
    {
        return $this->Revenue;
    }

    /**
     * @param mixed $Revenue
     *
     * @return self
     */
    public function setRevenue($Revenue)
    {
        $this->Revenue = $Revenue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param mixed $StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeQuantityToAlert()
    {
        return $this->TimeQuantityToAlert;
    }

    /**
     * @param mixed $TimeQuantityToAlert
     *
     * @return self
     */
    public function setTimeQuantityToAlert($TimeQuantityToAlert)
    {
        $this->TimeQuantityToAlert = $TimeQuantityToAlert;

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
