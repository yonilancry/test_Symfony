<?php

namespace App\Repository;

use App\Entity\Etudiant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Etudiant>
 *
 * @method Etudiant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etudiant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etudiant[]    findAll()
 * @method Etudiant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudiantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etudiant::class);
    }

//    /**
//     * @return EtudiantFixtures[] Returns an array of EtudiantFixtures objects
//     */
//    public function findBySexe($sexe): array
//   {
//       return $this->createQueryBuilder('s')
//            ->andWhere('s.sexe = :sexe')
//            ->setParameter('sexe', $sexe)
//            ->orderBy('s.id', 'ASC')
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EtudiantFixtures
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
