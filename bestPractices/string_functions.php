<?php

$phrase = "We only hit what we aim for.";

$len =  strlen($phrase);
echo $len;
echo "<br>";

// substr
echo substr($phrase, 0, 5);
echo "<br>";


// strpos
echo strpos($phrase, 'only');
echo "<br>";
var_dump(strpos($phrase, 'bob'));
echo "<br>";

$start = strpos($phrase, 'hit');
echo substr($phrase, $start);
