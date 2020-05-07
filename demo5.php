<?php 
	$arr[0]=array('id'=>1,'name'=>'php');
	$arr[1]=array('id'=>2,'name'=>'JSP');
	$arr[2]=array('id'=>3,'name'=>'ASP');
	$_SESSION['mycar']=$arr;
	echo $_SESSION['mycar'][0]['id']."</br>";
	echo $_SESSION['mycar'][0]['name'];
?>