<?php

$currenttime =  date("H:i:s");
$goaltime = "20:35:30";

echo "
Current time: $currenttime <br>
Goal time: $goaltime <br>
;

echo "<meta http-equiv='refresh' content='1'>";

if ($currenttime >= $goaltime){
	echo "<b> Goal has been reached </b>";
}