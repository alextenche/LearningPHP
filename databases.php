<?php
	// 1. Create a database connection
	$connection = mysqli_connect("localhost","root","termopane");
	if(!$connection){
		die("Database connection failed: " . mysql_error());
	}
	
	// 2. Select a database to user_error
	$db_select = mysql_select_db("widget_corp",$connection);
	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}
?>
<html>
    <head>
        <title>Databases</title>
    </head>
    <body>
	<?php
		// 3. Perform database query
		$result = mysql_query("SELECT * FROM subjects", "$connection");
		if(!$result){
			die("Database query failed: " . mysql_error());
		}
	?>
    </body>
</html>