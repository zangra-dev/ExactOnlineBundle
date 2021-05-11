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
}
