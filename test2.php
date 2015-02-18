<?php

function myFunction($text = 'default text'){
  return $text . '!!!!!';
}

var_dump(myFunction(/*'some random text'*/));
