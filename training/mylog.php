<?php

$conn=mysqli_connect('localhost','root','','practice');

if(isset($_POST['login'])){
	header('location:mydata.php');
	
	
}
if(isset($_POST['sign_up'])){
	//echo"hiii";
	header('location:prac.php');
	
}

?>
<form method="POST">
name:<input type="text" name="log_name"></br>
pass:<input type="text" name="log_pass"></br>
<input type="submit" name="login" value="login">
<input type="submit" name="sign_up" value="sign_up"></br>
</form>
