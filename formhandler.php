<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'aguwachindeu2000@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "user name: $name.\n".
"user email: $subject.\n".
"subject: $subject.\n".
"user message: $message.\n";

$to = 'neduaguwa443@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("location: contact.html");

exit;