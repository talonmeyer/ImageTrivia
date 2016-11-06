<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
     //check if login or register
     $Reg_username = mysqli_real_escape_string($db,$_POST['Reg_username']);

       //If Register event
     if($Reg_username !== '')
     {
       //get variables
       $Reg_password = mysqli_real_escape_string($db,$_POST['Reg_password']);
       $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
       $email = mysqli_real_escape_string($db,$_POST['email']);

      //make sure username isn't taken
      $check_username = "SELECT id FROM User WHERE username = '$Reg_username'";
      $result_check_username = mysqli_query($db,$check_username);
      $row = mysqli_fetch_array($result_check_username,MYSQLI_ASSOC);
      //$active = $row['active'];
      $usercount = mysqli_num_rows($result_check_username);


         if($usercount !== 0) {
          $error = "Username already taken. Real original.";
         } else {
             //make sure email isn't registered already
             $check = "SELECT id FROM User WHERE email = '$email'";
             $emailresult = mysqli_query($db, $check);
             $row = mysqli_fetch_array($emailresult, MYSQLI_ASSOC);
             $active = $row['active'];
             $emailcount = mysqli_num_rows($emailresult);

             if ($emailcount == 1) {
                $error = "Email already registered!";
             } else {
                //create session variables and redirect to register.php
                $_SESSION['password'] = $Reg_password;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $Reg_username;
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=register.php\">";
            }
        }
     }
       //IF login event
       else {
         $myusername = mysqli_real_escape_string($db,$_POST['username']);
         $mypassword = mysqli_real_escape_string($db,$_POST['password']);

         $sql = "SELECT id FROM User WHERE username = '$myusername' and passcode = '$mypassword'";
         $result = mysqli_query($db,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $active = $row['active'];

         $count = mysqli_num_rows($result);

         // If result matched $myusername and $mypassword, table row must be 1 row
         if($count == 1) {

             $_SESSION['login_user'] = $myusername;
             header("location: main.php");
         }else {
             $error = "Your Login Name or Password is invalid";
         }
     }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
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
     
     
    <style>
    img {
        display: block;
        margin: auto;
    }
    </style>
     
      
   </head>
   
   <body bgcolor = "#FFFFFF">
     <br> </br>
     <br> </br>
     <img src="sets/logo.png" alt="logo" style="width:50%">

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="login-page">
  <div class="form">
    <form class="register-form" action = "" method = "post">
      
      <input type = "text" name = "Reg_username" class = "box" placeholder = "Username" pattern=".{0}|.{3,}" required title="3 characters minimum">
      <input type = "password" name = "Reg_password" id = "Reg_password" class = "box" placeholder = "Password" pattern=".{0}|.{5,}" required title="5 characters minimum">
      <input type = "password" name = "Reg_password2" id = "Reg_password2" class = "box" placeholder = "Confirm Password" pattern=".{0}|.{5,}" oninput="check(this) required title="5 characters minimum">
      <input type = "text" name = "fullname" class = "box" placeholder="Full Name" required/>
      <input type="email" name="email" class = "box" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="E-mail address" required>

      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form action="" method = "post" class="login-form">
      <input type = "text" name = "username" class = "box" placeholder = "Username" required />
            
      <input type = "password" name = "password" class = "box" placeholder = "Password" pattern=".{0}|.{5,}" required title="5 characters minimum">
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
    <p class="message" style="color:red;"><?php echo $error; ?></p>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script >
       $('.message a').click(function(){
   	   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });                                                    
                                                                      
    </script>                       
   <script type="text/javascript" src="js/verifypassword.js"></script>
   </body>
</html>