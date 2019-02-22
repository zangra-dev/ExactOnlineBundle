<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class DocumentAttachment extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocumentAttachments
 *
 * @property string $ID Primary key
 * @property string $Attachment Contains the attachment
 * @property string $Document Reference to the Document
 * @property string $FileName Filename of the attachment
 * @property float $FileSize File size of the attachment
 */
class DocumentAttachment extends Model 
{

        protected $ID;
        protected $Attachment;
        protected $Document;
        protected $FileName;
        protected $FileSize;
        protected $Url;
        protected $url = 'documents/DocumentAttachments';

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
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param mixed $FileName
     *
     * @return self
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }

    /**
     * @param mixed $FileSize
     *
     * @return self
     */
    public function setFileSize($FileSize)
    {
        $this->FileSize = $FileSize;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param mixed $Url
     *
     * @return self
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;

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
