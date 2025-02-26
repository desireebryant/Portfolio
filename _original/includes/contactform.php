<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$name = strip_tags($name);
	$email = trim($_POST["email"]);
	$email = strip_tags($email);
	$message = trim($_POST["message"]);
	$message = strip_tags($message);

if ($name == "" OR $email == "" OR $message == "") {
	echo "You must fill out all information in the form"; 
	exit;
}

foreach ($_POST as $value) {
	if (stripos ($value, 'Content-Type:') !== FALSE) {
		echo "There is a problem with the infomation you entered, please try again.";
	exit;
	}
}

if ($_POST["address"] != "") {
	echo "Sorry, there is a error in your submission.";
	exit;
}

require_once ("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

if (!$mail->ValidateAddress($email)) {
	echo "You must give a valid email address.";
	exit;
}

$email_body = "";
$email_body = $email_body . "Name: " . $name . "<br>";
$email_body = $email_body . "Email: " . $email . "<br>";
$email_body = $email_body . "Message: " . $message;

$mail->SetFrom($email, $name);
$address = "desiree@desireebryant.com";
$mail->AddAddress($address, "Desiree' Bryant");
$mail->Subject    = "Desiree' Bryant Contact Form Submission | " . $name;
$mail->MsgHTML($email_body);

if(!$mail->Send()) {
  echo "Sorry, there was a problem sending the email: " . $mail->ErrorInfo;
  exit;
}

header("Location: ../contact.php?status=thanks");
exit;

}

?>