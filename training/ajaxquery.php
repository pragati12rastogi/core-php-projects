<?php 
include 'ajaxconnection.php';

		extract($_POST);
	
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm']))
		{	
		if($_POST['password'] === $_POST['confirm'])
		{
			$insert= "INSERT INTO registration(username,email,password) VALUES('$name','$email','$password')";
			
			$query= mysqli_query($conn,$insert);
			
			if(!$query){
				echo 'data not inserted';
				
			}
			else{
				echo 'data inserted';
			}
		}
		else{
			echo('password is wrong');
			
		}
		}
		if(isset($_POST['readrecord'])){
		$data = "<table class='table table-striped'>
		<tr><th>Sr.No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Action</th>
		</tr>";
			$select= "select id,username,email,password from registration";
			
			$Selectquery= mysqli_query($conn,$select);
			if(mysqli_num_rows($Selectquery)>0){
				$number=1;
			while($row =mysqli_fetch_array($Selectquery)){
				
				$data .= "<tr><td>".$number."</td>
				<td>".$row[1]."</td>
				<td>".$row[2]."</td>
				<td>".$row[3]."</td>
				<td>
				<button type='button' class='btn btn-danger' onclick='EditFunction(".$row[0].")'>Edit</button>
				</td>
				<td>
				<button type='button' class='btn btn-danger' onclick='DeleteFunction(".$row[0].")'>Delete</button>
				</td></tr>";
				$number++;
			}
			}
			$data .="</table>";
			echo $data;	
		}
		
		
		mysqli_close($conn);
?>