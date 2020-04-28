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
        unset($_SESSION['Email']);
        header("location: singup.php");
  }
?>
<title>SJU Go HOME page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#home" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="orderNow.php" class="w3-bar-item w3-button">Order Now</a>
        <a href="aboutus.php"  class="w3-bar-item w3-button">About Us</a>
        <a href="FAQs.php"     class="w3-bar-item w3-button">FAQs</a>
	 <a href="viewCart.php"     class="w3-bar-item w3-button">My Cart</a>
	<a href="logout.php"       class="w3-bar-item w3-button"> Log Out </a> 	
<a class ="w3-bar-item w3-button"> <?php echo $FName  ?> </a>

      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="/img/Buildings/sjuCute.png" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>WELCOME TO SJU Go</b></span> <span class="w3-xxlarge w3-text-black"><span class="w3-padding w3-white w3-opacity-min">enjoy.</span></h1>
    </div>

    <!-- to add a favicon? -->
    <link rel="shortcut icon" type="image/jpg" href="/img/favicon.png" />

  </header>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">

    <!-- About Section -->
    <div class="w3-container w3-padding-32" id="about">
      <h2 align="center" style="color:maroon;"><b> About SJU Go</b> </h2>
      <p style="color:maroon;font-size:160%;text-align:center;"> Welcome to SJU Go! This website allows for any Saint Joseph University
        student to be able to one stop shop <br> all right before your eyes. SJU Go
        delivers to all on-campus educational buildings during the hours of 8 am and 5 pm.
        Students will be able to purchase items from any store or food service in The Campion Center.</font> <br>
      </p>
    </div>

    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="projects">
      <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="color:maroon;"> <b> Where we deliver to...</b> </h2>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Barbelin Hall</div>
          <img src="/img/Buildings/barbelin_1.jpg" alt="Barbelin" style="width:100%""height:100%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Bellarmine Hall</div>
          <img src="/img/Buildings/bellarmin_hall.jpg" alt="House" style= "width: 100%" >
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Connely Hall</div>
          <img src="/img/Buildings/connHall.jpg" alt="House" style="width:100%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Merion Hall</div>
          <img src="/img/Buildings/merHall.jpg" alt="House" style="width:100%">
        </div>
      </div>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Mandeville Hall</div>
          <img src="/img/Buildings/MVhall.jpg" alt="House" style="width:99%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">O'pake Rec Center</div>
          <img src="/img/Buildings/Opake.jpg" alt="House" style="width:99%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Science Center</div>
          <img src="/img/Buildings/science.jpg" alt="House" style="width:99%">
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Post learning commons & Drexel Library</div>
          <img src="/img/Buildings/lib.jpg" alt="House" style="width:99%">
        </div>
      </div>
    </div>

    <!-- About the food Section -->
    <div class="w3-container w3-padding-32" id="about">
      <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="color:maroon;"><b> Where to choose from</b></h2>
      <p style="color:maroon;">With SJU Go you can order your favorite foods from  all campion center facilities, these include....
      </p>
    </div>

    <div class="w3-row-padding w3-grayscale">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="/img/foodplaces/hawkwrap.png" alt="hawkwrap" style="width:100%">
        <h3>Hawk Wraps</h3>
        <p class="w3-opacity">SJU Famous Wraps & Fried Food</p>
        <p> Hours of Operation: <br> Mon - Thurs: 11:00 AM - 11:00 PM <br>
          Fri: 11:00 AM - 7:00 PM <br> Sat - Sun: 5:00 PM-11:00 PM</p>
        <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href = '/HawkWraps.php';">Order Now</button></p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="/img/foodplaces/pod.png" alt="P.O.D" style="width:100%">
        <h3>P.O.D Market</h3>
        <p class="w3-opacity">Convenient Store</p>
        <p> Hours of Operation: <br> Mon - Fri: 11:00 AM - 11:00 PM <br>
          Sat - Sun: 4:00 PM-11:00 PM</p>
        <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href = '/POD.php';">Order Now</button></p>
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
        <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href = '/saxbys.php';">Order Now</button></p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="/img/foodplaces/yorkstreet.png" alt="YorkStreet Market" style="width:100%">
        <h3>York Street Market</h3>
        <p class="w3-opacity">Deli</p>
        <p> Hours of Operation: <br> Mon - Thurs: 11:00 AM - 11:00 PM <br>
          Fri: 11:00 AM - 7:00 PM <br> Sat - Sun: 5:00 PM-11:00 PM</p>
        <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href = '/YorkStreet.php';">Order Now</button></p>
      </div>
    </div>

      <!-- Contact Section -->
    <div align="center"  class="w3-container w3-padding-32" id="contact">
      <h3 align="center"  class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact Us</h3>
      <p align="center">YOU are our #1 Priority. Lets get in touch and talk about what could make your SJUGo experince even better!</p>
      <form action="/contactform.html" target="_blank">
        <button class="w3-button w3-black w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>

    <!-- End page content -->
  </div>


  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Needs some extra cash?  <a href="http://sjugo.com//signup2.php" title="W3.CSS"
 target="_blank" class="w3-hover-text-green">Join our team!</a></p>
  </footer>
</body>

</html>


