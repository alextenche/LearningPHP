<?php
// Working with Arrays: Merging Arrays
// array_merge($array1, $array2, etc.)

// assign values
$array1 = array('a' => 'Apples', 'b' => 'Oranges', 'c' => 'Bananas', 'd' => 'Grapes');
$array2 = array('d' => 'Kiwi', 'e' => 'Plums', 'f' => 'Pears', 'g' => 'Cherries');
$array3 = array_merge($array1, $array2);

// display results
echo '<br /><br />1: ', var_dump($array1);
echo '<br /><br />2: ', var_dump($array2);
echo '<br /><br />NOTE: duplicate key values will be overwritten!';
echo '<br />Merged: ', var_dump($array3);

