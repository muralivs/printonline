<?php
CheckSessionOut();
$datas = $probj -> Registration(PFO_REGISTER,PFO_MEMBERSHIP,PRO_TITLE,SITE_NAME,SITE_LOGO,ADMIN_MAIL);
//$selcountry = Select(PFO_COUNTRY);
$selcountry = SelectOrderBy(PFO_COUNTRY,'country');

###############FORGOT PASSWORD###################
$msg=$_REQUEST['div'];
$dis="none"; 
if(isset($_REQUEST['div']))
{
$dis="block";
}
##############FORGOT PASSWORD END######################

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>