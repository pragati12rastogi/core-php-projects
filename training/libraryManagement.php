<?php 
session_start();
 if(!isset($_SESSION['Email'])){
	 header('location:formLogin.php');
 }
 
$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");

if(isset($_SESSION['Email'])){
$selectSql = "SELECT * FROM `registration` WHERE Email ='". $_SESSION['Email'] ."'";
$query = mysqli_query($conn,$selectSql);
$num = mysqli_num_rows($query);
if($num > 0){
	while($row= mysqli_fetch_array($query)){
		$id    = $row['0'];
		$name  = $row['1'];
		$email = $row['2'];
		$pass  = $row['3'];
		$gen   = $row['4'];
		$city  = $row['5'];
		$lang  = $row['6'];
		$pic   = $row['7'];
	}
}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Library</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
	body{ margin-top: 50px;}
	.cl{ margin-left: 40px}
	</style>
	
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<div class="panel-group">
				<div class="panel panel-success">
					<div class="panel-heading">UniqueId:</div>
					<div class="panel-body"><?php echo $id; ?></div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">UserName:</div>
					<div class="panel-body"><?php echo $name; ?></div>
				</div>
				<div class="panel panel-warning">
					<div class="panel-heading">Email:</div>
					<div class="panel-body"><?php echo $email; ?></div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Password:</div>
					<div class="panel-body"><?php echo $pass; ?></div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Gender:</div>
					<div class="panel-body"><?php echo $gen; ?></div>
				</div>
				<div class="panel panel-warning">
					<div class="panel-heading">City:</div>
					<div class="panel-body"><?php echo $city; ?></div>
				</div>	
				<div class="panel panel-success">
					<div class="panel-heading">Language:</div>
					<div class="panel-body"><?php echo $lang; ?></div>
				</div>
			</div>
			<a href="formUpdate.php" class="btn btn-success" name="edit">Edit Button</a>
			<a href="formlogout.php" class="btn btn-primary" name="logout">Logout</a>
		</div>
		<div class="col-md-6" >
			<img src="<?php echo $pic; ?>"class="img-thumbnail cl" alt="Profile Pic" width="50%" height="50%"><br/><br/>
			<a href="booklist.php" name="addbook" class="btn btn-success cl">Add Book</a><br/><br/>
			
		<?php
			$bought = "SELECT * FROM borrow WHERE Email ='".$_SESSION['Email']."'";
			
		?>
		</div>
	</div>
</body>
</html>
<?php

?>