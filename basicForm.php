<html>
	<head>
	<title>A BASIC HTML FORM</title>
	<?php 
		if(empty($_POST['perpage'])){
			$perpage = 9;
			
		} else {
			$perpage = $_POST['perpage'];
		} 
		print ($perpage);
	?>
	</head>
	
	<body>
	
		<form name="form1" method="post" action="basicForm.php">
			<select name="perpage" onchange="this.form.submit()">  
						<option value="" selected="selected"></option>
						<option value="9">9</option>
						<option value="15">15</option>
						<option value="30">30</option>
			</select> per page
		</form>
	</body>
</html>


