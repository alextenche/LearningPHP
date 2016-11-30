<?php

// pre 5.4 way
date_default_timezone_set('Europe/Bucharest');
$time = new DateTime();
echo $time->getTimestamp(), "\n";

// 5.4
echo (new DateTime)->getTimestamp(), "\n";
