<?php
	$name = $_POST['name'];
	$email =$_POST['email'];
	$message = $_POST['message'];

	$email_from = 'white glove Vip';

	$email_subject = "New Message from white glove vip";

	$email_body = "User Name: $name.\n".
					"User Email: $email.\n".
						"User Message: $message.\n";

	$to = "hananeoubellil2018@gmail.com";

	$headers = "Form: $email_from\r\n";

	$headers .="Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");
?>