<!DOCTYPE html>
include 'server.php'; 
<html>
<head>
      	<title> Registration system PHP  MySQL</title>
        <meta charset="UTF-8">
        <meta name="veiwpoint" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

  <div class="w3-top">
        <div class= "w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="homepage.php" class="w3-bar-item w3-button"><b>SJU</b>Go</a>
<div class="w3-right w3-hide-small">
<a href="orderNow.html" class="w3-bar-item w3-button">Order Now</a>
<a href="aboutus.html" class="w3-bar-item w3-button">About Us </a>
<a href="login.php" class="w3-bar-item w3-button">Log In</a>
<a href="singup.php" class="w3-bar-item w3-button">Sign Up </a>
<a href="FAQs.html" class="w3-bar-item w3-button">FAQs</a>
        </div>
     </div>


<!-- Page content -->



<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="/">Go back</a>';
?>
</body>
</html>
