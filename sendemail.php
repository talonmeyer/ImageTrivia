<?php
   include('session.php');
$to      = 'talon@iastate.edu';
$subject = 'the subject';
echo $_SESSION['login_user'];
$message = "hello there, {$_SESSION['login_user']}"; // 'hello there, " . $_SESSION['login_user'];
$headers = 'From: Image Trivia <imagetrivia@talonmeyer.com>' . "\r\n" .
    'Reply-To: imagetrivia@talonmeyer.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>