<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class GLAccount extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=financialGLAccounts
 *
 * @property string $ID Primary Key
 * @property int $AssimilatedVATBox AssimilatedVATBox (France)
 * @property string $BalanceSide The following values are supported: D (Debit) C (Credit)
 * @property string $BalanceType The following values are supported: B (Balance Sheet) W (Profit & Loss)
 * @property int $BelcotaxType Indentify the kind of rewarding for the GL account. This is used in the official document for the fiscal fiches Belcotax
 * @property string $Code Unique Code of the G/L Account
 * @property bool $Compress Indicate if this GL account should be shown as compressed without the details in the CRW report of GL history
 * @property string $Costcenter Cost Center linked to the G/L Account
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit Cost Unit linked to the G/L Account
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of Costcenter
 * @property int $Division Division code
 * @property int $ExcludeVATListing GLTransactions on this GLAccount should not appear on the VAT listing
 * @property float $ExpenseNonDeductiblePercentage Expenses on this GLAccount can not be used to reduce the incomes
 * @property bool $IsBlocked When blocked you can't use this general ledger account anymore for new entries
 * @property bool $Matching Allow entries on this general ledger account to be matched via the GL Account card
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PrivateGLAccount If a private use percentage is defined, you need to specify the GL used for the re-invoice of the private use to the owner of the company
 * @property float $PrivatePercentage Specify the percentage of the cost that should be re-invoiced to the owner of the company as private use of the costs
 * @property string $ReportingCode Used in the export of yearly report
 * @property bool $RevalueCurrency Indicates if the amounts booked on this general ledger account will be recalculated when currency revaluation is done
 * @property string $SearchCode Search Code
 * @property string $Type The following values are supported: B (Balance Sheet) W (Profit & Loss)
 * @property string $TypeDescription Description of Type
 * @property int $UseCostcenter Indicates if cost centers can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property int $UseCostunit Indicates if cost units can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property string $VATCode VAT Code linked to the G/L Account (for example, 2 or 4)
 * @property string $VATDescription Description of VAT
 * @property string $VATGLAccountType Specify the kind of purchase this GL account is used for. This is important for the Belgian VAT return to indicate in which VAT box the base amount of purchase should go
 * @property string $VATNonDeductibleGLAccount If you use a percentage of non deductible VAT, you can specify another GL account that will be used for the non deductible part of the VAT amount. This is used directly in the entry application of purchase invoices.
 * @property float $VATNonDeductiblePercentage If not the full amount of the VAT is deductible, you can indicate a percentage for the non decuctible part. This is used during the entry of purchase invoices
 * @property string $VATSystem The following values are supported: I (Invoice) C (Cash) (France)
 * @property string $YearEndCostGLAccount Indicates the costing account for year end calculations
 * @property string $YearEndReflectionGLAccount Indicates the reflection account that is used by year end application
 */
class GLAccount extends Model 
{
        protected $ID;
        protected $AssimilatedVATBox;
        protected $BalanceSide;
        protected $BalanceType;
        protected $BelcotaxType;
        protected $Code;
        protected $Compress;
        protected $Costcenter;
        protected $CostcenterDescription;
        protected $Costunit;
        protected $CostunitDescription;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $ExcludeVATListing;
        protected $ExpenseNonDeductiblePercentage;
        protected $IsBlocked;
        protected $Matching;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $PrivateGLAccount;
        protected $PrivatePercentage;
        protected $ReportingCode;
        protected $RevalueCurrency;
        protected $SearchCode;
        protected $Type;
        protected $TypeDescription;
        protected $UseCostcenter;
        protected $UseCostunit;
        protected $VATCode;
        protected $VATDescription;
        protected $VATGLAccountType;
        protected $VATNonDeductibleGLAccount;
        protected $VATNonDeductiblePercentage;
        protected $VATSystem;
        protected $YearEndCostGLAccount;
        protected $YearEndReflectionGLAccount;
        protected $url = 'financial/GLAccounts';

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
    public function getAssimilatedVATBox()
    {
        return $this->AssimilatedVATBox;
    }

    /**
     * @param mixed $AssimilatedVATBox
     *
     * @return self
     */
    public function setAssimilatedVATBox($AssimilatedVATBox)
    {
        $this->AssimilatedVATBox = $AssimilatedVATBox;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBalanceSide()
    {
        return $this->BalanceSide;
    }

    /**
     * @param mixed $BalanceSide
     *
     * @return self
     */
    public function setBalanceSide($BalanceSide)
    {
        $this->BalanceSide = $BalanceSide;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBalanceType()
    {
        return $this->BalanceType;
    }

    /**
     * @param mixed $BalanceType
     *
     * @return self
     */
    public function setBalanceType($BalanceType)
    {
        $this->BalanceType = $BalanceType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBelcotaxType()
    {
        return $this->BelcotaxType;
    }

    /**
     * @param mixed $BelcotaxType
     *
     * @return self
     */
    public function setBelcotaxType($BelcotaxType)
    {
        $this->BelcotaxType = $BelcotaxType;

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
    public function getCompress()
    {
        return $this->Compress;
    }

    /**
     * @param mixed $Compress
     *
     * @return self
     */
    public function setCompress($Compress)
    {
        $this->Compress = $Compress;

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
    public function getExcludeVATListing()
    {
        return $this->ExcludeVATListing;
    }

    /**
     * @param mixed $ExcludeVATListing
     *
     * @return self
     */
    public function setExcludeVATListing($ExcludeVATListing)
    {
        $this->ExcludeVATListing = $ExcludeVATListing;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpenseNonDeductiblePercentage()
    {
        return $this->ExpenseNonDeductiblePercentage;
    }

    /**
     * @param mixed $ExpenseNonDeductiblePercentage
     *
     * @return self
     */
    public function setExpenseNonDeductiblePercentage($ExpenseNonDeductiblePercentage)
    {
        $this->ExpenseNonDeductiblePercentage = $ExpenseNonDeductiblePercentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param mixed $IsBlocked
     *
     * @return self
     */
    public function setIsBlocked($IsBlocked)
    {
        $this->IsBlocked = $IsBlocked;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatching()
    {
        return $this->Matching;
    }

    /**
     * @param mixed $Matching
     *
     * @return self
     */
    public function setMatching($Matching)
    {
        $this->Matching = $Matching;

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
    public function getPrivateGLAccount()
    {
        return $this->PrivateGLAccount;
    }

    /**
     * @param mixed $PrivateGLAccount
     *
     * @return self
     */
    public function setPrivateGLAccount($PrivateGLAccount)
    {
        $this->PrivateGLAccount = $PrivateGLAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrivatePercentage()
    {
        return $this->PrivatePercentage;
    }

    /**
     * @param mixed $PrivatePercentage
     *
     * @return self
     */
    public function setPrivatePercentage($PrivatePercentage)
    {
        $this->PrivatePercentage = $PrivatePercentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReportingCode()
    {
        return $this->ReportingCode;
    }

    /**
     * @param mixed $ReportingCode
     *
     * @return self
     */
    public function setReportingCode($ReportingCode)
    {
        $this->ReportingCode = $ReportingCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevalueCurrency()
    {
        return $this->RevalueCurrency;
    }

    /**
     * @param mixed $RevalueCurrency
     *
     * @return self
     */
    public function setRevalueCurrency($RevalueCurrency)
    {
        $this->RevalueCurrency = $RevalueCurrency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSearchCode()
    {
        return $this->SearchCode;
    }

    /**
     * @param mixed $SearchCode
     *
     * @return self
     */
    public function setSearchCode($SearchCode)
    {
        $this->SearchCode = $SearchCode;

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
    public function getUseCostcenter()
    {
        return $this->UseCostcenter;
    }

    /**
     * @param mixed $UseCostcenter
     *
     * @return self
     */
    public function setUseCostcenter($UseCostcenter)
    {
        $this->UseCostcenter = $UseCostcenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUseCostunit()
    {
        return $this->UseCostunit;
    }

    /**
     * @param mixed $UseCostunit
     *
     * @return self
     */
    public function setUseCostunit($UseCostunit)
    {
        $this->UseCostunit = $UseCostunit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATCode()
    {
        return $this->VATCode;
    }

    /**
     * @param mixed $VATCode
     *
     * @return self
     */
    public function setVATCode($VATCode)
    {
        $this->VATCode = $VATCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATDescription()
    {
        return $this->VATDescription;
    }

    /**
     * @param mixed $VATDescription
     *
     * @return self
     */
    public function setVATDescription($VATDescription)
    {
        $this->VATDescription = $VATDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATGLAccountType()
    {
        return $this->VATGLAccountType;
    }

    /**
     * @param mixed $VATGLAccountType
     *
     * @return self
     */
    public function setVATGLAccountType($VATGLAccountType)
    {
        $this->VATGLAccountType = $VATGLAccountType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATNonDeductibleGLAccount()
    {
        return $this->VATNonDeductibleGLAccount;
    }

    /**
     * @param mixed $VATNonDeductibleGLAccount
     *
     * @return self
     */
    public function setVATNonDeductibleGLAccount($VATNonDeductibleGLAccount)
    {
        $this->VATNonDeductibleGLAccount = $VATNonDeductibleGLAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATNonDeductiblePercentage()
    {
        return $this->VATNonDeductiblePercentage;
    }

    /**
     * @param mixed $VATNonDeductiblePercentage
     *
     * @return self
     */
    public function setVATNonDeductiblePercentage($VATNonDeductiblePercentage)
    {
        $this->VATNonDeductiblePercentage = $VATNonDeductiblePercentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATSystem()
    {
        return $this->VATSystem;
    }

    /**
     * @param mixed $VATSystem
     *
     * @return self
     */
    public function setVATSystem($VATSystem)
    {
        $this->VATSystem = $VATSystem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearEndCostGLAccount()
    {
        return $this->YearEndCostGLAccount;
    }

    /**
     * @param mixed $YearEndCostGLAccount
     *
     * @return self
     */
    public function setYearEndCostGLAccount($YearEndCostGLAccount)
    {
        $this->YearEndCostGLAccount = $YearEndCostGLAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearEndReflectionGLAccount()
    {
        return $this->YearEndReflectionGLAccount;
    }

    /**
     * @param mixed $YearEndReflectionGLAccount
     *
     * @return self
     */
    public function setYearEndReflectionGLAccount($YearEndReflectionGLAccount)
    {
        $this->YearEndReflectionGLAccount = $YearEndReflectionGLAccount;

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
