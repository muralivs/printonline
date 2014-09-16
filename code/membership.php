<?php
CheckSessionIn();
$uid = $_SESSION['pfo_userid'];

if($_REQUEST['member_request'])
$prod = $probj -> MembershipRequest(PFO_MEMBER_REQUEST);




if(!$userobj->tmp_filecheck($page)) {
	echo _TMPFILE_ERROR ;
} else {
	include(_PATH_TEMPLATE."common.php");
} 
?>