<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Project extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjects
 *
 * @property string $ID Primary key
 * @property string $Account The account for this project
 * @property string $AccountCode Code of Account
 * @property string $AccountContact Contact person of Account
 * @property string $AccountName Name of Account
 * @property bool $AllowAdditionalInvoicing Is additional invoice is allowed for project
 * @property bool $BlockEntry Block time and cost entries
 * @property bool $BlockRebilling Block rebilling
 * @property float $BudgetedAmount Budgeted amount of sales in the default currency of the company
 * @property float $BudgetedCosts Budgeted amount of costs in the default currency of the company
 * @property budgetedhoursperhourtype $BudgetedHoursPerHourType Collection of budgeted hours
 * @property float $BudgetedRevenue Budgeted amount of revenue in the default currency of the company
 * @property int $BudgetOverrunHours BudgetOverrunHours: 10-Allowed, 20-Not Allowed
 * @property int $BudgetType Budget type
 * @property string $BudgetTypeDescription Budget type description
 * @property string $Classification Used only for PSA to link a project classification to the project
 * @property string $ClassificationDescription Description of Classification
 * @property string $Code Code
 * @property float $CostsAmountFC Used only for PSA to store the budgetted costs of a project (except for project type Campaign and Non-billable). Positive quantities only
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CustomerPOnumber Used only for PSA to store the customer's PO number
 * @property string $Description Description of the project
 * @property int $Division Division code
 * @property string $DivisionName Name of Division
 * @property string $EndDate End date of the project. In combination with the start date the status is determined
 * @property string $FixedPriceItem Item used for fixed price invoicing. To be defined per project. If empty the functionality relies on the setting
 * @property string $FixedPriceItemDescription Description of FixedPriceItem
 * @property string $InternalNotes Internal notes not to be printed in invoice
 * @property bool $InvoiceAsQuoted Is invoice as quoted
 * @property invoiceterms $InvoiceTerms Collection of invoice terms
 * @property string $Manager Responsible person for this project
 * @property string $ManagerFullname Name of Manager
 * @property float $MarkupPercentage Purchase markup percentage
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes For additional information about projects
 * @property string $PrepaidItem Used only for PSA. This item is used for prepaid invoicing. If left empty, the functionality relies on a setting
 * @property string $PrepaidItemDescription Description of PrepaidItem
 * @property int $PrepaidType PrepaidType: 1-Retainer, 2-Hour type bundle
 * @property string $PrepaidTypeDescription Description of PrepaidType
 * @property projectrestrictionemployees $ProjectRestrictionEmployees Collection of employee restrictions
 * @property projectrestrictionitems $ProjectRestrictionItems Collection of item restrictions
 * @property projectrestrictionrebillings $ProjectRestrictionRebillings Collection of rebilling restrictions
 * @property float $SalesTimeQuantity Budgeted time. Total number of hours estimated for the fixed price project
 * @property string $SourceQuotation Source quotation
 * @property string $StartDate Start date of a project. In combination with the end date the status is determined
 * @property float $TimeQuantityToAlert Alert when exceeding (Hours)
 * @property int $Type Reference to ProjectTypes
 * @property string $TypeDescription Description of Type
 * @property bool $UseBillingMilestones Using billing milestones
 */
class Project extends Model 
{
        protected $ID;
        protected $Account;
        protected $AccountCode;
        protected $AccountContact;
        protected $AccountName;
        protected $AllowAdditionalInvoicing;
        protected $BlockEntry;
        protected $BlockRebilling;
        protected $BudgetedAmount;
        protected $BudgetedCosts;
        protected $BudgetedHoursPerHourType;
        protected $BudgetedRevenue;
        protected $BudgetOverrunHours;
        protected $BudgetType;
        protected $BudgetTypeDescription;
        protected $Classification;
        protected $ClassificationDescription;
        protected $Code;
        protected $CostsAmountFC;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $CustomerPOnumber;
        protected $Description;
        protected $Division;
        protected $DivisionName;
        protected $EndDate;
        protected $FixedPriceItem;
        protected $FixedPriceItemDescription;
        protected $InternalNotes;
        protected $InvoiceAsQuoted;
        protected $InvoiceTerms;
        protected $Manager;
        protected $ManagerFullname;
        protected $MarkupPercentage;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $PrepaidItem;
        protected $PrepaidItemDescription;
        protected $PrepaidType;
        protected $PrepaidTypeDescription;
        protected $ProjectRestrictionEmployees;
        protected $ProjectRestrictionItems;
        protected $ProjectRestrictionRebillings;
        protected $SalesTimeQuantity;
        protected $SourceQuotation;
        protected $StartDate;
        protected $TimeQuantityToAlert;
        protected $Type;
        protected $TypeDescription;
        protected $UseBillingMilestones;
        protected $url = 'project/Projects';

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
    public function getAccountCode()
    {
        return $this->AccountCode;
    }

    /**
     * @param mixed $AccountCode
     *
     * @return self
     */
    public function setAccountCode($AccountCode)
    {
        $this->AccountCode = $AccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountContact()
    {
        return $this->AccountContact;
    }

    /**
     * @param mixed $AccountContact
     *
     * @return self
     */
    public function setAccountContact($AccountContact)
    {
        $this->AccountContact = $AccountContact;

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
    public function getAllowAdditionalInvoicing()
    {
        return $this->AllowAdditionalInvoicing;
    }

    /**
     * @param mixed $AllowAdditionalInvoicing
     *
     * @return self
     */
    public function setAllowAdditionalInvoicing($AllowAdditionalInvoicing)
    {
        $this->AllowAdditionalInvoicing = $AllowAdditionalInvoicing;

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
    public function getBudgetedAmount()
    {
        return $this->BudgetedAmount;
    }

    /**
     * @param mixed $BudgetedAmount
     *
     * @return self
     */
    public function setBudgetedAmount($BudgetedAmount)
    {
        $this->BudgetedAmount = $BudgetedAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetedCosts()
    {
        return $this->BudgetedCosts;
    }

    /**
     * @param mixed $BudgetedCosts
     *
     * @return self
     */
    public function setBudgetedCosts($BudgetedCosts)
    {
        $this->BudgetedCosts = $BudgetedCosts;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetedHoursPerHourType()
    {
        return $this->BudgetedHoursPerHourType;
    }

    /**
     * @param mixed $BudgetedHoursPerHourType
     *
     * @return self
     */
    public function setBudgetedHoursPerHourType($BudgetedHoursPerHourType)
    {
        $this->BudgetedHoursPerHourType = $BudgetedHoursPerHourType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetedRevenue()
    {
        return $this->BudgetedRevenue;
    }

    /**
     * @param mixed $BudgetedRevenue
     *
     * @return self
     */
    public function setBudgetedRevenue($BudgetedRevenue)
    {
        $this->BudgetedRevenue = $BudgetedRevenue;

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
    public function getBudgetType()
    {
        return $this->BudgetType;
    }

    /**
     * @param mixed $BudgetType
     *
     * @return self
     */
    public function setBudgetType($BudgetType)
    {
        $this->BudgetType = $BudgetType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBudgetTypeDescription()
    {
        return $this->BudgetTypeDescription;
    }

    /**
     * @param mixed $BudgetTypeDescription
     *
     * @return self
     */
    public function setBudgetTypeDescription($BudgetTypeDescription)
    {
        $this->BudgetTypeDescription = $BudgetTypeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * @param mixed $Classification
     *
     * @return self
     */
    public function setClassification($Classification)
    {
        $this->Classification = $Classification;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassificationDescription()
    {
        return $this->ClassificationDescription;
    }

    /**
     * @param mixed $ClassificationDescription
     *
     * @return self
     */
    public function setClassificationDescription($ClassificationDescription)
    {
        $this->ClassificationDescription = $ClassificationDescription;

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
    public function getCostsAmountFC()
    {
        return $this->CostsAmountFC;
    }

    /**
     * @param mixed $CostsAmountFC
     *
     * @return self
     */
    public function setCostsAmountFC($CostsAmountFC)
    {
        $this->CostsAmountFC = $CostsAmountFC;

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
    public function getCustomerPOnumber()
    {
        return $this->CustomerPOnumber;
    }

    /**
     * @param mixed $CustomerPOnumber
     *
     * @return self
     */
    public function setCustomerPOnumber($CustomerPOnumber)
    {
        $this->CustomerPOnumber = $CustomerPOnumber;

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
    public function getDivisionName()
    {
        return $this->DivisionName;
    }

    /**
     * @param mixed $DivisionName
     *
     * @return self
     */
    public function setDivisionName($DivisionName)
    {
        $this->DivisionName = $DivisionName;

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
    public function getFixedPriceItem()
    {
        return $this->FixedPriceItem;
    }

    /**
     * @param mixed $FixedPriceItem
     *
     * @return self
     */
    public function setFixedPriceItem($FixedPriceItem)
    {
        $this->FixedPriceItem = $FixedPriceItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFixedPriceItemDescription()
    {
        return $this->FixedPriceItemDescription;
    }

    /**
     * @param mixed $FixedPriceItemDescription
     *
     * @return self
     */
    public function setFixedPriceItemDescription($FixedPriceItemDescription)
    {
        $this->FixedPriceItemDescription = $FixedPriceItemDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInternalNotes()
    {
        return $this->InternalNotes;
    }

    /**
     * @param mixed $InternalNotes
     *
     * @return self
     */
    public function setInternalNotes($InternalNotes)
    {
        $this->InternalNotes = $InternalNotes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAsQuoted()
    {
        return $this->InvoiceAsQuoted;
    }

    /**
     * @param mixed $InvoiceAsQuoted
     *
     * @return self
     */
    public function setInvoiceAsQuoted($InvoiceAsQuoted)
    {
        $this->InvoiceAsQuoted = $InvoiceAsQuoted;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTerms()
    {
        return $this->InvoiceTerms;
    }

    /**
     * @param mixed $InvoiceTerms
     *
     * @return self
     */
    public function setInvoiceTerms($InvoiceTerms)
    {
        $this->InvoiceTerms = $InvoiceTerms;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->Manager;
    }

    /**
     * @param mixed $Manager
     *
     * @return self
     */
    public function setManager($Manager)
    {
        $this->Manager = $Manager;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManagerFullname()
    {
        return $this->ManagerFullname;
    }

    /**
     * @param mixed $ManagerFullname
     *
     * @return self
     */
    public function setManagerFullname($ManagerFullname)
    {
        $this->ManagerFullname = $ManagerFullname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarkupPercentage()
    {
        return $this->MarkupPercentage;
    }

    /**
     * @param mixed $MarkupPercentage
     *
     * @return self
     */
    public function setMarkupPercentage($MarkupPercentage)
    {
        $this->MarkupPercentage = $MarkupPercentage;

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
    public function getPrepaidItem()
    {
        return $this->PrepaidItem;
    }

    /**
     * @param mixed $PrepaidItem
     *
     * @return self
     */
    public function setPrepaidItem($PrepaidItem)
    {
        $this->PrepaidItem = $PrepaidItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrepaidItemDescription()
    {
        return $this->PrepaidItemDescription;
    }

    /**
     * @param mixed $PrepaidItemDescription
     *
     * @return self
     */
    public function setPrepaidItemDescription($PrepaidItemDescription)
    {
        $this->PrepaidItemDescription = $PrepaidItemDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrepaidType()
    {
        return $this->PrepaidType;
    }

    /**
     * @param mixed $PrepaidType
     *
     * @return self
     */
    public function setPrepaidType($PrepaidType)
    {
        $this->PrepaidType = $PrepaidType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrepaidTypeDescription()
    {
        return $this->PrepaidTypeDescription;
    }

    /**
     * @param mixed $PrepaidTypeDescription
     *
     * @return self
     */
    public function setPrepaidTypeDescription($PrepaidTypeDescription)
    {
        $this->PrepaidTypeDescription = $PrepaidTypeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectRestrictionEmployees()
    {
        return $this->ProjectRestrictionEmployees;
    }

    /**
     * @param mixed $ProjectRestrictionEmployees
     *
     * @return self
     */
    public function setProjectRestrictionEmployees($ProjectRestrictionEmployees)
    {
        $this->ProjectRestrictionEmployees = $ProjectRestrictionEmployees;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectRestrictionItems()
    {
        return $this->ProjectRestrictionItems;
    }

    /**
     * @param mixed $ProjectRestrictionItems
     *
     * @return self
     */
    public function setProjectRestrictionItems($ProjectRestrictionItems)
    {
        $this->ProjectRestrictionItems = $ProjectRestrictionItems;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectRestrictionRebillings()
    {
        return $this->ProjectRestrictionRebillings;
    }

    /**
     * @param mixed $ProjectRestrictionRebillings
     *
     * @return self
     */
    public function setProjectRestrictionRebillings($ProjectRestrictionRebillings)
    {
        $this->ProjectRestrictionRebillings = $ProjectRestrictionRebillings;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesTimeQuantity()
    {
        return $this->SalesTimeQuantity;
    }

    /**
     * @param mixed $SalesTimeQuantity
     *
     * @return self
     */
    public function setSalesTimeQuantity($SalesTimeQuantity)
    {
        $this->SalesTimeQuantity = $SalesTimeQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSourceQuotation()
    {
        return $this->SourceQuotation;
    }

    /**
     * @param mixed $SourceQuotation
     *
     * @return self
     */
    public function setSourceQuotation($SourceQuotation)
    {
        $this->SourceQuotation = $SourceQuotation;

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
    public function getUseBillingMilestones()
    {
        return $this->UseBillingMilestones;
    }

    /**
     * @param mixed $UseBillingMilestones
     *
     * @return self
     */
    public function setUseBillingMilestones($UseBillingMilestones)
    {
        $this->UseBillingMilestones = $UseBillingMilestones;

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
