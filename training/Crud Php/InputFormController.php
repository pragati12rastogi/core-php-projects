<?php
$conn = mysqli_connect('localhost','root','','ajaxtraining')or die(mysqli_error($conn));

extract($_POST);

if(isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['check']) && isset($_POST['gender']) && isset($_POST['location']) && isset($_POST['description'])){
	
	$insert = "INSERT INTO `inputForm`(`Name`, `Pass`, `Language`, `gender`, `Location`, `Description`) VALUES ('$email','$pwd','$check','$gender','$location','$description')" ; 
	$insertQuery = mysqli_query($conn,$insert);
	if($insertQuery){
		echo("Data is inserted");
	}else{
		echo("Data is not inserted");
	}
	
}
if(isset($_POST['Record'])){
	 $Select = "SELECT `Pk_Id`, `Name`, `Pass`, `Language`, `gender`, `Location`, `Description` FROM `inputForm`";
	 $selectQuery = mysqli_query($conn,$Select);
	 $data ="";
	
	 if(mysqli_num_rows($selectQuery)>0){
		 while($row = mysqli_fetch_assoc($selectQuery)){
			 $data.="<tr><td>".$row['Pk_Id']."</td>
			 <td>".$row['Name']."</td>
			 <td>".$row['Pass']."</td>
			 <td>".$row['Language']."</td>
			 <td>".$row['gender']."</td>
			 <td>".$row['Location']."</td>
			 <td>".$row['Description']."</td>
			 <td><a href='UpdateInput.php?id=".$row['Pk_Id']."'>Update</a></td>
			 <td><a href='DeleteInput.php?id=".$row['Pk_Id']."'>Delete</a></td>
			 </tr>";
		 }
		 
	 }
	
	 echo $data;
}
?>