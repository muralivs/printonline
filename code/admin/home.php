<?php
$adobj->CheckSession();
$login = $adobj->SelectAll(PFO_REGISTER);

$total_member = count($login);

$amem = mysql_query("SELECT * FROM `pfo_register` WHERE `reg_status` = '1' AND `active_status` = '1' ");

$acount = mysql_num_rows($amem);

$bcount = $total_member - $acount;

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>