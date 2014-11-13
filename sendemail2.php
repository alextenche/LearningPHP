<?php

	// Include the PHPMailer classes
	// If these are located somewhere else, simply change the path.
	require_once("../PhotoGallery/includes/phpMailer/class.phpmailer.php");
	require_once("../PhotoGallery/includes/phpMailer/class.smtp.php");
	require_once("../PhotoGallery/includes/phpMailer/language/phpmailer.lang-ro.php");
	
	// mostly the same variables as before
	// ($to_name & $from_name are new, $headers was omitted) 
	$to_name = "alex.tenche";
	$to = "alex.tenche@gmail.com";
	$subject = "Mail Test at ".strftime("%T", time());
	$message = "This is a test.";
	$message = wordwrap($message,70);
	$from_name = "Sender Name";
	$from = "";
	
	// PHPMailer's Object-oriented approach
	$mail = new PHPMailer();
	
	// Can use SMTP
	// comment out this section and it will use PHP mail() instead
	
	$mail->IsSMTP();
	$mail->SMTPAuth      = true;   
	$mail->SMTPKeepAlive = true;   
	$mail->Host          = 'smtp.gmail.com'; 
	$mail->Port          = 465;
	$mail->SMTPSecure    = 'ssl';
	$mail->Username      = 'alex.tenche@gmail.com';
	$mail->Password      = 'andreiplesu';
	$mail->SetFrom('alex.tenche@gmail.com', 'alexTenche');
	$mail->AddReplyTo('alex.tenche@gmail.com', 'alexTenche');
	
	// Could assign strings directly to these, I only used the 
	// former variables to illustrate how similar the two approaches are.
	$mail->FromName = $from_name;
	$mail->From     = $from;
	$mail->AddAddress($to, $to_name);
	$mail->Subject  = $subject;
	$mail->Body     = $message;
	
	$result = $mail->Send();
	echo $result ? 'Sent' : 'Error';
  
?>