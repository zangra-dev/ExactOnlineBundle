<?php

declare(strict_types=1);

namespace ExactOnlineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author: Maxime Lambot
 * Email : maxime@zangra.com.
 */

/**
 * @ORM\Table(name="exact_logger")
 */
class ExactLogger
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text
     *
     * @ORM\Column(name="code", type="text")
     */
    private $code;

    /**
     * @var text
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var text
     *
     * @ORM\Column(name="called", type="text")
     */
    private $called;

    /**
     * @var text
     *
     * @ORM\Column(name="occured", type="text")
     */
    private $occured;


    /**
     * @var datetime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return text
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param text $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return text
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param text $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return text
     */
    public function getCalled()
    {
        return $this->called;
    }

    /**
     * @param text $called
     *
     * @return self
     */
    public function setCalled($called)
    {
        $this->called = $called;
    }

    /**
     * @return text
     */
    public function getOccured()
    {
        return $this->occured;
    }

    /**
     * @param text $occured
     *
     * @return self
     */
    public function setOccured($occured)
    {
        $this->occured = $occured;
    }

    /**
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param datetime $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}