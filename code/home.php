<?php
CheckSessionIn();
$datas = $probj -> HomeAccount(PFO_REGISTER,PFO_MEMBERSHIP);

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

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>