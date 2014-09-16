<?php
include("../../includes/db_connect.php");
$oid = $_REQUEST['oid'];

$selqry = mysql_query("SELECT * FROM `pfo_shopping` WHERE `order_id` = '$oid' ");
$data = mysql_fetch_array($selqry);
$order_status = $data['order_status'];

if(isset($_REQUEST['sub_ostat']))
{
$status = $_REQUEST['selorder_status'];
mysql_query("UPDATE `pfo_shopping` SET `order_status` = '$status' WHERE `order_id` = '$oid' ") or die(mysql_error());

echo "<script>window.opener.location.reload()</script>";
echo "<script>window.close()</script>";
}

?>
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Change Order Status</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
						<tr><td align="right" style="padding:10px 10px 0px 0px;"><a href="javascript: window.close();">Close</a></td></tr>
                        <tr>
                          <td align="left" valign="top">
						  <form name="frm_orderstatus" method="post">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    
    <td width="80%"><table width="100%" align="left" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="10" style="margin-top:10px; margin-bottom:15px">
						    <tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Order Status</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3">
							  <select name="selorder_status">
							  <option value="Process in Pending" <?php if($order_status == "Process in Pending") echo "Selected"; ?> >Process in Pending</option>
							  <option value="Printing in process" <?php if($order_status == "Printing in process") echo "Selected"; ?> >Printing in process</option>
							  <option value="Shipping in process" <?php if($order_status == "Shipping in process") echo "Selected"; ?> >Shipping in process</option>
							  <option value="Product Delivered" <?php if($order_status == "Product Delivered") echo "Selected"; ?> >Product Delivered</option>
							  </select>
							  </td>
                            </tr>
							 
							<tr bgcolor="#FFFFFF">
                              <td width="39%" colspan="3" align="center" class="heading3">
							  <input type="submit" name="sub_ostat" value="Submit" class="go_btn"> 
							<!--  <input type="button" name="sub_ostat" value="Submit" class="go_btn" onclick="alert('This feature is disabled in Demo version');"> -->
							  </td>
                            </tr>
							 
                          </table></td>
  </tr>
</table>
						  </form>
                                                
						     </td>
                        </tr>
                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>