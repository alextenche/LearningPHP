<?php
// Working with Arrays: Difference Between Arrays
// array_diff($array1, $array2)

// assign values
$array1 = array('meat' => 'Beef', 'dairy' => 'Milk', 'grain' => 'Whole Wheat Bread', 'fruit' => 'Grapes');
$array2 = array('meat' => 'Pork', 'dairy' => 'Milk', 'grain' => 'Whole Wheat Bread', 'fruit' => 'Apples');

// display results
echo '<br /><br />1: ', var_dump($array1);
echo '<br /><br />2: ', var_dump($array2);
echo '<br /><br />Difference:', var_dump(array_diff($array1, $array2));

// assign values
$array3 = array(1, 2, 3, 4, 5, 6, 7);
$array4 = array(2, 4, 6, 8);

// display results
echo '<br /><br />3: ', var_dump($array3);
echo '<br /><br />4: ', var_dump($array4);
echo '<br /><br />Difference:', var_dump(array_diff($array3, $array4));

