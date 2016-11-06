<?php
include('session.php');
?>

<html>

<body bgcolor = "#FFFFFF">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="main-menu">
    <div class="form">

        <p class="message" style="color:black; font-size:medium ">None of this works yet so don't click it otherwise i'll find u</p>

        <br> </br>

        <form class="changepassword" action = "" method = "post">
            <button>Change Password</button>
        </form>

        <form class="stats" action = "" method = "post">
            <button>View Stats</button>
        </form>

        <form class="profilepic" action = "" method = "post">
            <button>Profile Picture</button>
        </form>

        <form class="back" action = "main.php" method = "post">
            <button>Back</button>
        </form>
    </div>
</div>
</body>
</html>