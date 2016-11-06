<?php
   //include('session.php');
$to      = 'talon@iastate.edu';
$subject = 'the subject';
$message = "hello there, you!

Just wanted to say thanks for registering an account on ImageTrivia.
You account information:

blah blah

Thank you!

-ImageTrivia
";
$headers = 'From: Image Trivia <imagetrivia@talonmeyer.com>' . "\r\n" .
    'Reply-To: imagetrivia@talonmeyer.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>