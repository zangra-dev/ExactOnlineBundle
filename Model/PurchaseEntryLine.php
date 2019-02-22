<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PurchaseEntryLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseEntryPurchaseEntryLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Asset Reference to asset
 * @property string $AssetDescription Asset description
 * @property string $CostCenter Reference to cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $EntryID Reference to header of the purchase entry
 * @property string $From From date for deferred revenue
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $IntraStatArea IntraStat area
 * @property string $IntraStatCountry IntraStatCountry
 * @property string $IntraStatDeliveryTerm IntraStat delivery term
 * @property string $IntraStatTransactionA IntraStat transaction a
 * @property string $IntraStatTransportMethod IntraStat transport method
 * @property int $LineNumber Line number
 * @property string $Notes Extra remarks
 * @property string $Project Reference to project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity
 * @property string $SerialNumber Serial number
 * @property float $StatisticalNetWeight Statistical NetWeight
 * @property string $StatisticalNumber Statistical Number
 * @property float $StatisticalQuantity Statistical Quantity
 * @property float $StatisticalValue Statistical Value
 * @property string $Subscription Reference to subscription
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $To To date for deferred revenue
 * @property string $TrackingNumber Reference to tracking number
 * @property string $TrackingNumberDescription Description of TrackingNumber
 * @property int $Type Type: 30 = Purchase entry, 31 = Purchase credit note
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction. Use this property to specify a VAT amount that differs from the VAT amount that is automatically calculated.
 * @property float $VATBaseAmountDC VAT base amount in the default currency of the company
 * @property float $VATBaseAmountFC VAT base amount in the currency of the transaction
 * @property string $VATCode VAT code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATNonDeductiblePercentage If not the full amount of the VAT is deductible, you can indicate a percentage for the non decuctible part. This is used during the entry of purchase invoices.
 * @property float $VATPercentage VAT percentage
 * @property float $WithholdingAmountDC Withholding tax amount for spanish legislation
 * @property string $WithholdingTax Withholding tax key for spanish legislation
 */
class PurchaseEntryLine extends Model 
{

        protected $ID;
        protected $AmountDC;
        protected $AmountFC;
        protected $Asset;
        protected $AssetDescription;
        protected $CostCenter;
        protected $CostCenterDescription;
        protected $CostUnit;
        protected $CostUnitDescription;
        protected $Description;
        protected $Division;
        protected $EntryID;
        protected $From;
        protected $GLAccount;
        protected $GLAccountCode;
        protected $GLAccountDescription;
        protected $IntraStatArea;
        protected $IntraStatCountry;
        protected $IntraStatDeliveryTerm;
        protected $IntraStatTransactionA;
        protected $IntraStatTransportMethod;
        protected $LineNumber;
        protected $Notes;
        protected $Project;
        protected $ProjectDescription;
        protected $Quantity;
        protected $SerialNumber;
        protected $StatisticalNetWeight;
        protected $StatisticalNumber;
        protected $StatisticalQuantity;
        protected $StatisticalValue;
        protected $Subscription;
        protected $SubscriptionDescription;
        protected $To;
        protected $TrackingNumber;
        protected $TrackingNumberDescription;
        protected $Type;
        protected $VATAmountDC;
        protected $VATAmountFC;
        protected $VATBaseAmountDC;
        protected $VATBaseAmountFC;
        protected $VATCode;
        protected $VATCodeDescription;
        protected $VATNonDeductiblePercentage;
        protected $VATPercentage;
        protected $WithholdingAmountDC;
        protected $WithholdingTax;
        protected $url = 'purchaseentry/PurchaseEntryLines';


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
    public function getAsset()
    {
        return $this->Asset;
    }

    /**
     * @param mixed $Asset
     *
     * @return self
     */
    public function setAsset($Asset)
    {
        $this->Asset = $Asset;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssetDescription()
    {
        return $this->AssetDescription;
    }

    /**
     * @param mixed $AssetDescription
     *
     * @return self
     */
    public function setAssetDescription($AssetDescription)
    {
        $this->AssetDescription = $AssetDescription;

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
    public function getEntryID()
    {
        return $this->EntryID;
    }

    /**
     * @param mixed $EntryID
     *
     * @return self
     */
    public function setEntryID($EntryID)
    {
        $this->EntryID = $EntryID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param mixed $From
     *
     * @return self
     */
    public function setFrom($From)
    {
        $this->From = $From;

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
    public function getIntraStatCountry()
    {
        return $this->IntraStatCountry;
    }

    /**
     * @param mixed $IntraStatCountry
     *
     * @return self
     */
    public function setIntraStatCountry($IntraStatCountry)
    {
        $this->IntraStatCountry = $IntraStatCountry;

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
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }

    /**
     * @param mixed $SerialNumber
     *
     * @return self
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatisticalNetWeight()
    {
        return $this->StatisticalNetWeight;
    }

    /**
     * @param mixed $StatisticalNetWeight
     *
     * @return self
     */
    public function setStatisticalNetWeight($StatisticalNetWeight)
    {
        $this->StatisticalNetWeight = $StatisticalNetWeight;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatisticalNumber()
    {
        return $this->StatisticalNumber;
    }

    /**
     * @param mixed $StatisticalNumber
     *
     * @return self
     */
    public function setStatisticalNumber($StatisticalNumber)
    {
        $this->StatisticalNumber = $StatisticalNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatisticalQuantity()
    {
        return $this->StatisticalQuantity;
    }

    /**
     * @param mixed $StatisticalQuantity
     *
     * @return self
     */
    public function setStatisticalQuantity($StatisticalQuantity)
    {
        $this->StatisticalQuantity = $StatisticalQuantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatisticalValue()
    {
        return $this->StatisticalValue;
    }

    /**
     * @param mixed $StatisticalValue
     *
     * @return self
     */
    public function setStatisticalValue($StatisticalValue)
    {
        $this->StatisticalValue = $StatisticalValue;

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
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param mixed $To
     *
     * @return self
     */
    public function setTo($To)
    {
        $this->To = $To;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param mixed $TrackingNumber
     *
     * @return self
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumberDescription()
    {
        return $this->TrackingNumberDescription;
    }

    /**
     * @param mixed $TrackingNumberDescription
     *
     * @return self
     */
    public function setTrackingNumberDescription($TrackingNumberDescription)
    {
        $this->TrackingNumberDescription = $TrackingNumberDescription;

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
    public function getVATBaseAmountDC()
    {
        return $this->VATBaseAmountDC;
    }

    /**
     * @param mixed $VATBaseAmountDC
     *
     * @return self
     */
    public function setVATBaseAmountDC($VATBaseAmountDC)
    {
        $this->VATBaseAmountDC = $VATBaseAmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATBaseAmountFC()
    {
        return $this->VATBaseAmountFC;
    }

    /**
     * @param mixed $VATBaseAmountFC
     *
     * @return self
     */
    public function setVATBaseAmountFC($VATBaseAmountFC)
    {
        $this->VATBaseAmountFC = $VATBaseAmountFC;

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
    public function getWithholdingAmountDC()
    {
        return $this->WithholdingAmountDC;
    }

    /**
     * @param mixed $WithholdingAmountDC
     *
     * @return self
     */
    public function setWithholdingAmountDC($WithholdingAmountDC)
    {
        $this->WithholdingAmountDC = $WithholdingAmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWithholdingTax()
    {
        return $this->WithholdingTax;
    }

    /**
     * @param mixed $WithholdingTax
     *
     * @return self
     */
    public function setWithholdingTax($WithholdingTax)
    {
        $this->WithholdingTax = $WithholdingTax;

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
