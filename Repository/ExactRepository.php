<?php

namespace aibianchi\ExactOnlineBundle\Repository;

use Doctrine\ORM\Mapping;
use Doctrine\ORM\EntityRepository;
use aibianchi\ExactOnlineBundle\Entity\Exact;


/**
 * Author: Jefferson Bianchi
 * Email : Jefferson@aibianchi.com
 */
final class ExactRepository extends EntityRepository
{
    public function findLastByCountry($country){

        $qb = $this->createQueryBuilder('e');
        $qb->setMaxResults( 1 );
        $qb->where('e.country = :country');
        $qb->setParameter('country', $country);
        $qb->orderBy('e.id', 'DESC');

        return $qb->getQuery()->getOneOrNullResult();

    }

}