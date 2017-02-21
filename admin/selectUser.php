<?php
	include "../public/db.php";
	$sql="select username from user";
	$result=$db->query($sql);
	$username=$_GET["username"];
	while($row=$result->fetch_assoc()){
		if($row["username"]==$username){
			echo "error";
			exit;
		}
	}
	echo "ok";
?>