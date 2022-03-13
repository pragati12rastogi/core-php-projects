<?php 
session_start();
$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");

if(!isset($_SESSION['email']))
{
	header('location:formlogin.php');
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
	.mar{
		margin-bottom: 60px;
    margin-top: 60px;
	}
	.m{margin-top: 60px;}
	</style>
</head>
<body>
	<?php 
	include('adminnavbar.php');
	
	if(isset($_POST['submit'])){
	$bName = $_POST['book'];
	$bPic  = $_FILES['bookpic']['name'];
	$adm   = $_SESSION['email'];
	
	$folder 	= "profile_pics/";
	$target_file= $folder.basename($bPic);
	$tmp_name   = $_FILES["bookpic"]["tmp_name"];
	
	move_uploaded_file($tmp_name,$target_file)or die(mysqli_error($conn));
	
	$sql   = "INSERT INTO `books`(`book`, `admin`, `photo`) VALUES ('$bName','$adm','$target_file')"or die(mysqli_error($conn));

}

if(isset($_POST['submit'])){
	$bName =$_POST['book'];
	
	$reg_match= "SELECT * FROM books WHERE book = '".$bName."'";
	$reg_query= mysqli_query($conn,$reg_match);
	$match = mysqli_num_rows($reg_query);
	
	if($match){
	?>
	<div class="container">
		<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Warning!</strong> This book is already present in the record.</div>
		</div>
	</div>
	
	<?php
	}
	else{
		$sql= mysqli_query($conn,$sql)or die(mysqli_error($conn));
		}
	}
	
	
	
	?>
	
	<div class="container mar">
	  <form class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" role="form">
		<div class="form-group">
		  <label for="book">Book name:</label>
		  <input type="text" class="form-control" name="book" id="book" value="<?php if(!isset($_GET['book'])){echo "";}else{ echo $_GET['book'];}?>"required>
		</div>
		<div class="form-group">
		  <label for="pic">Book Photo:</label>
		  <input type="file"  name="bookpic" style="display:inline-block" id="pwd" required>
		</div>
		<?php if(!isset($_GET['book'])) { ?>
		<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		<?php }
		else{
		?>
		<input type="submit" class="btn btn-primary" name="upd" value="Update">
		
		<?php }
		
	if(isset($_POST['upd'])){
		$bname =$_POST['book'];
		$bPic  = $_FILES['bookpic']['name'];
		$user = $_SESSION['email'];

		
		$folder 	= "profile_pics/";
		$target_file= $folder.basename($bPic);
		$tmp_name   = $_FILES["bookpic"]["tmp_name"];
		
		move_uploaded_file($tmp_name,$target_file)or die(mysqli_error($conn));
		
		$sql ="UPDATE `books` SET `book`='$bname',`admin`='$user',`photo`='$target_file' WHERE `book`='$bname'";

		mysqli_query($conn,$sql)or die(mysqli_error($conn));
	if(mysqli_query($conn,$sql)){
		header('location:libraryAdmin.php');
	}
}
			?>
	  </form>
	</div>
	
	<div class="container">
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
	<th>Book cover</th>
	<th>Book Name</th>
	<th>Admin Id</th>
	<th>Update</th>
	<th>Delete</th>
	<th>Users</th>
	</tr>
	</thead>
	
<?php



$selectSql = "SELECT * FROM books";
$query = mysqli_query($conn,$selectSql);
$num = mysqli_num_rows($query);
if($num > 0){
	while($row= mysqli_fetch_assoc($query)){
		echo "<tbody>
			<tr>
				<td><img src='".$row['photo']."' width='50px' height='50px'></td>
				<td>".$row['book']."</td>
				<td>".$row['admin']."</td>
				<td><a href='libraryAdmin.php?book= ".$row['book']." '>Edit</a></td>
				<td><a href='bookDelete.php?id= ".$row['id']." '>Delete</a></td>
				<td><a href='checkUser.php?id= ".$row['book']." '>Check</a></td>
			</tr>
		</tbody>";
	}
}


?>
</table>
</div>
</body>
</html>