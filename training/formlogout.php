<?php 
$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");

session_start();
{
header('location:formLogin.php');
}
session_destroy();
?>