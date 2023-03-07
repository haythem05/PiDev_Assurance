<?php

namespace App\Repository;

use App\Entity\AssuranceHabitation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AssuranceHabitation>
 *
 * @method AssuranceHabitation|null find($id, $lockMode = null, $lockVersion = null)
 * @method AssuranceHabitation|null findOneBy(array $criteria, array $orderBy = null)
 * @method AssuranceHabitation[]    findAll()
 * @method AssuranceHabitation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssuranceHabitationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AssuranceHabitation::class);
    }

    public function save(AssuranceHabitation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AssuranceHabitation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AssuranceHabitation[] Returns an array of AssuranceHabitation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AssuranceHabitation
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
