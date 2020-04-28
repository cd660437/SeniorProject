<?php 
// Database configuration 
$dbHost     = "seniorproject.cj1q686fukiz.us-east-2.rds.amazonaws.com"; 
$dbUsername = "rgranahan"; 
$dbPassword = "granny14"; 
$dbName     = "sjugo"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>
