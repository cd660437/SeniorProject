<!DOCTYPE html>
<html>
<?php 
include 'server.php'; 
  session_start(); 

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
  <title>P.O.D Market</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="index.html" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="/orderNow.php" class="w3-bar-item w3-button">Order Now</a>
        <a href="/aboutus.php" class="w3-bar-item w3-button">About Us</a>
	<a href="/viewCart.php"     class="w3-bar-item w3-button">My Cart</a>
        <a href="/FAQs.html" class="w3-bar-item w3-button">FAQs</a>
	 <a href="logout.php"       class="w3-bar-item w3-button"> Log Out </a>  

      </div>
    </div>


<style>
.dropbtn {
  background-color: #CCC5C5 ;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

<div class="dropdown" style="float:left;">
  <button class="dropbtn">Search </button>
  <div class="dropdown-content" style="color:maroon;font-size:160%;left:0;">
    <a href="#Candy">Candy</a>
    <a href="#Drinks">Drinks</a>
    <a href="#Dairy">Dairy</a>
    <a href="#Shelf">Shelf Items</a>
    <a href="#Frozen">Frozen</a>
    <a href="#HNW">Health & Wellness</a>
    <a href="#Supplies">School Supplies</a>
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
    padding: 10px;
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
    <img class="w3-image" src=" /img/foodplaces/podpic.jpeg" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>P.O.D Market Options</b></span> <span class="w3-xxlarge w3-text-black"><span class="w3-padding w3-white w3-opacity-min">Below</span></h1>
    </div>
  </header>

  <h1 align="center" style="color:maroon;">P.O.D Options</h1>
  <p style="color:maroon;font-size:160%;text-align:center;">Below you will find a large selection of snacks,
     beverages, microwavable foods and more to choose from</p>







<?php include 'index.php';?>



<div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'nestlecrunchbar' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/Crunch.png" alt="image" style="width:100%">
      <h1>Nestle Crunch Bars</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'DoveDarkChocolate' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/Dove.png" alt="image" style="width:100%">
      <h1>Dove Dark Chocolate</h1>
      <p class="price">$<?php echo $row["price"]; ?> </p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'hersheykisses' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/Hearshey Kissed.png" alt="image" style="width:100%">
      <h1>Hershey Kisses</h1>
      <p class="price">$<?php echo $row["price"];?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'hersheyvarietybag' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/HershVar.png" alt="image" style="width:100%">
      <h1>Hershey Variety Bag</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
</div>



<div class = "row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'reesepieces' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/Reese.png" alt="image" style="width:100%">
      <h1>Reese Pieces</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'twix' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/Twix.png" alt="image" style="width:100%">
      <h1>Twix</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'sourpatchkids' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/sourpatch.png" alt="image" style="width:100%">
      <h1>Sour Patch</h1>
      <p class="price">$<?php echo $row["price"];?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'starburstminis' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Candies/starburstmini.png" alt="image" style="width:100%">
      <h1>Starburst Mini</h1>
      <p class="price">$<?php echo $row["price"];?> </p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
 </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
</div>
<div class = "row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'pepsi' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Drinks/pepsi.jpg" alt="image" style="width:100%">
      <h1>Pepsi</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
 </div>
  </div>
 <?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>


<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'dietpepsi' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
 ?>
  <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Drinks/dietpepsi.jpg" alt="image" style="width:100%">
      <h1>Diet Pepsi</h1>
      <p class="price">$<?php echo $row["price"];?> </p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
     <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>


<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'sprite' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?>
  <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Drinks/sprite.jpg" alt="image" style="width:100%">
      <h1> Sprite</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
     <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>




<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'orangecrush' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
 <div class="column">
    <div class="card">
      <img src="/img/foodplaces/pod/Drinks/fanta.jpg" alt="image" style="width:100%">
      <h1> Orange Crush</h1>
      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
</div>

  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'orangejuice' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Drinks/OJ.jpg" alt="image" style="width:100%">
       <h1> Orange Juice </h1> 
         <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>




<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'cranberryjuice' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Drinks/cranberry.jpg" alt="image" style="width:100%">
        <h1> Cranberry Juice</h1>
               <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>



<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'smartwater' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Drinks/smartwater.jpg" alt="image" style="width:100%">
        <h1>16 Oz Smart Water</h1>
         <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>



<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'rootbeer' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Drinks/Rbeer.jpg" alt="image" style="width:100%">
        <h1>16 Oz RootBeer</h1>
         <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
  </div>

<p id="Dairy">Dairy:</p>
  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'milk' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/dairy/milk.jpg" alt="image" style="width:100%">
        <h1>Milk</h1>
           <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'chocolatemilk' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/dairy/choc.jpg" alt="image" style="width:100%">
        <h1>Chocolate Milk</h1>
               <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'eggs' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/dairy/eggs.jpg" alt="image" style="width:100%">
        <h1>1 Dozen Eggs</h1>
               <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
  </div>

  <p id="Shelf">Shelf Items:</p>
  <div class="row">

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'coolranchdoritos' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/coolRanch.jpg" alt="image" style="width:100%">
        <h1>Cool Ranch Doritos</h1>
                 <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
 
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'nachocheesedoritos' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 


    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/nachochz.jpg" alt="image" style="width:100%">
        <h1>Nacho Cheese Doritos</h1>
                <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>	 <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'cheetos' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/Cheetos.jpg" alt="image" style="width:100%">
        <h1>Cheetos</h1>
       <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>      
      <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
 </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'originallays' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 


    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/originalLAYS.jpg" alt="image" style="width:100%">
        <h1>Original Lays</h1>
                      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>
    </div>
 

 <div class="row"> 
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'originalpringles' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

  <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/pringles.jpg" alt="image" style="width:100%">
        <h1>Original Pringles</h1>
                      <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    


<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'sourcream&onionpringles' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/sourCreamPring.jpg" alt="image" style="width:100%">
        <h1>Sour Cream & Onion Pringles</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'cheddarcheesepringles' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/cheddarPRING.jpg" alt="image" style="width:100%">
        <h1>Cheddar Cheese Pringles</h1>
          <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'cheddarcombos' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/combos.jpeg" alt="image" style="width:100%">
        <h1>Cheddar Combos</h1>
              <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    
</div>



 <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'popsecret' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/popsecret.jpg" alt="image" style="width:100%">
        <h1>Popseceret</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?> 
  

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'tostitos' Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/tostitos.jpeg" alt="image" style="width:100%">
        <h1>Tostitos</h1>
               <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'kraftmanncheese'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/kraft.jpg" alt="image" style="width:100%">
        <h1>Kraft Mac & Cheese</h1>
          <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'krafteasymac'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/EasyMac.jpg" alt="image" style="width:100%">
        <h1>Kraft Easy Mac</h1>
         <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    


  </div>
  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'barillaelbowpasta'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/elbow.jpg" alt="image" style="width:100%">
        <h1>Barilla Elbow Pasta</h1>
             <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'barillarotini'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/rotini.png" alt="image" style="width:100%">
        <h1>Barilla Rotini Pasta</h1>
             <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'barillashells'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/shells.png" alt="image" style="width:100%">
        <h1>Barilla Shells Pasta</h1>
             <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'barillapenne'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/PennePAst.jpg" alt="image" style="width:100%">
        <h1> Barilla Penne Pasta</h1>
             <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

 </div>
  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'campbellscreamytomato'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/TomSoup.jpg" alt="image" style="width:100%">
        <h1>Campbell's Creamy Tomato </h1>
        <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'campbellschickennoodle'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 


    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/chickennoodle.jpeg" alt="image" style="width:100%">
        <h1>Campbell's Chicken Noodle</h1>
                 <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'campbellscreamofmushroom'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/MushSoup.jpg" alt="image" style="width:100%">
        <h1>Campbell's Cream of Mushroom</h1>
                 <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'campbellscreamofchicken'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/shelfFood/creamofchicken.jpeg" alt="image" style="width:100%">
        <h1>Campbell's Cream of Chicken</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>
      <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    
  </div>

<p id="Frozen">Frozen:</p>
  <div class="row">

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'stouffersmacncheese'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/mac.jpg" alt="image" style="width:100%">
        <h1>Stouffer's Mac & Cheese</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>
     
     <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'stoufferspasta&chicken'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/pasta&chicken.jpg" alt="image" style="width:100%">
        <h1>Stouffer's Pasta & Chicken</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

          <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'digornofrozenpizza'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/digorno.jpg" alt="image" style="width:100%">
        <h1>Digorno Frozen Pizza</h1>

        <p class="price">$<?php echo $row["price"]; ?></p>
          <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'mixedfrozenvegetables'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/mixedVeg.jpg" alt="image" style="width:100%">
        <h1>Mixed Frozen Vegetables</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

           <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

 </div>
  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'ben&jerryschocolatechipcookiedough'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/chocchipcook.jpg" alt="image" style="width:100%">
        <h1>Ben & Jerry's Chocolate Chip Cookie Dough</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'ben&jerryschubbyhubby'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/chubbyhubby.png" alt="image" style="width:100%">
        <h1>Ben & Jerry's Chubby Hubby</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

                 <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'ben&jerryshalfbaked'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/halfbaked.png" alt="image" style="width:100%">
        <h1>Ben & Jerry's Half Baked</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'ben&jerrysstrawberrycheesecake'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Frozen/strawBj.jpg" alt="image" style="width:100%">
        <h1>Ben & Jerry's Strawberry Cheesecake</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
      <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>

         </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

</div>
  <p id="HNW">Health & Wellness:</p>
  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'allegra'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
  
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/care/alegra.jpg" alt="image" style="width:100%">
        <h1>Allegra</h1>
	<p class="price">$<?php echo $row["price"]; ?></p>
       <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
 </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    	     
</div>    
<div class="column">
      <div class="card">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'tylonal'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
        <img src="/img/foodplaces/pod/care/tylonal.jpg" alt="image" style="width:100%">
        <h1>Tylonal </h1>
             <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'dayquil&nyquil'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
   
 <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/care/daynight.jpg" alt="image" style="width:100%">
        <h1>DayQuil & NyQuil</h1>
             <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'tumstravelsize'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
  

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/care/tums.jpg" alt="image" style="width:100%">
        <h1>Tums Travel Size</h1>
            <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    
</div>


<div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'firstaidkit'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/care/bandaids.jpg" alt="image" style="width:100%">
        <h1>First Aid Kit</h1>
            <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'dovedryshampoo'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/care/dryshampoo.jpg" alt="image" style="width:100%">
        <h1>Dove Dry Shampoo</h1>
             <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'dovebodywash'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/care/dovebody.jpeg" alt="image" style="width:100%">
        <h1>Dove Body Wash</h1>
             <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'toothbrush&toothpaste'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/care/toothbrush.jpeg" alt="image" style="width:100%">
        <h1>Toothbrush & Toothpaste</h1>
            <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    


  </div>
  <p id="Supplies">School Supplies:</p>
  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = '72ticonderogapencils'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Pencils.png" alt="OfficeSupply" style="width:100%">
        <h1>72 Ticonderoga Pencils</h1>
                  <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = '60bicblackpens'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Pens.png" alt="OfficeSupply" style="width:100%">
        <h1>60 Bic Black Pens</h1>
                  <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = '12ctsharpies'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Sharpies.png" alt="OfficeSupply" style="width:100%">
        <h1>12 ct Sharpies</h1>
                  <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = '24ctbichighlighters'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Highlighter.png" alt="OfficeSupply" style="width:100%">
        <h1>24 ct Bic Highlighters</h1>
       
                  <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

</div>
  <div class="row">
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = '2packscissors'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Scissors.png" alt="OfficeSupply" style="width:100%">
        <h1>2 Pack Scissors</h1>
         
            <p class="price">$<?php echo $row["price"]; ?></p>
                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    


<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'onetouchstapler'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Stapler.png" alt="OfficeSupply" style="width:100%">
        <h1>One Touch Stapler</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    


  
<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'post-itnotes'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Stickies.png" alt="OfficeSupply" style="width:100%">
        <h1>Post-it Notes</h1>
                      <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'officefolders'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Folders.png" alt="OfficeSupply" style="width:100%">
        <h1>Office Folders</h1>
  <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

 </div>
  <div class="row">
        <?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'binderclip'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Clip .png" alt="OfficeSupply" style="width:100%">
        <h1>Binder Clip</h1>
        <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?> 

    <?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'paperclipkit'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/paperClips.png" alt="OfficeSupply" style="width:100%">
        <h1>Paperclip Kit</h1>
            <p class="price">$<?php echo $row["price"]; ?></p>

         <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'ruler'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 
    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/Ruler.png" alt="OfficeSupply" style="width:100%">
        <h1>Ruler</h1>
                 <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
           <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<?php
 $result = $db->query("SELECT * FROM products WHERE products.name = 'indexcards'  Limit 1"); 
   if($result->num_rows > 0){  
      while($row = $result->fetch_assoc()){ 
?> 

    <div class="column">
      <div class="card">
        <img src="/img/foodplaces/pod/Supplies/IndexCards.png" alt="OfficeSupply" style="width:100%">
        <h1>Index Cards</h1>
          <p class="price">$<?php echo $row["price"]; ?></p>

                  <p class="card-text"><?php echo $row["description"]; ?></p>
            <p><button>        <a href="cartAction.php?action=addToCart&id= <?php echo $row["id"]; ?>" class="btn btn-primary">Add to cart </a></button></p>
    </div>
  </div>
<?php } }else{ ?>
   <p>Product(s) not found.....</p>  
   <?php } ?>    

<!-- Footer -->
 <footer class="w3-center-align w3-black w3-padding-16">
<p background-color: black > . </p>
<p background-color: black > . </p>

   <p align="center" >  <a href="http://sjugo.com/HawkWraps.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">Hawk Wraps</a></p>
   <p align="center"  >  <a href="http://sjugo.com/saxbys.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">Saxbys</a></p>
   <p align="center" >  <a href="http://sjugo.com/YorkStreet.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">York Street</a></p>
   <p align="center">  <a href="http://sjugo.com/GrilleWorks.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">GrilleWorks</a></p>

 </footer>

  </body>
  </html>
