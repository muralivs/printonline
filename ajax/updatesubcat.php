<?php
include "../includes/db_connect.php";
$table = PFO_SUBCAT;  

$subcat = $_GET['subcat'];
$subcat_id = $_GET['id'];

if($subcat == "")
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Enter Sub Category Name.</span></td>";
}
else
{
$qry = mysql_query("SELECT * FROM `$table` WHERE `subcategory` = '$subcat' ");
$cntcat = mysql_num_rows($qry);
if($cntcat>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Sub Category Already Exist.</span></td>";
}
else
{
$inqry = mysql_query("UPDATE `$table` SET `subcategory` = '$subcat' WHERE `subcat_id` = '$subcat_id' ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Sub Category Updated Successfully.</span></td>";
}
}
?>