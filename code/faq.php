<?php
//CheckSessionOut();
$where = "WHERE `status` = '1' ";
$faq = SelectWhere(PFO_FAQ,$where);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>