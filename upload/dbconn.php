<?php
//DATABASE INFORMATION
function connectToDB()
 {
	global $link;
	//$db_name ="dbwest";
	//$link=mysql_connect('localhost','root','');
	
	$db_name ="vsjayan_creativeprinting";
	
 	$link=mysql_connect("71.18.216.43","vsjayan_creative","inetteam");
 	if(!$link)
 		die("Could'nt connect to database");
 	mysql_select_db($db_name, $link)
 		or die("Error opening database: ".mysql_error());
		
 }
connectToDB();
?>