<?php 
	$error = "";

	if($_POST['submit']){

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
			echo "There were error(s) in your signup details:".$error;
		} else {

			$link = mysqli_connect("localhost", "root", "", "diary" );

			$query = "SELECT * FROM users WHERE email ='". mysqli_real_escape_string($link, $_POST['email']) ."'";
			$result = mysqli_query($link, $query);
			echo $results = mysqli_num_rows($result);

			if($results){
				echo "That email address is already registred. Do you want to login ?";
			} else {
				$the_email = mysqli_real_escape_string($link, $_POST['email']);
				$the_password =  md5(md5($_POST['email']).$_POST['password']);
				$query = "INSERT INTO users (email, password) VALUES ('$the_email','$the_password')";
				mysqli_query($link, $query);
				echo "Yo've been sign up !";
			}



		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		
		<input type="email" name="email" id="email">

		<input type="password" name="password" id="password">

		<input type="submit" name="submit" value="Sign Up">

	</form>

</body>
</html>