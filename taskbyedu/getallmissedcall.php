<?php

require_once 'db_functions.php';
$db = new DB_Functions();

	
$missedcall =$db->getAllMissedCall();
echo json_encode($missedcall);


?>