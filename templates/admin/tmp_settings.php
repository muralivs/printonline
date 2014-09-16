<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" colspan="2"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Settings</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
					<td width="20%" valign="top"><?php @include _PATH_TEMPLATE."leftsetting.php"; ?></td>
                      <td width="80%" align="left" valign="top" style="padding:5px">
					  <?php if($_REQUEST['task']=='editsettings') { ?>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Edit General Settings</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
						  <form name="form_set" method="post" enctype="multipart/form-data">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="23%" class="pcurrent">Title<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><input type="text" name="title" value="<?php echo $data[0]['title']; ?>" style="width:300px;" /></td>
                            </tr>
                            <tr>
                              <td class="pcurrent">Project Title<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="pro_title" value="<?php echo $data[0]['project_title']; ?>" style="width:300px;" /></td>
                            </tr>
							  <tr>
                              <td class="pcurrent">Site Name<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="site_name" value="<?php echo $data[0]['site_name']; ?>" style="width:300px;" /></td>
                              </tr>
							   <tr>
                              <td class="pcurrent">Admin Mail<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="admin_mail" value="<?php echo $data[0]['admin_mail']; ?>" style="width:300px;" /></td>
                              </tr>
							  <?php if($data[0]['site_logo']!='') { ?>
							   <tr>
                              <td class="pcurrent"><span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong></strong></td>
                              <td align="left" valign="middle">
							   <img src="../images/<?php echo $data[0]['site_logo']; ?>" border="0" width="180" height="70" />
							  
							  </td>
                              </tr>
							   <?php } ?>
							    <tr>
                              <td class="pcurrent">Site Logo<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle">
							    <input type="hidden" name="site_logo1" value="<?php echo $data[0]['site_logo']; ?>" style="width:300px;" />
							  <input type="file" name="site_logo" value="<?php echo $data[0]['site_logo']; ?>" style="width:300px;" /></td>
                              </tr>
							   <tr>
                              <td class="pcurrent">Paypal Id<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="paypal_id" value="<?php echo $data[0]['paypal_id']; ?>" style="width:300px;" /></td>
                              </tr>
							  <tr><td colspan="3">&nbsp;</td></tr>
							   <tr>
                              <td class="pcurrent">&nbsp;</td>
                              <td width="4%" align="left" valign="middle">
							  <input type="submit" name="submit_setting" class="go_btn" id="button2" value="Update" onClick="javascript:return SettingsUpdate(); "/> 
							  <!--<input type="button" name="submit_setting" class="go_btn" id="button2" value="Update" onClick="javascript:alert('This feature is disabled in Demo version'); "/>  -->
							  </td>
                              <td align="left" valign="middle">&nbsp;</td>
                              </tr>
                          </table>                      
						  </form>
					      </td>
                        </tr>
                        

                      </table>
					  <?php } else { ?>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">General Settings</td>
                        </tr>
						<?php if(isset($_REQUEST['updated'])) { ?>
						<tr>
                          <td class="error" align="center">Updated Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="23%" class="pcurrent">Title<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><?php echo $data[0]['title']; ?></td>
                            </tr>
                            <tr>
                              <td class="pcurrent">Project Title<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><?php echo $data[0]['project_title']; ?></td>
                            </tr>
							  <tr>
                              <td class="pcurrent">Site Name<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><?php echo $data[0]['site_name']; ?></td>
                              </tr>
							   <tr>
                              <td class="pcurrent">Admin Mail<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><?php echo $data[0]['admin_mail']; ?></td>
                              </tr>
							  <?php if($data[0]['site_logo']!='') { ?>
							   <tr>
                              <td class="pcurrent">Site Logo<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><img src="../images/<?php echo $data[0]['site_logo']; ?>" border="0" width="180" height="70" /></td>
                              </tr>
							  <?php } ?>
							   <tr>
                              <td class="pcurrent">Paypal Id<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><?php echo $data[0]['paypal_id']; ?></td>
                              </tr>
                          </table>                      
					      </td>
                        </tr>
                        <tr><td align="right"><a href="settings.php?task=editsettings" class="plink">Edit Settings</a></td></tr>

                      </table>
					  <?php } ?>
					  </td>
                    </tr>
                   
                  </table></td>
                </tr>
              </table>