<?php

$db_host = 'localhost';  
    $db_user = 'root';  
    $db_pass = ''; // 
    $db_name = 'test';   
	$db_table = 'short';

	$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
   
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>