<?php
$adobj->CheckSession();

$data = SelectPrice(PFO_PRICE);


if(isset($_REQUEST['sub_price']))
{
$update = UpdatePrice(PFO_PRICE);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>