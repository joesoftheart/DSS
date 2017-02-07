<?php
$link = mysql_connect("localhost","root","");
if($link){
	echo "Connected successfull<br>";
	echo "Connection number = $link"; 
	
	}else{
		die('Could not connect:' .mysql_error());
		}

?>