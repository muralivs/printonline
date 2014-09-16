<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="48%"  style="padding:5px 5px 0px 5px">Hi <?php echo $_SESSION['pfo_username']; ?> </td>
                          <td width="52%" align="right" valign="bottom" class="startrequire">
                          <form id="form1" name="form1" method="post" action="">
                          <table width="60%" border="0" cellspacing="4" cellpadding="0">
                            <tr>
                              <td width="45%">
                            
                                <input type="button" class="account_btn" name="button2" id="button2" value="My Account" onclick="window.location.href='myaccount.php?task=view'" />
                                
                              </td>
                              <td width="55%">
							  <input type="button" class="account_btn" name="button3" id="button3" value="Edit My Account" onclick="window.location.href='myaccount.php?task=editdetails'"  /></td>
                            </tr>
                          </table>
                          </form>
                          </td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="4" cellpadding="0">
					  <?php if(isset($_REQUEST['suc'])) { ?>
					  	<tr>
							<td align="center" colspan="3" class="green">
							<?php if($_REQUEST['suc']=='profile') { echo 'Your Profile Updated Successfully'; } else if($_REQUEST['suc']=='pass') { echo 'Your Password Updated Successfully'; } else if($_REQUEST['suc']=='photo') { echo 'Your Photo Updated Successfully'; } else if($_REQUEST['suc']=='email') { echo 'Your Login Email Updated Successfully'; } ?>
							</td>
						</tr>
						<?php } ?>
                        <tr>
                          <td width="99%" height="25" colspan="3" align="left" class="heading2">My Account</td>
                        </tr>
                        <tr>
                          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="4" cellpadding="0">
                              <tr>
                              <td class="registertxt">E- mail</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="53%"><?php echo $datas[0]['email']; ?></td>
    <td width="47%"><a href="myaccount.php?task=editemail" class="mainnav_link" >Change Login Email</a></td>
  </tr>
</table>

							  </td>
                              <td width="32%" rowspan="7" align="left" valign="top"><table width="100%" border="0" cellspacing="4" cellpadding="0">
                                <tr>
                                  <td align="center"><img src="<?php echo $profile_photo; ?>" /></td>
                                </tr>
                                <tr>
                                  <td align="center"><a href="myaccount.php?task=editphoto" class="mainnav_link">Change Photo</a></td>
                                </tr>
                              </table></td>
                            </tr>
                               <!--<tr>
                              <td class="registertxt">Password</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="53%">*********</td>
    <td width="47%"><a href="myaccount.php?task=editpass" class="mainnav_link" >Change Password</a></td>
  </tr>
</table>

							  </td>
                              </tr> -->                           
                            <tr>
                              <td width="21%" class="registertxt">First Name</td>
                              <td width="2%" align="center"><strong>:</strong></td>
							  
							  <td class="accountext">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
							  <tr>
								<td width="53%" class="accountext"><?php echo $datas[0]['firstname']; ?></td>
								<td width="47%"><a href="myaccount.php?task=editpass" class="mainnav_link" >Change Password</a></td>
							  </tr>
							</table>

							  </td>
							  
                             
                              </tr>
                            <tr>
                              <td class="registertxt">Last Name</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php echo $datas[0]['lastname']; ?></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Address1</td>
                              <td align="center"><strong>:</strong></td>
                              <td align="left" valign="top" class="accountext"><?php echo $datas[0]['address1']; ?></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Address2</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['address2']!="") echo $datas[0]['address2']; else echo "Nil"; ?></td>
                            </tr>
							<tr>
                              <td class="registertxt">Country</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php SelectedCountry(PFO_COUNTRY,$datas[0]['country']); ?></td>
                              <td align="left" valign="top">&nbsp;</td>
                            </tr>
							 <tr>
                              <td class="registertxt">State</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['state']!="") echo $datas[0]['state']; else echo "Nil"; ?></td>
                              <td align="left" valign="top">&nbsp;</td>
                            </tr>
                             <tr>
                              <td class="registertxt">City</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['city']!="") echo $datas[0]['city']; else echo "Nil"; ?></td>
                              <td align="left" valign="top">&nbsp;</td>
                            </tr>
                               <tr>
                              <td class="registertxt">Zipcode</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['zipcode']!="") echo $datas[0]['zipcode']; else echo "Nil"; ?></td>
                              <td align="left" valign="top">&nbsp;</td>
                            </tr>
							<tr>
                              <td class="registertxt">Phone</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['phone']!="") echo $datas[0]['phone']; else echo "Nil"; ?></td>
                              <td align="left" valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="registertxt">Fax</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['fax']!="") echo $datas[0]['fax']; else echo "Nil"; ?></td>
                              <td align="left" valign="top">&nbsp;</td>
                            </tr>
                             <tr>
                              <td class="registertxt">Mobile </td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['mobile']!="") echo $datas[0]['mobile']; else echo "Nil"; ?></td>
                              <td align="left" valign="top">&nbsp;</td>
                            </tr>
                             
                            
                               
                          </table></td>
                          </tr>
                        
                      </table></td>
                    </tr>
                   
                  </table></td>
                </tr>
              </table>