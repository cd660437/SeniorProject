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

<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View Cart - PHP Shopping Cart</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>



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
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 275px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%;
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 35px;
}


.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
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

.orders {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.orders td, #orders th {
  border: 1px solid #ddd;
  padding: 8px;
}

.orders tr:nth-child(even){background-color: #f2f2f2;}

.orders tr:hover {background-color: #ddd;}

 .orders th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #bf3d3d;
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
        <a href="orderNow.php" class="w3-bar-item w3-button">Order Now</a>
        <a href="aboutus.php"  class="w3-bar-item w3-button">About Us</a>
        <a href="FAQs.html"     class="w3-bar-item w3-button">FAQs</a>
         <a href="viewCart.php"     class="w3-bar-item w3-button">My Cart</a>
        <a href="logout.php"       class="w3-bar-item w3-button"> Log Out </a>  

        <a class ="w3-bar-item w3-button"> <?php echo $FName  ?> </a>

      </div>
    </div>
  </div>
<h1> - </h1>
<div align="center" class="container" width="300px">
    <h1><b>My Cart</b> </h1>
</div>
<div  class="container">

    <div align="center" class="row">
        <div align="center" class="cart">
            <div align="center"  class="col-12">
                <div align="center" class="table-responsive">
                    <table class="orders">
                        <thead>
                            <tr>
                                <th width="45%">Product</th>
                                <th width="10%">Price</th>
                                <th width="15%">Quantity</th>
                               <th class="text-right" width="20%">Sub Total</th>
                                <th class= "text-right" width="10%">Delete Item </th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                            ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

                            <tr>
                                <td><?php echo $item["name"]; ?></td>
                                <td><?php echo '$'.$item["price"].' USD'; ?></td>
                                <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                                <td class="text-right"><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"
 onclick="return confirm('Are you sure?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><i class="fas fa-trash"></i> </button> </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="5"><p>Your cart is empty.....</p></td>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Cart Total</strong></td>
                                <td class="text-right"><strong><?php echo '$'.$cart->total().' USD'; ?></strong></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-50">
                        <a href="orderNow.php" class="btn btn-block btn-light">Continue Shopping</a>
                    </div>
                    <div class="col-50">
                        <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn btn-lg btn-block btn-primary">Checkout</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
