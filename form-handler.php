<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='director@bit.ac.in';
$email_subject='New form submission';
$email_body="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $Subject.\n".
             "User Message: $message.\n";


$to = 'ankitasmishra99@gmail.com';
$headers ="From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>