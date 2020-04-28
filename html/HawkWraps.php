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
  <title>HAWK WRAPS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="/homepage.php" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="/orderNow.php" class="w3-bar-item w3-button">Order Now</a>
        <a href="/aboutus.php" class="w3-bar-item w3-button">About Us</a>
	<a href="/viewCart.php"     class="w3-bar-item w3-button">My Cart</a>
       <a href="/FAQs.html" class="w3-bar-item w3-button">FAQs</a>
	        <a href="logout.php"       class="w3-bar-item w3-button"> Log Out </a>  


      </div>
    </div>
  </div>



  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">

</head>

<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Float four columns side by side */
  .column {
    float: left;
    width: 25%;
    padding: 0 10px;
  }

  /* Remove extra left and right margins, due to padding */
  .row {
    margin: 0 -5px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive columns */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
  }

  /* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
    text-align: center;
    font-family: arial;
  }

  .price {
    color: grey;
    font-size: 22px;
  }

  .card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  .card button:hover {
    opacity: 0.7;
  }
</style>

<body>
  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="/img/foodplaces/hwrap.jpg" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Hawk Wrap Options</b></span> <span class="w3-xxlarge w3-text-black"><span class="w3-padding w3-white w3-opacity-min">Below</span></h1>
    </div>
  </header>

  <h1 align="center" style="color:maroon;">Hawk Wrap Options</h1>
  <p style="color:maroon;font-size:160%;text-align:center;">Below you will find an assortmant of our famous chicken wraps to choose from</p>


 <!-- About the food Section -->
<?php include 'index.php';?>
<div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'HawkWrap' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
  <div class="column">
    <div class="card">
      <img src="/img/foodplaces/hwrapfood/hawkwrap.jpg" alt="image" style="width:100%">
      <h1>Hawk Wrap</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'GrilledChickenCesarWrap' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
  <div class="column">
    <div class="card">
      <img src="/img/foodplaces/hwrapfood/chickceaser.jpg" alt="image" style="width:100%">
      <h1>Grilled Chicken Ceaser Wrap</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
  <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

  <?php
  $result = $db->query("SELECT * FROM products WHERE products.name = 'BuffaloChickenTenderWrap' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
  ?>
  <div class="column">
    <div class="card">
      <img src="/img/foodplaces/hwrapfood/buffchick.jpg" alt="image" style="width:100%">
      <h1>Buffalo chicken tender wrap</h1>
         <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
  <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
</div>


<!-- Footer -->
 <footer class="w3-center-align w3-black w3-padding-16">
<p align = "center" > <a href="http://sjugo.com/POD.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">POD Market</a></p>
   <p align="center"  >  <a href="http://sjugo.com/saxbys.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">Saxbys</a></p>
   <p align="center" >  <a href="http://sjugo.com/YorkStreet.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">York Street</a></p>
   <p align="center">  <a href="http://sjugo.com/GrilleWorks.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">GrilleWorks</a></p>

 </footer>
</body>

</html>

