<?php

use Bootcamp\Demo\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
    //instatiate your object
    //
    $rectangle = new Rectangle(2,3);
    $this->assertEquals(6,$rectangle->getArea());
  }

}
