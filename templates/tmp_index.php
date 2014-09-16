<table width="100%" border="0" cellspacing="0" cellpadding="0">
  				<tr>
   				 <td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="67%" class="heading1" style="padding:5px">Welcome to <?php echo PRO_TITLE; ?></td>
                      <td width="33%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td style="padding-bottom:10px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                        </tr>
                        <tr>
                          <td style="padding-bottom:5px"><strong>Impress clients and associates with custom business card designs.</strong></td>
                        </tr>
                        <tr>
                          <td style="padding-bottom:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                            <tr>
                              <td width="4%" align="center"><img src="images/small_arrow.jpg" width="7" height="7" /></td>
                              <td width="96%">Optional printing on back of business cards</td>
                            </tr>
                            <tr>
                               <td width="4%" align="center"><img src="images/small_arrow.jpg" width="7" height="7" /></td>
                              <td>Space for multiple addresses and numbers</td>
                            </tr>
                            <tr>
                               <td width="4%" align="center"><img src="images/small_arrow.jpg" width="7" height="7" /></td>
                              <td>Horizontal and vertical business card layouts available</td>
                            </tr>
                            <tr>
                               <td width="4%" align="center"><img src="images/small_arrow.jpg" width="7" height="7" /></td>
                              <td>The more you order, the more you save</td>
                            </tr>
                          </table></td>
                        </tr>
                      </table>                        </td>
                      <td align="center" valign="top"><img src="images/welcome_img.jpg" width="156" height="141" /></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="justify" style="padding:5px" class="dottedborder"></td>
                      </tr>
                   
                    <tr>
                      <td colspan="2" align="left" valign="top" class="heading1" style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="33%" height="50" align="left" valign="middle" class="heading1" style="padding-top:10px">Business Categories</td>
                          <td width="35%" align="left" valign="top">&nbsp;</td>
                          <td width="32%" rowspan="2" align="right" valign="top" style="padding-top:10px"><img src="images/offers.jpg" width="187" height="308" border="0" usemap="#Map" /></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="25" class="heading2">Industry &amp; Professional</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="0">
							  <?php for($c=0; $c<=12; $c++) { ?>
                                <tr>
                                  <td width="11%" align="center"><img src="images/arrow.gif" width="5" height="8" /></td>
                                  <td width="89%"><a href="categories.php?selcat=<?php echo $cat[$c]['cat_id']; ?>" class=" industrywise"><?php echo $cat[$c]['category']; ?></a></td>
                                </tr>
								<?php } ?>                               
                              </table></td>
                            </tr>
                            <tr>
                              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="61%" align="right" valign="middle" style="padding-right:5px"><img src="images/big_arrow.jpg" width="5" height="8" /></td>
                                    <td width="39%"><a href="categories.php" class="morelink">More</a></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                          <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="25" class="heading2">Styles &amp; Themes</td>
                            </tr>
                            <tr>
                              <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
							  <?php for($s=0; $s<=13; $s++) { ?>
                                <tr>
                                  <td width="11%" align="center"><img src="images/arrow.gif" width="5" height="8" /></td>
                                  <td width="89%"><a href="categories.php?selstyle=<?php echo $style[$s]['sty_id']; ?>" class=" industrywise"><?php echo $style[$s]['style']; ?></a></td>
                                </tr>
                               <?php } ?>
                              </table></td>
                            </tr>
                            <tr>
                              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="61%" align="right" valign="middle" style="padding-right:5px"><img src="images/big_arrow.jpg" width="5" height="8" /></td>
                                    <td width="39%"><a href="categories.php" class="morelink">More</a></td>
                                  </tr>
                              </table></td>
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
				</td>
		  		</tr>
				</table>