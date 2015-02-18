<?php 
// Managing Files: Using the "*file*" family
// using "f*" family commands to write to a file

// filename
$filename = 'website_access.log';
// get user's IP address
$ip = $_SERVER['REMOTE_ADDR'];
// get user's browser
$browser = $_SERVER['HTTP_USER_AGENT'];
// get date and time
// YYYY-mm-dd 24hour:minutes:seconds
$today = date('Y-m-d H:i:s');
// if the 3rd param is not specified, assumes "w" mode
file_put_contents($filename, sprintf("%20s | %20s | %60s\n", $ip, $today, $browser), FILE_APPEND);
// display results -- use file_get_contents() to read entire file at once
echo '<pre>';
echo file_get_contents($filename);
echo '</pre>';
// phpinfo() shows you information shown in $_SERVER[]
phpinfo(INFO_VARIABLES);
