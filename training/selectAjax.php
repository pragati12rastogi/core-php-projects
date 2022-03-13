<?php 
include 'ajaxconnection.php';

		
			$select= "select id,username,email,password from registration";
			
			$query= mysqli_query($conn,$select);
			
			if(!$query){
				echo 'data not inserted';
				
			}
			else{
				echo 'data inserted';
			}
		
		mysqli_close($conn);
		
?>