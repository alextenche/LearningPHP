<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 03.08.2015
 * Time: 19:36
 */

// pre 5.4 way
date_default_timezone_set('Europe/Bucharest');
$time = new DateTime();
echo $time->getTimestamp(), "<br>";

// 5.4
echo (new DateTime)->getTimestamp(), "<br>";