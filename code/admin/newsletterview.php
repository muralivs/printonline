<?php
$adobj->CheckSession();


$data = $adobj->SelectAllPage('pfo_newsletter','');
$mail_count=count($data);
$pagingLink=$data[$mail_count-1];
array_pop($data);

if(isset($_REQUEST['delnews']))
{
	$nid = $_REQUEST['nid'];
	mysql_query("DELETE FROM `pfo_newsletter` WHERE `ne_id` = '$nid' ");
	header("Location:newsletterview.php?del=suc");
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>