
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

<title>Join Our Team </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#home" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="orderNow.html" class="w3-bar-item w3-button">Order Now</a>
        <a href="aboutus.html"  class="w3-bar-item w3-button">About Us</a>
        <a href="login.php"  class="w3-bar-item w3-button">Log In</a>
        <a href="singup.php"    class="w3-bar-item w3-button">Sign Up</a>
        <a href="FAQs.html"     class="w3-bar-item w3-button">FAQs</a>


      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="/img/Buildings/sjuCute.png" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>JOIN OUR TEAM !</b></span> <span class="w3-xxlarge w3-text-black"></h1>
    </div>
  </header>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">

    <!-- About Section -->
    <div class="w3-container w3-padding-32" id="about">
      <h2 align="center" style="color:maroon;"><b> Become one of us!</b> </h2>
      <p style="color:maroon;font-size:130%;text-align:center;"> Hello there! Here at SJUGo we believe in a future where students aren't running to Campion and wasting time waiting in lines for whatever they are craving. </font> <br>
      </p>
<p style="color:maroon;font-size:130%;text-align:center;"> We will be assembling a team of big thinkers and students who take pride in being a HAWK. This will be a work study job for students who would be interested in picking up deliveries and taking them to specific buildings around campus. If this sounds like an easy way for some extra cash fill out and submit the form below. One of our team members will reach out to you following submission.  </font> <br>
</p>
 </div>

    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Delivery Application</h3>
      <p>Please fill out and submit the following application in order to be reveiwed for hire.</p>
      <form action="/.php" target="_blank">
        <input class="w3-input w3-border" type="text" placeholder="First Name" required name="Name">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Last Name" required name="Name">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
        <button class="w3-button w3-black w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> Submit Application
        </button>
      </form>
    </div>


  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <a href="http://sjugo.com/index.html" title="W3.CSS"  target="_blank" class="w3-hover-text-green">Home</a></p>
  </footer>
</body>
</html>
