<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Image Trivia! </title>
   </head>
   
   <body>
      <h1>Welcome, <?php echo $login_session; ?></h1> 
            <br></br>
      <br></br>

      <h2><a href = "newgame.php">Start New Game</a></h2>
      <h2><a href = "highscores.php">Highscores</a></h2>
      <h2><a href = "sendemail.php">send test email</a></h2>
      <h2><a href = "about.php">About</a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>