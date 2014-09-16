<?php
include "../includes/db_connect.php";
$table = PFO_BOOK;  
$pid=$_GET['q'];
$uid = $_GET['uid'];
if($uid=='')
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle' bgcolor='#CACACA'><span class='red'>&nbsp;&nbsp;Login to Bookmark.</span></td>";
}
else
{
if($pid!="")
{
$selqry = mysql_query("SELECT * FROM `$table` WHERE `user_id` = '$uid' AND `prod_id` = '$pid' ");
$num = mysql_num_rows($selqry);

if($num==0)
{
$inqry = mysql_query("INSERT INTO `$table` (user_id,prod_id) VALUES('$uid','$pid')");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle' bgcolor='#CACACA'><span class='green'>&nbsp;&nbsp;Bookmarked.</span></td>";
}
else
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle' bgcolor='#CACACA'><span class='green'>&nbsp;&nbsp;Already Bookmarked.</span></td>";
}

}
}
?>