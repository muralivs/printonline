<?php
include "../includes/db_connect.php";
$table = PFO_STYLE;  

$style = $_GET['style'];

if($style == "")
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Enter Style.</span></td>";
}
else
{
$qry = mysql_query("SELECT * FROM `$table` WHERE `style` = '$style' ");
$cntcat = mysql_num_rows($qry);
if($cntcat>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Style Already Exist.</span></td>";
}
else
{
$inqry = mysql_query("INSERT INTO `$table` (style) VALUES('$style') ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Style Added Successfully.</span></td>";
}
}
?>