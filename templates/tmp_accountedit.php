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
                      <td align="left" valign="top" style="padding:5px">
					  <form id="form1" name="form_reg" method="post" action="">
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Personal Details</td>
                        </tr>
                        <tr>
                          <td>
                          
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                            <!--<tr>
                              <td width="23%" class="registertxt">User ID <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><input type="text" name="textfield2" id="textfield2" />                              </td>
                              </tr>-->
                            <tr>
                              <td class="registertxt" width="24%">First Name <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle" width="72%"><label>
                                <input type="text" name="reg_firstname" id="textfield3" value="<?php echo $datas[0]['firstname']; ?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Last Name <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_lastname" id="textfield4" value="<?php echo $datas[0]['lastname']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Address1 <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_address1" id="textfield5" value="<?php echo $datas[0]['address1']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Address 2 </td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_address2" id="textfield6" value="<?php echo $datas[0]['address2']; ?>" /></td>
                            </tr>
							<tr>
                              <td class="registertxt">Country <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><select name="reg_country" id="select2">
                                  <option value="" selected="selected">Select Country</option>
								  <?php 
								  for($c=0; $c<count($selcountry); $c++)
								   {?>
								   <option value="<?php echo $selcountry[$c]['countryid']; ?>" <?php if($selcountry[$c]['countryid']==$datas[0]['country']) echo "Selected"; ?> ><?php echo $selcountry[$c]['country']; ?> </option>
								  <?php } ?>
                              </select></td>
                            </tr>
                            <tr>
                              <td class="registertxt">State <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_state" id="textfield11" value="<?php echo $datas[0]['state']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">City <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_city" id="textfield10" value="<?php echo $datas[0]['city']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Postal Code/Zip code <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle">
                                <input name="reg_zip" type="text" id="textfield12" size="12" value="<?php echo $datas[0]['zipcode']; ?>" />                             </td>
                            </tr>
                            <tr>
                              <td class="registertxt">Phone <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_phone" id="textfield7" value="<?php echo $datas[0]['phone']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Fax </td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_fax" id="textfield8" value="<?php echo $datas[0]['fax']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Mobile </td>
                             <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_mobile" id="textfield9" value="<?php echo $datas[0]['mobile']; ?>" /></td>
                            </tr>
                             <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td height="50" colspan="2" align="left" valign="bottom" >
                               <input type="submit" name="submit_editaccount" class="go_btn" id="button2" value="Submit" onClick="javascript:return RegValidation(); "/>
                               <!-- <input type="reset" name="button3" id="button3" class="go_btn" value="Reset" />-->
                             </td>
                              </tr>
                          </table>
                                                    </td>
                        </tr>
                       
                        
                      </table>
					  </form>
					  </td>
                    </tr>
                   
                  </table></td>
                </tr>
              </table>