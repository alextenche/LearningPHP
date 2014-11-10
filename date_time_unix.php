<html>
	<head>
		<title>Dates and Times: Unix</title>
	</head>
	<body>
	<?php
		echo "time(): " . time();
		echo "<br>";
	
		echo "mktime(2, 30, 45, 10, 1, 2009): " . mktime(2, 30, 45, 10, 1, 2009);
		echo "<br>";
		
		// checkdate()
		echo "checkdate(12,31,2000): ";
		echo  checkdate(12,31,2000) ? 'true' : 'false';
		echo "<br>";
		
		echo "checkdate(2,31,2000): ";
		echo checkdate(2,31,2000) ? 'true' : 'false';
		echo "<br>";
		
		echo "last Monday: ";
		$unix_timestamp = strtotime("last Monday");
		echo $unix_timestamp . "<br />";
	?>
	</body>
</html>