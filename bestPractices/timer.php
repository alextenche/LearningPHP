<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 02.08.2015
 * Time: 13:19
 */

$start_time = $_SERVER["REQUEST_TIME_FLOAT"];
echo "Execution time: ", microtime(true) - $start_time, " seconds <br>";

usleep(500000);
echo "Execution time: ", microtime(true) - $start_time, " seconds <br>";