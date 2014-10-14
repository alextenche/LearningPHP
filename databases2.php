<?php
	//conection:
	$link = mysqli_connect("localhost","root","termopane","widget_corp") 
	or die("Error " . mysqli_error($link));
?>
<html>
    <head>
        <title>Databases Extra</title>
    </head>
    <body>
	<?php
	//consultation:
	$query = "SELECT * FROM subjects";
	
	// execute the query.
	$result = $link->query($query) or die("Error in the consult.." . mysqli_error($link));
	

	//display information:
	while($row = mysqli_fetch_array($result)) {
		echo $row["menu_name"] . " " . $row["position"] . "<br >";
	} 
?>
    </body>
</html>
<?php
	//close connection
	mysqli_close($link);
?>