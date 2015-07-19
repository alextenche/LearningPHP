<?php
$name = 'friend';
$greet = function() use($name){
  echo "Hello there, $name.";
};

$greet();
