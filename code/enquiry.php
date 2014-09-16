<?php
//CheckSessionOut();
if(isset($_REQUEST['submit_enq']))
{
$data = Enquiry(PFO_ENQUIRY,PRO_TITLE,SITE_NAME,SITE_LOGO,ADMIN_MAIL);
}
if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>