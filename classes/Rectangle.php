<?php

namespace Bootcamp\Demo;

class Rectangle extends Shape{
  public $width;
  public $height;

 /**
  *Creates an Rectangle instance
  *@param $width Rectangle width
  *@param $height Rectangle height
  *@return float Rectangle area
  */
  public function __construct($w, $h){
    $this->width = $w;
    $this->height = $h;
  }

  public function getArea(){
      return ($this->width)*($this->height);
  }
}
