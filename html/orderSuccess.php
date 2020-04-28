
<?php 

/**
 * Copyright 2010-2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *
 *  ABOUT THIS PHP SAMPLE: This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/sqs-examples-send-receive-messages.html
 *
 */
// snippet-start:[sqs.php.send_message.complete]
// snippet-start:[sqs.php.send_message.import]
require '/var/www/html/vendor/autoload.php';
// snippet-end:[sqs.php.send_message.import]

/**
 * Receive SQS Queue with Long Polling
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[sqs.php.send_message.main]
use Aws\Sqs\SqsClient;

$client = SqsClient::factory(array(
    'profile' => 'default',
    'region'  => 'us-east-2'
));

if(!isset($_REQUEST['id'])){ 
    header("Location: index.php"); 
} 
 
// Include the database config file 
require_once 'dbConfig.php'; 
 
// Fetch order details from database 
$result = $db->query("SELECT r.*, c.first_name, c.last_name, c.email, c.phone FROM orders as r LEFT JOIN customers as c ON c.id = r.customer_id WHERE r.id = ".$_REQUEST['id']); 
 
if($result->num_rows > 0){ 
    $orderInfo = $result->fetch_assoc(); 
}else{
    header("Location: index.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Order Status - PHP Shopping Cart</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
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

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
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

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
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
        <a class ="w3-bar-item w3-button"> <?php echo $FName  ?> </a>

      </div>
    </div>
  </div>

    <h1>-</h1>
<div align="center" class="container" width="300px">
<h2><b> ORDER CONFIRMED!</b> </h2>
</div>
<div class = "container">
    <div class="col-12">
        <?php if(!empty($orderInfo)){ ?>
            <div align="center" class="col-md-12">
                <div align="center"  class="alert alert-success">Thank you for shopping with us. Please follow the next steps in order to finish process !</div>
            </div>
            <!-- Order status & shipping info -->
            <div align="center" class="row col-lg-12 ord-addr-info">
                <div class = "container "style ="width:800;" >
		<div align="center"  class="hdr">Order Info:</div>
                <p><b>Reference ID:</b> #<?php echo $orderInfo['id']; ?></p>
                <p><b>Total:</b> <?php echo '$'.$orderInfo['grand_total'].' USD'; ?></p>
                <p><b>Placed On:</b> <?php echo $orderInfo['created']; ?></p>
                <p><b>Buyer Name:</b> <?php echo $orderInfo['first_name'].' '.$orderInfo['last_name']; ?></p>
                <p><b>Email:</b> <?php echo $orderInfo['email']; ?></p>
                <p><b>Phone:</b> <?php echo $orderInfo['phone']; ?></p>
            </div>
            <!-- Order items -->
<div class= "container">
            <div  align="center"  class="row col-lg-12"> Product Info: </div>
                <h6> <b> Product's Purchased </b> </h6>
		 <table class="table table-hover">
                    <thead>
                        <tr>
                            <th align="center">Product</th>
                            <th align="center"  >Price</th>
                            <th align="center" >  QTY</th>
                            <th align="center" >  Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Get order items from the database 
                        $result = $db->query("SELECT i.*, p.name, p.price FROM order_items as i LEFT JOIN products as p ON p.id = i.product_id WHERE i.order_id = ".$orderInfo['id']); 
                        if($result->num_rows > 0){  
                            while($item = $result->fetch_assoc()){ 
                                $price = $item["price"]; 
                                $quantity = $item["quantity"]; 
                                $sub_total = ($price*$quantity); 
                        ?>
                        <tr>
                            <td><?php echo $item["name"]; ?></td>
                            <td><?php echo '$'.$price.''; ?></td>
                            <td align= "center"><?php echo $quantity; ?></td>
                            <td align= "center" ><?php echo '$'.$sub_total.' '; ?></td>
			
			
                        </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>

<div class = "container">
    <div  align="center"  class="row col-lg-12"> Payment Info: </div>
                <h6> <b> To pay for your order please Venmo @SJU-Go </b> </h6>

<p align = "left" > In order to complete payment send the order </br> total to @SJU-Go with the reference ID number </br> of your order.
 Once the payment is liked by SJU-Go</br> the delivery is in progress. 
</p>

<a href="https://venmo.com/account/sign-in">
         <img alt="Qries" src="/img/venmo.png"
         width=150" height="70">
      </a>

</div>
<div class = "container">
    <div  align="center"  class="row col-lg-12"> Scan code here: </div>

 <img alt="Qries" src="/img/IMG_5345.jpeg"
         width="285" height="299">
      </a>

<?php }else{ ?>
  <div class="col-md-12">
            <div class="alert alert-danger">Your order submission failed.</div>
        </div>
	<?php } ?>
<?php
 $params = [
    'DelaySeconds' => 10,
    'MessageAttributes' => [
        "OrderNumber" => [
            'DataType' => "String",
            'StringValue' => "id"
        ],
	"Name" => [
            'DataType' => "String",
            'StringValue' => "TESTING"
        ],
    ],
    'MessageBody' => "This is a test",
    'QueueUrl' => 'https://sqs.us-east-2.amazonaws.com/878934981528/orders'
];

try {
    $result = $client->sendMessage($params);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
}
?>
    </div>
</div>
</body>
  </html>
