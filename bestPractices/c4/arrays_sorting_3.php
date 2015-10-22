<?php
// Working with Arrays: Sort by Value in Reverse
// rsort() or arsort()

// assign values
$arrayNumeric = array(22, 44, 11, 99, 88);
$arrayAssoc = array('a' => 'Apples', 'b' => 'Oranges', 'c' => 'Bananas', 'd' => 'Grapes');
$arrayFiles = array('file1.php', 'file2.php', 'file10.php', 'file20.php');
rsort($arrayNumeric, SORT_NUMERIC);		// NOTE: use flag if you know the nature of the data
arsort($arrayAssoc, SORT_STRING);		// arsort() maintains keys
rsort($arrayFiles, SORT_NATURAL);

// display results
echo '<br />Numeric: ', var_dump($arrayNumeric);
echo '<br /><br />Associative: ', var_dump($arrayAssoc);
echo '<br /><br />Files: ', var_dump($arrayFiles);

