<?php
$conn = mysqli_connect('localhost','root','','ajaxtraining')or die(mysqli_error($conn));
		
	extract($_POST);
if(isset(['user']) && isset(['email']) && isset(['password']) && isset(['description']) && isset(['Subjects']) && isset(['gender']) 
	&& isset(['location']) && isset(['date']) )
	{
		echo"data all inserted";
	}
?>