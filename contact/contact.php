<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

 


$name = stripslashes($_POST['name']); 
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);


$error = 'Mail was not sent :(';

$to      = 'sunjoyxinide@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);




echo 'OK';
exit;

?>