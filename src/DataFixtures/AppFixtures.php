<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Pin;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create('fr_FR');

        for ($i = 1; $i < 11; $i++) {
            $pin = new Pin();
            $pin->setTitle($faker->title());
            $pin->setDescription($faker->text());
            $pin->setImage("https://loremflickr.com/320/240?random=" . $i);
            $manager->persist($pin);
        }
        $manager->flush();
    }
}
