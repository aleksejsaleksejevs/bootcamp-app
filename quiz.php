<?php


require __DIR__.'/vendor/autoload.php';

use Bootcamp\Demo\Quiz\Option;
use Bootcamp\Demo\Quiz\Question;
use Bootcamp\Demo\Quiz\Quiz;

use \Mockery as m;

$questions1 = new Question ('What is default port?');
$questions2 = new Question ('What is the right word?');

$options = [];
$options[] = new Option ('443');
$options[] = new Option ('80', true);
$options[] = new Option ('223');
$options[] = new Option ('20');

foreach ($options as $option){
    $questions1->addOption($option);
}

$options = [];
$options[] = new Option ('test');
$options[] = new Option ('text', true);
$options[] = new Option ('next', true);
$options[] = new Option ('best');

foreach ($options as $option){
    $questions2->addOption($option);
}

$quiz = new Quiz ('Quiz 1');

$quiz->addQuestion($questions1);
$quiz->addQuestion($questions2);

var_dump($quiz);
//echo "<pre>";
//print_r($quiz);
