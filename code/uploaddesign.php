<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

if(isset($_REQUEST['submit_design']))
{
$designup = $probj -> UploadDesign(PFO_UPDESIGN,$uid);
}




$where = "WHERE `user_id` = '$uid' ";
$updesign = SelectWhere(PFO_UPDESIGN,$where);
$design_count = count($updesign);

$fimg = $updesign[0]['frontimage'];
$bimg = $updesign[0]['backimage'];

if($design_count>0)
{
if($fimg=="")
{
$frontdesign = "itemImages/thumbs/no_image.jpg";
}
else
{
if(file_exists("itemImages/thumbs/".$fimg))
{
$frontdesign = "itemImages/thumbs/".$fimg;
}
else
{
$frontdesign = "itemImages/thumbs/no_image.jpg";
}
}

if($bimg=="")
{
$backdesign = "itemImages/thumbs/no_image.jpg";
}
else
{
if(file_exists("itemImages/thumbs/".$bimg))
{
$backdesign = "itemImages/thumbs/".$bimg;
}
else
{
$backdesign = "itemImages/thumbs/no_image.jpg";
}
}

}
else
{
$frontdesign = "itemImages/thumbs/no_image.jpg";
$backdesign = "itemImages/thumbs/no_image.jpg";
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>