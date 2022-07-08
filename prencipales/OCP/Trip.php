<?php

namespace SOLID\OCP;

class Trip
{
    /*
     * @var vehicle
     */
    private $vehicle;
    /*
    * @var string
    */
    private $tripNumber;
    /*
    * @var float
    */
    private $tripPrice;
    /*
    * @var int time duration in minutes
    */
    private $duration;
    public function __construct(IVehicle $vehicle, string $tripNumber, float $tripPrice)
    {
       $this->setVehicle($vehicle);
       $this->setTripNumber($tripNumber);
       $this->setTripPrice($tripPrice);

    }
    /**
     * @return mixed
     */
    public function getVehicle() :IVehicle
    {
        return $this->vehicle;
    }

    /**
     * @param IVehicle $vehicle
     */
    public function setVehicle(IVehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return mixed
     */
    public function getTripNumber()
    {
        return $this->tripNumber;
    }

    /**
     * @param mixed $tripNumber
     */
    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return mixed
     */
    public function getTripPrice()
    {
        return $this->tripPrice;
    }

    /**
     * @param mixed $tripPrice
     */
    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }
    public function move()
    {
        return $this->vehicle->move();
    }

}