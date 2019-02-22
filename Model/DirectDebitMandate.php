<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class DirectDebitMandate extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=cashflowDirectDebitMandates
 *
 * @property string $ID Primary key
 * @property string $Account Account the mandate belongs to
 * @property string $BankAccount Bank account the mandate applies to
 * @property string $CancellationDate Cancellation date
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $Description Description
 * @property int $Division Division code
 * @property int $FirstSend Indicates the first collection hasn't been sent/confirmed with this mandate.
 * @property int $Indicates if the mandate is the main, you can have only one main mandate
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property int $PaymentType Payment type. 0 = one-off payment, 1 = recurrent payment, 2 = AdHoc (UK only)
 * @property string $Reference Reference
 * @property string $SignatureDate Signature date
 * @property int $Type Type of mandate 0 = core, 1 = B2B, 2 = bottomline (UK only)
 */
class DirectDebitMandate extends Model 
{
        protected $ID;
        protected $Account;
        protected $BankAccount;
        protected $CancellationDate;
        protected $Created;
        protected $Creator;
        protected $Description;
        protected $Division;
        protected $FirstSend;
        protected $Main;
        protected $Modified;
        protected $Modifier;
        protected $PaymentType;
        protected $Reference;
        protected $SignatureDate;
        protected $Type;
        protected $url = 'cashflow/DirectDebitMandates';

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
    public function getFirstSend()
    {
        return $this->FirstSend;
    }

    /**
     * @param mixed $FirstSend
     *
     * @return self
     */
    public function setFirstSend($FirstSend)
    {
        $this->FirstSend = $FirstSend;

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
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param mixed $PaymentType
     *
     * @return self
     */
    public function setPaymentType($PaymentType)
    {
        $this->PaymentType = $PaymentType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param mixed $Reference
     *
     * @return self
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatureDate()
    {
        return $this->SignatureDate;
    }

    /**
     * @param mixed $SignatureDate
     *
     * @return self
     */
    public function setSignatureDate($SignatureDate)
    {
        $this->SignatureDate = $SignatureDate;

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

