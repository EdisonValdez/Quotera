<?php

// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php
namespace Quotera\EmailBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Quotera\EmailBundle\Entity\Email;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadEmails implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $wayne = $manager->getRepository('UserBundle:User')
            ->findOneByUsernameOrEmail('wayne');

        $event1 = new Email();
        $event1->setName('Daphne coming soon');
        $event1->setLocation('punta cana, Dominican Republic');
        $event1->setTime(new \DateTime('tomorrow noon'));
        $event1->setDetails('She is coming for the very first time to visit us');
        $manager->persist($event1);

        $event2 = new Email();
        $event2->setName('Eddy is going to Succeed!');
        $event2->setLocation('brandenburg gate berlin, germany');
        $event2->setTime(new \DateTime('tomorrow noon'));
        $event2->setDetails('I\'m going to Win!');
        $manager->persist($event2);

        $event1->setOwner($wayne);
        $event2->setOwner($wayne);

        $manager->flush();
    }

    /**
     * Get the order of the fixture
     * @return int
     *
     */
    public function getOrder() {
        return 20;
    }
}