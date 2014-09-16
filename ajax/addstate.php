<?php
include "../includes/db_connect.php";
$table = PFO_STATE;  

$subcat = $_GET['subcat'];
$cat_id = $_GET['cid'];

if($subcat == "")
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Enter State Name.</span></td>";
}
else
{
$qry = mysql_query("SELECT * FROM `$table` WHERE `state` = '$subcat' AND `cid` = '$cat_id' ");
$cntcat = mysql_num_rows($qry);
if($cntcat>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;State Already Exist.</span></td>";
}
else
{
$inqry = mysql_query("INSERT INTO `$table` (cid,state) VALUES('$cat_id','$subcat') ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;State Added Successfully.</span></td>";
}
}
?>