<?php
$servername = "localhost";
$dbname = "mars_db";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// smaple
?>

 

