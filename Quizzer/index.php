<?php include 'database.php'; ?>
<?php
/*
*    get total questions
*/
$query = "SELECT * FROM questions";

// get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PHP Quizzer</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
	
		<header>
			<div class="container">
				<h1>PHP Quizzer</h1>
			</div>
		</header>
		
		<main>
			<div class="container">
				<h2>Test Your PHP Knowledge</h2>
				<p>This is a multiple choice quiz to test your knowlege of PHP.</p>
				<ul>
					<li>Number of Questions: <strong><?php echo $total; ?></strong></li>
					<li>Type: <strong>Multiple Choice</strong></li>
					<li>Estimated Time: <strong><?php echo $total*.5; ?> Minutes</strong></li>
				</ul>
				<a href="question.php?n=1" class="start">Start Quiz</a>
			</div>
		</main>
		
		
		<footer>
			<div class="container">
				Copyright &copy; Lexucuflexu 2014</h2>
			</div>
		</footer>
			
	</body>
</html>