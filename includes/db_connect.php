<?php

ob_start();

/*$server = 'localhost';

$database = 'printonl_tuhur';

$datausername = 'printonl_tuhur';

$password = 'it3oHs3ATATA';*/

$username='printonl_tuhur';
$password='it3oHs3ATATA';

$server='localhost';

$database='printonl_tuhur';

$datausername = 'root'; 

$password ='';





/*$server='localhost';

$database='printonl_tuhur';

$datausername = 'printonl_tuhur'; 

$password ='it3oHs3ATATA';*/





/*$server='localhost';

$database='printonl_tuhur';

$datausername = 'printonl_tuhur'; 

$password ='it3oHs3ATATA';*/



$link = mysql_connect($server, $datausername, $password);

$db = mysql_select_db($database, $link);



/** Create Table Names */

define("PFO_MEMBER_REQUEST","pfo_membership_request");

define("PFO_PACKAGE","pfo_generalpackage");

define("PFO_GENERAL","pfo_generalsettings");

define("PFO_REGISTER","pfo_register");

define("PFO_COUNTRY","pfo_country");

define("PFO_ADMIN","pfo_admin");

define("PFO_CUSTOM","pfo_custompage");

define("PFO_HELP","pfo_help");

define("PFO_FAQ","pfo_faq");

define("PFO_ENQUIRY","pfo_enquiry");

define("PFO_MEMBERSHIP","pfo_membership");

define("PFO_PRODUCTS","pfo_products");

define("PFO_CAT","pfo_category");

define("PFO_SUBCAT","pfo_subcategory");

define("PFO_STYLE","pfo_styles");

define("PFO_BOOK","pfo_bookmark");

define("PFO_NEWS","pfo_newsletter");

define("PFO_MYIMAGE","pfo_myimage");

define("PFO_COUPON","pfo_coupon");

define("PFO_PRICE","pfo_price");

define("PFO_STATE","pfo_state");

define("PFO_PORTFOLIO","pfo_portfolio");

define("PFO_UPDESIGN","pfo_uploaddesign");

define("PFO_TMPCART","pfo_tmpcart");

define("PFO_CART","pfo_cart");

define("PFO_SHIP","pfo_shipping");

define("PFO_OTHERPRICE","pfo_otherprice");

define("PFO_SHOPPING","pfo_shopping");

/** Create Table Names End **/





//$sel_general = Select(PFO_GENERAL);

$gen_table = PFO_GENERAL;



//echo "SELECT * FROM `$gen_table` " ; exit ;



$sel_general = @mysql_query("SELECT * FROM `$gen_table` ");

$fet_general = @mysql_fetch_array($sel_general);



define('TITLE',$fet_general['title']);

define('PRO_TITLE',$fet_general['project_title']);

define('SITE_NAME',$fet_general['site_name']);

define('SITE_LOGO',$fet_general['site_logo']);

define('ADMIN_MAIL',$fet_general['admin_mail']);

define('PAYPAL_ID',$fet_general['paypal_id']);

define("WORKING_DIR",getcwd());





$sel_latestcard = @mysql_query("SELECT * FROM `pfo_products` order by prod_id desc limit 0,1 ");

$fet_latestcard = @mysql_fetch_array($sel_latestcard);

?>