<?php
session_start();
if(!isset($_COOKIE['login']))
{
  $_SESSION['loginText'] = "U moet eerst inloggen.";
  header('location: login-form.php' );
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1 >Dashboard</h1>

    <a  href="logout.php">uitloggen</a>

  </body>
</html>