<?php
$conn= mysqli_connect('localhost','root','','form');
$id = $_GET['id'];
$sql ="SELECT * FROM `menu` WHERE id = $id";
$out= mysqli_query($conn,$sql);
if(mysqli_num_rows($out))
{
	while($row= mysqli_fetch_assoc($out))
	{
		$menu=$row['menu'];
	}
}

?>
<form method="post">
<input type="text" name="menu" value="<?php echo $menu;?>">
<input type="submit" name="upd" value="update">
</form>
<?php
if(isset($_POST['upd']))
{
	$menu=$_POST['menu'];
	
	$up="UPDATE `menu` SET `menu`='$menu' WHERE id= $id";
	
	if(mysqli_query($conn,$up) ==TRUE)
	{
		echo"updated";
		header('location: tables.php');
	}
	else{
		echo ('fail' . mysqli_error($conn));
	}
}

?>