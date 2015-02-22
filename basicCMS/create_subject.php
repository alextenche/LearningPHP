<?php 

require_once("includes/session.php");
require_once("includes/connection.php");
require_once("includes/functions.php");

confirm_logged_in();

$errors = array();
	
// Form Validation
$required_fields = array('menu_name', 'position', 'visible');
foreach($required_fields as $fieldname) {
	if (!isset($_POST[$fieldname]) || ( empty($_POST[$fieldname]) && ($_POST[$fieldname] != 0) ) ) {
		$errors[] = $fieldname;
	}
}
	
$fields_with_lengths = array('menu_name' => 30);
foreach($fields_with_lengths as $fieldname => $maxlength ) {
	if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength || strlen(trim(mysql_prep($_POST[$fieldname]))) == 0){
		$errors[] = $fieldname; 
	}
}
	
if (!empty($errors)) {
	redirect_to("new_subject.php");
}

$menu_name = mysql_prep($_POST['menu_name']);
$position = mysql_prep($_POST['position']);
$visible = mysql_prep($_POST['visible']);

$query = "INSERT INTO subjects (menu_name, position, visible) 
		  VALUES ('{$menu_name}', {$position}, {$visible})";
$result = mysqli_query($connection, $query);

if ($result) {
	// Success!
	redirect_to("content.php");
} else {
	// Display error message.
	echo "<p>Subject creation failed.</p>";
	echo "<p>" . mysqli_error() . "</p>";
}

mysqli_close($connection);