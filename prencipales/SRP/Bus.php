<?php

namespace SOLID\SRP;

class Bus
{
    /*
    * @var int
    */
    private $busNumber;
    /*
     * @var int
     */
    private $numberOfPassangers;
    /*
     * @var string
     */
    private $color;
    /*
     * @var int
     */
    private $maxmumSpeed;
    /*
     * @var Driver
     */
    private $driver;
    /*
     * @var int
     */
    private $doors;
    /*
     * @var array
     */
    private $routes=[];
    public function __construct()
    {
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
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @return mixed
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param mixed $driver
     */
    public function setDriver($driver): void
    {
        $this->driver = $driver;
    }
    /**
     * @return mixed
     */
    public function getMaxmumSpeed()
    {
        return $this->maxmumSpeed;
    }
    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
    /**
     * @param mixed $busNumber
     */
    public function setBusNumber($busNumber): void
    {
        $this->busNumber = $busNumber;
    }
    /**
     * @param mixed $numberOfPassangers
     */
    public function setNumberOfPassangers($numberOfPassangers): void
    {
        $this->numberOfPassangers = $numberOfPassangers;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @param mixed $maxmumSpeed
     */
    public function setMaxmumSpeed($maxmumSpeed): void
    {
        $this->maxmumSpeed = $maxmumSpeed;
    }





    /**
     * @param mixed $doors
     */
    public function setDoors($doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @param Route $routes
     */
    public function addRoute(Route $routes): void
    {
        $this->routes[] = $routes;
    }
    public function move()
    {
        $outPut='';

        foreach ($this->getRoutes() as $route)
        {
            $outPut.='<p> moving now from  ' .$route->getSource().
                ' to '.$route->getDestination()
                .' at the max speed of '.$this->getMaxmumSpeed()
                .' the driver is '.$this->getDriver()->getName().'</p>';
        }
        return $outPut;

    }



}