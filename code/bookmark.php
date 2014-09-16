<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

$book = $probj -> MyBookmark(PFO_PRODUCTS,PFO_BOOK,$uid);
$book_count=count($book);
$pagingLink=$book[$book_count-1];
array_pop($book);

if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>