<?php
$conn = mysqli_connect('localhost','root','','ajaxtraining')or die(mysqli_error($conn));

$Id = $_GET['id'];
$delete = "DELETE FROM `inputform` WHERE Pk_Id = $Id";
$deleteQuery = mysqli_query($conn,$delete);
if($deleteQuery){
	header('location:InputForm.php');
}else{
	die($deleteQuery);
}
?>