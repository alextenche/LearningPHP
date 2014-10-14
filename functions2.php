<html>
    <head>
        <title>Functions2</title>
    </head>
    <body>
		<?php 
			//using globals
			$bar = "oustside";
			function foo(){
				global $bar;
				$bar = "inside";
			}
			foo();
			echo $bar . "<br />";	
		?>
		<br />
		<?php 
			//using local variables, arguments and return values
			$bar = "oustside";
			function foo2($var){
				$var = "inside";
				return $var;
			}
			$bar = foo2($bar);
			echo $bar . "<br />";	
		?>
		<br />
		<?php
			function paint($room = "office", $color = "red"){
				echo "The color of the {$room} is {$color} .";
			}
			paint("bedrom","blue");
			paint("bedrom");
		
		?>
		
		
    </body>
</html>