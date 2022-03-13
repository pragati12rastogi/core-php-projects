<?php
//Creating connection with phpmyadmin
	$server = "localhost";
	$username = "root";
	$pwd = "";
	$dbname = "infoseek";

	//connection string

	$conn = mysqli_connect($server,$username,$pwd,$dbname);
	if(isset($_POST['delete']))
	{
		$checkbox =$_POST['checkbox'];
		print_r($checkbox);
	}
	 if($i=0 ; $i< count($checkbox);$i++)
	{
		$id = $checkbox[$i];
		$sql = "DELETE FROM practice WHERE id= $id";
	}
	if (mysqli_query($conn, $sql)) {
		echo "Record deleted successfully";
		header('location:fetch.php');
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	} 
?>	