<?php

namespace SOLID\ISP;


class Truck implements Vehicle,Heavy
{

    public function move()
    {
        echo 'T am moving';
    }
    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function caryHeavyCargo()
    {
        echo 'caryHeavyCargo';
    }

}