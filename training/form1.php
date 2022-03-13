<! DOCTYPE html>
<html>
<body>
<form method="post" action="fetch.php" enctype="multipart/form-data">
<input type="text" name="first">
<input type="text" name="last">
<input type="file" name="upload">
<input type="text" name="email">
<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
	$first = $_POST['first'];
	$last =  $_POST['last'];
	$img = $_FILES['upload']['name'];
	$email= $_POST['email'];
	//Creating connection with phpmyadmin
	$server = "localhost";
	$username = "root";
	$pwd = "";
	$dbname = "infoseek";

	//connection string

	$conn = mysqli_connect($server,$username,$pwd,$dbname);

	if(!($conn)){
		echo ('Connection failed' . mysqli_connect_error());
	}
	else{
		echo "connected";
	}
	$target_folder = "profile_pics/";
	$target_file = $target_folder . basename($img);
	$tmp_name = $_FILES['upload']['tmp_name'];
	if(move_uploaded_file($temp_name,$target_file)){
		 echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
	}
	
	$sql = "INSERT into practice(firstname,lastname,image,email) VALUES('$first','$last','$target_file','$email')";
	
	if(mysqli_query($conn,$sql) ==TRUE){
		echo "recorded";
	}
	else{
		echo ('fail' . mysqli_error($conn));
	}

}

?>
<body>
</html>