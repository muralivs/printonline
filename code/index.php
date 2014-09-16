<?php
CheckSessionOut();

$cat = Select(PFO_CAT);
$style = Select(PFO_STYLE);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>