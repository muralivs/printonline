<?php
include "../includes/db_connect.php";
$table = PFO_COUPON;
$per = $_GET['per'];

$val = rand(0,10000);
$coupon1 = str_replace(0,1,strtoupper(md5($val)));
$coupon = substr(str_replace('O','P',$coupon1),0,10);

$qry = mysql_query("SELECT * FROM `$table` WHERE `coupon` = '$coupon' ");
while(mysql_num_rows($qry)>0)
{
$val = rand(0,10000);
$coupon1 = str_replace(0,1,strtoupper(md5($val)));
$coupon = substr(str_replace('O','P',$coupon1),0,10);
}



if(($per=="") || (!is_numeric($per)) )
{ ?>
<div style="overflow:hidden; z-index:3; background:#FFFFCC; position:absolute; width:250px; height:75px; top:250px; left:600px; border:1px solid #FFBA75;">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="right"><a href="javascript:void(0);" onclick="DivClose();" class="product-txt">X</a></td>
  </tr>
  <tr>
    <td align="center">Please Enter Discount Percentage as Numeric Value</td>
  </tr>
  <tr><td>&nbsp;</td></tr>
</table>

</div>
<?php }
else
{
mysql_query("INSERT INTO `$table` (coupon,cp_discount) VALUES('$coupon','$per') ");
?>
<div style="overflow:hidden; z-index:3; background:#FFFFCC; position:absolute; width:250px; height:100px; top:250px; left:600px; border:1px solid #FFBA75;">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="right"><a href="javascript:void(0);" onclick="DivClose();" class="product-txt">X</a></td>
  </tr>
  <tr>
    <td align="center">Please Note Your Coupon Details</td>
  </tr>
   <tr>
    <td align="center">Coupon : <?php echo $coupon; ?></td>
  </tr>
  <tr>
    <td align="center">Discount Percentage : <?php echo $per; ?> % </td>
  </tr>
</table>

</div>
<?php } ?><?php
include "../includes/db_connect.php";
$table = PFO_COUPON;
$per = $_GET['per'];

$val = rand(0,10000);
$coupon1 = str_replace(0,1,strtoupper(md5($val)));
$coupon = substr(str_replace('O','P',$coupon1),0,10);

$qry = mysql_query("SELECT * FROM `$table` WHERE `coupon` = '$coupon' ");
while(mysql_num_rows($qry)>0)
{
$val = rand(0,10000);
$coupon1 = str_replace(0,1,strtoupper(md5($val)));
$coupon = substr(str_replace('O','P',$coupon1),0,10);
}



if(($per=="") || (!is_numeric($per)) )
{ ?>
<div style="overflow:hidden; z-index:3; background:#FFFFCC; position:absolute; width:250px; height:75px; top:250px; left:600px; border:1px solid #FFBA75;">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="right"><a href="javascript:void(0);" onclick="DivClose();" class="product-txt">X</a></td>
  </tr>
  <tr>
    <td align="center">Please Enter Discount Percentage as Numeric Value</td>
  </tr>
  <tr><td>&nbsp;</td></tr>
</table>

</div>
<?php }
else
{
mysql_query("INSERT INTO `$table` (coupon,cp_discount) VALUES('$coupon','$per') ");
?>
<div style="overflow:hidden; z-index:3; background:#FFFFCC; position:absolute; width:250px; height:100px; top:250px; left:600px; border:1px solid #FFBA75;">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="right"><a href="javascript:void(0);" onclick="DivClose();" class="product-txt">X</a></td>
  </tr>
  <tr>
    <td align="center">Please Note Your Coupon Details</td>
  </tr>
   <tr>
    <td align="center">Coupon : <?php echo $coupon; ?></td>
  </tr>
  <tr>
    <td align="center">Discount Percentage : <?php echo $per; ?> % </td>
  </tr>
</table>

</div>
<?php } ?>