<?php
CheckSessionOut();
if(isset($_REQUEST['refer']))
{
$id = $_REQUEST['uid'];
$refer = $_REQUEST['refer'];
$active = $probj -> Activation(PFO_REGISTER,$id,$refer);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>