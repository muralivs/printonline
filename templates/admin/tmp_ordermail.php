<?php
include("../../includes/db_connect.php");
$oid = $_REQUEST['oid'];

$selqry = mysql_query("SELECT * FROM `pfo_shopping` WHERE `order_id` = '$oid' ");
$data = mysql_fetch_array($selqry);

$fimg = $data['imgpathf'];
$bimg = $data['imgpathb'];

if(isset($_REQUEST['sub_omail']))
{
$email = $_REQUEST['order_mail'];
$mes = $_REQUEST['order_mes'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.ADMIN_MAIL.'' . "\r\n";
$sub="New Product - '".PRO_TITLE."' ";

$message="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td colspan='2'><img src='".SITE_NAME."/images/".SITE_LOGO."' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td colspan='2'>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' colspan='2' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi </b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' colspan='2' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'>$mes</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' colspan='2' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'>&nbsp;</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:10px;'>Front Side</td>
			<td style='padding-left:10px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'><img src='".SITE_NAME."/".$fimg."' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:10px;'>Back Side</td>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:10px;'><img src='".SITE_NAME."/".$bimg."' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' colspan='2' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".PRO_TITLE." Team<br>
				<font><a href='".SITE_NAME."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".SITE_NAME."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td colspan='2'>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' colspan='2' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright 2009. ".SITE_NAME ."</td>
		</tr>
	</table>";
	
mail($email,$sub,$message,$headers) or die("mail Not sent");

echo "<script>window.opener='x';window.close();</script>";
}

?>
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
<script>
function OrderMailValidation()
{
	if(document.frm_omail.order_mail.value=="")
	{
		alert("Please Enter Mail id");
		document.frm_omail.order_mail.focus();
		return false;
	}
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Send mail to production department</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px">
                      <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:5px">
						<tr><td align="right" style="padding:10px 10px 0px 0px;"><a href="javascript: window.close();">Close</a></td></tr>
                        <tr>
                          <td align="left" valign="top">
						  <form name="frm_omail" method="post">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    
    <td width="80%"><table width="100%" align="left" border="0" cellspacing="0" bgcolor="#E9F2FF" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
     						<tr><td colspan="3" bgcolor="#FFFFFF">&nbsp;</td></tr>
						    <tr bgcolor="#FFFFFF">
                              <td width="21%" align="left" class="heading3">Email</td>
							  <td width="4%" align="center" class="heading3">:</td>
							  <td width="75%" align="left" class="heading3">
							 <input type="text" name="order_mail" value="" style="width:200px;">
							  </td>
                            </tr>
                            <tr><td colspan="3" bgcolor="#FFFFFF">&nbsp;</td></tr>
                            <tr bgcolor="#FFFFFF">
                              <td width="21%" align="left" class="heading3">Message</td>
							  <td width="4%" align="center" class="heading3">:</td>
							  <td width="75%" align="left" class="heading3">
							 <textarea name="order_mes" cols="35" rows="5"></textarea>
							  </td>
                            </tr>
                            <tr><td colspan="3" bgcolor="#FFFFFF">&nbsp;</td></tr>
							<tr bgcolor="#FFFFFF">
                              <td colspan="3" align="center" class="heading3"><input type="submit" name="sub_omail" value="Send" class="go_btn" onClick="javascript: return OrderMailValidation();"></td>
                            </tr>
							 <tr><td colspan="3" bgcolor="#FFFFFF">&nbsp;</td></tr>
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