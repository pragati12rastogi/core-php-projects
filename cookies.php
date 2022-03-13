<!DOCTYPE html>
<?php
$cookies_name=$_POST['user'];
$cookies_value=$_POST['pass'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>
<form method="post">
<input type="text" name="user">
<input type="text" name="pass">
<input type="submit" name="btn">
</form>
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
	} 
	else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>