<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

if(isset($_FILES['up_image']['name']))
{
$imgup = $probj -> UploadImage(PFO_MYIMAGE,$uid);
}
if($_REQUEST['del']=='images')
{
$delimages = DeleteImages(PFO_MYIMAGE);
}
$str = "";
$where = "WHERE `user_id` = '$uid' AND `img_status` = '1'";
$myimg = $probj -> SelectAllPageWhere(PFO_MYIMAGE,$str,$where);
$img_count=count($myimg);
$pagingLink=$myimg[$img_count-1];
array_pop($myimg);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>