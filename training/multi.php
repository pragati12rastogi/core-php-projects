<?php
$var =array(
array('jack','calif',32),
		array('meghu','paris',24),
		array('vamo','jick',25));
		
		for($i=0;$i<3;$i++)
		{
		echo "row no. is" . $i . "<br>";
		echo"<ul>";
		
		for($x=0;$x<3;$x++)
		{
		echo "<li>";
		echo $var[$i][$x] ."</li>";
		}
		echo"</ul>";
		}
?>
<?php
session_start();

$_SESSION['favcolor']= "green";
$_SESSION['favani']="dog";
 
echo "session is set";

echo "favcolor is='".$_SESSION['favcolor']."'";

$_SESSION['favcolor']="red";
print_r($_SESSION);
?>