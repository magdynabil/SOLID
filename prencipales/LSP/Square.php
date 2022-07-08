<?php

namespace SOLID\LSP;

class Square extends Rectangle
{
    //a method in a subtype must not make changes in the method of the main type
    // here we must set height only
    public function setHeight(int $height): void
    {
        $this->height=$height;
        $this->width=$height;
    }
    // here we must set width only
    public function setWidth(int $width): void
    {
        $this->width=$width;
        $this->height=$width;
    }

}