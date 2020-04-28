<?php
 include 'server.php';
 ?>
<!DOCTYPE html>
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
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/img/Buildings/sjuCute.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Log In</b></span></h1>  </div>
</header>

<!-- Page content -->

<style="border:25px; borde-style:solid; border-color:#0E0E0E; padding: 25px;">
<center>
<div class="w3-container w3-padding-32" id="contact">
 <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Log In </h3>
<h5> Please enter the following information to continue shopping: </h5>




 <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
        <input class="w3-input w3-section w3-border" type="text" placeholder="E-mail" required name="email">
<input class="w3-input w3-section w3-border"  type="password"  placeholder="Password" required name="password" value="Password" id="myInput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password

  	<i class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

	<p>
  		Not yet a member? <a href="singup.php">Sign up</a>
  	</p>
   
</center>
</body>
</html>
