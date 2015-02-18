<?php 
// Managing Files: Using the "f*" family
// using "f*" family commands to read a file

// filenames
$filename = 'gettysburg.txt';
//$filename = 'file_does_not_exist.txt';
// create file handle
// 2nd param = "mode" = r = read, w = write, a = append
$fh = fopen($filename, 'r');
// test to see if OK
if ($fh) {
	$contents = '';
	// loop while not end of file
	while (!feof($fh)) {
		// read 1024 bytes at a time
		$contents .= fread($fh, 1024);
	}
	// close the file handle
	fclose($fh);
} else {
	$contents = 'ERROR: unable to open file ' . $filename;
}
// display results -- use htmlspecialchars() to display output safely
echo htmlspecialchars($contents);
