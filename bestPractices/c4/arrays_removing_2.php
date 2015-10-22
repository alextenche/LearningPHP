<?php
// Working with Arrays: Removing Array Element from End
// array_pop($array)

// assign values
$arrayNumeric = array(22, 44, 11, 99, 88);
sort($arrayNumeric, SORT_NUMERIC);

// display results
echo '<pre>';
var_dump($arrayNumeric);

// remove element
$lastElement = array_pop($arrayNumeric);
echo "<br />Removed Element: $lastElement<br />";

// display results
var_dump($arrayNumeric);
echo '</pre>';
