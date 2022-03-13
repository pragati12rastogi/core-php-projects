<?php
$conn= mysqli_connect('localhost','root','','form');
	
	$id = $_GET['id'];
	$sql = "DELETE FROM menu WHERE id= $id";

	if (mysqli_query($conn, $sql)) {
		echo "Record deleted successfully";
		header('location:tables.php');
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}
?>	