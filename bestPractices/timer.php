<?php

$start_time = $_SERVER["REQUEST_TIME_FLOAT"];
echo "Execution time: ", microtime(true) - $start_time, " seconds <br>";

usleep(500000);
echo "Execution time: ", microtime(true) - $start_time, " seconds <br>";