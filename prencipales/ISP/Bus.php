<?php

namespace SOLID\ISP;

class Bus implements Vehicle,Speedable,Entertainment
{


    public function move()
    {
        echo 'T am moving';
    }
    public function pause()
    {
        echo 'pause';
    }
    public function stop()
    {
        echo 'stop';
    }
    public function accelerate()
    {
        // TODO: Implement accelerate() method.
    }

    public function rewind()
    {
        echo 'rewind';
    }
    public function musicPlay()
    {
        echo 'musicPlay';
    }

}