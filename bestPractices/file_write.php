<?php

$file = 'filetest.html';
if($handle = fopen($file, 'a')) { // overwrite

	//fwrite($handle, 'abc'); // returns number of bytes or false
	$content = "<!document! html>pare ca merge";  // double quotes matter (with \n)
	fwrite($handle, $content);
	
	fclose($handle);
} else {
	echo "Could not open file for writing.";
}


/*
// file_put_contents: shortcut for fopen/fwrite/fclose
// overwrites existing file by default (so be CAREFUL)
$file = 'filetest.txt';
$content = "111\n222\nana are mere";
if($size = file_put_contents($file, $content)) {
  echo "A file of {$size} bytes was created.";
}*/