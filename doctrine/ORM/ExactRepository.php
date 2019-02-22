<?php
namespace aibianchi\ExactOnlineBundle\Doctrine\ORM;

use Doctrine\ORM\EntityRepository;

/**
 * Author: Jefferson Bianchi
 * Email : Jefferson@aibianchi.com
 */
class ExactRepository extends EntityRepository
{

	public function findLast(){

		$qb = $this->createQueryBuilder('e');
		$qb->setMaxResults( 1 );
		$qb->orderBy('e.id', 'DESC');

		return $qb->getQuery()->getOneOrNullResult();

	}

}