<?php

namespace App\DataFixtures;

use App\Entity\Pin;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 11; $i++) {
            $pin = new Pin();
            $pin->setTitle('Pin ' . $i);
            $pin->setDescription('Une petite description pour le Pin ' . $i);
            $manager->persist($pin);
        }
        $manager->flush();
    }
}
