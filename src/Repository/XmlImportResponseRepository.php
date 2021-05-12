<?php

namespace ExactOnlineBundle\Repository;

use Doctrine\ORM\EntityRepository;

class XmlImportResponseRepository extends EntityRepository
{
    /**
     * Find last batch_id.
     *
     * Cast result to int. If null the cast returns 0 !
     *
     * @return int
     */
    public function findLastBatchId()
    {
        $qb = $this->createQueryBuilder('i')
            ->select('i, MAX(i.batchId) AS maxId')
        ;

        return (int) $qb->getQuery()->getSingleResult()['maxId'];
    }
}
