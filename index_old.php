<?php

use \Bootcamp\Demo\Rectangle;
use \Bootcamp\Demo\Circle;

require 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($name);
});

$app->get('/rectangle', function (){
  $rectangle = new Rectangle(2,3);
  $circle = new Circle(1);
  return ($rectangle->getArea().' and '.$circle->getArea());
});

$app->run();
