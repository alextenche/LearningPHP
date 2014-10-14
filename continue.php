<html>
    <head>
        <title>Loops: continue</title>
    </head>
    <body>
        <?php 
			$ages = array(4,8,15,16,23,42);
		?>
		<?php
			for($count = 0; $count <= 10; $count++){
			if($count == 5){
				continue;
			}
				echo $count . ", ";
			}
		?>
    </body>
</html>