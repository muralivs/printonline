<?php
$qid = $_REQUEST['qid'];
if(($_REQUEST['task']=="view") || ($_REQUEST['task']=="edit"))
{
$where = "WHERE `id` = '$qid' ";
$data = $adobj->SelectWhere(PFO_FAQ,$where);
}
if($_REQUEST['task']=="userques")
{
$where = "WHERE `status` = '0' ";
$uq = $adobj->SelectWhere(PFO_FAQ,$where);
}

$task = $_REQUEST['task'];

if(isset($_REQUEST['faq_update']))
{
$field = "`question` = '".$_REQUEST['faq_question']."', `answer` = '".$_REQUEST['faq_answer']."', `status` = '1' ";
$where = "WHERE `id` = '$qid' ";
$update = $adobj->Update(PFO_FAQ,$field,$where);
if($update=="success")
{
header("Location:faq.php?task=view&qid=$qid&upsuccess");
}
}

if(isset($_REQUEST['faq_add']))
{
$add_faq = $adobj->AddFaq(PFO_FAQ);
}


if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>