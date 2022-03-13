<?php

$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");

$id= $_GET['id'];
$del = "DELETE FROM registration WHERE id ='$id'";

if(mysqli_query($conn,$del)){
	echo $id ."is deleted from Record";
	header('location:form validate.php');
}
else{
	echo "Error :". mysqli_error($conn);
}

?>