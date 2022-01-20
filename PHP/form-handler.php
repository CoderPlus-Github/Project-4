<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New From Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";

$to = 'tanmay.sonvane08@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")
?>