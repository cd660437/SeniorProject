<?php
$e = 'rg667388@sju.edu';
// Include file storing session variable
include 'server.php'; 
// Include auto load file for Amazon SDK 
require '/var/www/html/vendor/autoload.php';
  if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: singup.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header("location: singup.php");
  }
 if(isset($_SESSION['email']) ) {
	$email = $_SESSION['email'];
 }
?>
<?php
// Include the database config file 
require_once 'dbConfig.php'; 
// Include file storing session variable
//include 'server.php';
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// If the cart is empty, redirect to the products page 
if($cart->total_items() <= 0){ 
    header("Location: index.php"); 
} 
// Get posted data from session 
$postData = !empty($_SESSION['postData'])?$_SESSION['postData']:array(); 
unset($_SESSION['postData']); 
 
// Get status message from session 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $statusMsgType = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 
?>

<!DOCTYPE html>
<head>
<html lang="en">
<meta charset="utf-8">
<title>Checkout </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


<style>
body {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

* {
  box-sizing: border-box;
}
.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 275px;
}


.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
 flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #d8ede2:
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #989e9b;
}


span.price {
  float: right;
  color: grey;
}


.checkout {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.checkout td, .checkout  th {
  border: 1px solid #ddd;
  padding: 8px;
}

.checkout tr:nth-child(even){background-color: #f2f2f2;}

.checkout tr:hover {background-color: #ddd;}

 .checkout  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #912323;
  color: white;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

</head>
<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="homepage.php" class="w3-bar-item w3-button"><b>SJU</b> Go</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="orderNow.php" class="w3-bar-item w3-button">Back to Order Page</a>
        <a href="aboutus.php" class="w3-bar-item w3-button">About Us</a>
        <a href="viewCart.php" class="w3-bar-item w3-button">Back to Cart</a>
        <a href="FAQs.php" class="w3-bar-item w3-button">FAQs</a>
      </div>
    </div>
  </div>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
 <div  class="container" style="background-color: #f2f2f2; width:1550px;">
<h5> - </h5>
<h1 style="  font-weight: bold; text-align:center" >Checkout</h1>
</div>

<div class="container">
    <div class="col-12">
        <div class="checkout">
            <div class="row">
                <?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                </div>
		<?php } ?>

<div class="col-50">
<div class="container">
<div class="container" style="background-color: #bf3d3d;width:800px;">
      <h3><b>My Cart</b> 
 <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span>  </h3>
</div>
                    <ul class="list-group mb-3">
                        <?php 
                        if($cart->total_items() > 0){ 
                            //get cart items from session 
                            $cartItems = $cart->contents(); 
                            foreach($cartItems as $item){ 
                        ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                <small class="text-muted"><?php echo '$'.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                            </div>
                            <span class="text-muted"><?php echo '$'.$item["subtotal"]; ?></span>
                        </li>
                        <?php } } ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong><?php echo '$'.$cart->total(); ?></strong>
                        </li>
                    </ul>
	<h6 style ="text-align:right"> <b> <span class="badge badge-secondary badge-pill"><?php echo $cart->total_items(); ?></span> Item(s) </b> </h6>
                    <a href="/orderNow.php" class="btn btn-block btn-info">Add Items</a>
                </div>



        <?php
        $result = $db->query("SELECT * FROM  sjugo.customers WHERE customers.id  = '29'  LIMIT 1 "); 
        if (!$result) {
    	trigger_error('Invalid query: ' . $db->error);
	}
	if(!empty($result) && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){ 
         ?>
		<div class="col-50">
		<div class ="container">
  		<div class="container" style="background-color: #bf3d3d; width:800px;">
		<h4 class="mb-3"><b> Contact Information</b></h4>
		</div>

                    <form method="post" action="cartAction.php">
   
                     <div class="/row">
                           <div class=" mb-3">
			    <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" name="first_name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required>
                           </div>

                           <div class="mb-3">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required>
                           </div>

                           <div class="mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                           </div>

                           <div class="mb-3">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>" required>
                           </div>
</div>
 <div class="col-50">
 <div class="container" style="background-color: #bf3d3d; width:800px;">
<h4 class="mb-3"><b> Biulding Information</b></h4>
</div>
    <p>Please fill in the correct information below in order to ensure your items will be delivered to you </p>

                        <select>
		  <option value="0">Select Building</option>
                  <option value="1">Barbelin Hall</option>
                  <option value="2">Bellarmine Hall</option>
                  <option value="3">Connely Hall</option>
                  <option value="4">Merion Hall</option>
                  <option value="5">Mandeville Hall</option>
                  <option value="6">O'Pake Rec Center</option>
                  <option value="7">Science Center</option>
                  <option value="8">Post Learning Commons (New Side)</option>
                  <option value="9">Drexel Library (Old Side)</option>

                </select>
              </div>
              <label for="roomNum"><i class="roomNum"></i> Room Number: </label>
     <input type="text" class="form-control" name="room" placeholder="123" >


            </div>
        </div>
                        <input type="hidden" name="action" value="placeOrder"/>
                        <input class="btn btn-success btn-lg btn-block" type="submit" name="checkoutSubmit" value="Place Order">
                    </form>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
            <p> You simply do not exist</p>  
         <?php } ?>
    </div>
</div>
</body>
</html>
