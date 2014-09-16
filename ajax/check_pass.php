<?php
include "../includes/db_connect.php";
$table = PFO_REGISTER;  
$pass=$_GET['q'];
$sesid = $_REQUEST['sesid'];
if($pass!="")
{

$query = mysql_query("SELECT * FROM `$table` WHERE `password` = '$pass' AND `reg_id` = '$sesid' ");
$cnt_email = mysql_num_rows($query);
if($cnt_email>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;&nbsp;Correct Old Password.</span></td>";
}
else
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;&nbsp;Invalid Old Password.</span></td>";
}
}

?>