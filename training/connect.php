<?php	
$conn= mysqli_connect('localhost','root','');
if(!$conn)
{
	echo"not made";
}

$db ="CREATE DATABASE DB1";
if(mysqli_query($conn, $db))
{
	echo "db is created";
}
else{
	echo "not created";
}


?>