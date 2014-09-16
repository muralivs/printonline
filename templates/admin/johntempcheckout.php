<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

$where = "WHERE `user_id` = '$uid' ";
$ship = SelectWhere(PFO_CART,$where);

$totprice=$_SESSION['amt'];
//////////member type///////////
	$mem_card=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_membership` where user_id='$uid'"));
	if($mem_card['title'])
	$memtype=$mem_card['title'];
	else
	$memtype="Free Member";
//////////////////////////
//////////member type price///////////
if($memtype!="Free Member")
{
	$mem_card=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_generalpackage`"));
	$memtype1=strtolower($memtype."_discount");
	$pac_dis=$mem_card[$memtype1];
}
////////////////////////////////////
//////////member type price///////////

//////////////////////////////////////


$price = Select(PFO_OTHERPRICE);

$ship_cost = $price[0][$ship[0]['ship_method']];
$discount = $price[0]['ship_discount'];

$discount_price = ($ship_cost*$discount) / (100);

$balance_amount = $ship_cost - $discount_price;






if(isset($_REQUEST['subcoupon']))
{
$cp_num = $_REQUEST['coupon'];
$selqry = mysql_query("SELECT * FROM `pfo_coupon` WHERE `coupon` = '$cp_num' ");
$cnt = mysql_num_rows($selqry);
if($cnt>0)
{
$fetdata = mysql_fetch_array($selqry);
if($fetdata['cp_status']==1)
{
$error = "Coupon Already Used";
$total = $balance_amount + $_SESSION['amt'];
}
else if($fetdata['cp_status']==0)
{
mysql_query("UPDATE `pfo_coupon` SET `cp_status` = '1' WHERE `coupon` = '$cp_num' ");
$cp_disc = $fetdata['cp_discount'];

$cpdisamt = ($_SESSION['amt'] * $cp_disc) / 100 ;
$balamt = $_SESSION['amt'] - $cpdisamt;
$_SESSION['amt'] = $balamt;
$total = $balance_amount + $_SESSION['amt'];
}

}
else
{
$error = "No matching Record";
$total = $balance_amount + $_SESSION['amt'];
}

}
else
{
$total = $balance_amount + $_SESSION['amt'];
}


if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>