<?php
include "../includes/db_connect.php";
$table = PFO_SUBCAT;  

$subcat = $_GET['subcat'];
$cat_id = $_GET['cid'];

if($subcat == "")
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Enter Sub Category Name.</span></td>";
}
else
{
$qry = mysql_query("SELECT * FROM `$table` WHERE `subcategory` = '$subcat' AND `cat_id` = '$cat_id' ");
$cntcat = mysql_num_rows($qry);
if($cntcat>0)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;Sub Category Already Exist.</span></td>";
}
else
{
$inqry = mysql_query("INSERT INTO `$table` (cat_id,subcategory) VALUES('$cat_id','$subcat') ");
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;Sub Category Added Successfully.</span></td>";
}
}
?>