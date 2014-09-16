<?php
include "../includes/db_connect.php";
$table = PFO_CART;  

$imgtype = $_GET['q'];
$pid = $_GET['pid'];
$divid = $_GET['did'];

$qry = mysql_query("SELECT * FROM `$table` WHERE `id` = '$pid' ");
$fetdata = mysql_fetch_array($qry);

if($imgtype=='F')
{
?>
<td bgcolor="#FFFFFF" style="padding:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><img src="<?php echo $fetdata['imgpathb']; ?>" border="0" width="350" height="200" /></td>
  </tr>
<tr>
    <td align="center"><a href="javascript: void(0); " onclick="FlipCard('B','<?php echo $divid; ?>','<?php echo $pid; ?>'); " class="plink">Flip Card</a></td>
  </tr>
</table>
</td>
<?php } 
else if($imgtype=='B')
{ 
?>
<td bgcolor="#FFFFFF" style="padding:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><img src="<?php echo $fetdata['imgpathf']; ?>" border="0"  width="350" height="200"/></td>
  </tr>
<tr>
    <td align="center"><a href="javascript: void(0); " onclick="FlipCard('F','<?php echo $divid; ?>','<?php echo $pid; ?>'); " class="plink">Flip Card</a></td>
  </tr>
</table>
</td>
<?php } ?>