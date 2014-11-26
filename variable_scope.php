<html>
    <head>
        <title>Variable Scope</title>
    </head>
    <body>
    <?php
		
		$var = 1;
		
		function test1(){
			global $var;
			$var = 2;
			echo $var."<br />";
		}
		test1();
		echo $var ."<br />";
		
	 ?>
    </body>
</html>