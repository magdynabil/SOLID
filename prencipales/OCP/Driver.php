<?php

namespace SOLID\OCP;

class Driver
{
    /*
    * @var sting
    */
    private $name;
    /*
     * @var int
     */
    private $age;
    /*
     * @var sting
     */
    private $address;
    /*
     * Driver constructor.
     * @param string $name
     * @param int $age
     * @param string $address
     */

    public function __construct(string $name,int $age,string $address)
    {
       $this->setName($name);
       $this->setAge($age);
       $this->setAddress($address);
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }



}