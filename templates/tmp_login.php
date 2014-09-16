<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Login</td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">User login</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <form id="form1" name="frm_login" method="post" action="">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php if($_REQUEST['flag']=='errorlogin') { ?>
						  <tr>
                              <td width="23%" class="red" colspan="3" align="center">Invalid Username and Password</td>                            
                              </tr>
						  <?php } else if($_REQUEST['flag']=='errorblock') { ?>
						  <tr>
                              <td width="23%" class="red" colspan="3" align="center">Your Account Blocked by Admin</td>                            
                              </tr>
						 <?php } else if($_REQUEST['flag']=='erroractive') { ?>
						  <tr>
                              <td width="23%" class="red" colspan="3" align="center">Check Your Mail to Activate Your Account</td>                            
                              </tr>
						 <?php } ?>                            <tr>
                              <td width="23%" class="registertxt">E-mail<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><input type="text" name="login_email" id="textfield2" value="<?php echo $_SESSION['Session_email']; ?>" />                              </td>
                              </tr>
                            <tr>
                              <td class="registertxt">Password<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><label>
                                <input type="password" name="login_pass" id="textfield3" value="<?php echo $_SESSION['password']; ?>" />
                              </label></td>
                              </tr>
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" class="registertxt"><label></label></td>
                              <td align="left" valign="middle"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                                <tr>
                                  <td width="7%">
								  <?php	if(isset($_COOKIE['pfoname']) && isset($_COOKIE['pfopassword']))
									{ ?>
								  <input type="checkbox" name="rem" id="checkbox" value="Y" checked="checked"/>
								  <?php } else {?>
								  <input type="checkbox" name="rem" id="checkbox" value="Y"/>
								  <?php }?>
								  </td>
                                  <td width="93%">Remember Me</td>
                                </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle"><input type="submit" name="submit_login1" class="go_btn" id="button2" value="Login" onClick="javascript:return LoginValidation1();" /></td>
                            </tr>
                          <!--  <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle"><a href="#" onClick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=businesscard', 'windowname1', 'scrollbars,resizable,width=480, height=287'); return false;" class="demo">For demo login click here</a> </td>
                            </tr> -->
                            <tr>
                              <td colspan="3" class="registertxt"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="3">
                                <tr>
                                  <td width="25%" align="right" ><a href="registration.php" class="read_link">Register Now</a></td>
                                  <td width="4%" align="center">|</td>
                                  <td width="71%"><a href="forgot_pass.php"  class="read_link">Forgot Password</a></td>
                                </tr>
                              </table></td>
                              </tr>
                          </table>
                          </form>                          </td>
                        </tr>
                        

                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>
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