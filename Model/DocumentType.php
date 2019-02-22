<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class DocumentType extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentTypes
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Description Document type description
 * @property bool $DocumentIsCreatable Indicates if documents of this type can be created
 * @property bool $DocumentIsDeletable Indicates if documents of this type can be deleted
 * @property bool $DocumentIsUpdatable Indicates if documents of this type can be updated
 * @property bool $DocumentIsViewable Indicates if documents of this type can be retrieved
 * @property string $Modified Last modified date
 * @property int $TypeCategory ID of the document type category
 */
class DocumentType extends Model 
{
    

        protected $ID;
    	protected $Created;
    	protected $Description;
    	protected $DocumentIsCreatable;
    	protected $DocumentIsDeletable;
    	protected $DocumentIsUpdatable;
    	protected $DocumentIsViewable;
    	protected $Modified;
    	protected $TypeCategory;
        protected $url = 'documents/DocumentTypes';

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
    public function getDocumentIsCreatable()
    {
        return $this->DocumentIsCreatable;
    }

    /**
     * @param mixed $DocumentIsCreatable
     *
     * @return self
     */
    public function setDocumentIsCreatable($DocumentIsCreatable)
    {
        $this->DocumentIsCreatable = $DocumentIsCreatable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentIsDeletable()
    {
        return $this->DocumentIsDeletable;
    }

    /**
     * @param mixed $DocumentIsDeletable
     *
     * @return self
     */
    public function setDocumentIsDeletable($DocumentIsDeletable)
    {
        $this->DocumentIsDeletable = $DocumentIsDeletable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentIsUpdatable()
    {
        return $this->DocumentIsUpdatable;
    }

    /**
     * @param mixed $DocumentIsUpdatable
     *
     * @return self
     */
    public function setDocumentIsUpdatable($DocumentIsUpdatable)
    {
        $this->DocumentIsUpdatable = $DocumentIsUpdatable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentIsViewable()
    {
        return $this->DocumentIsViewable;
    }

    /**
     * @param mixed $DocumentIsViewable
     *
     * @return self
     */
    public function setDocumentIsViewable($DocumentIsViewable)
    {
        $this->DocumentIsViewable = $DocumentIsViewable;

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
    public function getTypeCategory()
    {
        return $this->TypeCategory;
    }

    /**
     * @param mixed $TypeCategory
     *
     * @return self
     */
    public function setTypeCategory($TypeCategory)
    {
        $this->TypeCategory = $TypeCategory;

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
