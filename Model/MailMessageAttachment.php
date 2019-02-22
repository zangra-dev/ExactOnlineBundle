<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class MailMessageAttachment extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=mailboxMailMessageAttachments
 *
 * @property string $ID Primary key
 * @property string $Attachment For performance reasons Attachment is Write-Only. The blob can be downloaded using the supplied Url
 * @property string $AttachmentFileName File name of attachment
 * @property string $MailMessageID Reference to Mail message
 * @property int $Type Type of mail message attachment
 */
class MailMessageAttachment extends Model 
{
        protected $ID;
        protected $Attachment;
        protected $AttachmentFileName;
        protected $MailMessageID;
        protected $Type;
        protected $url = 'mailbox/MailMessageAttachments';

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
    public function getAttachmentFileName()
    {
        return $this->AttachmentFileName;
    }

    /**
     * @param mixed $AttachmentFileName
     *
     * @return self
     */
    public function setAttachmentFileName($AttachmentFileName)
    {
        $this->AttachmentFileName = $AttachmentFileName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailMessageID()
    {
        return $this->MailMessageID;
    }

    /**
     * @param mixed $MailMessageID
     *
     * @return self
     */
    public function setMailMessageID($MailMessageID)
    {
        $this->MailMessageID = $MailMessageID;

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
