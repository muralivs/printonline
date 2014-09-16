<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

$oid = $_REQUEST['oid'];


$where = "WHERE `id` = '$oid' ";
$myorder = SelectWhere(PFO_SHOPPING,$where);


if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>