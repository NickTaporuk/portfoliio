<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 18.07.15
 * Time: 20:27
 */

namespace PortfolioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PortfolioBundle\Entity\User;

class LoadUserData implements  FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $alice = new User();
        $alice->setUsername('alice');
        $alice->setEmail('alice@yandex.ru');
        $alice->setPassword('fooalicepassword');

        $manager->persist($alice);
        $manager->flush();
    }
}