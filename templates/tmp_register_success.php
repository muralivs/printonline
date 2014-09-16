<script type="text/javascript">
<!--
function Redirect()
{
    window.location="login.php";
}

//document.write("You will be redirected to main page in 5 sec.");
setTimeout('Redirect()', 10000);
//-->
</script>
<?php if(isset($_REQUEST['refer'])) { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Registration</td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Registration Activation</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <form id="form1" name="form_login" method="post" action="">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php if($active == 'activated') {?>
                            <tr>
                              <td width="23%" class="green" align="center">You Account Activated Successfully.<span class="startrequire"></span></td>

                              </tr>
							  <?php } else if($active == 'notactivated') { ?>
							  <tr>
                              <td width="23%" class="red" align="center">Sorry! Your Account Could Not Activated at This Moment. Try Later.<span class="startrequire"></span></td>

                              </tr>
							   <?php } else if($active == 'already_activated') { ?>
							  <tr>
                              <td width="23%" class="green" align="center">Your Account Already Activated.<span class="startrequire"></span></td>

                              </tr>
							  <?php } ?>
							  <tr>
                              <td width="23%" class="registertxt" align="right">This Page Will be Redirected While a Moment. Otherwise <a href="login.php" class="read_link">Click</a> Here.<span class="startrequire"></span></td>

                              </tr>
                          </table>
                          </form>                          </td>
                        </tr>
                        

                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>
<?php } else { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Registration</td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Registration Success</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <form id="form1" name="form_login" method="post" action="">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                            <tr>
                              <td width="23%" class="registertxt">You Have Register Successfully With <?php echo PRO_TITLE; ?><span class="startrequire"></span></td>

                              </tr>
							  <tr>
                              <td width="23%" class="registertxt">Please Check Your Email to Activate Your Account.<span class="startrequire"></span></td>

                              </tr>
							  <tr>
                              <td width="23%" class="registertxt" align="right">This Page Will be Redirected While a Moment. Otherwise <a href="login.php" class="read_link">Click</a> Here.<span class="startrequire"></span></td>

                              </tr>
                          </table>
                          </form>                          </td>
                        </tr>
                        

                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>
<?php } ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:15px">
                  <tr>
                    <td width="5%" height="30" align="center" valign="top" class="creditheading">&nbsp;</td>
                     <td width="77%" height="30" align="left" valign="top" class="creditheading">All Major Credit / Debit Cards Accepted</td>
                    <td width="18%" rowspan="2" align="left" valign="top" class="creditheading"><img src="images/paypal.jpg" width="81" height="97" /></td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
                    <td align="left"><img src="images/creditcards.jpg" width="372" height="48" /></td>
                    </tr>
                </table>