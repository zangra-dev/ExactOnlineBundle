<?php

namespace ExactOnlineBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Author: Jefferson Bianchi / Maxime Lambot
 * Email : jefferson@zangra.com / maxime@zangra.com.
 */
final class ExactLoggerRepository extends EntityRepository
{
    public function findLast()
    {
        $qb = $this->createQueryBuilder('e');
        $qb->setMaxResults(1);
        $qb->orderBy('e.id', 'DESC');

        return $qb->getQuery()->getOneOrNullResult();
    }
}
