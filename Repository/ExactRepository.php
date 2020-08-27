<?php

namespace ExactOnlineBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Author: Jefferson Bianchi / Maxime Lambot
 * Email : jefferson@zangra.com / maxime@zangra.com.
 */
final class ExactRepository extends EntityRepository
{
    public function findLastByCountry($country)
    {
        $qb = $this->createQueryBuilder('e');
        $qb->setMaxResults(1);
        $qb->where('e.country = :country');
        $qb->setParameter('country', $country);
        $qb->orderBy('e.id', 'DESC');

        return $qb->getQuery()->getOneOrNullResult();
    }
}
