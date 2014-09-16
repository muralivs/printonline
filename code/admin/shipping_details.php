<?php
$adobj->CheckSession();
$uid = $_REQUEST['uid'];

$str = "";
$where = "WHERE `user_id` = '$uid' ";
$data = $adobj->SelectAllPageWhere(PFO_SHIP,$str,$where);
$user_count=count($data);
$pagingLink=$data[$user_count-1];
array_pop($data);



if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>