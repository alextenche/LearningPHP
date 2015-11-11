<?php
// Using Regular Expressions: Using "preg_replace()" for intelligent search and replace
// preg_replace(search_pattern, replacement, string)
// returns a string with replacements substituted for search_pattern

// example of reformatting using preg_replace()

// let's say the user types in this:
// $_GET[] reads data from the URL -- covered in more detail in another lesson
if (isset($_GET['date'])) {
	// note: use strip_tags() to remove any extraneous HTML tags
	$date = strip_tags($_GET['date']);
} else {
	// the date() command can be used to produce a date -- covered in another chapter
	$date = date('m/d/Y');
}

// searches for groups of digits separated by "/"
$pattern = '|(\d+)/(\d+)/(\d+)|';

// but you want to store the date in the database as this: y-m-d
$replace = '$3-$1-$2';
$result = preg_replace($pattern, $replace, $date);

?>
<!-- // display the form -->
Try typing this:
<br />
12/31/1962
<form>
<br /><input name="date" size=16 maxlength=16 value="<?php echo $date; ?>"/>
<br /><input type="SUBMIT" />
</form>
<i>This is what will get stored in the database:</i>
<br />
<?php echo htmlspecialchars($result); ?>
