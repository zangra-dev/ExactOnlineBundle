<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SalesInvoiceLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesinvoiceSalesInvoiceLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC
 * @property float $AmountFC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Description Description of CostCenter
 * @property float $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property int $Division Division code
 * @property string $Employee Link to Employee originating from time and cost transactions
 * @property string $EmployeeFullName Name of employee
 * @property string $EndTime EndTime is used to store the last date of a period. EndTime is used in combination with StartTime
 * @property string $GLAccount The GL Account of the sales invoice line. This field is mandatory. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $InvoiceID The InvoiceID identifies the sales invoice. All the lines of a sales invoice have the same InvoiceID
 * @property string $Item Reference to the item that is sold in this sales invoice line
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property int $LineNumber Indicates the sequence of the lines within one invoice
 * @property float $NetPrice Net price of the sales invoice line
 * @property string $Notes Extra notes
 * @property string $Pricelist Price list
 * @property string $PricelistDescription Description of Pricelist
 * @property string $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $StartTime EndTime is used to store the last date of a period. EndTime is used in combination with StartTime
 * @property string $Subscription Obsolete. When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $TaxSchedule Tax schedule linked
 * @property string $TaxScheduleCode Code of the tax schedule
 * @property string $TaxScheduleDescription Description of the tax schedule
 * @property string $UnitCode Code of Unit
 * @property string $UnitDescription Description of CostUnit
 * @property float $UnitPrice Price per unit
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the invoice is registered
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesInvoiceLine extends Model 
{
        protected $ID;
        protected $AmountDC;
        protected $AmountFC;
        protected $CostCenter;
        protected $CostCenterDescription;
        protected $CostUnit;
        protected $CostUnitDescription;
        protected $Description;
        protected $Discount;
        protected $Division;
        protected $Employee;
        protected $EmployeeFullName;
        protected $EndTime;
        protected $GLAccount;
        protected $GLAccountDescription;
        protected $InvoiceID;
        protected $Item;
        protected $ItemCode;
        protected $ItemDescription;
        protected $LineNumber;
        protected $NetPrice;
        protected $Notes;
        protected $Pricelist;
        protected $PricelistDescription;
        protected $Project;
        protected $ProjectDescription;
        protected $Quantity;
        protected $StartTime;
        protected $Subscription;
        protected $SubscriptionDescription;
        protected $TaxSchedule;
        protected $TaxScheduleCode;
        protected $TaxScheduleDescription;
        protected $UnitCode;
        protected $UnitDescription;
        protected $UnitPrice;
        protected $VATAmountDC;
        protected $VATAmountFC;
        protected $VATCode;
        protected $VATCodeDescription;
        protected $VATPercentage;
        protected $url = 'salesinvoice/SalesInvoiceLines';

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
    public function getAmountFC()
    {
        return $this->AmountFC;
    }

    /**
     * @param mixed $AmountFC
     *
     * @return self
     */
    public function setAmountFC($AmountFC)
    {
        $this->AmountFC = $AmountFC;

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
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param mixed $Discount
     *
     * @return self
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

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
    public function getEmployee()
    {
        return $this->Employee;
    }

    /**
     * @param mixed $Employee
     *
     * @return self
     */
    public function setEmployee($Employee)
    {
        $this->Employee = $Employee;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmployeeFullName()
    {
        return $this->EmployeeFullName;
    }

    /**
     * @param mixed $EmployeeFullName
     *
     * @return self
     */
    public function setEmployeeFullName($EmployeeFullName)
    {
        $this->EmployeeFullName = $EmployeeFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * @param mixed $EndTime
     *
     * @return self
     */
    public function setEndTime($EndTime)
    {
        $this->EndTime = $EndTime;

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
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }

    /**
     * @param mixed $InvoiceID
     *
     * @return self
     */
    public function setInvoiceID($InvoiceID)
    {
        $this->InvoiceID = $InvoiceID;

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
    public function getNetPrice()
    {
        return $this->NetPrice;
    }

    /**
     * @param mixed $NetPrice
     *
     * @return self
     */
    public function setNetPrice($NetPrice)
    {
        $this->NetPrice = $NetPrice;

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
    public function getPricelist()
    {
        return $this->Pricelist;
    }

    /**
     * @param mixed $Pricelist
     *
     * @return self
     */
    public function setPricelist($Pricelist)
    {
        $this->Pricelist = $Pricelist;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPricelistDescription()
    {
        return $this->PricelistDescription;
    }

    /**
     * @param mixed $PricelistDescription
     *
     * @return self
     */
    public function setPricelistDescription($PricelistDescription)
    {
        $this->PricelistDescription = $PricelistDescription;

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
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param mixed $StartTime
     *
     * @return self
     */
    public function setStartTime($StartTime)
    {
        $this->StartTime = $StartTime;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * @param mixed $Subscription
     *
     * @return self
     */
    public function setSubscription($Subscription)
    {
        $this->Subscription = $Subscription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionDescription()
    {
        return $this->SubscriptionDescription;
    }

    /**
     * @param mixed $SubscriptionDescription
     *
     * @return self
     */
    public function setSubscriptionDescription($SubscriptionDescription)
    {
        $this->SubscriptionDescription = $SubscriptionDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxSchedule()
    {
        return $this->TaxSchedule;
    }

    /**
     * @param mixed $TaxSchedule
     *
     * @return self
     */
    public function setTaxSchedule($TaxSchedule)
    {
        $this->TaxSchedule = $TaxSchedule;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxScheduleCode()
    {
        return $this->TaxScheduleCode;
    }

    /**
     * @param mixed $TaxScheduleCode
     *
     * @return self
     */
    public function setTaxScheduleCode($TaxScheduleCode)
    {
        $this->TaxScheduleCode = $TaxScheduleCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxScheduleDescription()
    {
        return $this->TaxScheduleDescription;
    }

    /**
     * @param mixed $TaxScheduleDescription
     *
     * @return self
     */
    public function setTaxScheduleDescription($TaxScheduleDescription)
    {
        $this->TaxScheduleDescription = $TaxScheduleDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitCode()
    {
        return $this->UnitCode;
    }

    /**
     * @param mixed $UnitCode
     *
     * @return self
     */
    public function setUnitCode($UnitCode)
    {
        $this->UnitCode = $UnitCode;

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
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param mixed $UnitPrice
     *
     * @return self
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmountDC()
    {
        return $this->VATAmountDC;
    }

    /**
     * @param mixed $VATAmountDC
     *
     * @return self
     */
    public function setVATAmountDC($VATAmountDC)
    {
        $this->VATAmountDC = $VATAmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmountFC()
    {
        return $this->VATAmountFC;
    }

    /**
     * @param mixed $VATAmountFC
     *
     * @return self
     */
    public function setVATAmountFC($VATAmountFC)
    {
        $this->VATAmountFC = $VATAmountFC;

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
    public function getVATCodeDescription()
    {
        return $this->VATCodeDescription;
    }

    /**
     * @param mixed $VATCodeDescription
     *
     * @return self
     */
    public function setVATCodeDescription($VATCodeDescription)
    {
        $this->VATCodeDescription = $VATCodeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATPercentage()
    {
        return $this->VATPercentage;
    }

    /**
     * @param mixed $VATPercentage
     *
     * @return self
     */
    public function setVATPercentage($VATPercentage)
    {
        $this->VATPercentage = $VATPercentage;

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
