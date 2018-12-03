<?php
/**
 * Created by PhpStorm.
 * User: mateusz
 * Date: 03.12.18
 * Time: 21:49
 */

namespace App\DataFixtures;

use App\Entity\Employee;
use App\Entity\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StatusFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $status = new Status();

        $submitted = (clone $status)->setName('submitted');
        $manager->persist($submitted);

        $accepted = (clone $status)->setName('accepted');
        $manager->persist($accepted);

        $rejected = (clone $status)->setName('rejected');
        $manager->persist($rejected);

        $manager->flush();
    }
}