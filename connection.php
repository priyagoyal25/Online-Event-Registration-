<?php
// error_reporting(0);
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "EventRegistration"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

// Close the connection
// $conn->close();
?>
