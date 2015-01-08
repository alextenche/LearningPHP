<?php
	session_start();
	include("connection.php");

	$query = "SELECT diary FROM users WHERE id = '". $_SESSION["id"]."' LIMIT 1";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);

	$diary = $row['diary'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Tenche Alexandru">
	<title>theDiary - Writing</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		html, body{
			height:100%;
		}
		.navbar-brand{
			font-size: 1.8em;
		}
		#topContainer{
			height: 100%;
			width: 100%;
			background-image: url(images/background.jpg);
			background-size: cover;
			background-position: center;
		}
		#topRow{
			margin-top: 80px;
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
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header pull-left">
				<a href="#" class="navbar-brand">theDiary</a>
			</div>

			<div class="pull-right">
				<ul class="nav navbar-nav">
					<li><a href="index.php?logout=1">Log Out</a></li>
				</ul>
			</div>

		</div>
	</div>

	<div class="container" id="topContainer">	

		<div class="row">

			<div class="col-md-6 col-md-offset-3" id="topRow">
				<textarea class="form-control">
					<?php echo $diary; ?>

				</textarea>

			</div>

		</div>

	</div><!-- container -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$('textarea').css('height', $(window).height()-130);
	$('textarea').keyup(function(){
		$.post('updateDiary.php',{diary:$('textarea').val()});
	});
	</script>
</body>
</html>	