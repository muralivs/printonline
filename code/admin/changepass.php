<?php
$adobj->CheckSession();

//$data = $adobj->SelectAll(PFO_ADMIN);

if(isset($_REQUEST['submit_pass']))
{
$update = $adobj->UpdatePass(PFO_ADMIN);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>