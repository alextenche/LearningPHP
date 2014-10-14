<?php
	session_start();
?>
<html>
    <head>
        <title>Reading Cookies</title>
    </head>
    <body>
		<?php
			$_SESSION['first_name'] = "kevin";
			$_SESSION['last_name'] = "skoglund";
		?>
		<?php
			$name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
			echo $name;
		?>
    </body>
</html>