<?php
if(!isset($_REQUEST['dlogin']))
{
CheckSessionOut();
}
ob_start();
if((isset($_REQUEST['submit_login1'])) || (isset($_REQUEST['dlogin'])))
{

$datas = $probj -> Login(PFO_REGISTER,ADMIN_MAIL,SITE_NAME,PRO_TITLE);
}
if(isset($_COOKIE['pfoname']) && isset($_COOKIE['pfopassword']))
{
$_SESSION['Session_email']=$_COOKIE['pfoname'];
$_SESSION['password']=$_COOKIE['pfopassword'];
}
if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>