<?php
$qid = $_REQUEST['qid'];
$where = "WHERE `id` = '$qid' ";
$data = $adobj->SelectWhere(PFO_HELP,$where);

$task = $_REQUEST['task'];

if(isset($_REQUEST['help_update']))
{
$field = "`question` = '".$_REQUEST['help_question']."', `answer` = '".$_REQUEST['help_answer']."' ";
$where = "WHERE `id` = '$qid' ";
$update = $adobj->Update(PFO_HELP,$field,$where);
if($update=="success")
{
header("Location:help.php?task=view&qid=$qid&upsuccess");
}
}

if(isset($_REQUEST['help_add']))
{
$add_help = $adobj->AddHelp(PFO_HELP);
}


if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>