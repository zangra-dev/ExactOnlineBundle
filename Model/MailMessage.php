<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class MailMessage extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=mailboxMailMessages
 *
 * @property string $ID Primary key
 * @property string $Bank Bank to/from which the mail message is sent/received. This is used for mail messages of type Bank only. It has an attachment containing the bank file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property string $BankAccount Bank account for which the mail message is sent. This is used for mail messages of type Bank only. It has an attachment containing the bank export file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property int $ForDivision Administration from which the mail message is sent. This is used for mail messages of type Bank only. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property int $Operation Specifies the operation upon dealing with the mailmessage (Kirean scan service)
 * @property string $OriginalMessage Provides a link to another MailMessage (Kirean scan service)
 * @property string $PartnerKey The partner key that was used: this refers to the application from which the message is originating. It is filled with a fixed partnerkey when created from within Exact Online
 * @property float $Quantit Specifies the number of lines of the returned MailMessage attachment (Kirean scan service)
 * @property int $RecipientDelete Indiciates if the recipient deleted this message. If this is the case the recipient can't see it anymore and the sender can actually delete it
 * @property string $RecipientMailboxID Mailbox ID of the recipient. The owner of this mailbox will see the message in the inbox
 * @property int $RecipientStatus Status of the mail message, only the recipient can update this
 * @property string $SenderDateSent Date the message was sent. Default the date the message is created, can be an earlier date when imported from xml (the date the xml was sent)
 * @property int $SenderDeleted Indicates if the sender deleted the message. This means the sender can't see it anymore and the recipient can actually delete it
 * @property string $SenderIPAddress IP address of the sender
 * @property string $SenderMailboxID Mailbox ID of the sender. The owner of this mailbox will see the message in the sent items
 * @property string $Subject Subject of the OriginalMessage
 * @property string $SynchronizationCode Provides a link between Exact Online and the banks
 * @property string $Type Bank to/from which the mail message is sent/received. This is used for mail messages of type Bank only. It has an attachment containing the bank file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 */
class MailMessage extends Model 
{
        protected $ID;
        protected $Bank;
        protected $BankAccount;
        protected $ForDivision;
        protected $Operation;
        protected $OriginalMessage;
        protected $PartnerKey;
        protected $Quantit;
        protected $RecipientDelete;
        protected $RecipientMailboxID;
        protected $RecipientStatus;
        protected $SenderDateSent;
        protected $SenderDeleted;
        protected $SenderIPAddress;
        protected $SenderMailboxID;
        protected $Subject;
        protected $SynchronizationCode;
        protected $Type;
        protected $url = 'mailbox/MailMessages';

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
    public function getForDivision()
    {
        return $this->ForDivision;
    }

    /**
     * @param mixed $ForDivision
     *
     * @return self
     */
    public function setForDivision($ForDivision)
    {
        $this->ForDivision = $ForDivision;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * @param mixed $Operation
     *
     * @return self
     */
    public function setOperation($Operation)
    {
        $this->Operation = $Operation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginalMessage()
    {
        return $this->OriginalMessage;
    }

    /**
     * @param mixed $OriginalMessage
     *
     * @return self
     */
    public function setOriginalMessage($OriginalMessage)
    {
        $this->OriginalMessage = $OriginalMessage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerKey()
    {
        return $this->PartnerKey;
    }

    /**
     * @param mixed $PartnerKey
     *
     * @return self
     */
    public function setPartnerKey($PartnerKey)
    {
        $this->PartnerKey = $PartnerKey;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantit()
    {
        return $this->Quantit;
    }

    /**
     * @param mixed $Quantit
     *
     * @return self
     */
    public function setQuantit($Quantit)
    {
        $this->Quantit = $Quantit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecipientDelete()
    {
        return $this->RecipientDelete;
    }

    /**
     * @param mixed $RecipientDelete
     *
     * @return self
     */
    public function setRecipientDelete($RecipientDelete)
    {
        $this->RecipientDelete = $RecipientDelete;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecipientMailboxID()
    {
        return $this->RecipientMailboxID;
    }

    /**
     * @param mixed $RecipientMailboxID
     *
     * @return self
     */
    public function setRecipientMailboxID($RecipientMailboxID)
    {
        $this->RecipientMailboxID = $RecipientMailboxID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecipientStatus()
    {
        return $this->RecipientStatus;
    }

    /**
     * @param mixed $RecipientStatus
     *
     * @return self
     */
    public function setRecipientStatus($RecipientStatus)
    {
        $this->RecipientStatus = $RecipientStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderDateSent()
    {
        return $this->SenderDateSent;
    }

    /**
     * @param mixed $SenderDateSent
     *
     * @return self
     */
    public function setSenderDateSent($SenderDateSent)
    {
        $this->SenderDateSent = $SenderDateSent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderDeleted()
    {
        return $this->SenderDeleted;
    }

    /**
     * @param mixed $SenderDeleted
     *
     * @return self
     */
    public function setSenderDeleted($SenderDeleted)
    {
        $this->SenderDeleted = $SenderDeleted;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderIPAddress()
    {
        return $this->SenderIPAddress;
    }

    /**
     * @param mixed $SenderIPAddress
     *
     * @return self
     */
    public function setSenderIPAddress($SenderIPAddress)
    {
        $this->SenderIPAddress = $SenderIPAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderMailboxID()
    {
        return $this->SenderMailboxID;
    }

    /**
     * @param mixed $SenderMailboxID
     *
     * @return self
     */
    public function setSenderMailboxID($SenderMailboxID)
    {
        $this->SenderMailboxID = $SenderMailboxID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param mixed $Subject
     *
     * @return self
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSynchronizationCode()
    {
        return $this->SynchronizationCode;
    }

    /**
     * @param mixed $SynchronizationCode
     *
     * @return self
     */
    public function setSynchronizationCode($SynchronizationCode)
    {
        $this->SynchronizationCode = $SynchronizationCode;

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
