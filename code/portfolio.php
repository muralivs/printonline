<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

if($_REQUEST['del']=='port')
{
$delimages = DeletePortfolio(PFO_PORTFOLIO);
}
$str = "";
$where = "WHERE `user_id` = '$uid' ";
$myport = $probj -> SelectAllPageWhere(PFO_PORTFOLIO,$str,$where);
$img_count=count($myport);
$pagingLink=$myport[$img_count-1];
array_pop($myport);

if($_REQUEST['add']=="cart")
{
$addcart = PortfolioToCart(PFO_PORTFOLIO,PFO_CART);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>