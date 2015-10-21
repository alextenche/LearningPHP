<?php
// Looping and Branching: Comparing Values
// importance: enables your PHP program to make decisions
// operators: == === > >= < =< != !==

// comparing numeric values
$cost1 = 12.99;
$cost2 = 10;

echo "<br />Cost 1: $cost1";
echo "<br />Cost 2: $cost2";
echo '<br />$cost1 < $cost2: ', var_dump($cost1 < $cost2);
echo '<br />$cost1 == $cost2: ', var_dump($cost1 == $cost2);
echo '<br />$cost1 > $cost2: ', var_dump($cost1 > $cost2);
echo '<br />';

// comparing string values
$title1 = 'The Great Escape';
$title2 = 'The Great Gatsby';

echo "<br />Title 1: $title1";
echo "<br />Title 2: $title2";
echo '<br />$title1 < $title2: ', var_dump($title1 < $title2);
echo '<br />$title1 == $title2: ', var_dump($title1 == $title2);
echo '<br />$title1 > $title2: ', var_dump($title1 > $title2);
echo '<br />';




