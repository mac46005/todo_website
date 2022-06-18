<?php
$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "todolistdb";


try{
    $conn = new mysqli($servername,$username,$password,$dbName);
    $today = date("Y-m-d"); // MYsql DATETIME format YYYY-MM-DD HR:MM:SS
    $sql = "UPDATE todo_items SET isDone = TRUE, dateCompleted = '$today' WHERE id =  $id";
    
    if($conn->query($sql)){
        // echo $today;
        header("location:../currentList.php");
    }else{
        echo $conn->error;
    }
}catch(Exception $ex){
    echo "Error occurred";
}
?>