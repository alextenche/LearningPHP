<?php

$date = new DateTime('2014, August 23');
$date = new DateTime('2014-09-12');
$date = new DateTime('+2 weeks');
$date = new DateTime('tomorrow');

$raw = '10. 11. 1968';
$date2 = DateTime::createFromFormat('d. m. Y', $raw);

echo "The output date is: " . $date->format("D M Y") . "\n";
echo "The output date2 is:  " . $date2->format("D M Y") . "\n";
