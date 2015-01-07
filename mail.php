<!DOCTYPE html>
<html>
    <head>
    	<meta name="author" content="Tenche Alexandru">
        <title>Sending Mail</title>
    </head>
    <body>
        <?php
        $emailTo = "alex.tenche@gmail.com";
        $subject = "test";
        $body = "testing mail from php";
        $headers = "From: alextenche.jolinar.org";

        mail($emailTo, $subject, $body, $headers);

         ?>
    </body>
</html>