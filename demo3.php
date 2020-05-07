<?php
	$arr=array("a"=>"php","b"=>"ASP","c"=>"JSP");
	// $array=each($arr);
	// print_r($array);
	for($i=0;$i<count($arr);$i++){
		$array=each($arr);
		print_r($array);
		print_r("</br>");
	}
?>