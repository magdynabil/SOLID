<?php

namespace SOLID\OCP;

class  Bus extends Vehicle
{
    /**
    * @var int $busNumber
    */
    private $busNumber;
    /**
     * @var int
     */
    private $numberOfPassangers;

    /**
     * @param mixed $numberOfPassangers
     */
    public function setNumberOfPassangers($numberOfPassangers): void
    {
        $this->numberOfPassangers = $numberOfPassangers;
    }

    public function __construct(string $busNumber, int $numberOfPassangers)
    {
        $this->setBusNumber($busNumber);
        $this->setNumberOfPassangers($numberOfPassangers);

    }
    /**
     * @return mixed
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * @return mixed
     */
    public function getNumberOfPassangers()
    {
        return $this->numberOfPassangers;
    }

    /**
     * @param mixed $busNumber
     */
    public function setBusNumber($busNumber): void
    {
        $this->busNumber = $busNumber;
    }





}