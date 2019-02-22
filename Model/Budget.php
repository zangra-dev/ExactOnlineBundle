<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Budget extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BudgetBudgets
 *
 * @property string $ID Primary key
 * @property float $AmountDC Budget amount (always in the default currency of the company)
 * @property string $BudgetScenario Budget scenario
 * @property string $BudgetScenarioCode Code of BudgetScenario
 * @property string $BudgetScenarioDescription Description of BudgetScenario
 * @property string $Costcenter Used for cost center-specific budgets - NULL otherwise
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit Used for cost unit-specific budgets - NULL otherwise
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $GLAccount G/L account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $HID Numerical ID. Never displayed to the user, but it may have its use for performance reasons
 * @property string $Item Used for item-specific budgets - NULL otherwise
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $ReportingPeriod Period (combined with financial year)
 * @property int $ReportingYear Financial year
 */
class Budget extends Model 
{
        protected $ID;
        protected $AmountDC;
        protected $BudgetScenario;
        protected $BudgetScenarioCode;
        protected $BudgetScenarioDescription;
        protected $Costcenter;
        protected $CostcenterDescription;
        protected $Costunit;
        protected $CostunitDescription;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Division;
        protected $GLAccount;
        protected $GLAccountCode;
        protected $GLAccountDescription;
        protected $HID;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $ReportingPeriod;
        protected $ReportingYear;
        protected $url = 'budget/Budgets';

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
    public function getAmountDC()
    {
        return $this->AmountDC;
    }

    /**
     * @param mixed $AmountDC
     *
     * @return self
     */
    public function setAmountDC($AmountDC)
    {
        $this->AmountDC = $AmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetScenario()
    {
        return $this->BudgetScenario;
    }

    /**
     * @param mixed $BudgetScenario
     *
     * @return self
     */
    public function setBudgetScenario($BudgetScenario)
    {
        $this->BudgetScenario = $BudgetScenario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetScenarioCode()
    {
        return $this->BudgetScenarioCode;
    }

    /**
     * @param mixed $BudgetScenarioCode
     *
     * @return self
     */
    public function setBudgetScenarioCode($BudgetScenarioCode)
    {
        $this->BudgetScenarioCode = $BudgetScenarioCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetScenarioDescription()
    {
        return $this->BudgetScenarioDescription;
    }

    /**
     * @param mixed $BudgetScenarioDescription
     *
     * @return self
     */
    public function setBudgetScenarioDescription($BudgetScenarioDescription)
    {
        $this->BudgetScenarioDescription = $BudgetScenarioDescription;

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
    public function getGLAccount()
    {
        return $this->GLAccount;
    }

    /**
     * @param mixed $GLAccount
     *
     * @return self
     */
    public function setGLAccount($GLAccount)
    {
        $this->GLAccount = $GLAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAccountCode()
    {
        return $this->GLAccountCode;
    }

    /**
     * @param mixed $GLAccountCode
     *
     * @return self
     */
    public function setGLAccountCode($GLAccountCode)
    {
        $this->GLAccountCode = $GLAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAccountDescription()
    {
        return $this->GLAccountDescription;
    }

    /**
     * @param mixed $GLAccountDescription
     *
     * @return self
     */
    public function setGLAccountDescription($GLAccountDescription)
    {
        $this->GLAccountDescription = $GLAccountDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHID()
    {
        return $this->HID;
    }

    /**
     * @param mixed $HID
     *
     * @return self
     */
    public function setHID($HID)
    {
        $this->HID = $HID;

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
    public function getReportingPeriod()
    {
        return $this->ReportingPeriod;
    }

    /**
     * @param mixed $ReportingPeriod
     *
     * @return self
     */
    public function setReportingPeriod($ReportingPeriod)
    {
        $this->ReportingPeriod = $ReportingPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReportingYear()
    {
        return $this->ReportingYear;
    }

    /**
     * @param mixed $ReportingYear
     *
     * @return self
     */
    public function setReportingYear($ReportingYear)
    {
        $this->ReportingYear = $ReportingYear;

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
