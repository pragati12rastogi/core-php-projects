<?php
class DB_Functions
{
	private $conn;
	
	 function __construct()
	 {
		 require_once 'db_connect.php';
          $db=new DB_Connect();
         
		 $this->conn=$db->connect();
		  
	 }
	 
	 
	 function __destruct()
	 {
		 
		 
	 }
	 
	 
	
	
	
	/*
	 * Register New Missed Call
	 * return User Object if user was created 
	 * return false and show error message if have exception
	 */
	 
	
	public function registerNewUser($phone,$date)
	{
		$stmt =$this->conn->prepare("INSERT INTO Missedcallinfo(Phone,Date) VALUES(?,?)");
		$stmt->bind_param("ss",$phone,$date);
		$result=$stmt->execute();
		$stmt->close();
		
		
		if($result)
		{
			$stmt=$this->conn->prepare("SELECT * FROM Missedcallinfo WHERE Phone = ?");
			$stmt->bind_param("s",$phone);
            $stmt->execute();
	   	    $user=$stmt->get_result()->fetch_assoc();
     		$stmt->close();		
			return $user;
		
		}
		
		else
		{
			return false;
			
		}
		
		
	}
	
	
	public function getAllMissedCall()
	{
		$result = $this->conn->query("SELECT * FROM Missedcallinfo");
		
		$missedcall = array();
		
		while($item = $result->fetch_assoc())
			$missedcall[] = $item;
		return $missedcall;
	}
	
	 
	
	
}



?>