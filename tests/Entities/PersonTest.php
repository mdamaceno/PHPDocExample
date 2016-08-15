<?php

namespace Marco\TestDoc\Tests\Entities;

use Marco\TestDoc\Entities\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testPersonType()
    {
        $person = new Person();
        $this->assertInstanceOf(Person::class, $person);
    }

    public function testPersonFirstname()
    {
        $person = new Person();
        $person->setFirstname('Marco');

        $this->assertEquals('Marco', $person->getFirstname());
    }

    public function testPersonLastname()
    {
        $person = new Person();
        $person->setLastname('Damaceno');

        $this->assertEquals('Damaceno', $person->getLastname());
    }

    public function testFullName()
    {
        $person = new Person();
        $person->setFirstname('Marco');
        $person->setLastname('Damaceno');

        $this->assertEquals('Marco Damaceno', $person->getFullname());
    }
}
