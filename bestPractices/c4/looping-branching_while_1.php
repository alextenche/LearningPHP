<?php
// Looping and Branching: Configuring "while" and "do while" Loops
// use "while" where the number of items varies
// "do while" is the same as "while" except that it executes once always

$options = array('How Will You Arrive?|Car|Bus|Train|Plane&',
				 'Your Gender|Male|Female&',
				 'Preferred Housing|House|Condo|Flat|Apartment|Shared Room&',
				 'How Many in Family|1 - 2|3 - 4|5+&');

// using a "do while" loop to generate survey questions from a formatted string

$styleInner = 'style="float: left; width: 150px; border: 1px solid black; text-align: center;"';
$styleOuter = 'style="float: left; width: 900px;"';

$x = 0;
while ($x < 4) {
	$pos = 0;
	echo "<div $styleOuter><div $styleInner>";
	do {
		$character = substr($options[$x], $pos++, 1);
		$flag = TRUE;
		if ($character == '|') {
			echo "</div><div $styleInner>";
		} elseif ($character == '&') {
			$flag = FALSE;
		} else {
			echo $character;
		}
	} while ($flag);
	echo '</div></div><p>&nbsp;</p>';
	$x++;
}
