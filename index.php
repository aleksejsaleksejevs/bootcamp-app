<?php

require __DIR__.'/vendor/autoload.php';

use Bootcamp\Demo\Storage\Controller;
use Bootcamp\Demo\Storage\FileStorage;

$app = new Silex\Application;

$app->get('/', function () use ($app) {
  $storage = new FileStorage();
  $c = new Controller($storage);

  return true;

  run_dump($storage);
});

$app->run();
