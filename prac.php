<?php
session_start();
$conn=mysqli_connect('localhost','root','','practice');
if(isset($_POST['submit'])){
	$name=$_POST['first'];
	$last_name=$_POST['last'];
	$pass=$_POST['password'];
$query="INSERT INTO `form`(`name`, `last`, `pass`) VALUES ('$name','$last_name','$pass')";	
$run=mysqli_query($conn,$query);
if($run==true){
	
	echo"value inserted";
	header('location:show.php');
}
	else{
		echo"error";
		
	}
}


?>
<html>
<form method="POST">
first name:<input type="text" name="first"><br>
last name:<input type="text" name="last"><br>
password:<input type="text" name="password"><br>
<input type="submit" name="submit" value="submit">
</form>
</html>