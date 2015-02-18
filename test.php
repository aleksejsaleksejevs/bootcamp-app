<?php

$var1 = 'apple';
$var2 = 'banana';
$var3 = 'orange';

echo "$var1 and $var2 is not an $var3";

$var = 123;

echo $var * 3;


var_dump($_GET);


var_dump(5+5*5);

$x = 10;
$x += 5;

var_dump($x);


$y = 5;
$z = 6;

var_dump($z, $y, $y > $z);

$i = 1;
var_dump($i++, $i);

$a1 = ['foo' => 'bar'];
$a2 = ['aaaa' => 'bbb'];

var_dump($a1 + $a2);


$x = 0;
while ($x <=1){
  $x++;
  echo"1111111\n";
}

$too = ['aaa', 'bbb', 'ccc'];
foreach ($too as $key => $value){
  var_dump($value);
  break;
}


$r=2;
switch ($r) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "something else";
}

require 'index.php';
//include 'index.php';
