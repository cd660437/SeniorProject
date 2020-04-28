<!DOCTYPE html>
include 'server.php'; 
<html>
<head>
<title>Sign Up Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.php" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="orderNow.php" class="w3-bar-item w3-button">Order Now</a>
      <a href="aboutus.html" class="w3-bar-item w3-button">About Us</a>
      <a href="login.php" class="w3-bar-item w3-button">Log In</a>
      <a href="singup.php" class="w3-bar-item w3-button">Sign Up</a>
      <a href="FAQs.html" class="w3-bar-item w3-button">FAQs</a>


    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="img/Buildings/sjuCute.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Sign Up For</b></span> <span class="w3-xxlarge w3-text-black"><span class="w3-padding w3-white w3-opacity-min">SJUGo</span></h1>
  </div>
</header>



<style="border:25px; borde-style:solid; border-color:#0E0E0E; padding: 25px;">
<center>
<div class="w3-container w3-padding-32" id="contact">
<h3 class="w3-large w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Sign Up:  </b></span></h3>
<h5> Please enter the following information to create an account </h5>
  <form method="post" action="homepage.php">
  	<?php include('errors.php'); ?>
  	<input class="w3-input w3-section w3-border"  type="text" placeholder="First Name"  name="first_name" value="<?php echo $first_name; ?>">

        <input class="w3-input w3-section w3-border"  type="text" placeholder="Last Name" name="last_name" value="<?php echo $last_name; ?>">

  	<input class="w3-input w3-section w3-border"  type="text" placeholder="Phone Number"  name="phone" value="<?php echo $phone; ?>">

  	<input class="w3-input w3-section w3-border" type="email" placeholder="E-mail"  name="email" value="<?php echo $email; ?>">
  	<input class="w3-input w3-section w3-border" type="password" placeholder="Password" name="password_1">
 
  	<input class="w3-input w3-section w3-border" type="password" placeholder="Confirm Password"  name="password_2">
   
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
 </form>
  	<p>Already a member? <a href="login.php">Sign in</a></p>
        <p>Already a delivery partner? <a href="login2.php">Sign in</a></p>
</body>
</center>
</html>
      <div>

 
</div>
      </div>
      </form>

