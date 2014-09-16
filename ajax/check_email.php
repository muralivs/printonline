<?php
include "../includes/db_connect.php";
$table = PFO_REGISTER;  
$email=$_GET['q'];
$sesid = $_REQUEST['sesid'];
if($email!="")
{

$query = mysql_query("SELECT * FROM `$table` WHERE `email` = '$email' AND `reg_id` = '$sesid' ");
$cnt_email = mysql_num_rows($query);
if($cnt_email>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>$email Already Exist.</span></td>";
}
else
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>$email Available.</span></td>";
}
}

?>