<?php
//Creating connection with phpmyadmin
	$server = "localhost";
	$username = "root";
	$pwd = "";
	$dbname = "form";

	//connection string

	$conn = mysqli_connect($server,$username,$pwd,$dbname);
	
	$id = $_GET['id'];
	$sql = "DELETE FROM `table` WHERE id= '$id' ";

	if (mysqli_query($conn, $sql)) {
		echo "Record deleted successfully";
		header('location:signupform.php');
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}
?>	