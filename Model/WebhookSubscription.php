<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class WebhookSubscription extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model;
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=WebhooksWebhookSubscriptions
 *
 * @property string $ID Primary key
 * @property string $CallbackURL Callback URL endpoint
 * @property string $ClientID OAuth client Id
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the OAuth Client
 * @property int $Division Division code
 * @property string $Topic Webhook subscription topic, e.g.: FinancialTransactions, Items, StockPositions
 */
class WebhookSubscription extends Model 
{
        protected $ID;
        protected $CallbackURL;
        protected $ClientID;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Description;
        protected $Division;
        protected $Topic;
        protected $url = 'webhooks/WebhookSubscriptions';

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
    public function getCallbackURL()
    {
        return $this->CallbackURL;
    }

    /**
     * @param mixed $CallbackURL
     *
     * @return self
     */
    public function setCallbackURL($CallbackURL)
    {
        $this->CallbackURL = $CallbackURL;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * @param mixed $ClientID
     *
     * @return self
     */
    public function setClientID($ClientID)
    {
        $this->ClientID = $ClientID;

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
    public function getTopic()
    {
        return $this->Topic;
    }

    /**
     * @param mixed $Topic
     *
     * @return self
     */
    public function setTopic($Topic)
    {
        $this->Topic = $Topic;

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
