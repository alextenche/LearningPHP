<?php
// Looping and Branching: Using if / else / elseif
// using if / else to determine a website user's status

// assign values
//$user = 'Joe';
$user = 'Admin';
$status = 'Normal';

// simple "if" statement
if ($user == 'Admin') {
	$status = 'SUPER';
}

echo "<br />User: $user";
echo "<br />Status: $status";
echo '<br />';

// if / else statement
if ($user != 'Admin') {
	$status = 'Normal';
	$message = "Welcome $user!";
} else {
	$status = 'SUPER';
	$message = 'Please check error log';	
}

echo "<br />User: $user";
echo "<br />Status: $status";
echo "<br />Message: $message";
echo '<br />';
