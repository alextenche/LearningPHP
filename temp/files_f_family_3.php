<?php 
// Managing Files: Using the "f*" family
// using "f*" family commands to write to a file
// set filename
$filename = 'website_access.log';
// create file handle -- append mode: use the "+" if you later want to read from the file
$fh = fopen($filename, 'a+');
// test to see if OK
if ($fh) {
	// get user's IP address
	$ip = $_SERVER['REMOTE_ADDR'];
	// get user's browser
	$browser = $_SERVER['HTTP_USER_AGENT'];
	// get date and time
	// YYYY-mm-dd 24hour:minutes:seconds
	$today = date('Y-m-d H:i:s');
	// "fprintf" is a command in the "printf" family
	// "\n" = new line character
	fprintf($fh, "%20s | %20s | %60s\n", $ip, $today, $browser);
	// reset file pointer to beginning
	rewind($fh);
	// output through to the end of the file
	echo '<pre>';
	fpassthru($fh);
	echo '</pre>';
	// close the file handle
	fclose($fh);
} else {
	echo 'ERROR: unable to open file ' . $filename;
}
// phpinfo() shows you information shown in $_SERVER[]
phpinfo(INFO_VARIABLES);
