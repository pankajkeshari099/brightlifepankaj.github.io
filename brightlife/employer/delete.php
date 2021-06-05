<?php
$host='localhost';
$user='root';
$pass='';
$db='brightlife';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
    echo"connection successfully";
}
else{
    echo"not connect";
}
$id=$_GET['id'];
$delquery="delete from emp where id=$id";
$query=mysqli_query($con,$delquery);
header('location:display.php');
?>