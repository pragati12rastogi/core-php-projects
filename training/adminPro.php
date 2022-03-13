<?php
$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");
session_start();  

$select ="SELECT * FROM admin_table WHERE email='".$_SESSION['email']."'";
$myQuery =mysqli_query($conn,$select);

if(mysqli_num_rows($myQuery)){
	while($row = mysqli_fetch_assoc($myQuery)){
		$name =$row['name'];
		$email =$row['email'];
		$pass =$row['password'];
		 $gen =$row['gender'];
		$city =$row['city'];
		
	}
}

?>
<!DOCTYPE html>
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

	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
		<h3 style="text-align:center;margin-bottom: 30px;
		font-size: xx-large;">Profile Details</h3>
		<div class="form-group">
			<label class="control-label col-md-2" for="name">Username:</label>
			<div class="col-md-8">
				<input class="form-control" type="text" name="name" id="name" value="<?php if($name){ echo $name;}else{echo "";}?>" required>
			</div>
			<span class="col-md-2 text-danger" id="nameErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="email">Email:</label>
			<div class="col-md-8">
				<input class="form-control" type="email" name="email" id="email" value="<?php if($email){ echo $email;}else{echo "";}?>" disabled>
			</div>
			<span class="col-md-2 text-danger" id="emailErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="pass">Password:</label>
			<div class="col-md-8">
				<input class="form-control" type="text" name="pass" id="pass" value="<?php if($pass){ echo $pass;}else{echo "";}?>" required>
			</div>
			<span class="col-md-2 text-danger" id="pwdErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="gender">Gender:</label>
			<div class="col-md-8">
				<label class="radio-inline"><input type="radio" name="gender" class="gender" value="male" <?php if($gen=="male"){ echo 'checked="checked"';}?> >Male</label>
				<label class="radio-inline"><input type="radio" name="gender" class="gender" value="female"  <?php if($gen=="female"){ echo 'checked="checked"';}?>>Female</label>
				<label class="radio-inline"><input type="radio" name="gender" class="gender" value="other"  <?php if($gen=="other"){ echo 'checked="checked"';}?>>Other</label>
			</div>
			<span class="col-md-2 text-danger" id="genErr">*</span>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="city">City:</label>
			<div class="col-md-8">
				<select id="city" name="city" class="form-control">
				<option value="0" disabled selected>select one</option>
				<option value="Lucknow" <?php if($city == "Lucknow"){ echo 'selected';}?>>Lucknow</option>
				<option value="Kanpur" <?php if($city == "Kanpur"){ echo 'selected';}?>>Kanpur</option>
				<option value="Noida" <?php if($city == "Noida"){ echo 'selected';}?>>Noida</option>
				<option value="Gurgaon" <?php if($city == "Gurgaon"){ echo 'selected';}?>>Gurgaon</option>
				</select>
			</div>
			<span class="col-md-2 text-danger" id="cityErr">*</span>
		</div>
		
		<div class="form-group">
			<label class="control-label col-md-2" for="dp">Profile Pic:</label>
			<div class="col-md-8">
				<input type="file" name="updpic" class="dp"/>
			</div>
		</div>
		<center><input type="submit" id="google" name="upd" value="Update" class="btn btn-primary" ></center>
	</form>
</div>
</body>
</html>

<?php
if(isset($_POST['upd'])){
	$name =$_POST['name'];
	$pass= $_POST['pass'];
	$gen= $_POST['gender'];
	$city= $_POST['city'];
	$pic = $_FILES['updpic']['name'];
	
	$folder 	= "profile_pics/";
	$target_file= $folder.basename($pic);
	$tmp_name   = $_FILES["updpic"]["tmp_name"];
	
	if(move_uploaded_file($tmp_name,$target_file)){
		 echo "The file ". basename($_FILES["updpic"]["name"]). " has been uploaded";
	}else{
		echo "not uploaded"or die(mysqli_error($conn));
	}

$sql= "UPDATE `admin_table` SET `name`='$name',`password`='$pass',`gender`='$gen',`city`='$city',`picture`='$target_file' WHERE email='".$_SESSION['email']."'";
$query= mysqli_query($conn,$sql);


if($query == True){
	header('location:adminPro.php');
}
$query or die(mysqli_error($conn));
}

?>