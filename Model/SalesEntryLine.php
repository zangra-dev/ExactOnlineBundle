<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class SalesEntryLine extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesentrySalesEntryLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC.
 * @property float $AmountFC For normal lines it's the amount excluding VAT
 * @property string $Asset Reference to Asset
 * @property string $AssetDescription Description of Asset
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Description Description. Can be different for header and lines
 * @property int $Division Division code
 * @property string $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property float $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property float $ExtraDutyPercentage Extra duty percentage for the item
 * @property string $GLAccount The GL Account of the invoice line. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $LineNumber Indicates the sequence of the lines within one entry
 * @property string $Notes Extra notes
 * @property string $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $SerialNumber Serial number
 * @property string $Subscription When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $TaxSchedule Obsolete
 * @property string $TrackingNumber Reference to TrackingNumber
 * @property string $TrackingNumberDescription Description of TrackingNumber
 * @property int $Type Type: 20 = Sales entry, 21 = Sales credit note
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction. Use this property to specify a VAT amount that differs from the VAT amount that is automatically calculated. However if the transaction uses extra duty, extra duty amount also needs to be specified.
 * @property float $VATBaseAmountDC The VAT base amount in the default currency of the company. This is calculated based on the VATBaseAmountFC
 * @property float $VATBaseAmountFC The VAT base amount in invoice currency. This is calculated with the use of VAT codes. It's an internal value
 * @property string $VATCode The VAT code used when the invoice was registered
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 */
class SalesEntryLine extends Model 
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
        protected $ExtraDutyAmountFC;
        protected $ExtraDutyPercentage;
        protected $GLAccount;
        protected $GLAccountCode;
        protected $GLAccountDescription;
        protected $LineNumber;
        protected $Notes;
        protected $Project;
        protected $ProjectDescription;
        protected $Quantity;
        protected $SerialNumber;
        protected $Subscription;
        protected $SubscriptionDescription;
        protected $TaxSchedule;
        protected $TrackingNumber;
        protected $TrackingNumberDescription;
        protected $Type;
        protected $VATAmountDC;
        protected $VATAmountFC;
        protected $VATBaseAmountDC;
        protected $VATBaseAmountFC;
        protected $VATCode;
        protected $VATCodeDescription;
        protected $VATPercentage;
        protected $url = 'salesentry/SalesEntryLines';

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
    public function getExtraDutyAmountFC()
    {
        return $this->ExtraDutyAmountFC;
    }

    /**
     * @param mixed $ExtraDutyAmountFC
     *
     * @return self
     */
    public function setExtraDutyAmountFC($ExtraDutyAmountFC)
    {
        $this->ExtraDutyAmountFC = $ExtraDutyAmountFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtraDutyPercentage()
    {
        return $this->ExtraDutyPercentage;
    }

    /**
     * @param mixed $ExtraDutyPercentage
     *
     * @return self
     */
    public function setExtraDutyPercentage($ExtraDutyPercentage)
    {
        $this->ExtraDutyPercentage = $ExtraDutyPercentage;

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
