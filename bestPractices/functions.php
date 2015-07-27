<?php

function add($a, $b){
  return $a + $b;
}

function answer(){
  return 42;
}

$func = 'answer';

$num = $func();
echo $num;

$func2 = 'add';
echo $func2(5,10);
