<?php
// Looping and Branching: Setting Up a "for" Loop
// execute a block of code a fixed number of times

$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$styleInner = 'style="float: left; width: 100px; border: 1px solid black; text-align: center;"';
$styleOuter = 'style="float: left; width: 700px;"';

echo "<div $styleOuter>";

// syntax: for ( initialization; condition; increment) { // code; }
for ($x = 0; $x < 7; $x++) {
	echo "<div $styleInner>";
	echo $days[$x];
	echo '</div>';
	echo PHP_EOL;
}
echo '</div>';
