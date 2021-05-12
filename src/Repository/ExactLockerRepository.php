<?php

namespace ExactOnlineBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Author: Maxime Lambot
 * Email : maxime@zangra.com.
 */
final class ExactLockerRepository extends EntityRepository
{
    public function findLast()
    {
        $qb = $this->createQueryBuilder('e');
        $qb->setMaxResults(1);
        $qb->orderBy('e.id', 'DESC');

        return $qb->getQuery()->getOneOrNullResult();
    }
}
