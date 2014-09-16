<?php
ob_start();
$adobj->CheckSession();
$data = $adobj->SelectAll(PFO_PACKAGE);


if(isset($_REQUEST['submit_package']))
{
$update = $adobj->UpdatePackage(PFO_PACKAGE);
}
$str = "view=list";
$cat = $adobj->SelectAllPageWhereOrder(PFO_MEMBER_REQUEST,$str,"ORDER BY `id` DESC ");
$cat_count=count($cat);
$pagingLink=$cat[$cat_count-1];
array_pop($cat);


if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>