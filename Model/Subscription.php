<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Subscription extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=subscriptionSubscriptions
 *
 * @property string $EntryID ID of the entry, Primary key
 * @property bool $BlockEntry Indicates if subscription is blocked for time cost entry
 * @property string $CancellationDate Date of cancellation
 * @property string $Classification Reference to Classification
 * @property string $ClassificationCode Code of Classification
 * @property string $ClassificationDescription Description of Classification
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $CustomerPONumber Purchase order number of customer
 * @property string $Description Description of Classification
 * @property int $Division Division code
 * @property string $EndDate End date
 * @property Integer $InvoiceDay Invoice day
 * @property string $InvoicedTo Invoice date
 * @property string $InvoiceTo Reference to invoice account
 * @property string $InvoiceToContactPerson Reference to contact person of invoice account
 * @property string $InvoiceToContactPersonFullName Name of contact person of invoice account
 * @property string $InvoiceToName Name of invoice account
 * @property string $InvoicingStartDate Invoicing start date
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Remarks
 * @property string $Number Purchase order number of customer
 * @property string $OrderedBy Reference to order account
 * @property string $OrderedByContactPerson Reference of contact person of order account
 * @property string $OrderedByContactPersonFullName Name of contact person of order account
 * @property string $OrderedByName Name of order account
 * @property string $PaymentCondition Payment condition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property bool $Printed Indicates if subscription is printed
 * @property string $ReasonCancelled Reference to reason cancelled
 * @property string $ReasonCancelledCode Code of ReasonCancelled
 * @property string $ReasonCancelledDescription Description of ReasonCancelled
 * @property string $StartDate Invoicing start date
 * @property SubscriptionLines $SubscriptionLines Collection of subscription lines
 * @property SubscriptionRestrictionEmployees $SubscriptionRestrictionEmployees Collection of restriction employees
 * @property SubscriptionRestrictionItems $SubscriptionRestrictionItems Collection of restriction items
 * @property string $SubscriptionType Reference to subscription type
 * @property string $SubscriptionTypeCode Code of SubscriptionType
 * @property string $SubscriptionTypeDescription Description of SubscriptionType
 */
class Subscription extends Model 
{
        protected $primaryKey = 'EntryID';
        protected $BlockEntry;
        protected $CancellationDate;
        protected $Classification;
        protected $ClassificationCode;
        protected $ClassificationDescription;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $CustomerPONumber;
        protected $Description;
        protected $Division;
        protected $EndDate;
        protected $EntryID;
        protected $InvoiceDay;
        protected $InvoicedTo;
        protected $InvoiceTo;
        protected $InvoiceToContactPerson;
        protected $InvoiceToContactPersonFullName;
        protected $InvoiceToName;
        protected $InvoicingStartDate;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $Number;
        protected $OrderedBy;
        protected $OrderedByContactPerson;
        protected $OrderedByContactPersonFullName;
        protected $OrderedByName;
        protected $PaymentCondition;
        protected $PaymentConditionDescription;
        protected $Printed;
        protected $ReasonCancelled;
        protected $ReasonCancelledCode;
        protected $ReasonCancelledDescription;
        protected $StartDate;
        protected $SubscriptionLines;
        protected $SubscriptionRestrictionEmployees;
        protected $SubscriptionRestrictionItems;
        protected $SubscriptionType;
        protected $SubscriptionTypeCode;
        protected $SubscriptionTypeDescription;
        protected $url = 'subscription/Subscriptions';

    /**
     * @return mixed
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * @param mixed $primaryKey
     *
     * @return self
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

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
    public function getCancellationDate()
    {
        return $this->CancellationDate;
    }

    /**
     * @param mixed $CancellationDate
     *
     * @return self
     */
    public function setCancellationDate($CancellationDate)
    {
        $this->CancellationDate = $CancellationDate;

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
    public function getClassificationCode()
    {
        return $this->ClassificationCode;
    }

    /**
     * @param mixed $ClassificationCode
     *
     * @return self
     */
    public function setClassificationCode($ClassificationCode)
    {
        $this->ClassificationCode = $ClassificationCode;

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
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param mixed $Currency
     *
     * @return self
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerPONumber()
    {
        return $this->CustomerPONumber;
    }

    /**
     * @param mixed $CustomerPONumber
     *
     * @return self
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
        $this->CustomerPONumber = $CustomerPONumber;

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
    public function getInvoiceDay()
    {
        return $this->InvoiceDay;
    }

    /**
     * @param mixed $InvoiceDay
     *
     * @return self
     */
    public function setInvoiceDay($InvoiceDay)
    {
        $this->InvoiceDay = $InvoiceDay;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoicedTo()
    {
        return $this->InvoicedTo;
    }

    /**
     * @param mixed $InvoicedTo
     *
     * @return self
     */
    public function setInvoicedTo($InvoicedTo)
    {
        $this->InvoicedTo = $InvoicedTo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTo()
    {
        return $this->InvoiceTo;
    }

    /**
     * @param mixed $InvoiceTo
     *
     * @return self
     */
    public function setInvoiceTo($InvoiceTo)
    {
        $this->InvoiceTo = $InvoiceTo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToContactPerson()
    {
        return $this->InvoiceToContactPerson;
    }

    /**
     * @param mixed $InvoiceToContactPerson
     *
     * @return self
     */
    public function setInvoiceToContactPerson($InvoiceToContactPerson)
    {
        $this->InvoiceToContactPerson = $InvoiceToContactPerson;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToContactPersonFullName()
    {
        return $this->InvoiceToContactPersonFullName;
    }

    /**
     * @param mixed $InvoiceToContactPersonFullName
     *
     * @return self
     */
    public function setInvoiceToContactPersonFullName($InvoiceToContactPersonFullName)
    {
        $this->InvoiceToContactPersonFullName = $InvoiceToContactPersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToName()
    {
        return $this->InvoiceToName;
    }

    /**
     * @param mixed $InvoiceToName
     *
     * @return self
     */
    public function setInvoiceToName($InvoiceToName)
    {
        $this->InvoiceToName = $InvoiceToName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoicingStartDate()
    {
        return $this->InvoicingStartDate;
    }

    /**
     * @param mixed $InvoicingStartDate
     *
     * @return self
     */
    public function setInvoicingStartDate($InvoicingStartDate)
    {
        $this->InvoicingStartDate = $InvoicingStartDate;

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
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param mixed $Number
     *
     * @return self
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedBy()
    {
        return $this->OrderedBy;
    }

    /**
     * @param mixed $OrderedBy
     *
     * @return self
     */
    public function setOrderedBy($OrderedBy)
    {
        $this->OrderedBy = $OrderedBy;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedByContactPerson()
    {
        return $this->OrderedByContactPerson;
    }

    /**
     * @param mixed $OrderedByContactPerson
     *
     * @return self
     */
    public function setOrderedByContactPerson($OrderedByContactPerson)
    {
        $this->OrderedByContactPerson = $OrderedByContactPerson;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedByContactPersonFullName()
    {
        return $this->OrderedByContactPersonFullName;
    }

    /**
     * @param mixed $OrderedByContactPersonFullName
     *
     * @return self
     */
    public function setOrderedByContactPersonFullName($OrderedByContactPersonFullName)
    {
        $this->OrderedByContactPersonFullName = $OrderedByContactPersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderedByName()
    {
        return $this->OrderedByName;
    }

    /**
     * @param mixed $OrderedByName
     *
     * @return self
     */
    public function setOrderedByName($OrderedByName)
    {
        $this->OrderedByName = $OrderedByName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentCondition()
    {
        return $this->PaymentCondition;
    }

    /**
     * @param mixed $PaymentCondition
     *
     * @return self
     */
    public function setPaymentCondition($PaymentCondition)
    {
        $this->PaymentCondition = $PaymentCondition;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentConditionDescription()
    {
        return $this->PaymentConditionDescription;
    }

    /**
     * @param mixed $PaymentConditionDescription
     *
     * @return self
     */
    public function setPaymentConditionDescription($PaymentConditionDescription)
    {
        $this->PaymentConditionDescription = $PaymentConditionDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrinted()
    {
        return $this->Printed;
    }

    /**
     * @param mixed $Printed
     *
     * @return self
     */
    public function setPrinted($Printed)
    {
        $this->Printed = $Printed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReasonCancelled()
    {
        return $this->ReasonCancelled;
    }

    /**
     * @param mixed $ReasonCancelled
     *
     * @return self
     */
    public function setReasonCancelled($ReasonCancelled)
    {
        $this->ReasonCancelled = $ReasonCancelled;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReasonCancelledCode()
    {
        return $this->ReasonCancelledCode;
    }

    /**
     * @param mixed $ReasonCancelledCode
     *
     * @return self
     */
    public function setReasonCancelledCode($ReasonCancelledCode)
    {
        $this->ReasonCancelledCode = $ReasonCancelledCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReasonCancelledDescription()
    {
        return $this->ReasonCancelledDescription;
    }

    /**
     * @param mixed $ReasonCancelledDescription
     *
     * @return self
     */
    public function setReasonCancelledDescription($ReasonCancelledDescription)
    {
        $this->ReasonCancelledDescription = $ReasonCancelledDescription;

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
    public function getSubscriptionLines()
    {
        return $this->SubscriptionLines;
    }

    /**
     * @param mixed $SubscriptionLines
     *
     * @return self
     */
    public function setSubscriptionLines($SubscriptionLines)
    {
        $this->SubscriptionLines = $SubscriptionLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionRestrictionEmployees()
    {
        return $this->SubscriptionRestrictionEmployees;
    }

    /**
     * @param mixed $SubscriptionRestrictionEmployees
     *
     * @return self
     */
    public function setSubscriptionRestrictionEmployees($SubscriptionRestrictionEmployees)
    {
        $this->SubscriptionRestrictionEmployees = $SubscriptionRestrictionEmployees;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionRestrictionItems()
    {
        return $this->SubscriptionRestrictionItems;
    }

    /**
     * @param mixed $SubscriptionRestrictionItems
     *
     * @return self
     */
    public function setSubscriptionRestrictionItems($SubscriptionRestrictionItems)
    {
        $this->SubscriptionRestrictionItems = $SubscriptionRestrictionItems;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionType()
    {
        return $this->SubscriptionType;
    }

    /**
     * @param mixed $SubscriptionType
     *
     * @return self
     */
    public function setSubscriptionType($SubscriptionType)
    {
        $this->SubscriptionType = $SubscriptionType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionTypeCode()
    {
        return $this->SubscriptionTypeCode;
    }

    /**
     * @param mixed $SubscriptionTypeCode
     *
     * @return self
     */
    public function setSubscriptionTypeCode($SubscriptionTypeCode)
    {
        $this->SubscriptionTypeCode = $SubscriptionTypeCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionTypeDescription()
    {
        return $this->SubscriptionTypeDescription;
    }

    /**
     * @param mixed $SubscriptionTypeDescription
     *
     * @return self
     */
    public function setSubscriptionTypeDescription($SubscriptionTypeDescription)
    {
        $this->SubscriptionTypeDescription = $SubscriptionTypeDescription;

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
