<?php
error_reporting(0);

//if(isset($_REQUEST['admin_login']))
if(isset($_REQUEST['dlogin']) || isset($_REQUEST['admin_login']))
{ 
$login = $adobj->Admin_Login(PFO_ADMIN);
}
if(isset($_SESSION['admin_userid']))
{
header("Location:home.php");
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>