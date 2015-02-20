<?php

namespace Bootcamp\Demo;

class Cilinder extends Circle
{
    public $height;

    /**
     *Creates an Cilinder instance
     *@param $height Rectangle height
     */
    public function __construct($h, $r)
    {
        $this->height = $h;
        parent::__construct($r);
    }

    public function getArea()
    {
        return 2*pi()*($this->radius)*(($this->radius)+($this->height));
    }
}
