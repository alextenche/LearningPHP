<?php

$file = 'filetest.txt';
if($handle = fopen($file, 'w')) {
	echo "success";
	fclose($handle);
} else {
	echo "Could not open file for writing.";
}

?>