<?php
$adobj->CheckSession();

$nid = $_REQUEST['nid'];

//$query = mysql_query("SELECT * FROM `pfo_news` WHERE `id` = '$nid' ");
$query = mysql_query("SELECT * FROM `pfo_newsletter` WHERE `ne_id` = '$nid' ");
$data = mysql_fetch_array($query);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>