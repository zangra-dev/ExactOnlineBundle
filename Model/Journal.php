<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;

/**
 * Class Journal extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialJournals
 *
 * @property string $ID Primary Key
 * @property bool $AllowVariableCurrency Indicates if the journal allows variable currency
 * @property bool $AllowVariableExchangeRate Indicates if the journal allows the exchange rate of the currency of the amounts in the journal entry to be changed
 * @property bool $AllowVAT Indicates if the journal allows the use of VAT in the financial entry. Especially true for general journals
 * @property bool $AutoSave Indicates if the journal automatically saves the entries when the amount is in balance with the entry lines
 * @property string $Bank Reference to bank account
 * @property string $BankAccountBICCode BIC code of the bank where the bank account is held
 * @property string $BankAccountCountry Country of bank account
 * @property string $BankAccountDescription Description of BankAccount
 * @property string $BankAccountIBAN IBAN of the bank account
 * @property string $BankAccountID Reference to the Bank Account linked to the Journal
 * @property string $BankAccountIncludingMask Bank account number. Is mandatory for Journals that have Type = Bank
 * @property bool $BankAccountUseSEPA Obsolete. Whether or not use SEPA for the bank account
 * @property bool $BankAccountUseSepaDirectDebit Obsolete. Whether or not use SEPA direct debit for the bank account
 * @property string $BankName Name of bank account
 * @property string $Code Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Default Currency of the Journal. If AllowVariableCurrency is false this is the only currency that can be used
 * @property string $CurrencyDescription Description of Currency
 * @property string $Description Name of the Journal
 * @property int $Division Division code
 * @property string $GLAccount Suspense general ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $GLAccountType Type of GLAccount
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PaymentInTransitAccount General ledger account for payment in transit
 * @property string $PaymentServiceAccountIdentifier Identifier detail of the Payment service account. Ex. EmailID for Paypal type of Payment service account
 * @property int $PaymentServiceProvider Type of Payment service provider. The following values are supported: 1 (Adyen), 2 (Paypal), 3 (Stripe). Is mandatory for Journals of Type 16 (Payment service)
 * @property string $PaymentServiceProviderName Name of the Payment service provider
 * @property int $Type Type of Journal. The following values are supported: 10 (Cash) 12 (Bank) 16 (Payment service) 20 (Sales) 21 (Return invoice) 22 (Purchase) 23 (Received return invoice) 90 (General journal)
 */
class Journal extends Model 
{

        protected $ID;
        protected $AllowVariableCurrency;
        protected $AllowVariableExchangeRate;
        protected $AllowVAT;
        protected $AutoSave;
        protected $Bank;
        protected $BankAccountBICCode;
        protected $BankAccountCountry;
        protected $BankAccountDescription;
        protected $BankAccountIBAN;
        protected $BankAccountID;
        protected $BankAccountIncludingMask;
        protected $BankAccountUseSEPA;
        protected $BankAccountUseSepaDirectDebit;
        protected $BankName;
        protected $Code;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $CurrencyDescription;
        protected $Description;
        protected $Division;
        protected $GLAccount;
        protected $GLAccountCode;
        protected $GLAccountDescription;
        protected $GLAccountType;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $PaymentInTransitAccount;
        protected $PaymentServiceAccountIdentifier;
        protected $PaymentServiceProvider;
        protected $PaymentServiceProviderName;
        protected $Type;
        protected $url = 'financial/Journals';


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
    public function getAllowVariableCurrency()
    {
        return $this->AllowVariableCurrency;
    }

    /**
     * @param mixed $AllowVariableCurrency
     *
     * @return self
     */
    public function setAllowVariableCurrency($AllowVariableCurrency)
    {
        $this->AllowVariableCurrency = $AllowVariableCurrency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllowVariableExchangeRate()
    {
        return $this->AllowVariableExchangeRate;
    }

    /**
     * @param mixed $AllowVariableExchangeRate
     *
     * @return self
     */
    public function setAllowVariableExchangeRate($AllowVariableExchangeRate)
    {
        $this->AllowVariableExchangeRate = $AllowVariableExchangeRate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllowVAT()
    {
        return $this->AllowVAT;
    }

    /**
     * @param mixed $AllowVAT
     *
     * @return self
     */
    public function setAllowVAT($AllowVAT)
    {
        $this->AllowVAT = $AllowVAT;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutoSave()
    {
        return $this->AutoSave;
    }

    /**
     * @param mixed $AutoSave
     *
     * @return self
     */
    public function setAutoSave($AutoSave)
    {
        $this->AutoSave = $AutoSave;

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
    public function getBankAccountBICCode()
    {
        return $this->BankAccountBICCode;
    }

    /**
     * @param mixed $BankAccountBICCode
     *
     * @return self
     */
    public function setBankAccountBICCode($BankAccountBICCode)
    {
        $this->BankAccountBICCode = $BankAccountBICCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountCountry()
    {
        return $this->BankAccountCountry;
    }

    /**
     * @param mixed $BankAccountCountry
     *
     * @return self
     */
    public function setBankAccountCountry($BankAccountCountry)
    {
        $this->BankAccountCountry = $BankAccountCountry;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountDescription()
    {
        return $this->BankAccountDescription;
    }

    /**
     * @param mixed $BankAccountDescription
     *
     * @return self
     */
    public function setBankAccountDescription($BankAccountDescription)
    {
        $this->BankAccountDescription = $BankAccountDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountIBAN()
    {
        return $this->BankAccountIBAN;
    }

    /**
     * @param mixed $BankAccountIBAN
     *
     * @return self
     */
    public function setBankAccountIBAN($BankAccountIBAN)
    {
        $this->BankAccountIBAN = $BankAccountIBAN;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountID()
    {
        return $this->BankAccountID;
    }

    /**
     * @param mixed $BankAccountID
     *
     * @return self
     */
    public function setBankAccountID($BankAccountID)
    {
        $this->BankAccountID = $BankAccountID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountIncludingMask()
    {
        return $this->BankAccountIncludingMask;
    }

    /**
     * @param mixed $BankAccountIncludingMask
     *
     * @return self
     */
    public function setBankAccountIncludingMask($BankAccountIncludingMask)
    {
        $this->BankAccountIncludingMask = $BankAccountIncludingMask;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountUseSEPA()
    {
        return $this->BankAccountUseSEPA;
    }

    /**
     * @param mixed $BankAccountUseSEPA
     *
     * @return self
     */
    public function setBankAccountUseSEPA($BankAccountUseSEPA)
    {
        $this->BankAccountUseSEPA = $BankAccountUseSEPA;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountUseSepaDirectDebit()
    {
        return $this->BankAccountUseSepaDirectDebit;
    }

    /**
     * @param mixed $BankAccountUseSepaDirectDebit
     *
     * @return self
     */
    public function setBankAccountUseSepaDirectDebit($BankAccountUseSepaDirectDebit)
    {
        $this->BankAccountUseSepaDirectDebit = $BankAccountUseSepaDirectDebit;

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
    public function getCurrencyDescription()
    {
        return $this->CurrencyDescription;
    }

    /**
     * @param mixed $CurrencyDescription
     *
     * @return self
     */
    public function setCurrencyDescription($CurrencyDescription)
    {
        $this->CurrencyDescription = $CurrencyDescription;

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
    public function getGLAccountType()
    {
        return $this->GLAccountType;
    }

    /**
     * @param mixed $GLAccountType
     *
     * @return self
     */
    public function setGLAccountType($GLAccountType)
    {
        $this->GLAccountType = $GLAccountType;

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
    public function getPaymentInTransitAccount()
    {
        return $this->PaymentInTransitAccount;
    }

    /**
     * @param mixed $PaymentInTransitAccount
     *
     * @return self
     */
    public function setPaymentInTransitAccount($PaymentInTransitAccount)
    {
        $this->PaymentInTransitAccount = $PaymentInTransitAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentServiceAccountIdentifier()
    {
        return $this->PaymentServiceAccountIdentifier;
    }

    /**
     * @param mixed $PaymentServiceAccountIdentifier
     *
     * @return self
     */
    public function setPaymentServiceAccountIdentifier($PaymentServiceAccountIdentifier)
    {
        $this->PaymentServiceAccountIdentifier = $PaymentServiceAccountIdentifier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentServiceProvider()
    {
        return $this->PaymentServiceProvider;
    }

    /**
     * @param mixed $PaymentServiceProvider
     *
     * @return self
     */
    public function setPaymentServiceProvider($PaymentServiceProvider)
    {
        $this->PaymentServiceProvider = $PaymentServiceProvider;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentServiceProviderName()
    {
        return $this->PaymentServiceProviderName;
    }

    /**
     * @param mixed $PaymentServiceProviderName
     *
     * @return self
     */
    public function setPaymentServiceProviderName($PaymentServiceProviderName)
    {
        $this->PaymentServiceProviderName = $PaymentServiceProviderName;

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
