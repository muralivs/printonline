<?php
error_reporting(0);
$adobj->CheckSession();
$data = $adobj->SelectAll(PFO_GENERAL);

if(isset($_REQUEST['submit_setting']))
{
$update = $adobj->UpdateSettings(PFO_GENERAL);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>