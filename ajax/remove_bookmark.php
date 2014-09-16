<?php
include "../includes/db_connect.php";
$table = PFO_BOOK;  
$pid=$_GET['q'];
$uid = $_GET['uid'];


if($pid!="")
{
$query = mysql_query("DELETE FROM `$table` WHERE `user_id` = '$uid' AND `prod_id` = '$pid' ");
echo $pid;
}

?><?php
include "../includes/db_connect.php";
$table = PFO_BOOK;  
$pid=$_GET['q'];
$uid = $_GET['uid'];


if($pid!="")
{
$query = mysql_query("DELETE FROM `$table` WHERE `user_id` = '$uid' AND `prod_id` = '$pid' ");
echo $pid;
}

?>