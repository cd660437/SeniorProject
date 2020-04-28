<!DOCTYPE html>
<html>
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

<head>
<title>About Us HEY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="homepage.php" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="orderNow.php" class="w3-bar-item w3-button">Order Now</a>
      <a href="aboutus.php" class="w3-bar-item w3-button">About Us</a>
      <a href="FAQs.php" class="w3-bar-item w3-button">FAQs</a>
      <a href="/viewCart.php" class="w3-bar-item w3-button">My Cart</a>

    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/img/Buildings/sjuCute.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>About Us</b></span> </h1>
    <h2 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b> SJU GO Senior Project 2020. Founded and created by <br> Caitlyn Dougherty and Ryan Granahan.</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h2>

  </div>
</header>

