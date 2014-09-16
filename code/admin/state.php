<?php
$adobj->CheckSession();

$task = $_REQUEST['task'];
$cat_id = $_REQUEST['cid'];

$str = "cid=$cat_id";
$where = "WHERE `cid` = '$cat_id' ";
$subcat = $adobj->SelectSubcat(PFO_STATE,$str,$where);
$subcat_count=count($subcat);
$pagingLink=$subcat[$subcat_count-1];
array_pop($subcat);

if($task == 'edit')
{
$sid = $_REQUEST['sid'];
$where = "WHERE `sid` = '$sid' ";
$subcat = $adobj->SelectWhere(PFO_STATE,$where);
}
if($_REQUEST['del']=='state')
{
$delsubcat = $adobj->DeleteState(PFO_STATE);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>