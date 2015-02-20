<?php

class RectangleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
    //instatiate your object
    //
    $rectangle = new \Bootcamp\Demo\Rectangle(2,7);
    $this->assertEquals(6,$rectangle->getArea());
  }

}
