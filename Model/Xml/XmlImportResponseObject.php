<?php

namespace ExactOnlineBundle\Model\Xml;

/**
 * https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Content-xmlsamplecode.
 *
 * Converted XML Response to Object
 */
class XmlImportResponseObject
{
    const TYPE_ERROR = 0;
    const TYPE_WARNING = 1;
    const TYPE_SUCCES = 2;
    const TYPE_FATAL = 3;
    const RESPONSE_TYPES = ['error', 'warning', 'succes', 'fatal'];

    protected $message;
    protected $type;
    protected $topicNode;
    protected $topicCode;
    protected $dataKey;
    protected $datetime;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * @param mixed $typeCode
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;
    }

    /**
     * @return mixed
     */
    public function getTopicNode()
    {
        return $this->topicNode;
    }

    /**
     * @param mixed $topicNode
     */
    public function setTopicNode($topicNode)
    {
        $this->topicNode = $topicNode;
    }

    /**
     * @return mixed
     */
    public function getTopicCode()
    {
        return $this->topicCode;
    }

    /**
     * @param mixed $topicCode
     */
    public function setTopicCode($topicCode)
    {
        $this->topicCode = $topicCode;
    }

    /**
     * @return mixed
     */
    public function getDataKey()
    {
        return $this->dataKey;
    }

    /**
     * @param mixed $dataKey
     */
    public function setDataKey($dataKey)
    {
        $this->dataKey = $dataKey;
    }

    /**
     * @return DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param mixed $datetime
     */
    public function setDatetime(\DateTime $datetime)
    {
        $this->datetime = $datetime;
    }
}
