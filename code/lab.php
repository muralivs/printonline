<?php
CheckSessionIn();

$uid = $_SESSION['pfo_userid'];

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>