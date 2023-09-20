<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EtudiantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');
        $sexeTab=([2=>'homme',1=>'femme']);

        for ($i = 0; $i <= 99; $i++) {
            $etudiant=new Etudiant();
            $sexe=rand(1,2);
            $etudiant->setNom($faker->lastName());
            $etudiant->setPrenom($faker->firstName($sexeTab[$sexe]));
            $etudiant->setSexe($sexe);
            $etudiant->setAnniversaire(new \DateTime("1951-05-21"));
            $manager->flush();
        }


    }
}
