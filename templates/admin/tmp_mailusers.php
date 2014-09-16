<?php
include("config.php")
 ?>

<script>
function validate()
{
if(document.mailsend.subject.value=="")
{
alert('Please Enter the Subject');
document.mailsend.subject.focus();
return false;
}
if(document.mailsend.message.value=="")
{
alert('Please Enter the Message');
document.mailsend.message.focus();
return false;
}
}
</script>
<link href="<?php echo _PATH_STYLESHEET;  ?>" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td  style="padding:5px 5px 0px 5px" class="registerheading"><div align="center">Send Message </div></td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                       
						<?php if(isset($_REQUEST['sent'])){ ?>
                        <tr>
                          <td align="center" valign="top"><?php echo _MAILSENT; ?></td>
                        </tr>
					<?php	} ?>
					<?php if(isset($_REQUEST['notsent'])){ ?>
                        <tr>
                          <td align="center" valign="top"><?php echo _MAILNOTSENT_ERROR; ?></td>
                        </tr>
					<?php	} ?>
                        <tr>
							<td align="center" ><table width="75%">
							<form name="mailsend" method="post" action="">
							  <tr>
							    <td width="40%" class="mycart_txt"><div align="center">Mail to </div></td>
							    <td width="60%"><input type="text" readonly="readonly" name="mail" value="<?php echo $data[0]['email'] ?>"/></td>
						      </tr>
							  <tr>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
						      </tr>
							  <tr>
							    <td class="mycart_txt"><div align="center">Subject</div></td>
							    <td><input type="text" name="subject" /></td>
						      </tr>
						      <tr>
						        <td>&nbsp;</td>
						        <td>&nbsp;</td>
					          </tr>
						      <tr>
						      <td class="mycart_txt"><div align="center">Message</div></td>
					        <td><textarea name="message"></textarea></td></tr>
							  <tr>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
						      </tr>
							  <tr>
						      <td><div align="center">&nbsp;</div></td>
					        <td><input type="submit" name="mail_user" class="go_btn" value="Send" onClick="return validate();">
					          <input type="button" name="mail_user2" class="go_btn" value="Close" onClick="window.close();"></td></tr>
							</form>
							</table></td>
						</tr>

                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>