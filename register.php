<?php
	 include("config.php");
    session_start();

    //convert session variables
    $fullname = $_SESSION['fullname'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];


    //Write to log
    $result = mysqli_query($db,'SELECT (Max(id)+1) FROM Log');
    $row = mysqli_fetch_array($result,MYSQLI_NUM);
    $maxlogID = $row[0];
    $session_id = session_id();
    $insertLog = 'INSERT INTO Log (id, user, action, sessionid) VALUES (' . $maxlogID . ', "' . $username . '", "registered", "' . $session_id . '")';
    mysqli_query($db,$insertLog);

    //Write user to table
    $result = mysqli_query($db,'SELECT (Max(id)+1) FROM User');
    $row = mysqli_fetch_array($result,MYSQLI_NUM);
    $maxuserid = $row[0];
    $insertUser = 'INSERT INTO User VALUES (' . $maxuserid . ', "' . $username . '", "' . $password . '", "' . $fullname . '", "' . $email . '", "3","0")';
    $querySuccess = mysqli_query($db,$insertUser);

    if ($querySuccess == FALSE) {
        echo 'Rekt!
        Something went wrong and we do not know why :/';
    } else {
        //Send confirmation email
        $subject = 'Image Trivia | Thanks for registering!';
        $message = "Greetings, {$fullname}
    
    Thank you for creating an account with ImageTrivia. 
    
    Your username is: {$username}
    Your password is: {$password}
    
    Do not lose this email. Are you that capable at least?
    
    Sincerely,
    
    The ImageTrivia Team";

        $headers = 'From: Image Trivia <imagetrivia@talonmeyer.com>' . "\r\n" .
            'Reply-To: imagetrivia@talonmeyer.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $mailSent = mail($email, $subject, $message, $headers);

        if ($mailSent == FALSE ) {
            //Write failure to the log
            $result = mysqli_query($db,'SELECT (Max(id)+1) FROM Log');
            $row = mysqli_fetch_array($result,MYSQLI_NUM);
            $maxlogID = $row[0];
            $session_id = session_id();
            $insertLog = 'INSERT INTO Log (id, user, action, sessionid) VALUES (' . $maxlogID . ', "' . $username . '", "sendregister email failed", "' . $session_id . '")';
            mysqli_query($db,$insertLog);

            echo 'Rekt!
        So you got registered but our auto email sender quit on us :/';
        } else {
            //Write success to the log
            $result = mysqli_query($db,'SELECT (Max(id)+1) FROM Log');
            $row = mysqli_fetch_array($result,MYSQLI_NUM);
            $maxlogID = $row[0];
            $session_id = session_id();
            $insertLog = 'INSERT INTO Log (id, user, action, sessionid) VALUES (' . $maxlogID . ', "' . $username . '", "send register email success", "' . $session_id . '")';
            mysqli_query($db,$insertLog);

            echo 'Success!
        You will be getting an email from us with your information in it. Thanks!';
            //sleep(5);
            //echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
        }
    }


?>
<html>
   
   <head>
      <title>Register</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="register-page">
  <div class="form">
    <form class="back-form" action = "index.php" method = "post">
      <button>Back</button>
    </form>            
    <p class="message" style="color:red;"><?php echo $error; ?></p>
  </div>
</div>

   </body>
</html>