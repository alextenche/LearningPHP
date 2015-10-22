<?php
// Working with Arrays: Working with Numeric Keys
// a key is a way to refer to an array element or value
// arrays with numeric keys are called "numeric" arrays in PHP
// only positive integers can be used as keys in numeric arrays

// arrays can contain numeric values
$arrayNumeric1 = array(1, 2, 3, 4, 5);
var_dump($arrayNumeric1);
echo '<br />';

// arrays can contain string values
$arrayNumeric2 = array('apple', 'banana', 'cucumber', 'date', 'egg');
var_dump($arrayNumeric2);
echo '<br />';

// arrays can contain a mixture of values
$arrayNumeric3 = array('apple', 22, 'cucumber', 192.47, FALSE);
var_dump($arrayNumeric3);
echo '<br />';

// values can be access by key
// to use arrays inside "double quotes" use {$array[N]}
echo "<br />Element 0: {$arrayNumeric3[0]}";			// apple
echo "<br />Element 3: {$arrayNumeric3[3]}";			// 192.47
