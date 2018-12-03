<?php
/**
 * Created by PhpStorm.
 * User: mateusz
 * Date: 03.12.18
 * Time: 20:34
 */

namespace App\DataFixtures;

use App\Entity\Employee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EmployeeFixtures extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $fixtureString = null;
        $letters = range('A', 'Z');

        for ($i = 0; $i < 10; $i++) {
            $employee = new Employee();
            $employee
                ->setFirstname("$letters[$i]{$this->generateRandomString(4)}")
                ->setLastname("$letters[$i]{$this->generateRandomString(4)}")
                ->setCreatedAt(\DateTime::createFromFormat('Y-m-d', date('Y-m-d')))
                ->setUpdatedAt(\DateTime::createFromFormat('Y-m-d', date('Y-m-d')))
                ->setEmail(
                    $letters[$i].
                    $this->generateRandomString(4).'@'.
                    $this->generateRandomString(2).'.'.
                    $this->generateRandomString(2)
                );
            $manager->persist($employee);
        }
        $manager->flush();
    }

    private function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}