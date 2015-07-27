<?php
$utcDateTime = new DateTime('2015-07-21 21:26', new DateTimeZone('UTC'));
$localDateTime = clone $utcDateTime;
$localDateTime->setTimeZone(new DateTimeZone('America/New_York'));
$timisoaraDateTime = clone $utcDateTime;
$timisoaraDateTime->setTimeZone(new DateTimeZone('Europe/Bucharest'));
?>

<p>The UTC date/time is: <?= $utcDateTime->format("Y-m-d H:i:s"); ?></p>
<p>The New_York date/time is: <?= $localDateTime->format("Y-m-d H:i:s"); ?></p>
<p>The Timisoara date/time is: <?= $timisoaraDateTime->format("Y-m-d H:i:s"); ?></p>
