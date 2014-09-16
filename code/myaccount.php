<?php
CheckSessionIn();

$task = $_REQUEST['task'];
$selcountry = Select(PFO_COUNTRY);

$uid = $_SESSION['pfo_userid'];
$where = "WHERE `reg_id` = '$uid'";
$datas = SelectWhere(PFO_REGISTER,$where);

$img = $datas[0]['photo'];
if($img=="")
{
$profile_photo = "profile_thumb/no_photo.jpg";
}
else
{
if(file_exists("profile_thumb/".$img))
{
$profile_photo = "profile_thumb/".$img;
}
else
{
$profile_photo = "profile_thumb/no_photo.jpg";
}
}

if(isset($_REQUEST['submit_editaccount']))
{
$update_details = $probj -> UpdateProfile(PFO_REGISTER);
$_SESSION['pfo_username']=ucfirst($_REQUEST['reg_firstname']);
}

if(isset($_REQUEST['editphoto']))
{
$update_photo = $probj -> UpdatePhoto(PFO_REGISTER);
}

if(isset($_REQUEST['submit_editpass']))
{
$update_pass = $probj -> UpdatePass(PFO_REGISTER,PRO_TITLE,SITE_NAME,SITE_LOGO,ADMIN_MAIL);
}

if(isset($_REQUEST['submit_editemail']))
{
$update_email = $probj -> UpdateEmail(PFO_REGISTER,PRO_TITLE,SITE_NAME,ADMIN_MAIL);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>