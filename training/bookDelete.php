<?php

$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");

$id= $_GET['id'];
$del = "DELETE FROM books WHERE id ='$id'";

if(!mysqli_query($conn,$del)){
	echo "Error :". mysqli_error($conn);
}
else{
	header('location:libraryManagement.php');
}

?>