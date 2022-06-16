<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "todolistdb";

// Create connection
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully";
?>