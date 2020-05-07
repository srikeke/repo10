<?php 
	setcookie("user['username']","admin");
	setcookie("user['password']","123456");
	foreach($_COOKIE["user"] as $key => $value){
		echo "{$key} => {$value}</br>";
	}
?>