<?php
// $db = new mysqli("eyekandiesnew.mysql.db", "eyekandiesnew", "KandiData333", "eyekandiesnew");
$db = new mysqli("localhost", "root", "", "eyekandiesnew");
//$_GET['a'] = 3;
 if(isset($_GET['a'])){
	 setcookie ("agent_id", "", time() - 31500000, '/' , $_SERVER['SERVER_NAME']);
	 unset($_COOKIE['agent_id']);	 	 
	 $agent =  $_GET['a'];
	 $q = $db->query( "SELECT id FROM agency WHERE  id ='".$agent."'");
	 $row = $q->fetch_array(MYSQLI_ASSOC);
	 if(isset($row['id'])){
			setcookie("agent_id", $row['id'],time()+ 3600 * 24, '/' , $_SERVER['SERVER_NAME'] , false);
			//header("location:apply.php");
	  }
 } ?>