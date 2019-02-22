<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class AccountInvolvedAccount extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyAccountInvolvedAccounts
 *
 * @property string $ID Primary key
 * @property string $Account ID of account
 * @property string $AccountName Name of account
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $InvolvedAccount ID of involved account
 * @property string $InvolvedAccountRelationTypeDescription Description of relation type
 * @property int $InvolvedAccountRelationTypeDescriptionTermId TermId of description of relation type
 * @property int $InvolvedAccountRelationTypeId ID of relation type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Use to record details of important information
 */
class AccountInvolvedAccount extends Model
{
        protected $ID;
        protected $Account;
        protected $AccountName;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Division;
        protected $InvolvedAccount;
        protected $InvolvedAccountRelationTypeDescription;
        protected $InvolvedAccountRelationTypeDescriptionTermId;
        protected $InvolvedAccountRelationTypeId;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Notes;    
        protected $url = 'accountancy/AccountInvolvedAccounts';


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
    public function getInvolvedAccount()
    {
        return $this->InvolvedAccount;
    }

    /**
     * @param mixed $InvolvedAccount
     *
     * @return self
     */
    public function setInvolvedAccount($InvolvedAccount)
    {
        $this->InvolvedAccount = $InvolvedAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvolvedAccountRelationTypeDescription()
    {
        return $this->InvolvedAccountRelationTypeDescription;
    }

    /**
     * @param mixed $InvolvedAccountRelationTypeDescription
     *
     * @return self
     */
    public function setInvolvedAccountRelationTypeDescription($InvolvedAccountRelationTypeDescription)
    {
        $this->InvolvedAccountRelationTypeDescription = $InvolvedAccountRelationTypeDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvolvedAccountRelationTypeDescriptionTermId()
    {
        return $this->InvolvedAccountRelationTypeDescriptionTermId;
    }

    /**
     * @param mixed $InvolvedAccountRelationTypeDescriptionTermId
     *
     * @return self
     */
    public function setInvolvedAccountRelationTypeDescriptionTermId($InvolvedAccountRelationTypeDescriptionTermId)
    {
        $this->InvolvedAccountRelationTypeDescriptionTermId = $InvolvedAccountRelationTypeDescriptionTermId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvolvedAccountRelationTypeId()
    {
        return $this->InvolvedAccountRelationTypeId;
    }

    /**
     * @param mixed $InvolvedAccountRelationTypeId
     *
     * @return self
     */
    public function setInvolvedAccountRelationTypeId($InvolvedAccountRelationTypeId)
    {
        $this->InvolvedAccountRelationTypeId = $InvolvedAccountRelationTypeId;

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
