<?php
   define('DB_SERVER', 'mysql.s464.sureserver.com:3306');
   define('DB_USERNAME', 'access');
   define('DB_PASSWORD', 'mysqlphpaccess');
   define('DB_DATABASE', 'talon_images');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>