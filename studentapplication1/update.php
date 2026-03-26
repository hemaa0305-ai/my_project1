<?php
include "db.php";

$id = $_GET['id'];

$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

$sql = "UPDATE student 
        SET name='$name', address='$address', mobile='$mobile' 
        WHERE id='$id'";

if(mysqli_query($conn, $sql)){
    header("Location: index.php"); 
}else{
    echo "Update failed: " . mysqli_error($conn);
}
?>
