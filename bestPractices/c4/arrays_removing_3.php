<?php
// Working with Arrays: Removing Array Element from Beginning
// array_shift($array)

// assign values
$arrayAssoc = array('meat' => 'Beef', 'dairy' => 'Milk', 'grain' => 'Whole Wheat Bread', 'fruit' => 'Grapes');

// display results
echo '<pre>';
var_dump($arrayAssoc);

// remove element
$firstElement = array_shift($arrayAssoc);
echo "<br />Removed Element: $firstElement<br />";

// display results
var_dump($arrayAssoc);
echo '</pre>';

// assign values
$arrayNumeric = array(1 => 11, 5 => 55, 2 => 22, 6 => 66);

// display results
echo '<pre>';
var_dump($arrayNumeric);

// remove element
$firstElement = array_shift($arrayNumeric);
echo "<br />Removed Element: $firstElement<br />";

// display results
echo "<br />WARNING: keys get reset using shift()<br />";
var_dump($arrayNumeric);
echo '</pre>';
