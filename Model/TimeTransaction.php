<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class TimeTransaction extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectTimeTransactions
 *
 * @property string $ID Primary key
 * @property string $Account Account linked to the transaction
 * @property string $AccountName Name of Account
 * @property string $Activity Reference to ProjectWBS (work breakdown structure)
 * @property string $ActivityDescription Description of ProjectWBS
 * @property float $Amount This property is obsolete. Use property 'AmountFC' instead.
 * @property float $AmountFC Amount in the currency of the transaction of the transaction
 * @property string $Attachment Attachment linked to the transaction
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency of the amount
 * @property string $Date Date
 * @property int $Division Division code
 * @property string $DivisionDescription Description of Division
 * @property string $Employee Employee linked to the transaction
 * @property string $EndTime End time of the transaction
 * @property int $EntryNumber Entrynumber
 * @property string $ErrorText Errortext, used for the backgroundjobs
 * @property int $HourStatus Status of the transaction
 * @property string $Item Item linked to the transaction. Items of type 'time' are linked to time transactions. Items of other types are linked to cost transactions
 * @property string $ItemDescription Description of Item
 * @property bool $ItemDivisable True if you can use decimals for item quantity
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes linked to the transaction
 * @property float $Price This property is obsolete. Use property 'PriceFC' instead.
 * @property float $PriceFC PriceFC (AmountFC = Quantity * PriceFC)
 * @property string $Project Project linked to the transaction
 * @property string $ProjectAccount Reference to project account
 * @property string $ProjectAccountCode Project account code
 * @property string $ProjectAccountName Project account name
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity of the transaction
 * @property bool $SkipValidation Skip validation
 * @property string $StartTime Start time of the transaction
 * @property string $Subscription Subscription linked to the transaction
 * @property string $SubscriptionAccount Account linked to the subscription
 * @property string $SubscriptionAccountCode Subscription account code
 * @property string $SubscriptionAccountName Subscription account name
 * @property string $SubscriptionDescription Description of the subscription
 * @property int $SubscriptionNumber Subscription number
 * @property int $Type Type of the transaction
 */
class TimeTransaction extends Model 
{
        protected $ID;
        protected $Account;
        protected $AccountName;
        protected $Activity;
        protected $ActivityDescription;
        protected $Amount;
        protected $AmountFC;
        protected $Attachment;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $Date;
        protected $Division;
        protected $DivisionDescription;
        protected $Employee;
        protected $EndTime;
        protected $EntryNumber;
        protected $ErrorText;
        protected $HourStatus;
        protected $Item;
        protected $ItemDescription;
        protected $ItemDivisable;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $Price;
        protected $PriceFC;
        protected $Project;
        protected $ProjectAccount;
        protected $ProjectAccountCode;
        protected $ProjectAccountName;
        protected $ProjectCode;
        protected $ProjectDescription;
        protected $Quantity;
        protected $SkipValidation;
        protected $StartTime;
        protected $Subscription;
        protected $SubscriptionAccount;
        protected $SubscriptionAccountCode;
        protected $SubscriptionAccountName;
        protected $SubscriptionDescription;
        protected $SubscriptionNumber;
        protected $Type;
        protected $url = 'project/TimeTransactions';

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
    public function getActivity()
    {
        return $this->Activity;
    }

    /**
     * @param mixed $Activity
     *
     * @return self
     */
    public function setActivity($Activity)
    {
        $this->Activity = $Activity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivityDescription()
    {
        return $this->ActivityDescription;
    }

    /**
     * @param mixed $ActivityDescription
     *
     * @return self
     */
    public function setActivityDescription($ActivityDescription)
    {
        $this->ActivityDescription = $ActivityDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param mixed $Amount
     *
     * @return self
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

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
    public function getAttachment()
    {
        return $this->Attachment;
    }

    /**
     * @param mixed $Attachment
     *
     * @return self
     */
    public function setAttachment($Attachment)
    {
        $this->Attachment = $Attachment;

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
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     *
     * @return self
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

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
    public function getDivisionDescription()
    {
        return $this->DivisionDescription;
    }

    /**
     * @param mixed $DivisionDescription
     *
     * @return self
     */
    public function setDivisionDescription($DivisionDescription)
    {
        $this->DivisionDescription = $DivisionDescription;

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
    public function getEntryNumber()
    {
        return $this->EntryNumber;
    }

    /**
     * @param mixed $EntryNumber
     *
     * @return self
     */
    public function setEntryNumber($EntryNumber)
    {
        $this->EntryNumber = $EntryNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrorText()
    {
        return $this->ErrorText;
    }

    /**
     * @param mixed $ErrorText
     *
     * @return self
     */
    public function setErrorText($ErrorText)
    {
        $this->ErrorText = $ErrorText;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHourStatus()
    {
        return $this->HourStatus;
    }

    /**
     * @param mixed $HourStatus
     *
     * @return self
     */
    public function setHourStatus($HourStatus)
    {
        $this->HourStatus = $HourStatus;

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
    public function getItemDivisable()
    {
        return $this->ItemDivisable;
    }

    /**
     * @param mixed $ItemDivisable
     *
     * @return self
     */
    public function setItemDivisable($ItemDivisable)
    {
        $this->ItemDivisable = $ItemDivisable;

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
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     *
     * @return self
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceFC()
    {
        return $this->PriceFC;
    }

    /**
     * @param mixed $PriceFC
     *
     * @return self
     */
    public function setPriceFC($PriceFC)
    {
        $this->PriceFC = $PriceFC;

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
    public function getProjectAccount()
    {
        return $this->ProjectAccount;
    }

    /**
     * @param mixed $ProjectAccount
     *
     * @return self
     */
    public function setProjectAccount($ProjectAccount)
    {
        $this->ProjectAccount = $ProjectAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectAccountCode()
    {
        return $this->ProjectAccountCode;
    }

    /**
     * @param mixed $ProjectAccountCode
     *
     * @return self
     */
    public function setProjectAccountCode($ProjectAccountCode)
    {
        $this->ProjectAccountCode = $ProjectAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectAccountName()
    {
        return $this->ProjectAccountName;
    }

    /**
     * @param mixed $ProjectAccountName
     *
     * @return self
     */
    public function setProjectAccountName($ProjectAccountName)
    {
        $this->ProjectAccountName = $ProjectAccountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectCode()
    {
        return $this->ProjectCode;
    }

    /**
     * @param mixed $ProjectCode
     *
     * @return self
     */
    public function setProjectCode($ProjectCode)
    {
        $this->ProjectCode = $ProjectCode;

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
    public function getSkipValidation()
    {
        return $this->SkipValidation;
    }

    /**
     * @param mixed $SkipValidation
     *
     * @return self
     */
    public function setSkipValidation($SkipValidation)
    {
        $this->SkipValidation = $SkipValidation;

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
    public function getSubscriptionAccount()
    {
        return $this->SubscriptionAccount;
    }

    /**
     * @param mixed $SubscriptionAccount
     *
     * @return self
     */
    public function setSubscriptionAccount($SubscriptionAccount)
    {
        $this->SubscriptionAccount = $SubscriptionAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionAccountCode()
    {
        return $this->SubscriptionAccountCode;
    }

    /**
     * @param mixed $SubscriptionAccountCode
     *
     * @return self
     */
    public function setSubscriptionAccountCode($SubscriptionAccountCode)
    {
        $this->SubscriptionAccountCode = $SubscriptionAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionAccountName()
    {
        return $this->SubscriptionAccountName;
    }

    /**
     * @param mixed $SubscriptionAccountName
     *
     * @return self
     */
    public function setSubscriptionAccountName($SubscriptionAccountName)
    {
        $this->SubscriptionAccountName = $SubscriptionAccountName;

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
    public function getSubscriptionNumber()
    {
        return $this->SubscriptionNumber;
    }

    /**
     * @param mixed $SubscriptionNumber
     *
     * @return self
     */
    public function setSubscriptionNumber($SubscriptionNumber)
    {
        $this->SubscriptionNumber = $SubscriptionNumber;

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
