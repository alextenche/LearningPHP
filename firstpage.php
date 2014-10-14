<html>
    <head>
        <title>First Page</title>
    </head>
    <body>
	<?php 
		$linktext = "<Click> & you'll see";
	?>
        <a href="secondpage.php?name=
			<?php echo urlencode("kevin skoglund");?>&id=42">
			<?php echo htmlspecialchars($linktext); ?>
		</a>
    </body>
</html>