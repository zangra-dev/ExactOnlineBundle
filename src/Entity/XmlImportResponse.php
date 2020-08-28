<?php

namespace ExactOnlineBundle\Entity;

use ExactOnlineBundle\Model\Xml\XmlImportResponseObject;

/**
 * @ORM\Table(name="exact_import_log")
 */
class XmlImportResponse extends XmlImportResponseObject
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="batch_id", type="integer")
     */
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
