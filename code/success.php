<?php
//CheckSessionOut();

$uid = $_SESSION['pfo_userid'];

$oid = $_SESSION['orderid'];

$suc = PaySuccess(PFO_SHOPPING,PRO_TITLE,SITE_NAME,SITE_LOGO,ADMIN_MAIL,$oid,$uid);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>