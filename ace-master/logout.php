<?php 
session_start();
unset($_SESSION['email']);
session_destroy();
//header('location:/training/login_reg.php');
header('location:/training/login.php');
?>