<?php
include "../includes/db_connect.php";
$table = PFO_CAT;  

$cat = $_GET['cat'];

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
$inqry = mysql_query("INSERT INTO `$table` (category) VALUES('$cat') ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Category Added Successfully.</span></td>";
}
}
?>