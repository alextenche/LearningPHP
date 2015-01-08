<?php 
	session_start();
	include("connection.php");
	$error = "";

	if(isset($_GET['logout']) AND isset($_SESSION['id']) AND $_GET['logout'] == 1){
		session_destroy();
		$message = "You have been loged out. Have a nice day.";
		session_start();
	}
	

	if(isset($_POST['submit']) AND $_POST['submit'] == "Sign Up"){

		if(!$_POST['email']){
			$error .= "<br>Please enter your email address";
		} else {
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$error .= "<br>Please enter a valid email address";
			}
		}
		if(!$_POST['password']){
			$error .= "<br>Please enter your password";
		} else {
			if(strlen($_POST['password']) < 6){
				$error .= "<br>Please enter a password with at least 6 characters";
			}
			if(!preg_match('`[A-Z]`', $_POST['password'])){
				$error .= "<br>Please include at least one capital letter in your password";
			}
		}

		if($error) {
			$error = "There were error(s) in your signup details:".$error;
		} else {
			$query = "SELECT * FROM users WHERE email ='". mysqli_real_escape_string($link, $_POST['email']) ."'";
			$result = mysqli_query($link, $query);
			echo $results = mysqli_num_rows($result);

			if($results){
				$error = "That email address is already registred. Do you want to login ?";
			} else {
				$the_email = mysqli_real_escape_string($link, $_POST['email']);
				$the_password =  md5(md5($_POST['email']).$_POST['password']);
				$query = "INSERT INTO users (email, password) VALUES ('$the_email','$the_password')";
				mysqli_query($link, $query);
				echo "Yo've been sign up !";

				$_SESSION['id'] = mysqli_insert_id($link);
				//print_r($_SESSION);
				// redirect to logged in page
				header("Location: mainPage.php");
			}

		}

	}


	if(isset($_POST['submit']) AND $_POST['submit'] == "Log In"){

		$the_loginEmail = mysqli_real_escape_string($link, $_POST['loginEmail']);
		$the_loginPassword = md5(md5($_POST['loginEmail']).$_POST['loginPassword']);
		$query = "SELECT * FROM users WHERE email ='$the_loginEmail' AND password = '$the_loginPassword' LIMIT 1";

		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);

		//print_r($row);
		if($row){
			$_SESSION['id'] = $row['id'];
			//print_r($_SESSION['id']);
			// redirect to logged page
			header("Location: mainPage.php");
		} else {
			$error = "We could not find a user with that email and password. Please try again.";
		}
	}