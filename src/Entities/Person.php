<?php

namespace Marco\TestDoc\Entities;

/**
 * This class sets and returns firstname, lastname and fullname of the person.
 */
class Person
{
    protected $firstname;
    protected $lastname;

    /**
     * Returns the Person's firstname.
     *
     * @method getFirstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the Person's firstname.
     *
     * @method setFirstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Returns the Person's lastname.
     *
     * @method getLastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the Person's lastname.
     *
     * @method setLastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Returns the Person's fullname concatenating firstname with lastname.
     *
     * @method getFullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->getFirstname().' '.$this->getLastname();
    }
}
