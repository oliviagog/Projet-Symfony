<?php

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use App\Entity\Departement;

class ContactFixture extends ContactFixture
{
    public function load(ObjectManager $manager)
    {
        $departement = [];

        $faker = Faker\Factory::create();
        $departements = [];

        for ($i=0; $i <5; $i++)
        {
            $departement = new Departement();
            $departement->setDepartement($faker->departement);
            $departement->setEmail($faker->email);
            $manager->persist($departement);
            $departements[]= $departement;
        }

        $manager->flush();
    }

}



?>