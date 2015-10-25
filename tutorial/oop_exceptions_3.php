<?php
// Managing the Code -- OOP: Handling Exceptions

// exceptions can be thrown by built-in classes too

// using the built-in class "DateTime"
// see: http://www.php.net/manual/en/book.datetime.php for more info

$dateString = '2021-01-01';
$futureDate = new DateTime($dateString);
echo '<br />DATE:', $dateString;
// l = full day name, d = 2 digit day of the month, F = full month name, Y = 4 digit year
// see http://www.php.net/manual/en/function.date.php for more format codes
echo '<br />FULL:', $futureDate->format('l, d F Y');

// impossible date: generates an exception
$dateString = '2021-33-33';
$futureDate = new DateTime($dateString);
echo '<br />DATE:', $dateString;
echo '<br />FULL:', $futureDate->format('l, d F Y');
