<?php

spl_autoload_register(function($className){
  require 'classes/'.$className.'.php';

});

  $obj1 = new Circle(2);
  $obj2 = new Rectangle(2,3);

  var_dump($obj1->getArea(), $obj2->getArea());
