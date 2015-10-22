<?php
// code
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sweets Complete | Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name ="description" content ="Sweets Complete">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico?v=2" type="image/x-icon" />
</head>
<body>
<div id="wrapper">
	<div id="maincontent">		
	<div id="header">
		<div id="logo" class="left">
			<a href="index.php"><img src="images/logo.png" alt="SweetsComplete.Com"/></a>
		</div>
		<div class="right marT10">
			<b>
			<a href="login.html" >Login</a> |<a href="members.html" >Our Members</a> |<a href="cart.html" >Shopping Cart</a>
			</b>
		</div>
		<ul class="topmenu">
		<li><a href="about.html">About Us</a></li>
		<li><a href="products.html">Products</a></li>
		<li><a href="specials.html">Specials</a></li>
		<li><a href="contact.html">Contact Us</a></li>
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->
		
	<div class="content">
	
	<div class="search left">
		<form name="search" method="get" action="search.php" id="search">
		<input type="text" value="keywords" name="keyword" class="s0" />
		<input type="submit" name="search" value="Search Products" class="button marT5" />
		<input type="hidden" name="page" value="search" />
		</form>
		<br /><br />
	</div>
	
	<div class="intro left">
	  <h3>About Us</h3><br/>
	  <p>Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer, Lorem ipsum dolor sit amet consectetuer
	  Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer.
	  <a href="about.html">Read More</a>
	  </p>
	</div>
	<br class="clear"/>
	<br/>
		
	<div class="product-list">
		<h2>Some Specials</h2>
		
		<ul class="specials">
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/430_3150132.scale_20.JPG" alt=" Chocolate Angelfood Cupcakes" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Chocolate Angelfood Cupcakes</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/167_2835774.scale_20.JPG" alt=" Fruit Salad" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Fruit Salad</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/95_2542284.scale_20.JPG" alt=" Fudge" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Fudge</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
			</ul>
	</div><!-- product-list -->
	
	<br class="clear-all"/>
</div><!-- content -->
	
	</div><!-- maincontent -->

	<div id="footer">
		<div class="footer">
			Copyright &copy; 2012 sweetscomplete.com. All rights reserved. <br/>
		<a href="about.html">About Us</a> | <a href="products.html">Products</a> | <a href="specials.html">Specials</a> | <a href="contact.html">Contact Us</a> 		<br />
			<span class="contact">Tel: +44-1234567890&nbsp;
			Fax: +44-1234567891&nbsp;
			Email:sales@sweetscomplete.com</span>
		</div>
	</div><!-- footer -->
	
</div><!-- wrapper -->

</body>
</html>
