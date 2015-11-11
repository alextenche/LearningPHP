<?php
// Using Regular Expressions: Using "preg_replace()" for intelligent search and replace
// example of sanitizing user input using preg_replace()

// The user types in a string with undesireable words
// $_GET[] reads data from the URL -- covered in more detail in another lesson
if (isset($_GET['comments'])) {
	// note: use strip_tags() to remove any extraneous HTML tags
	$comments = strip_tags($_GET['comments']);
} else {
	$comments = '';
}

// you want to modify the text before storing it in the database
// list of bad words
$search = array('/heck/i', '/dastardly/i', '/blinking/i', '/stinking/i', '/idiot/');

// list of replacements
// note that in the replacement list you *do not* use delimiters!
$replace = array('blue blazes', 'mean hearted', 'bad smelling', 'inwardly oriented', 'intellectually challenged individual');

// sanatize comments
$result = preg_replace($search, $replace, $comments);
?>
<!-- // display the form -->
Try typing this:
<br />
You blinking, stinking, dastardly idiot!  What in heck do you think you're doing?
<form>
<br /><textarea name="comments" rows=4 cols=60 ><?php echo htmlspecialchars($comments); ?></textarea>
<br /><input type="SUBMIT" />
</form>
<i>This is what will get displayed:</i>
<br />
<?php echo htmlspecialchars($result); ?>
