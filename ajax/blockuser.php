<?php
include "../includes/db_connect.php";
$table = PFO_REGISTER;  

$uid = $_GET['id'];
$st = $_GET['q'];

if($st==1)
{
mysql_query("UPDATE `$table` SET `reg_status` = '0' WHERE `reg_id` = '$uid' ");
?>
<a href="javascript:void(0);" onclick="BlockUser('<?php echo $uid; ?>',0,'blockid<?php echo $uid; ?>');" ><img src='../images/icon/block.png' border='0' title="Unblock" /></a>
<?php } 
else if($st==0)
{ 
mysql_query("UPDATE `$table` SET `reg_status` = '1' WHERE `reg_id` = '$uid' ");
?>
<a href="javascript:void(0);" onclick="BlockUser('<?php echo $uid; ?>',1,'blockid<?php echo $uid; ?>');" ><img src='../images/icon/unblock.png' border='0' title="Block" /></a>
<?php } ?>