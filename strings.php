<html>
    <head>
        <title>Basic</title>
    </head>
    <body>
        <?php
			echo "Hello world<br />";
			echo 'Hello world<br />';
			$my_variable = "Hello World";
			echo $my_variable;
			echo "<br />";
			echo $my_variable . " Again";
		?>
		<br />
		<?php
			echo "$my_variable Again.<br />";
			echo "{$my_variable} Again.<br />";
			echo '$my_variable Again.<br />';
		?>
		
    </body>
</html>