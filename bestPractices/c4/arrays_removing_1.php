<?php
// Working with Arrays: Removing Single Array Element
// unset($array[key])

// assign values
$arrayAssoc = array('meat' => 'Beef', 'dairy' => 'Milk', 'grain' => 'Whole Wheat Bread', 'fruit' => 'Grapes');

// display results
echo '<pre>';
var_dump($arrayAssoc);

// remove element
unset($arrayAssoc['grain']);

// display results
var_dump($arrayAssoc);
echo '</pre>';
