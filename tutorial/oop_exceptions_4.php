<?php
// Managing the Code -- OOP: Handling Exceptions

// exceptions can be thrown by built-in classes too

// inside the "try" block place code which might throw an exception
try {
	$dateString = '2021-01-01';
	echo '<br />DATE:', $dateString;
	// l = full day name, d = 2 digit day of the month, F = full month name, Y = 4 digit year
	// see http://uk.php.net/manual/en/function.date.php for more format codes
	$futureDate = new DateTime($dateString);
	echo '<br />FULL:', $futureDate->format('l, d F Y');

	// impossible date: generates an exception
	$dateString = '2021-33-33';
	echo '<br />DATE:', $dateString;
	$futureDate = new DateTime($dateString);
	echo '<br />FULL:', $futureDate->format('l, d F Y');
// inside the "catch" block you can place your recovery code
} catch (Exception $e) {
	echo '<br />';
	echo 'Unable to process date/time information!';
	echo '<br />';
	echo $e->getMessage();
	echo $e->getTraceAsString();
}
