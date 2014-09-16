<?php

CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

$selcountry = Select(PFO_COUNTRY);
$logoprice = Select(PFO_OTHERPRICE);

$where = "WHERE `reg_id` = '$uid' ";
$add = SelectWhere(PFO_REGISTER,$where);

$cwhere = "WHERE `user_id` = '$uid' ";
$cart = SelectWhere(PFO_CART,$cwhere);

$prod_id = $cart[0]['prod_id'];

$pwher = "WHERE `prod_id` = '$prod_id' ";
$prod_detail = SelectWhere(PFO_PRODUCTS,$pwher);

if(isset($_REQUEST['shipping']))
{
$inqry = $probj -> ShippingAddress(PFO_SHIP,PFO_CART,$uid);
}

mysql_query("UPDATE `pfo_cart` SET `price` = '".$_SESSION['amt']."' WHERE `user_id` = '$uid' ");

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}
 
?>