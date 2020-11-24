<?php
require_once('mysql.php');
$key = htmlspecialchars($_GET['key']);
if(empty($_GET['key'])){}
else{
	$select =  $mysqli->query("SELECT `url`, `short_key` FROM `short` WHERE `short_key` = '".$key."'");
	$result = mysqli_fetch_assoc($select);
 
        header('location: '.$result['url']);
    }
}
?>