<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class BankAccount extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmBankAccounts
 *
 * @property string $ID Primary key
 * @property string $Account Account (customer, supplier) to which the bank account belongs
 * @property string $AccountName The name of the account
 * @property string $Bank Account (customer, supplier) to which the bank account belongs
 * @property string $BankAccount The bank account number
 * @property string $BankAccountHolderName Name of the holder of the bank account, as known by the bank
 * @property string $BankDescription Obsolete
 * @property string $BankName Obsolete
 * @property string $BICCode BIC code of the bank where the bank account is held
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Obsolete
 * @property int $Division Division code
 * @property string $Format Format that belongs to the bank account number
 * @property string $IBAN Obsolete
 * @property bool $Main Indicates if the bank account is the main bank account
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Type The type indicates what entity the bank account is used for. A = Account (default), E = Employee, K = Cash, R = Bank, S = Student, U = Unknown. Currently it's only possible to create 'Account' type bank accounts.
 * @property string $TypeDescription Description of the Type
 */
class BankAccount extends Model 
{
        protected $ID;
        protected $Account;
        protected $AccountName;
        protected $Bank;
        protected $BankAccount;
        protected $BankAccountHolderName;
        protected $BankDescription;
        protected $BankName;
        protected $BICCode;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $Format;
        protected $IBAN;
        protected $Main;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Type;
        protected $TypeDescription;
        protected $url = 'crm/BankAccounts';

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
    public function getBank()
    {
        return $this->Bank;
    }

    /**
     * @param mixed $Bank
     *
     * @return self
     */
    public function setBank($Bank)
    {
        $this->Bank = $Bank;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccount()
    {
        return $this->BankAccount;
    }

    /**
     * @param mixed $BankAccount
     *
     * @return self
     */
    public function setBankAccount($BankAccount)
    {
        $this->BankAccount = $BankAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountHolderName()
    {
        return $this->BankAccountHolderName;
    }

    /**
     * @param mixed $BankAccountHolderName
     *
     * @return self
     */
    public function setBankAccountHolderName($BankAccountHolderName)
    {
        $this->BankAccountHolderName = $BankAccountHolderName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankDescription()
    {
        return $this->BankDescription;
    }

    /**
     * @param mixed $BankDescription
     *
     * @return self
     */
    public function setBankDescription($BankDescription)
    {
        $this->BankDescription = $BankDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->BankName;
    }

    /**
     * @param mixed $BankName
     *
     * @return self
     */
    public function setBankName($BankName)
    {
        $this->BankName = $BankName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBICCode()
    {
        return $this->BICCode;
    }

    /**
     * @param mixed $BICCode
     *
     * @return self
     */
    public function setBICCode($BICCode)
    {
        $this->BICCode = $BICCode;

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
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * @param mixed $Format
     *
     * @return self
     */
    public function setFormat($Format)
    {
        $this->Format = $Format;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIBAN()
    {
        return $this->IBAN;
    }

    /**
     * @param mixed $IBAN
     *
     * @return self
     */
    public function setIBAN($IBAN)
    {
        $this->IBAN = $IBAN;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMain()
    {
        return $this->Main;
    }

    /**
     * @param mixed $Main
     *
     * @return self
     */
    public function setMain($Main)
    {
        $this->Main = $Main;

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
    public function getTypeDescription()
    {
        return $this->TypeDescription;
    }

    /**
     * @param mixed $TypeDescription
     *
     * @return self
     */
    public function setTypeDescription($TypeDescription)
    {
        $this->TypeDescription = $TypeDescription;

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
