<?php
$car = array('maruti','toyota','safari');
rsort($car);

$var=count($car); //length
for($i=0;$i<$var;$i++)
{
	echo $car[$i];
	echo "<br>";
}
echo "<br/>";
?>

<?php
$ani= array('bird'=>'parrot','mammal'=>'dolphin','pet'=>'dog');
arsort($ani);

foreach($ani as $x => $x_value)
{
	echo "key =". $x . " value =". $x_value ;

		echo "<br>";
}
echo"<br/>";
echo"<hr/>";
?>
<?php
$r="2";
$c="2";

echo $r+$c;
?>
