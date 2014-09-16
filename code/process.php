<?php
CheckSessionIn();

$uid = $_SESSION['pfo_userid'];



if(isset($_REQUEST['amt']))
{
	$total = $_REQUEST['amt'];
	$_SESSION['orderid'] = $_REQUEST['oid'];
}
else
{
	$total = $_REQUEST['cart_total'];
	$shop = ShoppingCart(PFO_CART,PFO_SHOPPING,$total,$uid,PRO_TITLE,SITE_NAME,SITE_LOGO,ADMIN_MAIL);
}


//echo $_SESSION['orderid']; exit;

//$formaction="https://www.paypal.com/cgi-bin/webscr";
//$paypalmail="thushyrt@printfast.ca";

//$formaction="https://www.sandbox.paypal.com/cgi-bin/webscr";

$formaction=SITE_NAME."/success.php";

$paypalmail="inetsolution.asif@gmail.com";

$Product = "Business Card Design";

//$success="http://localhost/prabhu/projects/printfastonline/success.php";
//$success= "http://pfo.udhayanidhi.com/success.php";
//$fail="http://localhost/prabhu/projects/printfastonline/failure.php";
//$fail = "http://pfo.udhayanidhi.com/failure.php";

//------------------localhost settings----------
//$success="http://localhost/printfastonline/success.php";
//$fail="http://localhost/printfastonline/failure.php";
//------------------localhost settings ----------
$success=SITE_NAME."/success.php";
$fail=SITE_NAME."/failure.php";

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>