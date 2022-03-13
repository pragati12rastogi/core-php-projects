<?php
$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");

/*database ="CREATE DATABASE PracticeDB";
$full_connect = mysqli_query($conn,$database)or die(mysqli_error($conn));
*/
/*$table="CREATE TABLE registration(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Username VARCHAR(20) NOT NULL,
	Email VARCHAR(50) NOT NULL UNIQUE KEY,
	Password VARCHAR(20) NOT NULL,
	Gender VARCHAR(10) NOT NULL,
	City VARCHAR(100) NOT NULL,
	Language VARCHAR(100) NOT NULL,
	reg_date TIMESTAMP
)";
$table_query = mysqli_query($conn,$table);
if(!$table_query){
	echo "table not inserted".mysqli_error($conn);
}*/

if(isset($_POST['submit'])){
	$name   = $_POST['name'];
	$email  = $_POST['email'];
	$pass   = $_POST['pass'];
	$cpass  = $_POST['confirm_pass'];
	$gender = $_POST['gender'];
	$city   = $_POST['city'];
	$lang   = $_POST['lang'];
	$seprate=implode(',', $lang);
	$pic    = $_FILES["pic"]["name"]; //-> what is second sq bracket name $_FILES['name'][$key];
	
	$folder 	= "profile_pics/";
	$target_file= $folder.basename($pic);
	$tmp_name   = $_FILES["pic"]["tmp_name"];
	
	if(move_uploaded_file($tmp_name,$target_file)){
		 echo "The file ". basename($_FILES["pic"]["name"]). " has been uploaded";
	}else{
		echo "not uploaded"or die(mysqli_error($conn));
	}

	$insertSql = "INSERT INTO registration(Username,Email,Password,Gender,City,Language,Picture) VALUES('$name','$email','$pass','$gender','$city','$seprate','$target_file')";	
	
}

// '2' ; this query will also check email exist or not;
if(isset($_POST['submit'])){
	$email =$_POST['email'];
	
	$reg_match= "SELECT * FROM registration WHERE Email= '".$email."'";
	$reg_query= mysqli_query($conn,$reg_match);
	$match = mysqli_num_rows($reg_query);
	
	if($match){
	echo "<script type='text/javascript'>alert('Email already exists');</script>";
	}
	else{
		$sql= mysqli_query($conn,$insertSql)or die(mysqli_error($conn));
		//die statement
		//after making email unique query will not work and will not create table data entry; whether this '1' can create alert or '2';
	//but this condition can also show error for any other reason; 	
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
		font-size: xx-large;">Registration Form</h3>
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
			<label class="control-label col-md-2" for="lang">Known Languages:</label>
			<div class="col-md-8">
				<label class="checkbox-inline"><input type="checkbox" name="lang[]" class="lang" value="Java">Java</label>
				<label class="checkbox-inline"><input type="checkbox" name="lang[]" class="lang" value="Php">Php</label>
				<label class="checkbox-inline"><input type="checkbox" name="lang[]" class="lang" value="JavaScript">JavaScript</label>
				<label class="checkbox-inline"><input type="checkbox" name="lang[]" class="lang" value="Python">Python</label>
				<label class="checkbox-inline"><input type="checkbox" name="lang[]" class="lang" value="Node">Node</label>
			</div>
			<span class="col-md-2 text-danger" id="langErr">*</span>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="pic">Profile picture:</label>
			<div class="col-md-8">
				<input type="file" name="pic" class="dp"/>
			</div>
		</div>
		<center><input type="submit" id="google" name="submit" value="submit" class="btn btn-primary" ><br/>
		<p>if already a user?<a href ="formLogin.php" class="btn btn-link text-success">Log In</a></p></center>
	</form><br/><br/>
</div>

<!-- table of data stored in database is shown -->
<!--?php
$selectSql = "SELECT * FROM registration";
$query = mysqli_query($conn,$selectSql);
$num = mysqli_num_rows($query);*/
?>
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>City</th>
<th>Languages</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead-->

<!--?php
if($num > 0){
	while($row= mysqli_fetch_assoc($query)){
		echo "<tbody>
		<tr>
			<td>".$row['id']."</td>
			<td>".$row['Username']."</td>
			<td>".$row['Email']."</td>
			<td>".$row['Password']."</td>
			<td>".$row['Gender']."</td>
			<td>".$row['City']."</td>
			<td>".$row['Language']."</td>
			<td><a href='formUpdate.php?id= ".$row['id']." '>Edit</a></td>
			<td><a href='formDelete.php?id= ".$row['id']." '>Delete</a></td>
		</tr>
		</tbody>";
	}
}
?>
</table-->
</body>
<script>
$(document).ready(function(){
$("#google").click(function(){
	var name = $("#name").val();
	if(name == "" && !name.match(/^[a-zA-Z]+(\s[a-zA-Z]+)?$/)){
		$("#nameErr").text("alphabetic only");
		return false;
	}
	var email= $("#email").val();
	if(email == "" && !email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
	$("#emailErr").text("email is incorrect");
	return false;
	}
	var pwd = $("#pass").val();
		if(!(pwd.length > 6 && pwd.length < 12) || pass == ""){
		$("#pwdErr").text("length should be between 6 to 12");
				return false;
		}
	var cnf =$("#confirm_pass").val();
		if(pwd != cnf){
		$("#conErr").text("password dont match");
			return false;
		}
	var radio =$('input[name="gender"]:checked').length;
	if(radio == 0)
	{
	$("#genErr").text("Select gender");
		return false;
	}
	var city =$("#city").val();
	if(city == null)
	{
		$("#cityErr").text("select city");
			return false;
	}		
	var check =$('input[class="lang"]:checked').length;
	if(check == 0){
		$("#langErr").text("Select language");
			return false;
	}
	
	}
);


});
</script>
</html>