<?php
$servername = "localhost"; 
$username = "root";// Replace with your MySQL username
$password = "";// Replace with your MySQL password
$dbname = "coffeeco";// Replace with your MySQL database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// $conn = mysqli_connect("localhost", "root", "", "coffeeco");

// Check connection
if (!$conn) {
  die("Databse Connection failed: " . mysqli_error($conn));
}
else{
    echo"database connection made successfully";
}
?>

 
