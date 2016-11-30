<?php

$urlPage = 'php/created/page/url.php';
$param1 = 'this is a string';
$param2 = '"bad"/<>character$';
$linktext = "<Click> & you'll see";


//this gives you a clean link to use
$url = "http://localhost/";
$url .= rawurlencode($urlPage);
$url .= "?param1=" . urlencode($param1);
$url .= "&param2=" . urlencode($param2);

//html special chars escapes any html that might do bad things to your html page
echo $url . "\n";
echo htmlspecialchars($linktext);
