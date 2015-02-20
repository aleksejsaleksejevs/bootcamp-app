<?php

namespace Bootcamp\Demo;

class Circle extends Shape
{
    public $radius;

    public function __construct($r)
    {
        $this->radius = $r;

     /**
    *Creates an Circle instance
    *@param $radius Circle radius
    *@return float Circle area
    */
    }
    public function getArea()
    {
        return pi()*($this->radius)**2;
    }
}
