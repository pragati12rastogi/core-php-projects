<?php
//Creating connection with phpmyadmin
	$server = "localhost";
	$username = "root";
	$pwd = "";
	$dbname = "infoseek";

	//connection string

	$conn = mysqli_connect($server,$username,$pwd,$dbname);


$sql = "SELECT id, firstname, lastname, image, email FROM practice";
$result= mysqli_query($conn,$sql);
?>
<form method="post">
<table border="1" cellpadding="10">
<tr>
<th>select</th>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>image</th>
<th>email</th>
<th>Operations</th>
</tr>

<?php
if(mysqli_num_rows($result)>0)
{
	while ($row= mysqli_fetch_assoc($result)){
		$id = $row["id"];
		echo "<tr>";
		echo "<td><input type='checkbox' name='checkbox_new[]' value='".$id."'></td>
		<td>" . $row['id'] . " </td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . 
		"</td><td><img src='" . $row["image"] . "' height='100' width='100'></td><td>" . $row['email'] . 
		"</td><td><a href='upd.php?id= ". $row['id'] ."'>" . "edit" . "</a></td>";
		//<a href='delete.php?id= ".$row["id"] . "'>" . "delete" . "</a></td>";
		echo "</tr>";
		}
		
	
}
		echo '<input type="submit" name="delete_val">';
		//

	
?>


</table>
</form>

<?php if(isset($_POST['delete_val'])){
	$take_ids = $_POST['checkbox_new'];
	foreach($take_ids as $delid){
		 $sql = "DELETE from practice where id = $delid ";
		$go = mysqli_query($conn,$sql);
		if($go == TRUE){
			header('location:fetch.php');
		}
	}
} ?>