<?php
$name = $_POST['name'];
$Visitor_email = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

$email_subject = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $Visitor_email.\n".
                "subject: $subject.\n"
                 "User Message: $message.\n"


$to = 'ssekandijohnpaul@gmail.com';

$headers ="From: $email_from \r\n";

$headers .= "Reply-To: $Visitor_Email  \r\n";"

mail($to,$email_subject,$email_body.$headers);

header("Location: contact.html")
?>