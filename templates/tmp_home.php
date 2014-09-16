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
                        <tr>
                          <td height="25" colspan="3" align="left" class="heading2">Account Summary</td>
                        </tr>
                        <tr>
                          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="4" cellpadding="0">
                            <tr>
                              <td width="21%" class="registertxt">Membership type</td>
                              <td width="2%" align="center"><strong>:</strong></td>
                              <td width="45%" class="accountext"><?php echo $datas[0]['title']; ?></td>
                              <td width="32%" rowspan="5" align="left" valign="top"><table width="100%" border="0" cellspacing="4" cellpadding="0">
                                <tr>
                                  <td align="center"><img src="<?php echo $profile_photo; ?>" /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Date of Joining</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['joining_date']!="") echo $datas[0]['joining_date']; else echo "Nil"; ?></td>
                             </tr>
                             <tr>
                              <td class="registertxt">Date of Expiry</td>
                              <td align="center"><strong>:</strong></td>
                              <td align="left" valign="top" class="accountext"><?php if($datas[0]['expiry_date']!="" && $datas[0]['expiry_date']!="0000-00-00") echo $datas[0]['expiry_date']; else echo "Nil"; ?></td>
                              </tr>
                             <tr>
                              <td class="registertxt">Amount Paid</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['amount_paid']!="") echo $datas[0]['amount_paid']; else echo "Nil"; ?> <?php if($datas[0]['amount_paid']!="") { ?> $ <?php } ?></td>
                              </tr>
                             <tr>
                              <td class="registertxt">Amount Pending</td>
                              <td align="center"><strong>:</strong></td>
                              <td class="accountext"><?php if($datas[0]['amount_rem']!="") echo $datas[0]['amount_rem']; else echo "Nil"; ?></td>
                              </tr>
                             <tr>
                               <td class="registertxt">&nbsp;</td>
                               <td align="center">&nbsp;</td>
                               <td class="accountext">&nbsp;</td>
                               <td align="left" valign="top">&nbsp;</td>
                             </tr>
                            
                          </table></td>
                          </tr>
                        <tr>
                          <td width="33%" align="left" valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0" class="account_btn_tab">
                            <tr>
                              <td align="center" valign="middle" style="padding-top:10px; padding-bottom:5px;"><img src="images/myservice_icon.jpg" width="161" height="155" /></td>
                            </tr>
                            <tr>
                              <td class="heading4">My Services</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" class="accountext" style="padding:5px"><strong>Eligible for:</strong></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" class="accountext" style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="20%" align="right" valign="top" style="padding-top:4px"><img src="images/arrow.gif" width="5" height="8" /></td>
                                  <td width="80%" style="padding-left:5px; padding-bottom:5px">Gold Card</td>
                                </tr>
                                <tr>
                                  <td align="right" valign="top" style="padding-top:4px"><img src="images/arrow.gif" width="5" height="8" /></td>
                                  <td height="25" align="left" valign="top" style="padding-left:5px; padding-bottom:5px">Silver Card</td>
                                </tr>
                              </table></td>
                            </tr>
                          </table></td>
                          <td width="33%" align="left" valign="top" ><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="account_btn_tab" >
                            <tr>
                              <td align="center" valign="middle" style="padding-top:10px; padding-bottom:5px;"><img src="images/portfolio_icon.jpg" width="210" height="151" /></td>
                            </tr>
                            <tr>
                              <td class="heading4">My Portfolio</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" class="accountext" style="padding:5px"> Browse your own designs and <br />
add to cart.</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" class="accountext" style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td colspan="2" align="left" valign="top" style="padding-bottom:4px"><strong>&nbsp;</strong></td>
                                  </tr>
                                  <tr>
                                    <td width="53%" align="left" valign="top" style="padding-top:4px">&nbsp;</td>
                                    <td width="47%" align="right" valign="bottom" style="padding-left:5px; padding-bottom:5px"><a href="portfolio.php" class="accountmorelink">More..</a></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                          <td width="34%" align="right" valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0" class="account_btn_tab" >
                            <tr>
                              <td align="center" valign="middle" style="padding-top:10px; padding-bottom:5px;"><img src="images/history_icon.jpg" width="124" height="151" /></td>
                            </tr>
                            <tr>
                              <td class="heading4">Order History</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" class="accountext" style="padding:5px">Check order status and review <br />
                                previous orders.</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" class="accountext" style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  
                                  <tr>
                                    <td width="53%" align="left" valign="top" style="padding-top:4px">&nbsp;</td>
                                    <td width="47%" height="35" align="right" valign="bottom" style="padding-left:5px; padding-bottom:5px"><a href="orderhistory.php" class="accountmorelink">More..</a></td>
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