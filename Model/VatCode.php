<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class VatCode extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model;
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=vatVATCodes
 *
 * @property string $ID Primary key
 * @property string $Account Tax account
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property int $CalculationBasis Indicates how to calculate the tax. 0 = based on the gross amount, 1 = based on the gross amount + another tax
 * @property bool $Charged Indicates if transactions using the VAT code are transactions of the domestic VAT charging regulation (such as those for subcontractors) or transactions that are registered within the EU. If Charged=1 and linked to a purchase invoice, both a line for the VAT to pay and a line for the VAT to claim are being created
 * @property string $Code Code of Account
 * @property string $Country Obsolete
 * @property bool $Created Indicates if transactions using the VAT code are transactions of the domestic VAT charging regulation (such as those for subcontractors) or transactions that are registered within the EU. If Charged=1 and linked to a purchase invoice, both a line for the VAT to pay and a line for the VAT to claim are being created
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the VAT code
 * @property int $Division Division code
 * @property string $EUSalesListing Indicates if and how transactions using the VAT code appear on the ICT return (EU sales list). L = Listing goods, N = No listing, S = Listing services, T = Triangulation
 * @property string $GLDiscountPurchase Indicates the purchase discount GL account linked to the VAT codes for German legislation
 * @property string $GLDiscountPurchaseCode Code of GLDiscountPurchase
 * @property string $GLDiscountPurchaseDescription Description of GLDiscountPurchase
 * @property string $GLDiscountSales Indicates the sales discount GL account linked to the VAT codes for German legislation
 * @property string $GLDiscountSalesCode Code of GLDiscountSales
 * @property string $GLDiscountSalesDescription Description of GLDiscountSales
 * @property string $GLToClaim G/L account that is used to book the VAT to claim. If you enter purchases with a VAT code, the VAT amount to be claimed is entered to this VAT account. Must be of type VAT
 * @property string $GLToClaimCode Code of GLToClaim
 * @property string $GLToClaimDescription Description of GLToClaim
 * @property string $GLToPay G/L account that is used to book the VAT to pay. If you enter sales with a VAT code, the VAT amount to be paid is entered to this VAT account. Must be of type VAT
 * @property string $GLToPayCode Code of GLToPay
 * @property string $GLToPayDescription Description of GLToPay
 * @property bool $IntraStat Indicates if intrastat is used
 * @property bool $IsBlocked Indicates if the VAT code may still be used
 * @property string $LegalText Legal description for VAT code to print in the total block of the invoice
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName User name of modifier
 * @property float $Percentage Percentage of the VAT code
 * @property int $TaxReturnType Indicates what type of Taxcode it is: can be VAT, IncomeTax
 * @property string $Type G/L account that is used to book the VAT to claim. If you enter purchases with a VAT code, the VAT amount to be claimed is entered to this VAT account. Must be of type VAT
 * @property string $VatDocType Field in VAT code maintenance to calculate different VATs depending on the selected document type. P = purchase invoice, F = freelance invoice, E = expense voucher. The field is valid for witholding tax type
 * @property int $VatMargin The VAT margin scheme is used for the trade of secondhand goods which are purchased without VAT (for example when a company buys a secondhand good from a private person). In the VAT margin scheme, the VAT is not calculated based on the sales price. Instead of that, the VAT is calculated based on the margin (gross sales price minus the gross purchase price)
 * @property int $VATPartialRatio Partial ratio explains which part of the VAT the company has to pay. Used in some branches where the sellers have a bad reputation, so the buyers have to take over the VAT-liability
 * @property VATPercentages $VATPercentages VAT percentages. You can have several VAT percentages, with start and end dates
 * @property string $VATTransactionType Indicates the type of transactions for which the VAT code may be used. B = Both, P = Purchase, S = Sales
 */
class VatCode extends Model 
{

        protected $ID;
        protected $Account;
        protected $AccountCode;
        protected $AccountName;
        protected $CalculationBasis;
        protected $Charged;
        protected $Code;
        protected $Country;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $EUSalesListing;
        protected $GLDiscountPurchase;
        protected $GLDiscountPurchaseCode;
        protected $GLDiscountPurchaseDescription;
        protected $GLDiscountSales;
        protected $GLDiscountSalesCode;
        protected $GLDiscountSalesDescription;
        protected $GLToClaim;
        protected $GLToClaimCode;
        protected $GLToClaimDescription;
        protected $GLToPay;
        protected $GLToPayCode;
        protected $GLToPayDescription;
        protected $IntraStat;
        protected $IsBlocked;
        protected $LegalText;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Percentage;
        protected $TaxReturnType;
        protected $Type;
        protected $VatDocType;
        protected $VatMargin;
        protected $VATPartialRatio;
        protected $VATPercentages;
        protected $VATTransactionType;
        protected $url = 'vat/VATCodes';

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
    public function getCalculationBasis()
    {
        return $this->CalculationBasis;
    }

    /**
     * @param mixed $CalculationBasis
     *
     * @return self
     */
    public function setCalculationBasis($CalculationBasis)
    {
        $this->CalculationBasis = $CalculationBasis;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCharged()
    {
        return $this->Charged;
    }

    /**
     * @param mixed $Charged
     *
     * @return self
     */
    public function setCharged($Charged)
    {
        $this->Charged = $Charged;

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
    public function getEUSalesListing()
    {
        return $this->EUSalesListing;
    }

    /**
     * @param mixed $EUSalesListing
     *
     * @return self
     */
    public function setEUSalesListing($EUSalesListing)
    {
        $this->EUSalesListing = $EUSalesListing;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLDiscountPurchase()
    {
        return $this->GLDiscountPurchase;
    }

    /**
     * @param mixed $GLDiscountPurchase
     *
     * @return self
     */
    public function setGLDiscountPurchase($GLDiscountPurchase)
    {
        $this->GLDiscountPurchase = $GLDiscountPurchase;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLDiscountPurchaseCode()
    {
        return $this->GLDiscountPurchaseCode;
    }

    /**
     * @param mixed $GLDiscountPurchaseCode
     *
     * @return self
     */
    public function setGLDiscountPurchaseCode($GLDiscountPurchaseCode)
    {
        $this->GLDiscountPurchaseCode = $GLDiscountPurchaseCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLDiscountPurchaseDescription()
    {
        return $this->GLDiscountPurchaseDescription;
    }

    /**
     * @param mixed $GLDiscountPurchaseDescription
     *
     * @return self
     */
    public function setGLDiscountPurchaseDescription($GLDiscountPurchaseDescription)
    {
        $this->GLDiscountPurchaseDescription = $GLDiscountPurchaseDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLDiscountSales()
    {
        return $this->GLDiscountSales;
    }

    /**
     * @param mixed $GLDiscountSales
     *
     * @return self
     */
    public function setGLDiscountSales($GLDiscountSales)
    {
        $this->GLDiscountSales = $GLDiscountSales;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLDiscountSalesCode()
    {
        return $this->GLDiscountSalesCode;
    }

    /**
     * @param mixed $GLDiscountSalesCode
     *
     * @return self
     */
    public function setGLDiscountSalesCode($GLDiscountSalesCode)
    {
        $this->GLDiscountSalesCode = $GLDiscountSalesCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLDiscountSalesDescription()
    {
        return $this->GLDiscountSalesDescription;
    }

    /**
     * @param mixed $GLDiscountSalesDescription
     *
     * @return self
     */
    public function setGLDiscountSalesDescription($GLDiscountSalesDescription)
    {
        $this->GLDiscountSalesDescription = $GLDiscountSalesDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLToClaim()
    {
        return $this->GLToClaim;
    }

    /**
     * @param mixed $GLToClaim
     *
     * @return self
     */
    public function setGLToClaim($GLToClaim)
    {
        $this->GLToClaim = $GLToClaim;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLToClaimCode()
    {
        return $this->GLToClaimCode;
    }

    /**
     * @param mixed $GLToClaimCode
     *
     * @return self
     */
    public function setGLToClaimCode($GLToClaimCode)
    {
        $this->GLToClaimCode = $GLToClaimCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLToClaimDescription()
    {
        return $this->GLToClaimDescription;
    }

    /**
     * @param mixed $GLToClaimDescription
     *
     * @return self
     */
    public function setGLToClaimDescription($GLToClaimDescription)
    {
        $this->GLToClaimDescription = $GLToClaimDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLToPay()
    {
        return $this->GLToPay;
    }

    /**
     * @param mixed $GLToPay
     *
     * @return self
     */
    public function setGLToPay($GLToPay)
    {
        $this->GLToPay = $GLToPay;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLToPayCode()
    {
        return $this->GLToPayCode;
    }

    /**
     * @param mixed $GLToPayCode
     *
     * @return self
     */
    public function setGLToPayCode($GLToPayCode)
    {
        $this->GLToPayCode = $GLToPayCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGLToPayDescription()
    {
        return $this->GLToPayDescription;
    }

    /**
     * @param mixed $GLToPayDescription
     *
     * @return self
     */
    public function setGLToPayDescription($GLToPayDescription)
    {
        $this->GLToPayDescription = $GLToPayDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntraStat()
    {
        return $this->IntraStat;
    }

    /**
     * @param mixed $IntraStat
     *
     * @return self
     */
    public function setIntraStat($IntraStat)
    {
        $this->IntraStat = $IntraStat;

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
    public function getLegalText()
    {
        return $this->LegalText;
    }

    /**
     * @param mixed $LegalText
     *
     * @return self
     */
    public function setLegalText($LegalText)
    {
        $this->LegalText = $LegalText;

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
    public function getPercentage()
    {
        return $this->Percentage;
    }

    /**
     * @param mixed $Percentage
     *
     * @return self
     */
    public function setPercentage($Percentage)
    {
        $this->Percentage = $Percentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxReturnType()
    {
        return $this->TaxReturnType;
    }

    /**
     * @param mixed $TaxReturnType
     *
     * @return self
     */
    public function setTaxReturnType($TaxReturnType)
    {
        $this->TaxReturnType = $TaxReturnType;

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
    public function getVatDocType()
    {
        return $this->VatDocType;
    }

    /**
     * @param mixed $VatDocType
     *
     * @return self
     */
    public function setVatDocType($VatDocType)
    {
        $this->VatDocType = $VatDocType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatMargin()
    {
        return $this->VatMargin;
    }

    /**
     * @param mixed $VatMargin
     *
     * @return self
     */
    public function setVatMargin($VatMargin)
    {
        $this->VatMargin = $VatMargin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATPartialRatio()
    {
        return $this->VATPartialRatio;
    }

    /**
     * @param mixed $VATPartialRatio
     *
     * @return self
     */
    public function setVATPartialRatio($VATPartialRatio)
    {
        $this->VATPartialRatio = $VATPartialRatio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATPercentages()
    {
        return $this->VATPercentages;
    }

    /**
     * @param mixed $VATPercentages
     *
     * @return self
     */
    public function setVATPercentages($VATPercentages)
    {
        $this->VATPercentages = $VATPercentages;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATTransactionType()
    {
        return $this->VATTransactionType;
    }

    /**
     * @param mixed $VATTransactionType
     *
     * @return self
     */
    public function setVATTransactionType($VATTransactionType)
    {
        $this->VATTransactionType = $VATTransactionType;

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
