<?php

namespace App\Repository;

use App\Entity\CompteComptable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompteComptable>
 *
 * @method CompteComptable|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteComptable|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteComptable[]    findAll()
 * @method CompteComptable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteComptableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompteComptable::class);
    }

    public function save(CompteComptable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CompteComptable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function searchByNumero($query)
{
    return $this->createQueryBuilder('c')
        ->andWhere('c.numeroCompte LIKE :query')
        ->setParameter('query', '%'.$query.'%')
        ->orderBy('c.numeroCompte', 'ASC')
        ->getQuery()
        ->getResult();
}


public function getStatsByCode()
{
    $qb = $this->createQueryBuilder('s')
        ->select('t.codeSousClasse as codeCompte, count(s) as count')
        ->leftJoin('s.codeCompte', 't')
        ->groupBy('t.id');

    return $qb->getQuery()->getResult();
}


//    /**
//     * @return CompteComptable[] Returns an array of CompteComptable objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompteComptable
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
