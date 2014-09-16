<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px">Upload your own design</td>
                      </tr>
                    
                    <tr>
                      <td align="justify" style="padding:5px" ></td>
                      </tr>
                   <?php if(isset($_REQUEST['photo'])) { ?>
				   <tr>
                      <td align="center" class="X5Subtitles" ><?php if($_REQUEST['photo']=='suc') echo "Image Uploaded Successfully"; else if($_REQUEST['photo']=='error') echo "Error In Upload"; else if($_REQUEST['photo']=='del') echo "Selected Image Deleted Successfully"; ?></td>
                   </tr>
				   <?php } ?>
                    <tr>
                      <td align="left" valign="top"  style="padding:10px"><table width="667" cellspacing="0" cellpadding="0" style="margin-top:10px; margin-bottom:10px">
                        <tr>
                          <td align="left" valign="top"><table width="98%" align="center" cellpadding="0" cellspacing="0" class="registerheading">
                            <tr>
                              <td height="25" ><table width="98%" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="134" align="left" class="bus_card_textblue">Upload Your Front and Back Designs Accessories</td>
                                    <td width="18" align="left" valign="middle">&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top">
							  <form name="upload_design" method="post" action="" enctype="multipart/form-data">
                               <table width="98%" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td colspan="2">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
                                      <td width="111" align="left" valign="middle" class="upload" >Front Image</td>
                                      <td width="524" height="40" align="left"><input type="file" name="up_fimage" id="textfield2"  />                                      </td>
                                 </tr>
								 <tr>
                                      <td width="111" align="left" valign="middle" class="upload" >Back Image</td>
                                      <td height="40" align="left"><input type="file" name="up_bimage" id="textfield2"  />                                      </td>
                                 </tr>
									</table>
									<input type="hidden" name="cardtype" value="H" checked="checked"/></td>
								</tr>
								
                                    <!--<tr>
                                      <td width="111" align="left" valign="middle" class="upload" >Card Type</td>
                                      <td height="40" align="left"><input type="radio" name="cardtype" value="H" checked="checked"/>Horizontal &nbsp; <input type="radio" name="cardtype" value="V" />Vertical</td>
                                 </tr>-->
								 <!--<tr>
								 <td class="upload">Image Size</td>
                                      <td  align="left" valign="middle" style="padding-left:0px;" class="accountext"><p> Horizontal - 350 X 200 <br /> Vertical - 150 X 260 </p></td>
                                 </tr>-->
								 <tr>
                                      <td colspan="2"  align="center" valign="middle" class="registertxt" style="padding-right:255px"><input type="submit" name="submit_design" value="Upload" class="go_btn" /></td>
                                 </tr>
                                  </table>
                              </form></td>
                            </tr>
                          </table></td>
                          </tr>
                      </table>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="top"  style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="right"><table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="54%" height="22" align="left" class="bus_card_textblack" style="padding-left:15px"><!--Sort By: <a href="#" class="read_link">Upload Date </a>--> </td>
                                  <td width="46%" align="right" class="bus_card_textblack" style="padding-right:15px"><span class="bus_card_textblack" style="padding-right:15px"></span></td>
                                </tr>
                                
                              </table></td>
                            </tr>
                          </table>
						  <?php if($design_count>0) { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="shoptablebg" style="margin-top:10px">
                              <tr>
                                <td width="50%" height="30" align="center" valign="middle" class="prd_smallheading" style="border-bottom:solid 1px #b3c2d7;">Front</td>
                                <td width="50%" align="center" class="prd_smallheading" style="border-bottom:solid 1px #b3c2d7;">Back</td>
                              </tr>
                              <tr>
                                
                                <td align="center" valign="middle" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7"><img src="<?php echo $frontdesign; ?>" border="0" /></td>
                                <td align="center" valign="middle" bgcolor="#FFFFFF"  style="padding:5px;"><img src="<?php echo $backdesign; ?>" border="0" /></td>
                              </tr>
                            </table>
							<?php } ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="right" style="padding:10px 10px 10px 30px">
                                  <input type="submit" name="button2" id="button2" value="Design Lab" class="go_btn" onclick="javascript: window.location = 'builder_new.php?id=<?php echo $fet_latestcard['prod_id']; ?>' " />
                                </td>
                              </tr>
                            </table></td>
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