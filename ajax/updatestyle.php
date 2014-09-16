<?php
include "../includes/db_connect.php";
$table = PFO_STYLE;  

$style = $_GET['style'];
$sty_id = $_GET['id'];

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
$inqry = mysql_query("UPDATE `$table` SET `style` = '$style' WHERE `sty_id` = '$sty_id' ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Style Updated Successfully.</span></td>";
}
}
?><?php
include "../includes/db_connect.php";
$table = PFO_STYLE;  

$style = $_GET['style'];
$sty_id = $_GET['id'];

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
$inqry = mysql_query("UPDATE `$table` SET `style` = '$style' WHERE `sty_id` = '$sty_id' ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Style Updated Successfully.</span></td>";
}
}
?>