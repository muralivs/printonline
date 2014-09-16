<?php
include "../includes/db_connect.php";
$table = PFO_ADMIN;  
$pass=$_GET['pass'];

if($pass!="")
{
$query = mysql_query("SELECT * FROM `$table` WHERE `password` = '$pass' ");
$cnt_email = mysql_num_rows($query);
if($cnt_email>0)
{
echo "<td valign='middle'><span class='green'>Correct Old Password.</span></td>";
}
else
{
echo "<td valign='middle'><span class='red'>Invalid Old Password.</span></td>";
}
}

?><?php
include "../includes/db_connect.php";
$table = PFO_ADMIN;  
$pass=$_GET['pass'];

if($pass!="")
{
$query = mysql_query("SELECT * FROM `$table` WHERE `password` = '$pass' ");
$cnt_email = mysql_num_rows($query);
if($cnt_email>0)
{
echo "<td valign='middle'><span class='green'>Correct Old Password.</span></td>";
}
else
{
echo "<td valign='middle'><span class='red'>Invalid Old Password.</span></td>";
}
}

?>