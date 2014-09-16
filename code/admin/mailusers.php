<?php
$adobj->CheckSession();
$userid=$_REQUEST['uid'];
$data = $adobj->getmailId(PFO_REGISTER);
if(isset($_POST['mail_user']))
{
$datanew = $adobj->sendMail(PRO_TITLE,SITE_NAME,ADMIN_MAIL,$data[0]['firstname']);
header("location:mailusers.php?uid=$userid&$datanew");
}
//include(_PATH_TEMPLATE."common.php");
/*$str = "";
$data = $adobj->SelectAllPage(PFO_REGISTER,$str);
$user_count=count($data);
$pagingLink=$data[$user_count-1];
array_pop($data);

if($_REQUEST['del']=='user')
{
$deluser = DeleteUser(PFO_REGISTER,PFO_BOOK,PFO_MYIMAGE);
}
*/

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."mailusers.php");
}  

?>