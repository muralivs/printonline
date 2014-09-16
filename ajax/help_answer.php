<?php
include "../includes/db_connect.php";
$table = PFO_HELP;  
$id=$_GET['qid'];

if($id!="")
{ 
$query = mysql_query("SELECT `answer` FROM `$table` WHERE `id` = '$id' ");
	$data = mysql_fetch_array($query);
}

?>

<table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#CACACA" style="border:5px solid #383C97;" >
<tr><td colspan="2" align="right" class="jqmClose"><a href="javascript:void(0);" class="jqmClose heading1" >Close X</a></td></tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $data['answer']; ?></td>
  </tr>
</table>
