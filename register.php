<?php
	 include("config.php");
   session_start();
print_r($_SESSION);

     $result = mysqli_query($db,'SELECT (Max(id)+1) FROM User');
     $row = mysqli_fetch_array($result,MYSQLI_NUM);
	 echo $row[0];


   //if($_SERVER["REQUEST_METHOD"] == "POST") {}
     
    echo "Name: " . $_SESSION['fullname'] . ".<br>";
	echo "Email:  " . $_SESSION['email'] . ".<br>";
	echo "User: " . $_SESSION['Reg_username'] . ".<br>";
	echo "Password: " . $_SESSION['Reg_password'] . ".<br>";


     
     
     
     
     
   
    
   /*
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     //get new id number
     $newid = "SELECT (Max(id)+1) FROM User";
     
      //$result = mysqli_query($db,$newid);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      //$count = mysqli_num_rows($result);
	  echo result$
     
     $sql = "INSERT INTO User (id,username,passcode,name,email)
VALUES (''$newid'', 'gnu', 'newpass', 'name', 'email@email.com')";
     
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
	//if count > 1 then tell them already registered
        
        
         
         header("location: main.php");
      }else {
         $error = "Your register Name or Password is invalid";
      }
   }
   
   */
        
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
    <form class="back-form" action = "login.php" method = "post">
      <button>Back</button>
    </form>            
    <p class="message" style="color:red;"><?php echo $error; ?></p>
  </div>
</div>

   </body>
</html>