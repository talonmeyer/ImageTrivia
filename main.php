<?php
   include('session.php');
?>

<html>

<body bgcolor = "#FFFFFF">

<head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <h1>Welcome, <?php echo $login_session; ?> </h1>
</head>
<div class="main-menu">
    <div class="form">
        <form class="new-game" action = "newgame.php" method = "post">
            <button>New Game</button>
        </form>
        <form class="highscores" action = "highscores.php" method = "post">
            <button>Highscores</button>
        </form>
        <form class="account" action = "account.php" method = "post">
            <button>My Account</button>
        </form>
        <form class="about" action = "about.php" method = "post">
            <button>About</button>
        </form>
        <form class="logout" action = "logout.php" method = "post">
            <button>Logout</button>
        </form>
        <p class="message" style="color:red;"><?php echo $error; ?></p>
    </div>
</div>
</body>
</html>