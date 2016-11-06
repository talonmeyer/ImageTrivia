<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: index.php");
   }
?>

<html>

<body bgcolor = "#FFFFFF">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

</div>
</body>
</html>
