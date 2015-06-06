<?php 
	
session_start();
include("connection.php");
	
$textUpdate = mysqli_real_escape_string($link,$_POST['diary']);
$query = "UPDATE users SET diary = '$textUpdate' WHERE id = '".$_SESSION['id']."' LIMIT 1";
mysqli_query($link, $query);
print_r($_SESSION);