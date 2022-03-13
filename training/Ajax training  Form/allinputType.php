<!DOCTYPE html>
<html>
	<head>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container" style="margin-bottom:20px">
			<form method="post">
				<div class="form-group">
				  <label for="user">Name:</label>
				  <input type="text" class="form-control" id="user" name="user">
				</div>
				<div class="form-group">
				  <label for="user">Email:</label>
				  <input type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
				  <label for="password">Password:</label>
				  <input type="password" class="form-control" id="password" name="password">
				</div>
				 <div class="form-group">
				  <label for="description">Description:</label>
				  <textarea class="form-control" rows="5" id="description" name="description"></textarea>
				</div>
				<div class="form-group">
				<label for="Subjects">Subjects:</label>
				<div>
					<label class="checkbox-inline"><input type="checkbox" value="English" class="Subjects" name="Subjects[]">English</label>
					<label class="checkbox-inline"><input type="checkbox" value="Physics" class="Subjects" name="Subjects[]">Physics</label>
					<label class="checkbox-inline"><input type="checkbox" value="Maths" class="Subjects" name="Subjects[]">Maths</label>
				</div>
				</div>
				<div class="form-group">
				<label for="gender">Gender:</label>
				<div>
					<label class="radio-inline"><input type="radio" class="gender" Value="Male" name="gender">Male</label>
					<label class="radio-inline"><input type="radio" class="gender" value="Female" name="gender">Female</label>
					<label class="radio-inline"><input type="radio" class="gender" value="Other" name="gender">Other</label> 
				</div>
				</div>
				 <div class="form-group">
				  <label for="location">Location:</label>
				  <select class="form-control" id="location" name="location">
					<option value="">Select</option>
					<option value="Lucknow">Lucknow</option>
					<option value="Delhi">Delhi</option>
					<option value="Mumbai">Mumbai</option>
				  </select>
				</div>
				<div class="form-group">
				  <label for="date">Date:</label>
				  <input type="date" class="form-control" id="date" name="date">
				</div>
				<input type="button" id="submit"value="Submit" name="submit" />
			</form>
		</div>
		<?php
	/* 	$conn = mysqli_connect('localhost','root','','ajaxtraining')or die(mysqli_error($conn));
		if(isset($_POST['submit'])){
			$name=			$_POST['user'];
			$email= 		$_POST['email'];
			$pass=			$_POST['password'];
			$description =	$_POST['description'];
			$Subjects=		$_POST['Subjects'];
			$seprator =     implode(',',$Subjects);
			$gender=		$_POST['gender'];
			$location=		$_POST['location'];
			$date= 			$_POST['date'];
			 
			 $ins = "INSERT INTO `fullInputsTable`( `user`, `email`, `password`, `description`, `Subjects`, `gender`, `location`, `date`) VALUES ('$name','$email','$pass','$description','$seprator','$gender','$location','$date')";
			 $queryInsert=mysqli_query($conn, $ins)or die(mysqli_error($queryInsert));
			
			mysqli_close($conn);
		}
 */		?>

<script>
$(document).ready(function(){

});

$("#submit").click(function(){
	debugger;
var user = $("#user").val();
var email = $("#email").val();
var pass= $("#pass").val();
var description =$("description").val();
var Subjects =[];
$('input[type=checkbox]').click(function(){
	debugger
Subject = $(this).val();
Subjects.push(Subject);
});

alert(Subjects);
var gender = $(".gender").val();
var date = $("#date");

$.ajax({
});
});

</script>
	</body>
</html>