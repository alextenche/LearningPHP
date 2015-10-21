<?php
// Looping and Branching: Using if / else / elseif
// using if / else to determine a website user's status

// assign values
$user = 'Admin';
//unset($user);

// nested "if" statement
if (isset($user)) {
	echo "<br />User: $user";
	if ($user == 'Admin') {
		$status = 'SUPER';
	} else {
		$status = 'Normal';
	}
} else {
	echo "<br />User: Guest";
	$status = 'Guest';
}

echo "<br />Status: $status";
echo '<br />';
