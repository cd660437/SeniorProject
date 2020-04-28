<!DOCTYPE html>
<html>
<head>
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
<title>Order From</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/homepage.php" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/orderNow.php" class="w3-bar-item w3-button">Order Now</a>
      <a href="/aboutus.php" class="w3-bar-item w3-button">About Us</a>
      <a href="/FAQs.php" class="w3-bar-item w3-button">FAQs</a>
      <a href="/viewCart.php"class="w3-bar-item w3-button">My Cart</a>
      <a href="logout.php"       class="w3-bar-item w3-button"> Log Out </a>  

    </div>
  </div>
</div>



<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/img/Buildings/sjuCute.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>ORDER NOW</b></span> </h1>
  </div>
</header>



<!-- Page content -->

<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- About the food Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16" style= "color:maroon;">Where to choose from</h2>
    <p style= "color:maroon;">With SJU Go you can order your favorite foods at all campion center facilities, these include....
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/img/foodplaces/hawkwrap.png" alt="hawkwrap" style="width:100%">
      <h3>Hawk Wraps</h3>
      <p class="w3-opacity">SJU Famous Wraps & Fried Food</p>
      <p> Hours of Operation: <br> Mon - Thurs: 11:00 AM - 11:00 PM <br>
      Fri: 11:00 AM - 7:00 PM <br> Sat - Sun: 5:00 PM-11:00 PM</p>
      <p><button class="w3-button w3-light-grey w3-block"onclick="window.location.href = '/HawkWraps.php';">Order Now</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/img/foodplaces/pod.png" alt="P.O.D" style="width:100%">
      <h3>P.O.D Market</h3>
      <p class="w3-opacity">Convenient Store</p>
      <p> Hours of Operation: <br> Mon - Fri: 11:00 AM - 11:00 PM <br>
      Sat - Sun: 4:00 PM-11:00 PM</p>
       <p><button class="w3-button w3-light-grey w3-block"onclick="window.location.href = '/POD.php';">Order Now</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/img/foodplaces/grillework.png" alt="grilleworks" style="width:100%">
      <h3>Grille Works</h3>
      <p class="w3-opacity">Grilled & Fried Food</p>
      <p> Hours of Operation: <br> Mon - Thurs: 11:00 AM - 11:00 PM <br>
      Fri: 11:00 AM - 7:00 PM <br> Sat - Sun: 5:00 PM-11:00 PM</p>
       <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href = '/GrilleWorks.php';">Order Now</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/img/foodplaces/saxby.png" alt="Saxbys" style="width:100%">
      <h3>Saxbys</h3>
      <p class="w3-opacity">Coffee</p>
      <p> Hours of Operation: <br> Mon - Thurs: 8:00 AM - 8:00 PM <br>
      Fri: 8:00 AM - 2:00 PM </p>
       <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href = '/saxbys.php';" >Order Now</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/img/foodplaces/yorkstreet.png" alt="YorkStreet Market" style="width:100%">
      <h3>York Street Market</h3>
      <p class="w3-opacity">Deli</p>
      <p> Hours of Operation: <br> Mon - Thurs: 11:00 AM - 11:00 PM <br>
      Fri: 11:00 AM - 7:00 PM <br> Sat - Sun: 5:00 PM-11:00 PM</p>
        <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href = '/YorkStreet.php';" >Order Now</button></p>
    </div>
  </div>
    <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Needs some extra cash?  <a href="http://sjugo.com/signup2.php" title="W3.CSS"
 target="_blank" class="w3-hover-text-green">Join our team!</a></p>
  </footer>

  </body>
  </html>

