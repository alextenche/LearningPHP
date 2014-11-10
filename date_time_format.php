<html>
    <head>
        <title>Dates and Times: Formatting</title>
    </head>
    <body>
    <?php
		date_default_timezone_set('Europe/Bucharest');
		$timestamp = time();
		echo strftime("the date today is %d/%m/%y",$timestamp);
		echo "<br>";

		
		
		function strip_zeros_from_date($marked_string=""){
			// remove the marked zeros
			$no_zeros = str_replace('*0', '', $marked_string);
			// remove any remaining marks
			$cleaned_string = $no_zeros = str_replace('*', '', $no_zeros);
			return $cleaned_string;
		}
		
		echo strip_zeros_from_date(strftime("the date today is *%d/*%m/%y",$timestamp));
		
		echo "<hr>";
		$dt = time();
		$mysql_datetime = strftime("%d-%m-%Y %H:%M:%S", $dt);
		echo $mysql_datetime;
	 ?>
    </body>
</html>