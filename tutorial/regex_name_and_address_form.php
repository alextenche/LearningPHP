<!DOCTYPE html><html lang="en">
  <head>
    <title>PHP and MySQL</title>
    <style>
	.container {
		background-image: url("images/BG.jpg");
		background-position: top left;
		background-repeat: no-repeat;
		width: 1280px;
		height: 720px;
	}
	.error {
		color: red:
		font-weight: bold;
	}
    </style>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>
  <body topmargin="0" leftmargin="0">
    <div class="container">
		<form method="POST">
		<table width="80%">
			<tr height="140px;">
				<td width="100px;">&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<th>Title</th>
				<td>
					<select name="title">
						<option>None</option>
						<option>Mr</option>
						<option>Mrs</option>
						<option>Ms</option>
						<option>Miss</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<th>Name</th>
				<td>
					<input type="TEXT" name="name" size=40 maxlength=64 value="<?php echo htmlspecialchars($name); ?>"/>
					<br /><span class='error'><?php echo $error['name']; ?></span>
				</td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<th>Address</th>
				<td>
					<textarea rows="4" cols="40" name="address"> value="<?php echo htmlspecialchars($address); ?>"</textarea>
					<br /><span class='error'><?php echo $error['address']; ?></span>
				</td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<th>Postal Code</th>
				<td>
					<input type="TEXT" name="postalCode" size=16 maxlength=16  value="<?php echo htmlspecialchars($postalCode); ?>"/>
					<br /><span class='error'><?php echo $error['postalCode']; ?></span>
				</td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<th>Country</th>
				<td>
					<select name="country">
						<?php foreach($country as $row) { ?>
						<option value="<?php echo $row['ISO2']; ?>"><?php echo $row['country_name']; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="SUBMIT" /></td>
			</tr>
		</table>
		</form>
    </div>
  </body>
</html>
