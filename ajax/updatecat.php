<?php
include "../includes/db_connect.php";
$table = PFO_CAT;  

$cat = $_GET['cat'];
$cat_id = $_GET['id'];

if($cat == "")
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Enter Category Name.</span></td>";
}
else
{
$qry = mysql_query("SELECT * FROM `$table` WHERE `category` = '$cat' ");
$cntcat = mysql_num_rows($qry);
if($cntcat>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Category Already Exist.</span></td>";
}
else
{
$inqry = mysql_query("UPDATE `$table` SET `category` = '$cat' WHERE `cat_id` = '$cat_id' ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Category Updated Successfully.</span></td>";
}
}
?>