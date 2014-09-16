<?php
error_reporting(0);

$adobj->CheckSession();

$str = "";
$data = $adobj->SelectAllPage(PFO_SHOPPING,$str);
$user_count=count($data);
$pagingLink=$data[$user_count-1];
array_pop($data);

if($_REQUEST['del']=='order')
{
$deluser = DeleteOrder(PFO_SHOPPING);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>