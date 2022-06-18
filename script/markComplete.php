<?php
$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "todolistdb";


try{
    $conn = new mysqli($servername,$username,$password,$dbName);
    $today = date("Y-m-d H:i:s"); // MYsql DATETIME format YYYY-MM-DD HR:MM:SS
    $sql = "UPDATE todo_items SET isDone = TRUE, dateCompleted = " . $today . " WHERE id = " . $id;
    
    if($conn->query($sql)){
        header("location:../currentList.php");
    }else{
        throw "An error occurred while marking the item is complete";
    }
}catch(\Throwable $ex){
    throw $ex;
}
?>