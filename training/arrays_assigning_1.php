<?php

// using range
$array1 = range(0, 99, 10);
var_dump($array1);
echo "<br>";

// asociative array
$arrayAsoc = array('first' => 'Alex', 'last' => 'Tenche');
var_dump($arrayAsoc);
echo "<br>";

// adding to arrays
$arrayNum = array();
$arrayNum[1] = 22;
$arrayNum[] = 18;
$arrayNum[] = 197;
var_dump($arrayNum);
echo "<br>";

// adding keys out of order
$arrayOutOfOrder = [];
$arrayOutOfOrder[33] = 'bananas';
$arrayOutOfOrder[22] = 'apples';
$arrayOutOfOrder[44] = 'cantalope';
$arrayOutOfOrder[] = 'dates';
var_dump($arrayOutOfOrder);
echo "<br>";
