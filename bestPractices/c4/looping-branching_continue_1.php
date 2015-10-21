<?php
// Looping and Branching: Branching with "continue," "break" and "goto"
$array = array(11, 23, 34, 56, 78, 90, 101, 114);
echo 'Even Numbers Using "continue":', '<br />';
foreach ($array as $value) {
	// check for odd number
	if ($value % 2) {
		continue;
	}
	echo '<br />', $value;
}

$number = 0;
foreach ($array as $value) {
	// check for number evenly divisible by 3
	if (($value % 3) == 0) {
		$number = $value;
		break;
	}
}
echo '<br /><br />', $number, ' is divisible by 3';

$number = 0;
foreach ($array as $value) {
	// check for number evenly divisible by 4
	if (($value % 4) == 0) {
		$number = $value;
		goto jump;
	}
}
jump:
echo '<br /><br />', $number, ' is divisible by 4';

