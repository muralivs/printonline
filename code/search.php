<?php
//CheckSessionIn();
$uid = $_SESSION['pfo_userid'];


$prod = $probj -> ProductListSearch(PFO_PRODUCTS);
$product_count=count($prod);
$pagingLink=$prod[$product_count-1];
array_pop($prod);

/*if(!isset($_REQUEST['prodsearch_x']))
{
if(isset($_REQUEST['subcat']))
{
$prod = $probj -> ProductSubList(PFO_PRODUCTS);
$product_count=count($prod);
$pagingLink=$prod[$product_count-1];
array_pop($prod);
}
}

if(isset($_REQUEST['selcat']))
{
$cat_id = $_REQUEST['selcat'];
$where = "WHERE `cat_id` = '$cat_id' ";
$subcat = SelectWhere(PFO_SUBCAT,$where);
$subcnt = count($subcat);
}*/

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>