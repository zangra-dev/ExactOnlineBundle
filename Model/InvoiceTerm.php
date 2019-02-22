<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class InvoiceTerm extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectInvoiceTerms
 *
 * @property string $ID Primary key
 * @property float $Amount Amount in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Deliverable WBS's deliverable linked to invoice term
 * @property string $Description Description of invoice term
 * @property int $Division Division number
 * @property string $ExecutionFromDate Execution date: From
 * @property string $ExecutionToDate Execution date: To
 * @property string $InvoiceDate Invoice date
 * @property string $Item Reference to item
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property float $Percentage Percentage of amount per project's budgeted amount
 * @property string $Project Reference to project
 * @property string $ProjectDescription Description of project
 * @property string $VATCode Reference to VATCode
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage VATCode percentage
 */
class InvoiceTerm extends Model 
{

        protected $ID;
        protected $Amount;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Deliverable;
        protected $Description;
        protected $Division;
        protected $ExecutionFromDate;
        protected $ExecutionToDate;
        protected $InvoiceDate;
        protected $Item;
        protected $ItemDescription;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;
        protected $Percentage;
        protected $Project;
        protected $ProjectDescription;
        protected $VATCode;
        protected $VATCodeDescription;
        protected $VATPercentage;
        protected $url = 'project/InvoiceTerms';

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
    public function getDeliverable()
    {
        return $this->Deliverable;
    }

    /**
     * @param mixed $Deliverable
     *
     * @return self
     */
    public function setDeliverable($Deliverable)
    {
        $this->Deliverable = $Deliverable;

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
    public function getExecutionFromDate()
    {
        return $this->ExecutionFromDate;
    }

    /**
     * @param mixed $ExecutionFromDate
     *
     * @return self
     */
    public function setExecutionFromDate($ExecutionFromDate)
    {
        $this->ExecutionFromDate = $ExecutionFromDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecutionToDate()
    {
        return $this->ExecutionToDate;
    }

    /**
     * @param mixed $ExecutionToDate
     *
     * @return self
     */
    public function setExecutionToDate($ExecutionToDate)
    {
        $this->ExecutionToDate = $ExecutionToDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * @param mixed $InvoiceDate
     *
     * @return self
     */
    public function setInvoiceDate($InvoiceDate)
    {
        $this->InvoiceDate = $InvoiceDate;

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
