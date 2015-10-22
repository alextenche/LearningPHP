<?php
// Working with Arrays: Sort by Key
// ksort()

// assign values
$arrayAssoc = array('meat' => 'Beef', 'dairy' => 'Milk', 'grain' => 'Whole Wheat Bread', 'fruit' => 'Grapes');
ksort($arrayAssoc);

// display results
echo '<pre>';
var_dump($arrayAssoc);
echo '</pre>';
