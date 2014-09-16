<?php

CheckSessionIn();
$uid = $_SESSION['pfo_userid'];


$where = "WHERE `user_id` = '$uid' ";
$data = SelectWhere(PFO_CART,$where);

$cartcount = count($data);
$_SESSION['cartcount'] = $cartcount;

if(isset($_REQUEST['quantity']))
{
$cnt = count($_REQUEST['quantity']);
$qty = $_REQUEST['quantity'];
$paper = $_REQUEST['paper'];
$cid = $_REQUEST['cid'];

for($i=0; $i<$cnt; $i++)
{
$qry = mysql_query("UPDATE `pfo_cart` SET `quantity` = '$qty[$i]', `paper` = '$paper[$i]' WHERE `id` = '$cid[$i]' ");
}
header("Location:display_cart.php");
}

$logoprice = Select(PFO_OTHERPRICE);

if($_REQUEST['del']=='prod')
{
$pid = $_REQUEST['pid'];
$pdel = DeleteFromCart(PFO_CART,$pid); 
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}
 
?>