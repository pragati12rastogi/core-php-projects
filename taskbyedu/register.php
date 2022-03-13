<?php
require_once 'db_functions.php';

$db=new DB_Functions();

  
 /*
  * Endpoint : https://<domain>/drinkshop/register.php
  * Method : Post 
  * Params :phone,name,birthdate,address
  * Result : Json
  */
  $response =array();
  
  if(isset($_POST['phone'])
	  && isset($_POST['date']))
  {
	  $phone=$_POST['phone'];
	  $date=$_POST['date'];
	  
	  
	  

	  // create new user 
	   $user=$db->registerNewUser($phone,$date);
	   
	   if($user)
	   {
		   $response["phone"]=$user["Phone"];
		   $response["date"]=$user["Date"];
		   
		   echo json_encode($response);
		   
	   }
	   
	   else{
		   $response["error_msg"]="Unknown Error occured in registration ! ";
		  echo json_encode($response);
		   
	   }
		  
		  
	  }
	  
	  
  
  
  else{
	  
	  
	  $response["error_msg"]="Required parameter (phone,date) is missing !";
		  echo json_encode($response);
  }
  
  


?>
