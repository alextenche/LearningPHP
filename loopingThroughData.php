<?php 

	$link = mysqli_connect("localhost", "root", "", "diary" );

	if(mysqli_connect_error()){
		die("Could not connect to database");
	}

	//$query = "UPDATE users SET name='Ian O\'Maley' WHERE id = 1";
	//mysqli_query($link, $query);
	$name = mysqli_real_escape_string($link,"Ian O'Maley");	

	$query = "SELECT name FROM users WHERE name = '$name' ";

	if($result = mysqli_query($link, $query)){
		echo mysqli_num_rows($result);
		while($row = mysqli_fetch_array($result)){
			print_r($row);	
		}
	} else {
		echo "failed";
	}
	