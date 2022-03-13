<?php
$x = array("h","f","d","e");
$y = array("1","2","3","4");
$z =array();
$total = Count($x);

for($i=0;$i<$total;$i++){
$z["$x[$i]"] =  $y[$i];
}
echo('$z =');print_r($z);
?>