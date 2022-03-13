<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
.error {color:red;}
.container {}
</style>
</head>
<body>
<?php
/* $first=$last=$pswd=$email="";
$firstErr=$lastErr=$pswdErr=$emailErr="";
if (isset($_POST['btn']))
{
	if(!empty($_POST['first']))
	{ 
		$first = $_POST['first'];
	}
	else
	{
		$firstErr = "required";
	}
	if(!empty($_POST['last']))
	{
		$last =$_POST['last'];
	}
	else{
		$lastErr = "required";
	}
	if(!empty($_POST['pswd']))
	{
		$pswd = $_POST['pswd'];
	}
	else
	{
		$pswdErr = "required";
	}
	if(!empty($_POST['email'])){
		$email = $_POST['pswd'];
	}
	else
	{
		$emailErr = "required";
	}
	
	$image = $_FILES['upload']['name']; */
	
 if(isset($_POST['btn'])){
	$first =$_POST['first'];
	$last=$_POST['last'];
	$pswd=$_POST['pswd'];
	$email=$_POST['email'];
	$gen =$_POST['gender'];	
    $image =$_FILES['upload']['name'];
	
  	//creating connection
	$server= "localhost";
	$username= "root";
	$pwd = "";
	$dbname ="form";
	
	//connecting string
	$conn = mysqli_connect($server,$username,$pwd,$dbname);
	if($conn ==true)
	{	echo ('success'); 
}
		else{	("fail");	
		}
	//uploading image	
$target_folder = "profile_pics/";
$target_file = $target_folder . basename($image);
$tmp_name 	= $_FILES['upload']['tmp_name'];

if(move_uploaded_file($tmp_name,$target_file)){
		 echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
	}
	
	//inserting data into sql
	$sql = "INSERT INTO `table`(`firstname`, `lastname`, `password`, `email`, `gender`,`profile pic`) VALUES ('$first','$last','$pswd','$email','$gen','$target_file')";
	
	//running connection and sql
	$run=mysqli_query($conn,$sql);
	//moving into login page
	if($run==True)
	{
		/*$_SESSION['email']= $email;
		header('loaction:mydata.php');*/
		
	echo ('value inserted');
	header('location:login.php');
	}
}
  /* function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
	}   */
	?>
	<div>
		<form style="border:2px solid black;background-color:pink;padding:20px 593px" 
		 method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
			Firstname: <input type="firstname" name="first" required><span class="error" >*</span><br><br>
			Lastname: <input type="lastname" name="last" required><span class="error" >*</span><br><br>
			Password: <input type="password" name="pswd" required><span class="error" >*</span><br><br>
			Email ID: <input type="text" name="email" required><span class="error" >*</span><br><br>
			
			Gender:      
			Male<input type="radio" name="gender" value="male" >
			Female<input type="radio" name="gender" value="female">
			
			<br><br>
			Profile pic: <input type="file" name="upload"><br><br>
			
			<input type="submit" name="btn" value="Submit">
			     <a href="login.php">Already a Member</a>
		</form>
	</div>

</body>
</html>
