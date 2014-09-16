<?php
error_reporting(0);
$adobj->CheckSession();
$task = $_REQUEST['task'];

$str = "";
$style = $adobj->SelectCatStyle(PFO_STYLE,$str);
$style_count=count($style);
$pagingLink=$style[$style_count-1];
array_pop($style);

if($task == 'edit')
{
$sty_id = $_REQUEST['sty_id'];
$where = "WHERE `sty_id` = '$sty_id' ";
$style = $adobj->SelectWhere(PFO_STYLE,$where);
}
if($_REQUEST['del']=='style')
{
$delstyle = $adobj->DeleteStyle(PFO_STYLE);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>