<?php
// Looping and Branching: Using if / else / elseif
// using switch to determine a price

// assign values
$price = 100;
$currency = 'GBP';
//$currency = CAD;

// using switch to determine a price
switch ($currency) {
	case 'EUR' :
		$rate = 1.251;
		break;
	case 'USD' :
		$rate = 1.599;
		break;
	case 'CAD' :
		$rate = 1.562;
		break;
	default :
		$rate = 1.00;
}

printf('<br />Price: %4.2f %s', $price * $rate, $currency);

// if / elseif / else
if ($currency == 'EUR') {
	$rate = 1.251;
} elseif ($currency == 'USD') {
	$rate = 1.599;
} elseif ($currency == 'CAD') {
	$rate = 1.562;
} else {
	$rate = 1.00;
}

printf('<br />Price: %4.2f %s', $price * $rate, $currency);

