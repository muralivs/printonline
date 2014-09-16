
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
					  
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Photo</td>
                        </tr>
                        <tr>
                          <td>
                          
                <form method="post" enctype="multipart/form-data" name="form_photo" id="register">
						<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
                                  <tr>
                                    <td >&nbsp;</td>
                                    <td colspan="3" align="center" class="red" style="padding-left:25px;">
                                      <?php if(isset($_REQUEST['err']))
									  {
									   echo 'Un specified file format or the file size exceeds the maximum';
									   
									   }?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td align="left"  class="tableCellOne"><table width="150" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td align="center"><img src="<?php echo $profile_photo; ?>" class="imgHolder" /></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2"></td>
                                        </tr>
                                    </table></td>
                                    <td colspan="2" align="left"><p class="registertxt">You can upload a JPG, GIF, or PNG file. </p>
                                        <p class="registertxt">If you want to change your picture, you can browse and upload another photo.</p></td>
                                  </tr>
                                  <tr>
                                    <td width="3%" height="30" class="tableCellTwo" >&nbsp;</td>
                                    <td width="25%" align="right" class="pcurrent">Upload Picture   : </td>
                                    <td colspan="2" align="left" class="tableCellTwo" >
                                      <input name="file" type="file" id="file" style="border:1px solid #878482;" size="40" />
                                    </td>
                                  </tr>
                                  <tr>
                                    <td height="30" class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td width="17%" rowspan="3" align="left" class="tableCellOne" ><span class="body">
                                      <input name="editphoto" type="submit" class="go_btn" id="editphoto" value="Upload" onClick="javascript:return ProfilePhoto();"/>
                                    </span></td>
                                    <td width="55%" rowspan="3" class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td rowspan="7" align="left" class="tableCellOne" >&nbsp;</td>
                                    <td rowspan="7" class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="tableCellOne" >&nbsp;</td>
                                    <td class="tableCellOne" >&nbsp;</td>
                                  </tr>
                                  
                                  
                                </table>
				</form>
                                                    </td>
                        </tr>
                       
                        
                      </table>
					
					  </td>
                    </tr>
                   
                  </table></td>
                </tr>
              </table>