<?php

if (isset($_POST['submit'])) {

	//$todaysdate = getDateString(1,16);
	$user = ($_POST['name']);
	$email = ($_POST['email']);
	$company = ($_POST['company']);
	$question = ($_POST['question']);
	$destination_email = "polarclaus@gmail.com";
	$email_subject= "Hosting myMailForm";

	$email_body = "$user\n$email\n$company\n$question\n$email_body . "\n";
	mail($destination_email,$email_subject,$email_body);
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Success Page</title>
	</head>
	<body>
		<h2>Form submitted successfully!</h2> <br/>
		Hannes Widrig's Site
		<a href="http://homework.genesee.edu/~hwidrig/hosting">Return to my website</a>
	</body>
</html>
