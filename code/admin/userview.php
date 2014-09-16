<?php
$adobj->CheckSession();

$uid = $_REQUEST['uid'];
$where = "WHERE `reg_id` = '$uid' ";
$data = $adobj->SelectWhere(PFO_REGISTER,$where);

$img = $data[0]['photo'];
if($img=="")
{
$photo = "../profile_thumb/no_photo.jpg";
}
else
{
if(file_exists("../profile_thumb/".$img))
{
$photo = "../profile_thumb/".$img;
}
else
{
$photo = "../profile_thumb/no_photo.jpg";
}
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>