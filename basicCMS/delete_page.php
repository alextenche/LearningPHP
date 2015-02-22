<?php 

require_once("includes/session.php");
require_once("includes/connection.php");
require_once("includes/functions.php");

confirm_logged_in();

// make sure the subject id sent is an integer
if (intval($_GET['page']) == 0) {
	redirect_to('content.php');
}
	
$id = mysql_prep($_GET['page']);
// make sure the page exists (not strictly necessary)
// it gives some extra security and allows use of the page's subject_id for the redirect
if ($page = get_page_by_id($id)) {
	// LIMIT 1 isn't necessary but is a good fail safe
	$query = "DELETE FROM pages WHERE id = {$page['id']} LIMIT 1";
	$result = mysqli_query ($connection, $query);
	if (mysqli_affected_rows($connection) == 1) { // successfully deleted		
		redirect_to("edit_subject.php?subj={$page['subject_id']}");
	} else { // deletion failed			
		echo "<p>Page deletion failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
		echo "<a href=\"content.php\">Return to Main Site</a>";
	}
} else { // page didn't exist, deletion was not attempted
	redirect_to('content.php');
}

// because this file didn't include footer.php we need to add this manually
mysqli_close($connection);