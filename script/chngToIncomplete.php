<?php
$server = "localhost";
$username = "root";
$password = "";
$dbName = "todolistdb";
if($conn = new mysqli($server,$username,$password,$dbName)){
    $id = $_GET['id'];
    $sql = "UPDATE todo_items SET isDone = FALSE WHERE id = $id";
    if($conn->query($sql)){
        header("location:../history.php");
    }
}
?>