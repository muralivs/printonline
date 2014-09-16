<?php
$adobj->CheckSession();
$data = $adobj->SelectAll(PFO_CUSTOM);
$task = $_REQUEST['task'];

if($task=='help')
{
$str = "task=help";
$help = $adobj->SelectAllPage(PFO_HELP,$str);
$help_count=count($help);
$pagingLink=$help[$help_count-1];
array_pop($help);
}
if($task=='faq')
{
$str = "task=faq";
$where = "WHERE `status` = '1' ";
$faq = $adobj->SelectAllPageWhere(PFO_FAQ,$str,$where);
$faq_count=count($faq);
$pagingLink=$faq[$faq_count-1];
array_pop($faq);
}

if(isset($_REQUEST['sub_custom']))
{
$update = $adobj->UpdateAll(PFO_CUSTOM);
}
if(isset($_REQUEST['del']))
{
if($_REQUEST['del']=='help')
{
$table = PFO_HELP;
$where = "WHERE `id` = '".$_REQUEST['qid']."' ";
$delete_help = $adobj->DeleteAll($table,$where);
if($delete_help=="success")
{
header("Location:custom.php?task=help&delsuccess");
}
}
else if($_REQUEST['del']=='faq')
{
$table = PFO_FAQ;
$where = "WHERE `id` = '".$_REQUEST['qid']."' ";
$delete_faq = $adobj->DeleteAll($table,$where);
if($delete_faq=="success")
{
header("Location:custom.php?task=faq&delsuccess");
}
}

}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>