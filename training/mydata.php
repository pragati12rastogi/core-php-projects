<?php
$conn= mysqli_connect('localhost','root','','form');
if(!$conn){
	echo 'not connected';
}?>
<?php
session_start();
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
 $sql ="SELECT * FROM `table` WHERE email = '".$email."' ";
$result= mysqli_query($conn,$sql);
}

?>
<table border="1" cellpadding="10">
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>gender</th>
<th>profile_pic</th>
<th>password</th>
<th>changes</th>
</tr>
<?php

if(mysqli_num_rows($result)>0)
{
	while ($row= mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>" . $row['id'] . " </td>
		<td>" . $row['firstname'] . "</td>
		<td>" . $row['lastname'] . "</td>
		<td>" . $row['email'] ."</td>
		<td>" .$row['gender']."</td>
		<td><img src='" . $row["profile pic"] . "' height='60' width='60'></td>
		<td>". $row["password"] ."</td>
		<td><a href='update.php?id= ". $row['id'] ."'>" . "edit" ."</a><br><a href='del.php?id= ". $row["id"] . "'>" . "delete" .
		"</a><br><a href='login.php?id=". $row["id"] ."'>" . "logout" . "</a></td>";
		echo "</tr>";
		}
}


?>
</table>