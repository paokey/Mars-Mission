
<?php
// calling header and database connection
require_once("nav.php");


// query
//SELECT * FROM `martian` WHERE martian_id = 2

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
if ($mysqli→query('UPDATE martian set first_name = "John" where martian_id = 2')) {
    printf("Table martian updated successfully.<br />");
 }
 if ($mysqli→errno) {
    printf("Could not update table: %s<br />", $mysqli→error);
 }
 $sql = "SELECT martian_id, first_name, last_name FROM martian";
 
 $result = $mysqli→query($sql);
   
 if ($result→num_rows > 0) {
    while($row = $result→fetch_assoc()) {
       printf("martian_id: %s, first_name: %s, last_name: %s <br />", 
          $row["martian_id"], 
          $row["firstname"], 
          $row["last_name"]);              
    }
 } else {
    printf('No record found.<br />');
 }
 mysqli_free_result($result);
 $mysqli→close();
?>