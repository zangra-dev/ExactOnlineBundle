<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;

/**
 * Class Account extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmAccounts
 *
 * @property string $ID Primary key
 * @property string $Accountant Reference to the accountant of the customer. Conditions: The referred accountant must have value > 0 in the field IsAccountant
 * @property string $AccountManager ID of the account manager
 * @property string $AccountManagerFullName Name of the account manager
 * @property int $AccountManagerHID Number of the account manager
 * @property string $ActivitySector Reference to Activity sector of the account
 * @property string $ActivitySubSector Reference to Activity sub-sector of the account
 * @property string $AddressLine1 Visit address first line
 * @property string $AddressLine2 Visit address second line
 * @property string $AddressLine3 Visit address third line
 * @property BankAccount[] $BankAccounts Collection of Bank accounts
 * @property bool $Blocked Indicates if the account is blocked
 * @property string $BusinessType Reference to the business type of the account
 * @property bool $CanDropShip Indicates the default for the possibility to drop ship when an item is linked to a supplier
 * @property string $ChamberOfCommerce Chamber of commerce number
 * @property string $City Visit address City
 * @property string $Classification1 Account classification 1
 * @property string $Classification2 Account classification 2
 * @property string $Classification3 Account classification 3
 * @property string $Classification4 Account classification 4
 * @property string $Classification5 Account classification 5
 * @property string $Classification6 Account classification 6
 * @property string $Classification7 Account classification 7
 * @property string $Classification8 Account classification 8
 * @property string $Code Unique key, fixed length numeric string with leading spaces, length 18. IMPORTANT: When you use OData $filter on this field you have to make sure the filter parameter contains the leading spaces
 * @property string $CodeAtSupplier Code under which your own company is known at the account
 * @property string $CompanySize Reference to Company size of the account
 * @property int $ConsolidationScenario Consolidation scenario (Time & Billing). Values: 0 = No consolidation, 1 = Item, 2 = Item + Project, 3 = Item + Employee, 4 = Item + Employee + Project. Item means in this case including Unit and Price, these also have to be the same to consolidate
 * @property string $ControlledDate Date of the latest control of account data with external web service
 * @property string $Country Country code
 * @property string $CountryName Country name
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property float $CreditLinePurchase Maximum amount of credit for Purchase. If no value has been defined, there is no credit limit
 * @property float $CreditLineSales Maximum amount of credit for sales. If no value has been defined, there is no credit limit
 * @property float $DiscountPurchase Default discount percentage for purchase. This is stored as a fraction. ie 5.5% is stored as .055
 * @property float $DiscountSales Default discount percentage for sales. This is stored as a fraction. ie 5.5% is stored as .055
 * @property int $Division Division code
 * @property string $Email E-Mail address of the account
 * @property string $EndDate Determines in combination with the start date if the account is active. If the current date is > end date the account is inactive
 * @property string $Fax Fax number
 * @property string $GLAccountPurchase Default (corporate) GL offset account for purchase (cost)
 * @property string $GLAccountSales Default (corporate) GL offset account for sales (revenue)
 * @property string $GLAP Default GL account for Accounts Payable
 * @property string $GLAR Default GL account for Accounts Receivable
 * @property string $IntraStatArea Intrastat Area
 * @property string $IntraStatDeliveryTerm Intrastat delivery method
 * @property string $IntraStatSystem System for Intrastat
 * @property string $IntraStatTransactionA Transaction type A for Intrastat
 * @property string $IntraStatTransactionB Transaction type B for Intrastat
 * @property string $IntraStatTransportMethod Transport method for Intrastat
 * @property string $InvoiceAccount ID of account to be invoiced instead of this account
 * @property string $InvoiceAccountCode Code of InvoiceAccount
 * @property string $InvoiceAccountName Name of InvoiceAccount
 * @property int $InvoiceAttachmentType Indicates which attachment types should be sent when a sales invoice is printed. Only values in related table with Invoice=1 are allowed
 * @property int $InvoicingMethod Method of sending for sales invoices. Values: 1: Paper, 2: EMail, 4: Mailbox (electronic exchange)
 * @property string $IsAccountant Reference to the accountant of the customer. Conditions: The referred accountant must have value > 0 in the field IsAccountant
 * @property int $IsAgency Indicates whether the accounti is an agency
 * @property int $IsCompetitor Indicates whether the account is a competitor
 * @property int $IsMailing Indicates if the account is excluded from mailing marketing information
 * @property bool $IsPilot Indicates whether the account is a pilot account
 * @property bool $IsReseller Indicates whether the account is a reseller
 * @property bool $IsSales Indicates whether the account is allowed for sales
 * @property bool $IsSupplier Indicates whether the account is a supplier
 * @property string $Language Language code
 * @property string $LanguageDescription Language description
 * @property float $Latitude Latitude (used by Google maps)
 * @property string $LeadSource Reference to Lead source of an account
 * @property string $Logo Bytes of the logo image
 * @property string $LogoFileName The file name (without path, but with extension) of the image
 * @property string $LogoThumbnailUrl Thumbnail url of the logo
 * @property string $LogoUrl Url to retrieve the logo
 * @property float $Longitude Longitude (used by Google maps)
 * @property string $MainContact Reference to main contact person
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Name Name of the account manager
 * @property string $PaymentConditionPurchase Code of default payment condition for purchase
 * @property string $PaymentConditionPurchaseDescription Description of PaymentConditionPurchase
 * @property string $PaymentConditionSales Code of default payment condition for sales
 * @property string $PaymentConditionSalesDescription Description of PaymentConditionSales
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extention
 * @property string $Postcode Visit address postcode
 * @property string $PriceList Default sales price list for account
 * @property string $PurchaseCurrency Currency of purchase
 * @property string $PurchaseCurrencyDescription Description of PurchaseCurrency
 * @property int $PurchaseLeadDays Indicates number of days required to receive a purchase. Acts as a default
 * @property string $PurchaseVATCode Default VAT code used for purchase entries
 * @property string $PurchaseVATCodeDescription Description of PurchaseVATCode
 * @property bool $RecepientOfCommissions Define the relation that should be taken in the official document of the rewarding fiscal fiches Belcotax
 * @property string $Remarks Remarks
 * @property bool $Reseller Indicates whether the account is a reseller
 * @property string $ResellerCode Code of Reseller
 * @property string $ResellerName Name of Reseller
 * @property string $RSIN Fiscal number for NL legislation
 * @property string $SalesCurrency Currency of Sales used for Time & Billing
 * @property string $SalesCurrencyDescription Description of SalesCurrency
 * @property string $SalesTaxSchedule Default tax schedule when creating sales orders or sales invoices
 * @property string $SalesTaxScheduleCode Code of the tax schedule
 * @property string $SalesTaxScheduleDescription Description of the tax schedule
 * @property string $SalesVATCode Default VAT code for a sales entry
 * @property string $SalesVATCodeDescription Description of SalesVATCode
 * @property string $SearchCode Search code
 * @property int $SecurityLevel Security level (0 - 100)
 * @property int $SeparateInvPerProject Separate invoice per project (Time & Billing)
 * @property int $SeparateInvPerSubscription Indicates how invoices are generated from subscriptions. 0 = subscriptions belonging to the same customer are combined in a single invoice. 1 = each subscription results in one invoice. In both cases, each individual subscription line results in one invoice line
 * @property int $ShippingLeadDays Indicates the number of days it takes to send goods to the customer. Acts as a default
 * @property string $ShippingMethod Default shipping method
 * @property string $StartDate Indicates in combination with the end date if the account is active
 * @property string $State State/Province code
 * @property string $StateName Name of State
 * @property string $Status If the status field is filled this means the account is a customer. The value indicates the customer status. Possible values: A=None, S=Suspect, P=Prospect, C=Customer
 * @property string $Type Reference to the business type of the account
 * @property string $VATLiability Indicates the VAT status of an account to be able to identify the relation that should be selected in the VAT debtor listing in Belgium
 * @property string $VATNumber The number under which the account is known at the Value Added Tax collection agency
 * @property string $Website Website of the account
 */
class Account extends Model {
    
        protected $ID;
        protected $Accountant;
        protected $AccountManager;
        protected $AccountManagerFullName;
        protected $AccountManagerHID;
        protected $ActivitySector;
        protected $ActivitySubSector;
        protected $AddressLine1;
        protected $AddressLine2;
        protected $AddressLine3;
        protected $BankAccounts;
        protected $Blocked;
        protected $BusinessType;
        protected $CanDropShip;
        protected $ChamberOfCommerce;
        protected $City;
        protected $Classification1;
        protected $Classification2;
        protected $Classification3;
        protected $Classification4;
        protected $Classification5;
        protected $Classification6;
        protected $Classification7;
        protected $Classification8;
        protected $Code;
        protected $CodeAtSupplier;
        protected $CompanySize;
        protected $ConsolidationScenario;
        protected $ControlledDate;
        protected $Country;
        protected $CountryName;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $CreditLinePurchase;
        protected $CreditLineSales;
        protected $DiscountPurchase;
        protected $DiscountSales;
        protected $Division;
        protected $Email;
        protected $EndDate;
        protected $Fax;
        protected $GLAccountPurchase;
        protected $GLAccountSales;
        protected $GLAP;
        protected $GLAR;
        protected $IntraStatArea;
        protected $IntraStatDeliveryTerm;
        protected $IntraStatSystem;
        protected $IntraStatTransactionA;
        protected $IntraStatTransactionB;
        protected $IntraStatTransportMethod;
        protected $InvoiceAccount;
        protected $InvoiceAccountCode;
        protected $InvoiceAccountName;
        protected $InvoiceAttachmentType;
        protected $InvoicingMethod;
        protected $IsAccountant;
        protected $IsAgency;
        protected $IsCompetitor;
        protected $IsMailing;
        protected $IsPilot;
        protected $IsReseller;
        protected $IsSales;
        protected $IsSupplier;
        protected $Language;
        protected $LanguageDescription;
        protected $Latitude;
        protected $LeadSource;
        protected $Logo;
        protected $LogoFileName;
        protected $LogoThumbnailUrl;
        protected $LogoUrl;
        protected $Longitude;
        protected $MainContact;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Name;
        protected $PaymentConditionPurchase;
        protected $PaymentConditionPurchaseDescription;
        protected $PaymentConditionSales;
        protected $PaymentConditionSalesDescription;
        protected $Phone;
        protected $PhoneExtension;
        protected $Postcode;
        protected $PriceList;
        protected $PurchaseCurrency;
        protected $PurchaseCurrencyDescription;
        protected $PurchaseLeadDays;
        protected $PurchaseVATCode;
        protected $PurchaseVATCodeDescription;
        protected $RecepientOfCommissions;
        protected $Remarks;
        protected $Reseller;
        protected $ResellerCode;
        protected $ResellerName;
        protected $RSIN;
        protected $SalesCurrency;
        protected $SalesCurrencyDescription;
        protected $SalesTaxSchedule;
        protected $SalesTaxScheduleCode;
        protected $SalesTaxScheduleDescription;
        protected $SalesVATCode;
        protected $SalesVATCodeDescription;
        protected $SearchCode;
        protected $SecurityLevel;
        protected $SeparateInvPerProject;
        protected $SeparateInvPerSubscription;
        protected $ShippingLeadDays;
        protected $ShippingMethod;
        protected $StartDate;
        protected $State;
        protected $StateName;
        protected $Status;
        protected $Type;
        protected $VATLiability;
        protected $VATNumber;
        protected $Website;
        protected $url = 'crm/Accounts';

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
    public function getAccountant()
    {
        return $this->Accountant;
    }

    /**
     * @param mixed $Accountant
     *
     * @return self
     */
    public function setAccountant($Accountant)
    {
        $this->Accountant = $Accountant;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountManager()
    {
        return $this->AccountManager;
    }

    /**
     * @param mixed $AccountManager
     *
     * @return self
     */
    public function setAccountManager($AccountManager)
    {
        $this->AccountManager = $AccountManager;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountManagerFullName()
    {
        return $this->AccountManagerFullName;
    }

    /**
     * @param mixed $AccountManagerFullName
     *
     * @return self
     */
    public function setAccountManagerFullName($AccountManagerFullName)
    {
        $this->AccountManagerFullName = $AccountManagerFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountManagerHID()
    {
        return $this->AccountManagerHID;
    }

    /**
     * @param mixed $AccountManagerHID
     *
     * @return self
     */
    public function setAccountManagerHID($AccountManagerHID)
    {
        $this->AccountManagerHID = $AccountManagerHID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivitySector()
    {
        return $this->ActivitySector;
    }

    /**
     * @param mixed $ActivitySector
     *
     * @return self
     */
    public function setActivitySector($ActivitySector)
    {
        $this->ActivitySector = $ActivitySector;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivitySubSector()
    {
        return $this->ActivitySubSector;
    }

    /**
     * @param mixed $ActivitySubSector
     *
     * @return self
     */
    public function setActivitySubSector($ActivitySubSector)
    {
        $this->ActivitySubSector = $ActivitySubSector;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * @param mixed $AddressLine1
     *
     * @return self
     */
    public function setAddressLine1($AddressLine1)
    {
        $this->AddressLine1 = $AddressLine1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    /**
     * @param mixed $AddressLine2
     *
     * @return self
     */
    public function setAddressLine2($AddressLine2)
    {
        $this->AddressLine2 = $AddressLine2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine3()
    {
        return $this->AddressLine3;
    }

    /**
     * @param mixed $AddressLine3
     *
     * @return self
     */
    public function setAddressLine3($AddressLine3)
    {
        $this->AddressLine3 = $AddressLine3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccounts()
    {
        return $this->BankAccounts;
    }

    /**
     * @param mixed $BankAccounts
     *
     * @return self
     */
    public function setBankAccounts($BankAccounts)
    {
        $this->BankAccounts = $BankAccounts;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlocked()
    {
        return $this->Blocked;
    }

    /**
     * @param mixed $Blocked
     *
     * @return self
     */
    public function setBlocked($Blocked)
    {
        $this->Blocked = $Blocked;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusinessType()
    {
        return $this->BusinessType;
    }

    /**
     * @param mixed $BusinessType
     *
     * @return self
     */
    public function setBusinessType($BusinessType)
    {
        $this->BusinessType = $BusinessType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanDropShip()
    {
        return $this->CanDropShip;
    }

    /**
     * @param mixed $CanDropShip
     *
     * @return self
     */
    public function setCanDropShip($CanDropShip)
    {
        $this->CanDropShip = $CanDropShip;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChamberOfCommerce()
    {
        return $this->ChamberOfCommerce;
    }

    /**
     * @param mixed $ChamberOfCommerce
     *
     * @return self
     */
    public function setChamberOfCommerce($ChamberOfCommerce)
    {
        $this->ChamberOfCommerce = $ChamberOfCommerce;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     *
     * @return self
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification1()
    {
        return $this->Classification1;
    }

    /**
     * @param mixed $Classification1
     *
     * @return self
     */
    public function setClassification1($Classification1)
    {
        $this->Classification1 = $Classification1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification2()
    {
        return $this->Classification2;
    }

    /**
     * @param mixed $Classification2
     *
     * @return self
     */
    public function setClassification2($Classification2)
    {
        $this->Classification2 = $Classification2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification3()
    {
        return $this->Classification3;
    }

    /**
     * @param mixed $Classification3
     *
     * @return self
     */
    public function setClassification3($Classification3)
    {
        $this->Classification3 = $Classification3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification4()
    {
        return $this->Classification4;
    }

    /**
     * @param mixed $Classification4
     *
     * @return self
     */
    public function setClassification4($Classification4)
    {
        $this->Classification4 = $Classification4;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification5()
    {
        return $this->Classification5;
    }

    /**
     * @param mixed $Classification5
     *
     * @return self
     */
    public function setClassification5($Classification5)
    {
        $this->Classification5 = $Classification5;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification6()
    {
        return $this->Classification6;
    }

    /**
     * @param mixed $Classification6
     *
     * @return self
     */
    public function setClassification6($Classification6)
    {
        $this->Classification6 = $Classification6;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification7()
    {
        return $this->Classification7;
    }

    /**
     * @param mixed $Classification7
     *
     * @return self
     */
    public function setClassification7($Classification7)
    {
        $this->Classification7 = $Classification7;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification8()
    {
        return $this->Classification8;
    }

    /**
     * @param mixed $Classification8
     *
     * @return self
     */
    public function setClassification8($Classification8)
    {
        $this->Classification8 = $Classification8;

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
    public function getCodeAtSupplier()
    {
        return $this->CodeAtSupplier;
    }

    /**
     * @param mixed $CodeAtSupplier
     *
     * @return self
     */
    public function setCodeAtSupplier($CodeAtSupplier)
    {
        $this->CodeAtSupplier = $CodeAtSupplier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanySize()
    {
        return $this->CompanySize;
    }

    /**
     * @param mixed $CompanySize
     *
     * @return self
     */
    public function setCompanySize($CompanySize)
    {
        $this->CompanySize = $CompanySize;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsolidationScenario()
    {
        return $this->ConsolidationScenario;
    }

    /**
     * @param mixed $ConsolidationScenario
     *
     * @return self
     */
    public function setConsolidationScenario($ConsolidationScenario)
    {
        $this->ConsolidationScenario = $ConsolidationScenario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getControlledDate()
    {
        return $this->ControlledDate;
    }

    /**
     * @param mixed $ControlledDate
     *
     * @return self
     */
    public function setControlledDate($ControlledDate)
    {
        $this->ControlledDate = $ControlledDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     *
     * @return self
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }

    /**
     * @param mixed $CountryName
     *
     * @return self
     */
    public function setCountryName($CountryName)
    {
        $this->CountryName = $CountryName;

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
    public function getCreditLinePurchase()
    {
        return $this->CreditLinePurchase;
    }

    /**
     * @param mixed $CreditLinePurchase
     *
     * @return self
     */
    public function setCreditLinePurchase($CreditLinePurchase)
    {
        $this->CreditLinePurchase = $CreditLinePurchase;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditLineSales()
    {
        return $this->CreditLineSales;
    }

    /**
     * @param mixed $CreditLineSales
     *
     * @return self
     */
    public function setCreditLineSales($CreditLineSales)
    {
        $this->CreditLineSales = $CreditLineSales;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountPurchase()
    {
        return $this->DiscountPurchase;
    }

    /**
     * @param mixed $DiscountPurchase
     *
     * @return self
     */
    public function setDiscountPurchase($DiscountPurchase)
    {
        $this->DiscountPurchase = $DiscountPurchase;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountSales()
    {
        return $this->DiscountSales;
    }

    /**
     * @param mixed $DiscountSales
     *
     * @return self
     */
    public function setDiscountSales($DiscountSales)
    {
        $this->DiscountSales = $DiscountSales;

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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     *
     * @return self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

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
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param mixed $Fax
     *
     * @return self
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAccountPurchase()
    {
        return $this->GLAccountPurchase;
    }

    /**
     * @param mixed $GLAccountPurchase
     *
     * @return self
     */
    public function setGLAccountPurchase($GLAccountPurchase)
    {
        $this->GLAccountPurchase = $GLAccountPurchase;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAccountSales()
    {
        return $this->GLAccountSales;
    }

    /**
     * @param mixed $GLAccountSales
     *
     * @return self
     */
    public function setGLAccountSales($GLAccountSales)
    {
        $this->GLAccountSales = $GLAccountSales;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAP()
    {
        return $this->GLAP;
    }

    /**
     * @param mixed $GLAP
     *
     * @return self
     */
    public function setGLAP($GLAP)
    {
        $this->GLAP = $GLAP;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLAR()
    {
        return $this->GLAR;
    }

    /**
     * @param mixed $GLAR
     *
     * @return self
     */
    public function setGLAR($GLAR)
    {
        $this->GLAR = $GLAR;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntraStatArea()
    {
        return $this->IntraStatArea;
    }

    /**
     * @param mixed $IntraStatArea
     *
     * @return self
     */
    public function setIntraStatArea($IntraStatArea)
    {
        $this->IntraStatArea = $IntraStatArea;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntraStatDeliveryTerm()
    {
        return $this->IntraStatDeliveryTerm;
    }

    /**
     * @param mixed $IntraStatDeliveryTerm
     *
     * @return self
     */
    public function setIntraStatDeliveryTerm($IntraStatDeliveryTerm)
    {
        $this->IntraStatDeliveryTerm = $IntraStatDeliveryTerm;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntraStatSystem()
    {
        return $this->IntraStatSystem;
    }

    /**
     * @param mixed $IntraStatSystem
     *
     * @return self
     */
    public function setIntraStatSystem($IntraStatSystem)
    {
        $this->IntraStatSystem = $IntraStatSystem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntraStatTransactionA()
    {
        return $this->IntraStatTransactionA;
    }

    /**
     * @param mixed $IntraStatTransactionA
     *
     * @return self
     */
    public function setIntraStatTransactionA($IntraStatTransactionA)
    {
        $this->IntraStatTransactionA = $IntraStatTransactionA;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntraStatTransactionB()
    {
        return $this->IntraStatTransactionB;
    }

    /**
     * @param mixed $IntraStatTransactionB
     *
     * @return self
     */
    public function setIntraStatTransactionB($IntraStatTransactionB)
    {
        $this->IntraStatTransactionB = $IntraStatTransactionB;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntraStatTransportMethod()
    {
        return $this->IntraStatTransportMethod;
    }

    /**
     * @param mixed $IntraStatTransportMethod
     *
     * @return self
     */
    public function setIntraStatTransportMethod($IntraStatTransportMethod)
    {
        $this->IntraStatTransportMethod = $IntraStatTransportMethod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAccount()
    {
        return $this->InvoiceAccount;
    }

    /**
     * @param mixed $InvoiceAccount
     *
     * @return self
     */
    public function setInvoiceAccount($InvoiceAccount)
    {
        $this->InvoiceAccount = $InvoiceAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAccountCode()
    {
        return $this->InvoiceAccountCode;
    }

    /**
     * @param mixed $InvoiceAccountCode
     *
     * @return self
     */
    public function setInvoiceAccountCode($InvoiceAccountCode)
    {
        $this->InvoiceAccountCode = $InvoiceAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAccountName()
    {
        return $this->InvoiceAccountName;
    }

    /**
     * @param mixed $InvoiceAccountName
     *
     * @return self
     */
    public function setInvoiceAccountName($InvoiceAccountName)
    {
        $this->InvoiceAccountName = $InvoiceAccountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAttachmentType()
    {
        return $this->InvoiceAttachmentType;
    }

    /**
     * @param mixed $InvoiceAttachmentType
     *
     * @return self
     */
    public function setInvoiceAttachmentType($InvoiceAttachmentType)
    {
        $this->InvoiceAttachmentType = $InvoiceAttachmentType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoicingMethod()
    {
        return $this->InvoicingMethod;
    }

    /**
     * @param mixed $InvoicingMethod
     *
     * @return self
     */
    public function setInvoicingMethod($InvoicingMethod)
    {
        $this->InvoicingMethod = $InvoicingMethod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsAccountant()
    {
        return $this->IsAccountant;
    }

    /**
     * @param mixed $IsAccountant
     *
     * @return self
     */
    public function setIsAccountant($IsAccountant)
    {
        $this->IsAccountant = $IsAccountant;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsAgency()
    {
        return $this->IsAgency;
    }

    /**
     * @param mixed $IsAgency
     *
     * @return self
     */
    public function setIsAgency($IsAgency)
    {
        $this->IsAgency = $IsAgency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsCompetitor()
    {
        return $this->IsCompetitor;
    }

    /**
     * @param mixed $IsCompetitor
     *
     * @return self
     */
    public function setIsCompetitor($IsCompetitor)
    {
        $this->IsCompetitor = $IsCompetitor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsMailing()
    {
        return $this->IsMailing;
    }

    /**
     * @param mixed $IsMailing
     *
     * @return self
     */
    public function setIsMailing($IsMailing)
    {
        $this->IsMailing = $IsMailing;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsPilot()
    {
        return $this->IsPilot;
    }

    /**
     * @param mixed $IsPilot
     *
     * @return self
     */
    public function setIsPilot($IsPilot)
    {
        $this->IsPilot = $IsPilot;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsReseller()
    {
        return $this->IsReseller;
    }

    /**
     * @param mixed $IsReseller
     *
     * @return self
     */
    public function setIsReseller($IsReseller)
    {
        $this->IsReseller = $IsReseller;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsSales()
    {
        return $this->IsSales;
    }

    /**
     * @param mixed $IsSales
     *
     * @return self
     */
    public function setIsSales($IsSales)
    {
        $this->IsSales = $IsSales;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsSupplier()
    {
        return $this->IsSupplier;
    }

    /**
     * @param mixed $IsSupplier
     *
     * @return self
     */
    public function setIsSupplier($IsSupplier)
    {
        $this->IsSupplier = $IsSupplier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param mixed $Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguageDescription()
    {
        return $this->LanguageDescription;
    }

    /**
     * @param mixed $LanguageDescription
     *
     * @return self
     */
    public function setLanguageDescription($LanguageDescription)
    {
        $this->LanguageDescription = $LanguageDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param mixed $Latitude
     *
     * @return self
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeadSource()
    {
        return $this->LeadSource;
    }

    /**
     * @param mixed $LeadSource
     *
     * @return self
     */
    public function setLeadSource($LeadSource)
    {
        $this->LeadSource = $LeadSource;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     * @param mixed $Logo
     *
     * @return self
     */
    public function setLogo($Logo)
    {
        $this->Logo = $Logo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogoFileName()
    {
        return $this->LogoFileName;
    }

    /**
     * @param mixed $LogoFileName
     *
     * @return self
     */
    public function setLogoFileName($LogoFileName)
    {
        $this->LogoFileName = $LogoFileName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogoThumbnailUrl()
    {
        return $this->LogoThumbnailUrl;
    }

    /**
     * @param mixed $LogoThumbnailUrl
     *
     * @return self
     */
    public function setLogoThumbnailUrl($LogoThumbnailUrl)
    {
        $this->LogoThumbnailUrl = $LogoThumbnailUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogoUrl()
    {
        return $this->LogoUrl;
    }

    /**
     * @param mixed $LogoUrl
     *
     * @return self
     */
    public function setLogoUrl($LogoUrl)
    {
        $this->LogoUrl = $LogoUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param mixed $Longitude
     *
     * @return self
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMainContact()
    {
        return $this->MainContact;
    }

    /**
     * @param mixed $MainContact
     *
     * @return self
     */
    public function setMainContact($MainContact)
    {
        $this->MainContact = $MainContact;

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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     *
     * @return self
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentConditionPurchase()
    {
        return $this->PaymentConditionPurchase;
    }

    /**
     * @param mixed $PaymentConditionPurchase
     *
     * @return self
     */
    public function setPaymentConditionPurchase($PaymentConditionPurchase)
    {
        $this->PaymentConditionPurchase = $PaymentConditionPurchase;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentConditionPurchaseDescription()
    {
        return $this->PaymentConditionPurchaseDescription;
    }

    /**
     * @param mixed $PaymentConditionPurchaseDescription
     *
     * @return self
     */
    public function setPaymentConditionPurchaseDescription($PaymentConditionPurchaseDescription)
    {
        $this->PaymentConditionPurchaseDescription = $PaymentConditionPurchaseDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentConditionSales()
    {
        return $this->PaymentConditionSales;
    }

    /**
     * @param mixed $PaymentConditionSales
     *
     * @return self
     */
    public function setPaymentConditionSales($PaymentConditionSales)
    {
        $this->PaymentConditionSales = $PaymentConditionSales;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentConditionSalesDescription()
    {
        return $this->PaymentConditionSalesDescription;
    }

    /**
     * @param mixed $PaymentConditionSalesDescription
     *
     * @return self
     */
    public function setPaymentConditionSalesDescription($PaymentConditionSalesDescription)
    {
        $this->PaymentConditionSalesDescription = $PaymentConditionSalesDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     *
     * @return self
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }

    /**
     * @param mixed $PhoneExtension
     *
     * @return self
     */
    public function setPhoneExtension($PhoneExtension)
    {
        $this->PhoneExtension = $PhoneExtension;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param mixed $Postcode
     *
     * @return self
     */
    public function setPostcode($Postcode)
    {
        $this->Postcode = $Postcode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceList()
    {
        return $this->PriceList;
    }

    /**
     * @param mixed $PriceList
     *
     * @return self
     */
    public function setPriceList($PriceList)
    {
        $this->PriceList = $PriceList;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseCurrency()
    {
        return $this->PurchaseCurrency;
    }

    /**
     * @param mixed $PurchaseCurrency
     *
     * @return self
     */
    public function setPurchaseCurrency($PurchaseCurrency)
    {
        $this->PurchaseCurrency = $PurchaseCurrency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseCurrencyDescription()
    {
        return $this->PurchaseCurrencyDescription;
    }

    /**
     * @param mixed $PurchaseCurrencyDescription
     *
     * @return self
     */
    public function setPurchaseCurrencyDescription($PurchaseCurrencyDescription)
    {
        $this->PurchaseCurrencyDescription = $PurchaseCurrencyDescription;

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
    public function getPurchaseVATCodeDescription()
    {
        return $this->PurchaseVATCodeDescription;
    }

    /**
     * @param mixed $PurchaseVATCodeDescription
     *
     * @return self
     */
    public function setPurchaseVATCodeDescription($PurchaseVATCodeDescription)
    {
        $this->PurchaseVATCodeDescription = $PurchaseVATCodeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecepientOfCommissions()
    {
        return $this->RecepientOfCommissions;
    }

    /**
     * @param mixed $RecepientOfCommissions
     *
     * @return self
     */
    public function setRecepientOfCommissions($RecepientOfCommissions)
    {
        $this->RecepientOfCommissions = $RecepientOfCommissions;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }

    /**
     * @param mixed $Remarks
     *
     * @return self
     */
    public function setRemarks($Remarks)
    {
        $this->Remarks = $Remarks;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReseller()
    {
        return $this->Reseller;
    }

    /**
     * @param mixed $Reseller
     *
     * @return self
     */
    public function setReseller($Reseller)
    {
        $this->Reseller = $Reseller;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResellerCode()
    {
        return $this->ResellerCode;
    }

    /**
     * @param mixed $ResellerCode
     *
     * @return self
     */
    public function setResellerCode($ResellerCode)
    {
        $this->ResellerCode = $ResellerCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResellerName()
    {
        return $this->ResellerName;
    }

    /**
     * @param mixed $ResellerName
     *
     * @return self
     */
    public function setResellerName($ResellerName)
    {
        $this->ResellerName = $ResellerName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRSIN()
    {
        return $this->RSIN;
    }

    /**
     * @param mixed $RSIN
     *
     * @return self
     */
    public function setRSIN($RSIN)
    {
        $this->RSIN = $RSIN;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesCurrency()
    {
        return $this->SalesCurrency;
    }

    /**
     * @param mixed $SalesCurrency
     *
     * @return self
     */
    public function setSalesCurrency($SalesCurrency)
    {
        $this->SalesCurrency = $SalesCurrency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesCurrencyDescription()
    {
        return $this->SalesCurrencyDescription;
    }

    /**
     * @param mixed $SalesCurrencyDescription
     *
     * @return self
     */
    public function setSalesCurrencyDescription($SalesCurrencyDescription)
    {
        $this->SalesCurrencyDescription = $SalesCurrencyDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesTaxSchedule()
    {
        return $this->SalesTaxSchedule;
    }

    /**
     * @param mixed $SalesTaxSchedule
     *
     * @return self
     */
    public function setSalesTaxSchedule($SalesTaxSchedule)
    {
        $this->SalesTaxSchedule = $SalesTaxSchedule;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesTaxScheduleCode()
    {
        return $this->SalesTaxScheduleCode;
    }

    /**
     * @param mixed $SalesTaxScheduleCode
     *
     * @return self
     */
    public function setSalesTaxScheduleCode($SalesTaxScheduleCode)
    {
        $this->SalesTaxScheduleCode = $SalesTaxScheduleCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesTaxScheduleDescription()
    {
        return $this->SalesTaxScheduleDescription;
    }

    /**
     * @param mixed $SalesTaxScheduleDescription
     *
     * @return self
     */
    public function setSalesTaxScheduleDescription($SalesTaxScheduleDescription)
    {
        $this->SalesTaxScheduleDescription = $SalesTaxScheduleDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesVATCode()
    {
        return $this->SalesVATCode;
    }

    /**
     * @param mixed $SalesVATCode
     *
     * @return self
     */
    public function setSalesVATCode($SalesVATCode)
    {
        $this->SalesVATCode = $SalesVATCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesVATCodeDescription()
    {
        return $this->SalesVATCodeDescription;
    }

    /**
     * @param mixed $SalesVATCodeDescription
     *
     * @return self
     */
    public function setSalesVATCodeDescription($SalesVATCodeDescription)
    {
        $this->SalesVATCodeDescription = $SalesVATCodeDescription;

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
    public function getSecurityLevel()
    {
        return $this->SecurityLevel;
    }

    /**
     * @param mixed $SecurityLevel
     *
     * @return self
     */
    public function setSecurityLevel($SecurityLevel)
    {
        $this->SecurityLevel = $SecurityLevel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeparateInvPerProject()
    {
        return $this->SeparateInvPerProject;
    }

    /**
     * @param mixed $SeparateInvPerProject
     *
     * @return self
     */
    public function setSeparateInvPerProject($SeparateInvPerProject)
    {
        $this->SeparateInvPerProject = $SeparateInvPerProject;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeparateInvPerSubscription()
    {
        return $this->SeparateInvPerSubscription;
    }

    /**
     * @param mixed $SeparateInvPerSubscription
     *
     * @return self
     */
    public function setSeparateInvPerSubscription($SeparateInvPerSubscription)
    {
        $this->SeparateInvPerSubscription = $SeparateInvPerSubscription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingLeadDays()
    {
        return $this->ShippingLeadDays;
    }

    /**
     * @param mixed $ShippingLeadDays
     *
     * @return self
     */
    public function setShippingLeadDays($ShippingLeadDays)
    {
        $this->ShippingLeadDays = $ShippingLeadDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethod()
    {
        return $this->ShippingMethod;
    }

    /**
     * @param mixed $ShippingMethod
     *
     * @return self
     */
    public function setShippingMethod($ShippingMethod)
    {
        $this->ShippingMethod = $ShippingMethod;

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
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     *
     * @return self
     */
    public function setState($State)
    {
        $this->State = $State;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStateName()
    {
        return $this->StateName;
    }

    /**
     * @param mixed $StateName
     *
     * @return self
     */
    public function setStateName($StateName)
    {
        $this->StateName = $StateName;

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
    public function getVATLiability()
    {
        return $this->VATLiability;
    }

    /**
     * @param mixed $VATLiability
     *
     * @return self
     */
    public function setVATLiability($VATLiability)
    {
        $this->VATLiability = $VATLiability;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATNumber()
    {
        return $this->VATNumber;
    }

    /**
     * @param mixed $VATNumber
     *
     * @return self
     */
    public function setVATNumber($VATNumber)
    {
        $this->VATNumber = $VATNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param mixed $Website
     *
     * @return self
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;

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
