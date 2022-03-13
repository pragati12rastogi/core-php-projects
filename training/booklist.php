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
</head>	
<body>
	<div class="container">
		<?php
		$conn =mysqli_connect('localhost','root','','practicedb')or die("connection not done");
		session_start();
		
		$selectSql = "SELECT * FROM books";
		$query = mysqli_query($conn,$selectSql);
		$num = mysqli_num_rows($query);
		if($num > 0){
			while($row= mysqli_fetch_assoc($query)){
		?> 	<div class="text-center">
			 <div class="col-md-4 col-sm-4">
				<div class="thumbnail">
				  <img src="<?php echo $row['photo'];?>" width="400" height="300">
				  <p name="bk"><strong><?php echo$row['book'];?></strong></p>
				  <button class="btn" name="add">Add Book</button>
				</div>
			  </div>
			</div>
		<?php	
			}
		}
		?>
		<?php
		if(isset($_POST['add'])){
			$buy = $_POST['bk'];
			$email = $_SESSION['Email'];
			
			$borrow = "INSERT INTO borrow(user,book)VALUES('$email','$buy')";
			mysqli_query($conn,$borrow);
		}
		?>
	</div>
</body>
</html>
