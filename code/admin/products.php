<?php 
error_reporting(0);

$adobj->CheckSession();
$task = $_REQUEST['task'];

 
$str = "";
$data = $adobj->SelectAllPage(PFO_PRODUCTS,$str);
$product_count=count($data);
$pagingLink=$data[$product_count-1];
array_pop($data);

$cat = $adobj->SelectAll(PFO_CAT);
$sty = $adobj->SelectAll(PFO_STYLE);

if($task == 'edit' || $task == 'view')
{
$pid = $_REQUEST['prod_id'];
$where = "WHERE `prod_id` = '$pid' ";
$prod_details = $adobj -> SelectWhere(PFO_PRODUCTS,$where);

$cid = $prod_details[0]['cat_id'];
$whr = "WHERE `cat_id` = '$cid' ";
$subcat = $adobj -> SelectWhere(PFO_SUBCAT,$whr);
}

if(isset($_REQUEST['edit_product']))
{
$upprod = $adobj -> UpdateProduct(PFO_PRODUCTS);
}

if(isset($_REQUEST['add_product']))
{
$insert = $adobj->AddProduct(PFO_PRODUCTS);
}

if($_REQUEST['del']=='prod')
{
$delpro = $adobj -> DelProduct(PFO_PRODUCTS);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>