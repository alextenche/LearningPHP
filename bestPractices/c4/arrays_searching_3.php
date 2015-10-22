<?php
// Working with Arrays: Length
// count($array)

// assign values
$array1 = array(1, 2, 3, 4, 5);
$array2 = array('first' => 'Julia', 'last' => 'Roberts', 'age' => 37, 'occupation' => 'Actress');

// length
$length = array();
$length[] = count($array1);
$length[] = count($array2);

// display results
echo '<pre>';
echo '<br />1:';
var_dump($array1);
echo '<br />2:';
var_dump($array2);
echo '<br />Lengths:';
var_dump($length);
echo '</pre>';

