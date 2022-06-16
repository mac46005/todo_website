<?php
include('./sqlConnection.php');
$description = $_REQUEST['description'];
$dueDate = $_REQUEST['dateDue'];
$impLvl = $_REQUEST['importanceLevel'];
$sql = "INSERT INTO todo_items (description,duedate,importanceLevel) VALUES( '$description', $dueDate , '$impLvl')";
echo $sql;
if($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    "Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();
?>