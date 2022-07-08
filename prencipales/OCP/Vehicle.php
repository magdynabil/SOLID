<?php

namespace SOLID\OCP;

abstract class Vehicle implements IVehicle
{
    /*
   * @var IMove
   */
    private $movable;
    /*
     * @var string
     */
    private $color;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMaxmumSpeed()
    {
        return $this->maxmumSpeed;
    }

    /**
     * @param mixed $maxmumSpeed
     */
    public function setMaxmumSpeed($maxmumSpeed): void
    {
        $this->maxmumSpeed = $maxmumSpeed;
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
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     */
    public function setDoors($doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }
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
    /**
     * @param Route $routes
     */
    public function addRoute(Route $routes): void
    {
        $this->routes[] = $routes;
    }
    /**
     * @return IVehicle
     */
    public function getMovable()
    {
        return $this->movable;
    }

    /**
     * @param IVehicle $movable
     */
    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }
    public function move()
    {
        return $this->getMovable()->move();
    }
}