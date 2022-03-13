<?php

$connection = mysqli_connect('localhost','root','')or die("connection not made");

$database = "CREATE DATABASE BeautyStyle";

$query = mysqli_query($connection,$database);
?>