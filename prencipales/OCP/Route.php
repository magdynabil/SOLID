<?php

namespace SOLID\OCP;

class Route
{
    /*
    * @var string
    */
    private $source;
    /*
    * @var string
    */
    private $destination;
    /*
   * @var int
   */
    private $distance;
    public function __construct(string $source,string $destination,int $distance)
    {
        $this->setSource($source);
        $this->setDestination($destination);
        $this->setDistance($distance);
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance): void
    {
        $this->distance = $distance;
    }
}