<?php 
include 'server.php';  
  if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: singup.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header("location: singup.php");
  }
?>

<!DOCTYPE html>
<html>
<title>FAQs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.html" class="w3-bar-item w3-button"><b>SJU</b> Go</a>

    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="orderNow.php" class="w3-bar-item w3-button">Order Now</a>
      <a href="aboutus.php" class="w3-bar-item w3-button">About Us</a>
      <a href="FAQs.php" class="w3-bar-item w3-button">FAQs</a>
      <a href="viewCart.php"class="w3-bar-item w3-button">My Cart</a>

    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/img/Buildings/sjuCute.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>FAQs</b></span> </h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h2 align="center" style="color:maroon;">  FAQs </h2>
    <p style= "color:maroon;font-size:160%;text-align:center;" > stuff <br>
    </p>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
        <a href="http://sjugo.com/index.html" title="W3.CSS"  target="_blank" class$
  </footer>

  </body>
  </html>

