<?php
//CheckSessionOut();
$data = Select(PFO_CUSTOM);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>