<?php
include "../includes/db_connect.php";
$table = PFO_FAQ;  
$query=$_GET['q'];

if($query!="")
{ 
$query = mysql_query("INSERT INTO `$table` (question,status) VALUES('$query','0') ");
echo "<td align='center' class='green' style='padding:5px'>Your Query Posted Successfully</td>";
}

?>
