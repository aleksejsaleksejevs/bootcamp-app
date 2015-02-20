<?php

class CircleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
    //instatiate your object
    //
    $circle = new \Bootcamp\Demo\Circle(1);
    $this->assertEquals(3.1415926535898,$circle->getArea());
  }

}
