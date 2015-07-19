<?php

$date1 = new DateTime('August 1, 1978');
$date2 = new DateTime('August 13, 1974');

// who is older ?
if($date1 < $date2){
  echo '<p>date1 is older than date2</p>';
} else {
  echo '<p>date2 is older than date1</p>';
}

echo "<br>";

$diff = $date2->diff($date1);
echo $diff->format("<p>There is %y years, %m months and &d days between date2 and date1. </p>");
