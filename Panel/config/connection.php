<?php

// connection

$servername = "localhost";
$username = "u121159361_aman";
$password = "Aman@@123";
$db = "u121159361_aman";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  
// else{
// echo "Connected successfully";
// }
// connection end
?>
