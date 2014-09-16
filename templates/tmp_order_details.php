<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px">Order Details</td>
                      </tr>
                    
                    <tr>
                      <td align="right" style="padding-top:15px" ><a href="orderhistory.php" class="read_link"> << Order History</a></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top"  style="padding:10px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="top"  style="padding:5px">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="shoptablebg" style="margin-top:10px">
                              <tr>
                                <td width="52%" height="30" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Preview</td>
                                <td width="48%" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Details</td>
                              </tr>
								<?php 
							
								$imgf = $myorder[0]['imgpathf'];
								$imgb = $myorder[0]['imgpathb'];
								
								if($imgf!="") {
								if(file_exists($imgf)) {
								 ?>
                              <tr>
                               
                                <td align="center" valign="top" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
                                    <td align="center" class="heading6">Front Side</td>
                                  </tr>
                                  <tr>
                                    <td align="center"><img src="<?php echo $imgf; ?>" width="250" height="160" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30" align="center" valign="middle" class="heading6">Back Side</td>
                                  </tr>
								   <tr>
                                    <td align="center"><img src="<?php echo $imgb; ?>" width="250" height="160" /></td>
                                  </tr>
                                </table></td>
                                <td align="left" valign="top" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7">
                                  <table width="100%" border="0" cellspacing="5" cellpadding="0">
                                      <tr>
                                        <td><strong>Order Id :</strong> <?php echo $myorder[0]['order_id']; ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Purchased Date :</strong>  <?php echo date("d / M / Y",$myorder[0]['pur_date']); ?> </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Used Logo/Images :</strong>  <?php echo $myorder[0]['imgcount']; ?> </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Quantity :</strong>  <?php echo $myorder[0]['quantity']; ?> </td>
                                      </tr>
									  <tr>
                                        <td><strong>Paper :</strong>  <?php echo $myorder[0]['paper']; ?> </td>
                                      </tr>
									  <tr>
                                        <td><strong>Shipping Method :</strong>  <?php echo $myorder[0]['ship_method']; ?> </td>
                                      </tr>
									  <tr>
                                        <td>&nbsp;</td>
                                      </tr>
									  <tr>
                                        <td><strong>Total Price :</strong>  <?php echo $myorder[0]['total']; ?> $ </td>
                                      </tr>
									   <tr>
                                        <td><strong>Payment Status :</strong> <font class="total"> <?php if($myorder[0]['pay_status']==0) echo "Pending"; else echo "Paid"; ?> </font></td>
                                      </tr>
									  <tr>
                                        <td><strong>Order Status :</strong>  <font class="total"><?php echo $myorder[0]['order_status']; ?></font> </td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <?php if($myorder[0]['pay_status']==0) { ?>
                                      <tr>
                                        <td><a href="process.php?oid=<?php echo $myorder[0]['order_id']; ?>&amt=<?php echo $myorder[0]['total']; ?>" class="total"><font size="2" ><strong>Continue Payment >> </strong></font></a></td>
                                      </tr>
                                      <?php } ?>
                                  </table>
                               </td>
                              </tr>
                              <?php } } ?>
                            </table>
                              </td>
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