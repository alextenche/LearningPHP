<?php
// Looping and Branching: Branching with "continue," "break" and "goto"
// code with "continue" can be restructured as follows:

$array = array(11, 23, 34, 56, 78, 90, 101, 114);

echo 'Even Numbers Using "continue":', '<br />';
foreach ($array as $value) {
	// check for odd number
	if ($value % 2) {
		continue;
	}
	echo '<br />', $value;
}

echo '<br /><br />', 'Even Numbers Using WITHOUT "continue":', '<br />';
foreach ($array as $value) {
	// check for even number by reversing the logic above
	if (!($value % 2)) {
		echo '<br />', $value;
	}
}
