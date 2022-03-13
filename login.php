<?php
session_start();
?>
<?php

$conn=mysqli_connect('localhost','root','','form');


 if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['pass']; 
	$check = "SELECT * FROM `table` WHERE email = '".$email."' and password = '".$password."' ";
	
	$res = mysqli_query($conn,$check);
	if($res==true)
	{
		if(mysqli_num_rows($res)){
			echo "welcome user";
			/* session_start();
				$_SESSION['email']=$email;//session key
					header('location:mydata.php'); */
					session_start();
		$_SESSION['email'] = $email; 
		header('location:ace-master/index.php'); 
		}
		else{
			echo "sign up plz";
		}
	}
	
}
if(isset($_POST['sign_up']))
{
	header('location:signupform.php');
	
}

?>
<center>
	<form style="border:2px solid black;background-color:pink;padding:25px" method="POST">
<table>
	<tr>
		<td>E-mail:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td><input type="submit" name="sign_up" value="SIGN UP"></td>
		<td><input type="submit" name="login" value="LOGIN"></td>
	</tr>
</table>
	</form>
	</center>
	