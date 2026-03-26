<?php
$conn = mysqli_connect("localhost","root","","dbcrud");

if(!$conn){
    die("DB connection failed:" . mysqli_connect_error());
}
?>
