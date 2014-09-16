<?php
$adobj->CheckSession();
$task = $_REQUEST['task'];
$cat_id = $_REQUEST['cat_id'];

$str = "cat_id=$cat_id";
$where = "WHERE `cat_id` = '$cat_id' ";
$subcat = $adobj->SelectSubcat(PFO_SUBCAT,$str,$where);
$subcat_count=count($subcat);
$pagingLink=$subcat[$subcat_count-1];
array_pop($subcat);

if($task == 'edit')
{
$subcat_id = $_REQUEST['subcat_id'];
$where = "WHERE `subcat_id` = '$subcat_id' ";
$subcat = $adobj->SelectWhere(PFO_SUBCAT,$where);
}
if($_REQUEST['del']=='subcat')
{
$delsubcat = $adobj->DeleteSubCat(PFO_SUBCAT);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>