<?php 
	session_start();
	if(isset($_COOKIE['username'])){
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-3600,'/');
		}
		setcookie('username','',time()-1);
		session_destroy();
		echo "<script>location.href='index.php';</script>";
	}


?>