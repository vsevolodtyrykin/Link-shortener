<?php
require_once('mysql.php');

if(empty($_GET['link'])){}
	else{
		$links =$_GET['link'];
		
		$letters='qwertyuiopasdfghjklzxcvbnm1234567890';
		$count=strlen($letters);
		$intval=time();
		$result_rand='';
		for($i=0;$i<4;$i++) {
			$last=$intval%$count;
			$intval=($intval-$last)/$count;
			$result_rand.=$letters[$last];
		}
		
	$insert_value = $mysqli->query("INSERT INTO ".$db_table." (`url`, `short_key`) VALUES ('".$links."', '".$result_rand."')");
		 
	$select =  $mysqli->query("SELECT `url`, `short_key` FROM `short` ORDER BY id DESC LIMIT 1");
	$result = mysqli_fetch_assoc($select);
	echo ('http://'.$_SERVER['HTTP_HOST'].'/'.$result['short_key']);
    }
?>
<form method="get" action="">
    <input type="text" name="link">
    <input type="submit" name="submit">
</form>
