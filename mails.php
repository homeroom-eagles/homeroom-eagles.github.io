<?php
$errors = '';
$myemail = 'ateendraramesh@gmail.com';//<-----Put Your email address here.
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$to = $myemail;
$email_subject = "Qurey by  $name";
$email_body = "You have received a new message. " . " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";
$headers = "From: $email_address\n";
$headers .= "Reply-To: $myemail";
mail($to,$email_subject,$email_body,$headers);
header('Location: index.html');
?>
