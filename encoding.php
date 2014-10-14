<html>
    <head>
        <title>Encoding</title>
    </head>
    <body>
	<?php
		$url_page = 'php/created/page/url.php';
		$param1 = 'this is a string';
		$param2 = '"bad"/<>character$';
		$linktext = "<Click> & you'll see";
	?>
	<?php 
		//this gives you a clean link to use
		$url = "http://localhost/";
		$url .= rawurlencode($url_page);
		$url .= "?param1=" . urlencode($param1);
		$url .= "&param2=" . urlencode($param2);
		
		//htmspecialchars escapes any html that might do bad things to your html page
	?>
	<?php ?>
        <a href="<?php echo $url;?>">
			<?php echo htmlspecialchars($linktext); ?>
		</a>
    </body>
</html>