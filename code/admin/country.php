<?php
error_reporting(0);
$adobj->CheckSession();
$task = $_REQUEST['task'];

$str = "";
$cat = $adobj->SelectCatStyle(PFO_COUNTRY,$str);
$cat_count=count($cat);
$pagingLink=$cat[$cat_count-1];
array_pop($cat);

if($task == 'edit')
{
$cat_id = $_REQUEST['cat_id'];
$where = "WHERE `countryid` = '$cat_id' ";
$cat = $adobj->SelectWhere(PFO_COUNTRY,$where);
}
if($_REQUEST['del']=='cat')
{
$delcat = $adobj->DeleteCountry(PFO_COUNTRY);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>