<?php
$sql ="CREATE DATABASE mydb";
$conn = mysqli_connect("localhost","root","","mydb");

?>
<form method="post" action="">
Firstname:<input type="text" name="first" /> 
Lastname:<input type="text" name="last"/>
Email:<input type="email" name="email"/>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
	echo $first= $_POST['first'];
	echo $last= $_POST['last'];
	echo $email= $_POST['email'];
}
?>