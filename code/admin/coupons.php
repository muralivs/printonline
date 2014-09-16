<?php
$adobj->CheckSession();

$str = "";
$data = $adobj->SelectAllPage(PFO_COUPON,$str);
$coupon_count=count($data);
$pagingLink=$data[$coupon_count-1];
array_pop($data);

if($_REQUEST['del']=='coupon')
{
$delcoupon = DeleteCoupon(PFO_COUPON);
exit;
}
if($_REQUEST['del']=='ucoupon')
{
$delcoupon = DeleteUsedCoupon(PFO_COUPON);
exit;
}

if($_REQUEST['task']=='used')
{
$str = "";
$where = "WHERE `cp_status` = '1' ORDER BY `cp_id` DESC";
$udata = $adobj->SelectAllPageWhere(PFO_COUPON,$str,$where);
$coupon_count=count($udata);
$pagingLink=$udata[$coupon_count-1];
array_pop($udata);
}


if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>