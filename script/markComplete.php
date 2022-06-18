<?php
$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "todolistdb";


try{
    $conn = mysqli($servername,$username,$password,$dbName);
    $sql = "UPDATE todo_items SET isDone = TRUE WHERE id = " . $id;
    $conn->query($sql);
}catch(\Throwable $ex){
    throw $ex;
}
?>