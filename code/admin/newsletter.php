<?php
$adobj->CheckSession();
//include_once "clsSendmail.php";


if(isset($_REQUEST['submit_news']))
{
if(trim($_REQUEST['newsletter'])!="")
{
$news = $adobj -> Newsletter(PFO_NEWS,PRO_TITLE,SITE_NAME,ADMIN_MAIL);
}
else
{
$error = "Enter Message to Post";
}
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>