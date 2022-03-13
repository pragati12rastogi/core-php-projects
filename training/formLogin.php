<?php 
$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done"); 


if(isset($_POST['log'])){
	$email = $_POST['email'];
	$pass  = $_POST['pass'];
	$admin = $_POST['adminid'];

	if(!$admin){
		$query = "SELECT * FROM `registration` WHERE Email='".$email."' and Password ='".$pass."' ";
		$log = mysqli_query($conn,$query)or die(mysqli_error($conn));
		$lg  = mysqli_num_rows($log);
		if($lg > 0){
			session_start();
			$_SESSION['Email']= $email;
			header("location:libraryManagement.php");
		}elseif(!$lg){
			echo "<script type= text/javascript>alert('Wrong username And password')</script>";
		}
		
	}else{
		
		$adminQuery = "SELECT * FROM `admin_table` WHERE email ='".$email."' and password ='".$pass."' ";
		$ad = mysqli_query($conn,$adminQuery)or die(mysqli_error($conn));
		if(mysqli_num_rows($ad)){
			session_start();
			$_SESSION['email']=$email;
			header("location:libraryAdmin.php");
		}
		else{
			echo "<script type='text/javascript'>alert('not an admin')</script>";
		}
}
}
	



?>

<!DOCTYPE HTML>
<html>
<head>

	<title>Form Validation with JQuery</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
	
	</style>
</head>
<body>
<div class="container">

<h3 style="text-align:center;margin-bottom: 30px;font-size: xx-large;">Login Form</h3>
	<form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
			<label class="control-label col-md-2" for="email">Email:</label>
			<div class="col-md-8">
				<input class="form-control" type="email" name="email" id="email">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="pass">Password:</label>
			<div class="col-md-8">
				<input class="form-control" type="password" name="pass" id="pass">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			<label class="checkbox-inline"><input type="checkbox" name="adminid" value="admin">Admin</label>
			</div>
		</div>
		<center>
		<input type="submit" class="btn btn-success" value="Login" name="log">
		<a href="form validate.php" class="btn btn-success" name="reg">Register</a>
		</center>
	</form>
</body>
</html>