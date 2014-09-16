<?php
include "../includes/db_connect.php";
$table = PFO_STATE;  

$state = $_GET['subcat'];
$sid = $_GET['id'];

if($state == "")
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Enter State Name.</span></td>";
}
else
{
$qry = mysql_query("SELECT * FROM `$table` WHERE `state` = '$state' ");
$cntcat = mysql_num_rows($qry);
if($cntcat>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;State Already Exist.</span></td>";
}
else
{
$inqry = mysql_query("UPDATE `$table` SET `state` = '$state' WHERE `sid` = '$sid' ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;State Updated Successfully.</span></td>";
}
}
?>