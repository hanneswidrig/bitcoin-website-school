<?php

if (isset($_POST['submit'])) {
	
	//$todaysdate = getDateString(1,16);
	$user = ($_POST['name']);
	$email = ($_POST['email']);
	$company = ($_POST['company']);
	$url = ($_POST['url']);
	$question = ($_POST['question']);
	$destination_email = "polarclaus@gmail.com";
	$email_subject= "pe02 myMailForm";
	$voting = ($_POST['votingType']);
	
	$apple = ($_POST['apple']);
	$samsung = ($_POST['samsung']);
	$motorola = ($_POST['motorola']);
	$nexus = ($_POST['nexus']);
	
	
	$email_body = "$user\n$email\n$company\n$url\n$question\n\n Is voting:
		\t$voting\nPhones you've owned:\n$apple\n$samsung\n$motorola\n$nexus";
	mail($destination_email,$email_subject,$email_body,$voting);
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
        Hannes Widrig's Site <br/>
		<a href="http://homework.genesee.edu/~hwidrig/hosting">Return to my website</a>
	</body>
</html>