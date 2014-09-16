<?php
include "../includes/db_connect.php";
$table = PFO_COUNTRY;  

$cat = $_GET['cat'];

if($cat == "")
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Enter Country Name.</span></td>";
}
else
{
$qry = mysql_query("SELECT * FROM `$table` WHERE `country` = '$cat' ");
$cntcat = mysql_num_rows($qry);
if($cntcat>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Country Already Exist.</span></td>";
}
else
{
$inqry = mysql_query("INSERT INTO `$table` (country) VALUES('$cat') ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Country Added Successfully.</span></td>";
}
}
?>