<?php
// Working with Arrays: Sort by Value
// sort() or asort()

// assign values
$arrayNumeric = array(22, 44, 11, 99, 88);
$arrayAssoc = array('a' => 'Apples', 'b' => 'Oranges', 'c' => 'Bananas', 'd' => 'Grapes');
$arrayFiles = array('file1.php', 'file2.php', 'file10.php', 'file20.php');
sort($arrayNumeric);
sort($arrayAssoc);
sort($arrayFiles);

// display results
echo '<br />Numeric: ', var_dump($arrayNumeric);
echo '<br /><br />Associative (NOTE: keys destroyed!): ', var_dump($arrayAssoc);
echo '<br /><br />Files: ', var_dump($arrayFiles);

// reassign arrays
$arrayAssoc = array('a' => 'Apples', 'b' => 'Oranges', 'c' => 'Bananas', 'd' => 'Grapes');
$arrayFiles = array('file1.php', 'file2.php', 'file10.php', 'file20.php');

// redo associative array using asort
asort($arrayAssoc);

// redo files using natural sort
sort($arrayFiles, SORT_NATURAL);

// display results
echo '<br /><br />Using asort(): ', var_dump($arrayAssoc);
echo '<br /><br />Natural Sort: ', var_dump($arrayFiles);
