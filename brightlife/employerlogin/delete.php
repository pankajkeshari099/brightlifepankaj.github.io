<?php
include"config.php";
$id=$_GET['id'];
$delquery="delete from seeker where id=$id";
$query=mysqli_query($con,$delquery);
header('location:display.php');
?>