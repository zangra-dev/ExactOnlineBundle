<?php

namespace ExactOnlineBundle\Entity;

use ExactOnlineBundle\Model\Xml\XmlImportResponseObject;

class XmlImportResponse extends XmlImportResponseObject
{
    private $id;
    private $batchId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * @param mixed $batchId
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
    }
}
