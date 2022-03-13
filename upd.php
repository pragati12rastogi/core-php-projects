<?php
//Creating connection with phpmyadmin
	$server = "localhost";
	$username = "root";
	$pwd = "";
	$dbname = "infoseek";

	//connection string

	$conn = mysqli_connect($server,$username,$pwd,$dbname);
?>
<?php
session_start();
$id = $_GET['id'];
$sql1 = "SELECT  `firstname`, `lastname`, `image`, `email` FROM `practice` WHERE id = $id";
$run= mysqli_query($conn,$sql1);

if(mysqli_num_rows($run)>0)
{
	while ($row= mysqli_fetch_assoc($run)){
		$first = $row['firstname'];
		$last = $row['lastname'];
		$img = $row['profile pic'];
		$email = $row['email'];
		}
}

?>
<form method="POST" action="" enctype="multipart/form-data">
firstname:<input type="firstname" name="first" value="<?php echo$first;?>">
lastname:<input type="lastname" name="last" value="<?php echo $last;?>">
profile pic:<input type="file" name="upload" value="<?php echo $upload;?>">
email:<input type="text" name="email" value="<?php echo $email;?>">
<input type="submit" value="update" name="update">
</form>


<?php
if(isset($_POST['update'])){
	$first =$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
    $image =$_FILES['upload']['name'];
	
	
	$target_folder="profile_pics/";
	$target_file= $target_folder . basename($image); 
	$tmp_name= $_FILES['upload']['tmp_name'];
	
	if(move_uploaded_file($tmp_name,$target_file))
	{
		echo "the filename" . basename($_FILES['upload']['tmp_name']) . "has been uploaded.";
	}
	
	$sql ="UPDATE `practice` SET `firstname`='$first',`lastname`='$last',`image`='$target_file',`email`='$email' WHERE id = $id";
	if(mysqli_query($conn,$sql) ==TRUE){
		echo "updated";
		header('location:fetch.php');
	}
	else{
		echo ('fail' . mysqli_error($conn));
	}
}
?>