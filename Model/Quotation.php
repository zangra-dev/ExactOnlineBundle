<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Quotation extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMQuotations
 *
 * @property string $QuotationID Identifier of the quotation
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CloseDate Date on which the customer accepted or rejected the quotation version
 * @property string $ClosingDate Date on which you expect to close/win the deal
 * @property string $Created Date and time on which the quotation was created
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Currency The currency of the quotation
 * @property string $DeliveryAccount The account where the items should delivered
 * @property string $DeliveryAccountCode The code of the delivery account
 * @property string $DeliveryAccountContact The contact person of the delivery account
 * @property string $DeliveryAccountContactFullName Full name of the delivery account contact person
 * @property string $DeliveryAccountName The name of the delivery account
 * @property string $DeliveryAddress The id of the delivery address
 * @property string $Description The description of the quotation
 * @property int $Division Division code
 * @property string $Document Document linked to the quotation
 * @property string $DocumentSubject The subject of the document
 * @property string $DueDate Date after which the quotation is no longer valid
 * @property string $InvoiceAccount The account to which the invoice is sent
 * @property string $InvoiceAccountCode The code of the invoice account
 * @property string $InvoiceAccountContact The contact person of the invoice account
 * @property string $InvoiceAccountContactFullName Full name of the invoice account contact person
 * @property string $InvoiceAccountName The name of the invoice account
 * @property string $Modified Date and time on which the quotation was last modified
 * @property string $Modifier User ID of the modifier
 * @property string $ModifierFullName Name of the modifier
 * @property string $Opportunity Opportunity linked to the quotation
 * @property string $OpportunityName The name of the opportunity
 * @property string $OrderAccount The account that requested the quotation
 * @property string $OrderAccountCode The code of the order account
 * @property string $OrderAccountContact The contact person of the order account
 * @property string $OrderAccountContactFullName Full name of the order account contact person
 * @property string $OrderAccountName The name of the order account
 * @property string $Project The project linked to the quotation
 * @property string $ProjectCode The code of the project
 * @property string $ProjectDescription The description of the project
 * @property string $QuotationDate Date on which the quotation version is entered or printed. Both during entering and printing this date can be adjusted
 * @property QuotationLines $QuotationLines The collection of quotation lines
 * @property int $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property string $Remarks Extra text that can be added to the quotation
 * @property string $SalesPerson The user that is responsible for the quotation version
 * @property string $SalesPersonFullName Full name of the sales person
 * @property int $Status The status of the quotation version. 5 = Rejected, 6 = Reviewed and closed, 10 = Recovery, 20 = Draft, 25 = Open, 35 = Processing... , 40 = Printed, 50 = Accepted
 * @property string $StatusDescription The description of the status
 * @property float $VATAmountFC Total VAT amount in the currency of the transaction
 * @property int $VersionNumber Number indicating the different reviews which are made for the quotation
 * @property string $YourRef The number by which this quotation is identified by the order account
 */
class Quotation extends Model 
{

        protected $primaryKey = 'QuotationID';
        protected $QuotationID;
        protected $AmountDC;
        protected $AmountFC;
        protected $CloseDate;
        protected $ClosingDate;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $DeliveryAccount;
        protected $DeliveryAccountCode;
        protected $DeliveryAccountContact;
        protected $DeliveryAccountContactFullName;
        protected $DeliveryAccountName;
        protected $DeliveryAddress;
        protected $Description;
        protected $Division;
        protected $Document;
        protected $DocumentSubject;
        protected $DueDate;
        protected $InvoiceAccount;
        protected $InvoiceAccountCode;
        protected $InvoiceAccountContact;
        protected $InvoiceAccountContactFullName;
        protected $InvoiceAccountName;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Opportunity;
        protected $OpportunityName;
        protected $OrderAccount;
        protected $OrderAccountCode;
        protected $OrderAccountContact;
        protected $OrderAccountContactFullName;
        protected $OrderAccountName;
        protected $Project;
        protected $ProjectCode;
        protected $ProjectDescription;
        protected $QuotationDate;
        protected $QuotationLines;
        protected $QuotationNumber;
        protected $Remarks;
        protected $SalesPerson;
        protected $SalesPersonFullName;
        protected $Status;
        protected $StatusDescription;
        protected $VATAmountFC;
        protected $VersionNumber;
        protected $YourRef;
        protected $url = 'crm/Quotations';
    

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
    public function getQuotationID()
    {
        return $this->QuotationID;
    }

    /**
     * @param mixed $QuotationID
     *
     * @return self
     */
    public function setQuotationID($QuotationID)
    {
        $this->QuotationID = $QuotationID;

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
    public function getCloseDate()
    {
        return $this->CloseDate;
    }

    /**
     * @param mixed $CloseDate
     *
     * @return self
     */
    public function setCloseDate($CloseDate)
    {
        $this->CloseDate = $CloseDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClosingDate()
    {
        return $this->ClosingDate;
    }

    /**
     * @param mixed $ClosingDate
     *
     * @return self
     */
    public function setClosingDate($ClosingDate)
    {
        $this->ClosingDate = $ClosingDate;

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
    public function getDeliveryAccount()
    {
        return $this->DeliveryAccount;
    }

    /**
     * @param mixed $DeliveryAccount
     *
     * @return self
     */
    public function setDeliveryAccount($DeliveryAccount)
    {
        $this->DeliveryAccount = $DeliveryAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountCode()
    {
        return $this->DeliveryAccountCode;
    }

    /**
     * @param mixed $DeliveryAccountCode
     *
     * @return self
     */
    public function setDeliveryAccountCode($DeliveryAccountCode)
    {
        $this->DeliveryAccountCode = $DeliveryAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountContact()
    {
        return $this->DeliveryAccountContact;
    }

    /**
     * @param mixed $DeliveryAccountContact
     *
     * @return self
     */
    public function setDeliveryAccountContact($DeliveryAccountContact)
    {
        $this->DeliveryAccountContact = $DeliveryAccountContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountContactFullName()
    {
        return $this->DeliveryAccountContactFullName;
    }

    /**
     * @param mixed $DeliveryAccountContactFullName
     *
     * @return self
     */
    public function setDeliveryAccountContactFullName($DeliveryAccountContactFullName)
    {
        $this->DeliveryAccountContactFullName = $DeliveryAccountContactFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountName()
    {
        return $this->DeliveryAccountName;
    }

    /**
     * @param mixed $DeliveryAccountName
     *
     * @return self
     */
    public function setDeliveryAccountName($DeliveryAccountName)
    {
        $this->DeliveryAccountName = $DeliveryAccountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param mixed $DeliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;

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
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param mixed $Document
     *
     * @return self
     */
    public function setDocument($Document)
    {
        $this->Document = $Document;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentSubject()
    {
        return $this->DocumentSubject;
    }

    /**
     * @param mixed $DocumentSubject
     *
     * @return self
     */
    public function setDocumentSubject($DocumentSubject)
    {
        $this->DocumentSubject = $DocumentSubject;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * @param mixed $DueDate
     *
     * @return self
     */
    public function setDueDate($DueDate)
    {
        $this->DueDate = $DueDate;

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
    public function getInvoiceAccountContact()
    {
        return $this->InvoiceAccountContact;
    }

    /**
     * @param mixed $InvoiceAccountContact
     *
     * @return self
     */
    public function setInvoiceAccountContact($InvoiceAccountContact)
    {
        $this->InvoiceAccountContact = $InvoiceAccountContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAccountContactFullName()
    {
        return $this->InvoiceAccountContactFullName;
    }

    /**
     * @param mixed $InvoiceAccountContactFullName
     *
     * @return self
     */
    public function setInvoiceAccountContactFullName($InvoiceAccountContactFullName)
    {
        $this->InvoiceAccountContactFullName = $InvoiceAccountContactFullName;

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
    public function getOpportunity()
    {
        return $this->Opportunity;
    }

    /**
     * @param mixed $Opportunity
     *
     * @return self
     */
    public function setOpportunity($Opportunity)
    {
        $this->Opportunity = $Opportunity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpportunityName()
    {
        return $this->OpportunityName;
    }

    /**
     * @param mixed $OpportunityName
     *
     * @return self
     */
    public function setOpportunityName($OpportunityName)
    {
        $this->OpportunityName = $OpportunityName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderAccount()
    {
        return $this->OrderAccount;
    }

    /**
     * @param mixed $OrderAccount
     *
     * @return self
     */
    public function setOrderAccount($OrderAccount)
    {
        $this->OrderAccount = $OrderAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderAccountCode()
    {
        return $this->OrderAccountCode;
    }

    /**
     * @param mixed $OrderAccountCode
     *
     * @return self
     */
    public function setOrderAccountCode($OrderAccountCode)
    {
        $this->OrderAccountCode = $OrderAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderAccountContact()
    {
        return $this->OrderAccountContact;
    }

    /**
     * @param mixed $OrderAccountContact
     *
     * @return self
     */
    public function setOrderAccountContact($OrderAccountContact)
    {
        $this->OrderAccountContact = $OrderAccountContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderAccountContactFullName()
    {
        return $this->OrderAccountContactFullName;
    }

    /**
     * @param mixed $OrderAccountContactFullName
     *
     * @return self
     */
    public function setOrderAccountContactFullName($OrderAccountContactFullName)
    {
        $this->OrderAccountContactFullName = $OrderAccountContactFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderAccountName()
    {
        return $this->OrderAccountName;
    }

    /**
     * @param mixed $OrderAccountName
     *
     * @return self
     */
    public function setOrderAccountName($OrderAccountName)
    {
        $this->OrderAccountName = $OrderAccountName;

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
    public function getQuotationDate()
    {
        return $this->QuotationDate;
    }

    /**
     * @param mixed $QuotationDate
     *
     * @return self
     */
    public function setQuotationDate($QuotationDate)
    {
        $this->QuotationDate = $QuotationDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuotationLines()
    {
        return $this->QuotationLines;
    }

    /**
     * @param mixed $QuotationLines
     *
     * @return self
     */
    public function setQuotationLines($QuotationLines)
    {
        $this->QuotationLines = $QuotationLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuotationNumber()
    {
        return $this->QuotationNumber;
    }

    /**
     * @param mixed $QuotationNumber
     *
     * @return self
     */
    public function setQuotationNumber($QuotationNumber)
    {
        $this->QuotationNumber = $QuotationNumber;

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
    public function getSalesPerson()
    {
        return $this->SalesPerson;
    }

    /**
     * @param mixed $SalesPerson
     *
     * @return self
     */
    public function setSalesPerson($SalesPerson)
    {
        $this->SalesPerson = $SalesPerson;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesPersonFullName()
    {
        return $this->SalesPersonFullName;
    }

    /**
     * @param mixed $SalesPersonFullName
     *
     * @return self
     */
    public function setSalesPersonFullName($SalesPersonFullName)
    {
        $this->SalesPersonFullName = $SalesPersonFullName;

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
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }

    /**
     * @param mixed $StatusDescription
     *
     * @return self
     */
    public function setStatusDescription($StatusDescription)
    {
        $this->StatusDescription = $StatusDescription;

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
    public function getVersionNumber()
    {
        return $this->VersionNumber;
    }

    /**
     * @param mixed $VersionNumber
     *
     * @return self
     */
    public function setVersionNumber($VersionNumber)
    {
        $this->VersionNumber = $VersionNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getYourRef()
    {
        return $this->YourRef;
    }

    /**
     * @param mixed $YourRef
     *
     * @return self
     */
    public function setYourRef($YourRef)
    {
        $this->YourRef = $YourRef;

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
