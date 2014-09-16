<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];


$str = "";
$where = "WHERE `user_id` = '$uid' ";
$myorder = $probj -> SelectAllPageWhere(PFO_SHOPPING,$str,$where);
$order_count=count($myorder);
$pagingLink=$myorder[$order_count-1];
array_pop($myorder);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>