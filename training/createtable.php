<! DOCTYPE html>
<html>
<body>
<form method="post" action="" enctype="multipart/form-data">
<input type="firstname" name="xyz">
<input type="file" name="upload">

<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
	$name = $_POST['xyz'];
	$img = $_FILES['upload']['size'];
	echo "hello" . $name . "you uploaded" . $img;
}

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

?>
<body>
</html>