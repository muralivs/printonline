<?php
$adobj->CheckSession();

$oprice = $adobj -> SelectAll(PFO_OTHERPRICE);


if(isset($_REQUEST['sub_oprice']))
{
$update = UpdateOtherPrice(PFO_OTHERPRICE);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>