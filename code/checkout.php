<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

$where = "WHERE `user_id` = '$uid' ";
$selcon = SelectWhere(PFO_SHIP,$where);



$where = "WHERE `user_id` = '$uid' ";
$ship = SelectWhere(PFO_CART,$where);


$shipmethod = $ship[0]['ship_method'];
#### Prod Details #####

$prod_id = $ship[0]['prod_id'];
$pwhere = "WHERE `prod_id` = '$prod_id' ";
$prod_details = SelectWhere(PFO_PRODUCTS,$pwhere);

$ship_price = $prod_details[0][$shipmethod];

$initotal=$total=$_SESSION['amt']; 		//echo final
//////////member type///////////
	$mem_card=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_membership` where user_id='$uid'"));
	if($mem_card['title']!="Free")
	$memtype=$mem_card['title'];
	else
	$memtype="Free Member";
//////////////////////////
//////////member type discount///////////
if($memtype!="Free Member")
{
	$mem_card=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_generalpackage`"));
	$memtype1=strtolower($memtype."_discount");
	$pac_dis=$mem_card[$memtype1];
	$aftermemdis=number_format(($total * $pac_dis) / 100,2);
	$aftermemtot=$total=number_format($total-(($total * $pac_dis) / 100),2); 		//echo final
}
////////////////////////////////////
//////////coupon enable///////////
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
//$total = $balance_amount + $_SESSION['amt'];
}
else if($fetdata['cp_status']==0)
{
mysql_query("UPDATE `pfo_coupon` SET `cp_status` = '1' WHERE `coupon` = '$cp_num' ");
$cp_disc = $fetdata['cp_discount'];

$cpdisamt = number_format(($_SESSION['amt'] * $cp_disc) / 100,2);
$balamt = $_SESSION['amt'] - $cpdisamt;
$afercoutot=number_format($total=$balamt-$aftermemdis,2);         //echo final
//$total = $balance_amount + $_SESSION['amt']; 
}

}
else
{
$error = "No matching Record";
}

}





//////////////////////////////////////


$price = Select(PFO_OTHERPRICE);

$ship_cost = $ship_price;

//$discount = $price[0]['ship_discount'];
$discount = 0;

$discount_price = number_format(($ship_cost*$discount) / (100),2);

$balance_amount = $ship_cost - $discount_price;


$total = number_format($balance_amount + $total,2); /////final total

################ TAX START ###################

if($selcon[0]['country']==1)
{
	$gst = (($ship[0]['price'])*(0.5) ) / 100;
	$tax = $gst;
}
if(($selcon[0]['country']==1) && ($selcon[0]['state']=="Ontario"))
{
	$tax = 0;
	$pst = (($ship[0]['price'])*(0.8) ) / 100;
	$tax = $gst+$pst;
	$total = number_format($total + $tax,2);
}

################ TAX START ###################


if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>