<?php
$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");


if(isset($_POST['submit'])){
	$name   = $_POST['name'];
	$email  = $_POST['email'];
	$pass   = $_POST['pass'];
	$cpass  = $_POST['confirm_pass'];
	$gender = $_POST['gender'];
	$city   = $_POST['city'];
	$pic    = $_FILES["pic"]["name"]; //-> what is second sq bracket name $_FILES['name'][$key];
	
	$folder 	= "profile_pics/";
	$target_file= $folder.basename($pic);
	$tmp_name   = $_FILES["pic"]["tmp_name"];
	
	if(!move_uploaded_file($tmp_name,$target_file))
		{
		echo "not uploaded"or die(mysqli_error($conn));
	}

	$insertSql = "INSERT INTO admin_table(name,email,password,gender,city,picture) VALUES('$name','$email','$pass','$gender','$city','$target_file')";	
}
	if(isset($_POST['submit'])){
	$email =$_POST['email'];
	
	$reg_match= "SELECT * FROM admin_table WHERE email= '".$email."'";
	$reg_query= mysqli_query($conn,$reg_match);
	$match = mysqli_num_rows($reg_query);
	
	if($match){
	echo "<script type='text/javascript'>alert('Email already exists');</script>";
	}
	else{
		$sql= mysqli_query($conn,$insertSql)or die(mysqli_error($conn));
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>

	<title>Form with jquery and php</title>
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

<form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
		<h3 style="text-align:center;margin-bottom: 30px;
		font-size: xx-large;">Admin Registration Form</h3>
		<div class="form-group">
			<label class="control-label col-md-2" for="name">Username:</label>
			<div class="col-md-8">
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<span class="col-md-2 text-danger" id="nameErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="email">Email:</label>
			<div class="col-md-8">
				<input class="form-control" type="email" name="email" id="email">
			</div>
			<span class="col-md-2 text-danger" id="emailErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="pass">Password:</label>
			<div class="col-md-8">
				<input class="form-control" type="password" name="pass" id="pass">
			</div>
			<span class="col-md-2 text-danger" id="pwdErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="confirm_pass">Confrim Password:</label>
			<div class="col-md-8">
				<input class="form-control" name="confirm_pass" type="password" id="confirm_pass">
			</div>
			<span class="col-md-2 text-danger" id="conErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="gender">Gender:</label>
			<div class="col-md-8">
				<label class="radio-inline"><input type="radio" name="gender" class="gender" value="male">Male</label>
				<label class="radio-inline"><input type="radio" name="gender" class="gender" value="female">Female</label>
				<label class="radio-inline"><input type="radio" name="gender" class="gender" value="other">Other</label>
			</div>
			<span class="col-md-2 text-danger" id="genErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="city">City:</label>
			<div class="col-md-8">
				<select id="city" name="city" class="form-control">
				<option value="0" disabled selected>select one</option>
				<option value="Lucknow">Lucknow</option>
				<option value="Kanpur">Kanpur</option>
				<option value="Noida">Noida</option>
				<option value="Gurgaon">Gurgaon</option>
				</select>
			</div>
			<span class="col-md-2 text-danger" id="cityErr">*</span>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="pic">Profile picture:</label>
			<div class="col-md-8">
				<input type="file" name="pic" class="dp"/>
			</div>
		</div>
		<center><input type="submit" id="google" name="submit" value="Submit" class="btn btn-primary" >
	</form><br/><br/>
	</div>
	</html>