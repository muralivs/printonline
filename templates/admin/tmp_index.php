<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Login</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="50%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Admin login</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <form id="form1" name="form_alogin" method="post" action="">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php if($_REQUEST['flag']=='errorlogin') { ?>
						  <tr>
                              <td width="23%" class="red" colspan="3" align="center">Invalid Username and Password</td>                            
                              </tr>
						 <?php } ?>                            <tr>
                              <td width="23%" class="registertxt">User Name<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><input type="text" name="admin_uname" id="textfield2" value="" />                              </td>
                              </tr>
                            <tr>
                              <td class="registertxt">Password<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><label>
                                <input type="password" name="admin_pass" id="textfield3" value="" />
                              </label></td>
                              </tr>
                             <!--<tr>
                              <td colspan="3" class="registertxt" align="center"><a href="#" onClick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=businesscard_admin', 'windowname1', 'scrollbars,resizable,width=480, height=287'); return false;">Click here for demo link</a></td>
                            </tr> -->
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle">
							  <input type="submit" name="admin_login" class="go_btn" id="button2" value="Login" onClick="javascript:return Admin_Login();" /> 
							 
							  <!--<input type="button" name="admin_login" class="go_btn" id="button2" value="Login" onClick="alert('This feature is disabled in Demo version');" /> -->
							 
							  <!--<input type="submit" name="admin_login" class="go_btn" id="button2" value="Login"  onClick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=businesscard_admin', 'windowname1', 'scrollbars,resizable,width=480, height=287'); return false;"/>--><!--onClick="javascript:return Admin_Login();"--></td>
                            </tr>
                          </table>
                          </form>                          </td>
                        </tr>
                        

                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>