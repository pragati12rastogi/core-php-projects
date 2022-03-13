<!DOCTYPE html>
<html>
<body>
<form method="post">
<input type="text" name="number">
<input type="submit" name="btn">
</form>

<?php
if(isset($_POST['btn']));
{
$j=$_POST['number'];

for($i=1;$i<=10;$i++)
{
	echo $j*$i;
	echo "<br>";
}
}
?>
 
</body>
</html>