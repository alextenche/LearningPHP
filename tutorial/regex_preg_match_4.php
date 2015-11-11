<?php
// Using Regular Expressions: Using "preg_match()" for Form Validation
// putting it all together: validating an address and postal code from a web form

// initialize variables
$houseNumber = 'Number';
$postalCode = 'A9A 9A9';
$validHouseNo = '<b style="color: red;">House number must only contain letters, numbers or punctuation!</b>';
$validPostCode = '<b style="color: red;">Postal code must be in the form A9A 9A9 or 99999-9999!</b>';

// $_GET[] is used to get form data from the URL
// $_GET is discussed in more detail on chapter on web forms
if (isset($_GET['houseNumber'])) {
	$houseNumber = $_GET['houseNumber'];
}

if (isset($_GET['postalCode'])) {
	$postalCode = $_GET['postalCode'];
}

// validate house number = total of 16 alpha numeric characters or spaces
if (preg_match('/^(\w|\s){1,16}$/', $houseNumber)) {
	$validHouseNo = '<b style="color: green;">House number validates OK!</b>';
}

// validate postal code = letter-number-letter <space> number-letter-number or nnnnn-nnnn
if (preg_match('/^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/i', $postalCode)
	|| preg_match('/^\d{5}(-\d{4})?$/i', $postalCode)) {
	$validPostCode = '<b style="color: green;">Postal code validates OK!</b>';
}
?>
<!-- // display the form -->
<form>
<br /><input type="TEXT" name="houseNumber" size=16 maxlength=16  value="<?php echo htmlspecialchars($houseNumber); ?>"/>
<br /><?php echo $validHouseNo; ?>
<br />
<br /><input type="TEXT" name="postalCode" size=10 maxlength=10  value="<?php echo htmlspecialchars($postalCode); ?>"/>
<br /><?php echo $validPostCode; ?>
<br />
<br /><input type="SUBMIT" />
</form>

