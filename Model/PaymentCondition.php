<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PaymentCondition extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=cashflowPaymentConditions
 *
 * @property string $ID Primary key
 * @property string $Code Code of the payment condition
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CreditManagementScenario Default credit management scenario to be used for new payment terms
 * @property string $CreditManagementScenarioCode Code of CreditManagementScenario
 * @property string $CreditManagementScenarioDescription Description of CreditManagementScenario
 * @property string $Description Description of CreditManagementScenario
 * @property string $DiscountCalculation Indicates how the discount amount is calculated. Values: E = Excluding VAT, I = Including VAT
 * @property int $DiscountPaymentDays Number of days to pay within, to have the right to take the discount
 * @property float $DiscountPercentage Discount percentage
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $PaymentDays Number of days to pay within, to have the right to take the discount
 * @property string $PaymentDiscountType Type of payment discount. Values: B = Settlement discount, K = Credit surcharge
 * @property int $PaymentEndOfMonths Number of days to be included in the due date calculation. Example: invoice date = 17/01 PaymentEndOfMonths = 2 => 31/03 PaymentDays = 15 => 15/04
 * @property string $PaymentMethod Method of payment. Values: B = On credit, I = Collection, K = Cash
 * @property float $Percentage Discount percentage
 * @property string $VATCalculation Indicates how the VAT amount is calculated Values: E = Excluding discount, I = Including discount
 */
class PaymentCondition extends Model 
{

        protected $ID;
        protected $Code;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $CreditManagementScenario;
        protected $CreditManagementScenarioCode;
        protected $CreditManagementScenarioDescription;
        protected $Description;
        protected $DiscountCalculation;
        protected $DiscountPaymentDays;
        protected $DiscountPercentage;
        protected $Division;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $PaymentDays;
        protected $PaymentDiscountType;
        protected $PaymentEndOfMonths;
        protected $PaymentMethod;
        protected $Percentage;
        protected $VATCalculation;
        protected $url = 'cashflow/PaymentConditions';

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
    public function getCreditManagementScenario()
    {
        return $this->CreditManagementScenario;
    }

    /**
     * @param mixed $CreditManagementScenario
     *
     * @return self
     */
    public function setCreditManagementScenario($CreditManagementScenario)
    {
        $this->CreditManagementScenario = $CreditManagementScenario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditManagementScenarioCode()
    {
        return $this->CreditManagementScenarioCode;
    }

    /**
     * @param mixed $CreditManagementScenarioCode
     *
     * @return self
     */
    public function setCreditManagementScenarioCode($CreditManagementScenarioCode)
    {
        $this->CreditManagementScenarioCode = $CreditManagementScenarioCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditManagementScenarioDescription()
    {
        return $this->CreditManagementScenarioDescription;
    }

    /**
     * @param mixed $CreditManagementScenarioDescription
     *
     * @return self
     */
    public function setCreditManagementScenarioDescription($CreditManagementScenarioDescription)
    {
        $this->CreditManagementScenarioDescription = $CreditManagementScenarioDescription;

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
    public function getDiscountCalculation()
    {
        return $this->DiscountCalculation;
    }

    /**
     * @param mixed $DiscountCalculation
     *
     * @return self
     */
    public function setDiscountCalculation($DiscountCalculation)
    {
        $this->DiscountCalculation = $DiscountCalculation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountPaymentDays()
    {
        return $this->DiscountPaymentDays;
    }

    /**
     * @param mixed $DiscountPaymentDays
     *
     * @return self
     */
    public function setDiscountPaymentDays($DiscountPaymentDays)
    {
        $this->DiscountPaymentDays = $DiscountPaymentDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountPercentage()
    {
        return $this->DiscountPercentage;
    }

    /**
     * @param mixed $DiscountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
        $this->DiscountPercentage = $DiscountPercentage;

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
    public function getPaymentDays()
    {
        return $this->PaymentDays;
    }

    /**
     * @param mixed $PaymentDays
     *
     * @return self
     */
    public function setPaymentDays($PaymentDays)
    {
        $this->PaymentDays = $PaymentDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentDiscountType()
    {
        return $this->PaymentDiscountType;
    }

    /**
     * @param mixed $PaymentDiscountType
     *
     * @return self
     */
    public function setPaymentDiscountType($PaymentDiscountType)
    {
        $this->PaymentDiscountType = $PaymentDiscountType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentEndOfMonths()
    {
        return $this->PaymentEndOfMonths;
    }

    /**
     * @param mixed $PaymentEndOfMonths
     *
     * @return self
     */
    public function setPaymentEndOfMonths($PaymentEndOfMonths)
    {
        $this->PaymentEndOfMonths = $PaymentEndOfMonths;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param mixed $PaymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;

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
    public function getVATCalculation()
    {
        return $this->VATCalculation;
    }

    /**
     * @param mixed $VATCalculation
     *
     * @return self
     */
    public function setVATCalculation($VATCalculation)
    {
        $this->VATCalculation = $VATCalculation;

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
