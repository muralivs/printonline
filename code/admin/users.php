<?php
$adobj->CheckSession();



if(isset($_REQUEST['search']))
{
$str = "";
$data = $adobj->userSearch(PFO_REGISTER,$str);
$user_count=count($data);
$pagingLink=$data[$user_count-1];
array_pop($data);
}else{

$str = "";
//$data = $adobj->SelectAllPage(PFO_REGISTER,$str);
$where="ORDER BY  `last_signin` DESC";
$data = $adobj->SelectAllPageWhereOrder(PFO_REGISTER,$str,$where);

$user_count=count($data);
$pagingLink=$data[$user_count-1];
array_pop($data);
}

if($_REQUEST['del']=='user')
{
$deluser = DeleteUser(PFO_REGISTER,PFO_BOOK,PFO_MYIMAGE);
}

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
}  

?>