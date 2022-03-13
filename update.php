<?php
//Creating connection with phpmyadmin
	$server = "localhost";
	$username = "root";
	$pwd = "";
	$dbname = "form";

	//connection string

	$conn = mysqli_connect($server,$username,$pwd,$dbname);
	if(! $conn)
	{
		echo "not connected";
	}
?>
<?php
session_start();
$id = $_GET['id'];
$sql1 = "SELECT firstname, lastname, password, email, profile pic FROM table where id = $id ";
echo $run= mysqli_query($conn,$sql1);

$quick= mysqli_num_rows($run);
if($quick)
{
	while ($row= mysqli_fetch_assoc($run)){
		$first = $row['firstname'];
		$last = $row['lastname']; 
		$email = $row['email'];
		$img = $row['profile pic'];
		$pswd = $row['password'];
		}
}

?>
<form method="POST" action="" enctype="multipart/form-data">
firstname:<input type="firstname" name="first" value="<?php echo $first;?>">
lastname:<input type="lastname" name="last" value="<?php echo $last;?>">
password:<input type="text" name="pswd" value="<?php echo $pswd;?>">
email:<input type="text" name="email" value="<?php echo $email;?>">
profile pic:<input type="file" name="upload" value="<?php echo $img;?>">
<input type="submit" value="update" name="update">
</form>


<?php
if(isset($_POST['update'])){
	$first =$_POST['first'];
	$last=$_POST['last'];
	$pswd=$_POST['pswd'];
	$email=$_POST['email'];
    $image =$_FILES['upload']['name'];
	
	
	$target_folder="profile_pics/";
	$target_file= $target_folder . basename($image); 
	$tmp_name= $_FILES['upload']['tmp_name'];
	
	if(move_uploaded_file($tmp_name,$target_file))
	{
		echo "the filename" . basename($_FILES['upload']['tmp_name']) . "has been uploaded.";
	}
	
	$sql ="UPDATE `table` SET `firstname`='$first',`lastname`='$last',`password`='$pswd',`email`='$email',`profile pic`='$target_file' WHERE id = $id";
	if(mysqli_query($conn,$sql) ==TRUE){
		echo "updated";
		header('location:mydata.php');
	}
	else{
		echo ('fail' . mysqli_error($conn));
	}
}
?>