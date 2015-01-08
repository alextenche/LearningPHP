<?php include("login.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Tenche Alexandru">
	<title>theDiary - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		.navbar-brand{
			font-size: 1.8em;
		}
		#topContainer{
			background-image: url(images/background.jpg);
			height: 400px;
			width: 100%;
			background-size: cover;
		}
		#topRow{
			margin-top: 100px;
			text-align: center;
		}
		h1{
			font-size: 400%;
			font-weight: bold;
		}
		p{
			font-weight: bold;
		}
		.marginTop{
			margin-top: 30px;
		}
		.centred{
			text-align: center;
		}
		.title{
			margin-top: 100px;
			font-size: 300%;
		}
		#footer{
			background-color: #81BEF7;
			padding-top: 70px;
			width: 100%;
		}
		.marginBottom{
			margin-bottom: 30px;
		}
		.appStoreImage{
			width: 250px;
		}
	</style>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">

				<a href="#" class="navbar-brand">theDiary</a>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				</ul>



				<form class="navbar-form navbar-right" method="post">

					<div class="form-group">
						<input type="email" class="form-control" placeholder="email" name="loginEmail" id="loginEmail" 
						value="<?php if(isset($_POST['loginEmail'])) {echo addslashes($_POST['loginEmail']);} ?>">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" placeholder="password" name="loginPassword" id="loginPassword" 
						value="<?php if(isset($_POST['loginPassword'])) {echo addslashes($_POST['loginPassword']);} ?>">
					</div>
					<input type="submit" name="submit" class="btn btn-success" value="Log In" >
				</form>
			</div>

		</div>
	</div>

	<div class="container contentContainer" id="topContainer">	

		<div class="row">

			<div class="col-md-6 col-md-offset-3" id="topRow">
				<h1 class="marginTop">theDiary</h1>
				<p class="lead marginTop">Your own private diary with you, wherever you go.</p>
				<?php 
					if($error){
						echo '<div class="alert alert-danger">'.$error.'</div>';
					}

					if(isset($message)){
						echo '<div class="alert alert-success">'.$message.'</div>';
					}




				?>

				<p> Intrested? Sign up below. </p>

				<form class="marginTop" method="post">
					
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" placeholder="your email address" name="email" id="email" value="<?php if(isset($_POST['email'])) {echo addslashes($_POST['email']);} ?>">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" placeholder="your password" name="password" id="password" value="<?php if(isset($_POST['password'])) {echo addslashes($_POST['email']);} ?>">
					</div>

					<input name="submit" class="btn btn-success btn-lg marginTop" type="submit" value="Sign Up">

				</form>

		</div>

	</div>

</div><!-- container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	$('.contentContainer').css("min-height", $(window).height());
</script>
</body>
</html>	