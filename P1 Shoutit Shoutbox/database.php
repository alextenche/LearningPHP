<?php

// connect to MySQL
$con = mysqli_connect("localhost", "root", "termopane", "shoutit");

// test connection
if(mysqli_connect_errno()){
	echo "failed to connect to MySQL: ". mysqli_connect_error();
}