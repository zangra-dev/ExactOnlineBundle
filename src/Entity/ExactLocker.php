<?php

declare(strict_types=1);

namespace ExactOnlineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author: Maxime Lambot
 * Email : maxime@zangra.com.
 */

/**
 * @ORM\Table(name="exact_locker")
 * @ORM\Entity(repositoryClass="ExactOnlineBundle\Repository\ExactLockerRepository")
 */
class ExactLocker
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
     * @var bool
     *
     * @ORM\Column(name="locker", type="boolean")
     */
    private $locker;

    /**
     * @var int
     *
     * @ORM\Column(name="version", type="integer")
     */
    private $version;

    /**
     * @var int
     *
     * @ORM\Column(name="timestamp", type="integer")
     */
    private $timestamp;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isLocker()
    {
        return $this->locker;
    }

    /**
     * @param bool $locker
     */
    public function setLocker($locker)
    {
        $this->locker = $locker;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp): void
    {
        $this->timestamp = $timestamp;
    }
}
