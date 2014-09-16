<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"  style="padding:10px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="top" style="padding:5px">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                              <tr>
                                <td class="registerheading">Order Information</td>
                              </tr>
							  <tr><td>&nbsp;</td></tr>
							  <?php if(isset($error)) 
							  { ?>
							  <tr><td align="left" class="red" style="padding-left:150px"><?php echo $error; ?></td></tr>
							  <?php } ?>
							  <tr>
							  	<td style="padding-left:40px">
								<form name="frm_coupon" method="post">
								<table width="60%" border="0" align="left" cellspacing="2" cellpadding="3">
									<tr><td colspan="3" class="bus_card_textblue">If you have coupon, Plese enter in the following box or continue to payment.</td></tr>
									<tr>
                                      <td width="35%" class="registertxt">Coupon </td>
                                      <td width="10%" align="left" valign="middle" class="registertxt"><strong> : </strong></td>
                                      <td width="55%" align="left" valign="middle"><label><input type="text" name="coupon" /></label></td>
                                    </tr>
									<tr>
									<td colspan="3" align="center" style="padding-left:80px;"><input type="submit" name="subcoupon" value="Get My Discount" class="go_btn" /></td>
									</tr>
							  </table>
							  </form>
								</td>
							  </tr>
                              <tr>
                                <td align="left" valign="top" style="padding-left:40px">
								<form name="frmshipp" method="post" action="process.php">
                                  <table width="60%" border="0" align="left" cellspacing="0" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
									<?php if($memtype!="Free Member") { ?>
									<tr>
                                      <td width="40%" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; border-left:solid 1px #b3c2d7;border-top:solid 1px #b3c2d7;">Product(s) </td>
                                      <td width="2%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; border-top:solid 1px #b3c2d7;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; border-top:solid 1px #b3c2d7;"><strong><?php echo $_SESSION['cartcount']; ?></strong></td>
                                      <td width="32%" align="left" valign="middle" bgcolor="#F2F2F2" class="overwritefont"  style="padding:5px;border-top:solid 1px #b3c2d7; border-right:solid 1px #b3c2d7;"><label>$ <?php echo $ship[0]['price']; ?> </label></td>
                                    </tr>
									<tr bgcolor="#F2F2F2">
                                      <td width="40%" class="registertxt"  style="padding:5px; border-left:solid 1px #b3c2d7;"><?php echo $memtype; ?> Member</td>
                                      <td width="2%" align="left" valign="middle" class="registertxt"  style="padding:5px; "><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" class="registertxt"  style="padding:5px;"><strong><?php echo $pac_dis; ?> %</strong></td>
                                      <td width="32%" align="left" valign="middle"  style="padding:5px;border-right:solid 1px #b3c2d7; "><label>$ <?php echo $aftermemdis; ?> </label></td>
                                    </tr>
									<?php }else if(isset($_REQUEST['subcoupon'])) { ?>
									<tr>
                                      <td width="40%" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; border-left:solid 1px #b3c2d7;border-top:solid 1px #b3c2d7;">Product(s) </td>
                                      <td width="2%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; border-top:solid 1px #b3c2d7;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; border-top:solid 1px #b3c2d7;"><strong><?php echo $_SESSION['cartcount']; ?></strong></td>
                                      <td width="32%" align="left" valign="middle" bgcolor="#F2F2F2" class="overwritefont"  style="padding:5px;border-top:solid 1px #b3c2d7; border-right:solid 1px #b3c2d7;"><label>$ <?php echo $ship[0]['price']; ?> </label></td>
                                    </tr>
									<?php } ?>
									<?php if(isset($_REQUEST['subcoupon']) and (!isset($error))) { ?>
									<tr bgcolor="#F2F2F2">
                                      <td width="40%" class="registertxt"  style="padding:5px; border-left:solid 1px #b3c2d7;">Use Coupon</td>
                                      <td width="2%" align="left" valign="middle" class="registertxt"  style="padding:5px; "><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" class="registertxt"  style="padding:5px;"><strong><?php echo $cp_disc; ?> % </strong></td>
                                      <td width="32%" align="left" valign="middle"  style="padding:5px;border-right:solid 1px #b3c2d7; "><label>$ <?php echo $cpdisamt; ?> </label></td>
                                    </tr>
									<tr>
                                      <td width="40%" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; border-left:solid 1px #b3c2d7;" >Product(s) </td>
                                      <td width="2%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; "><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt"  style="padding:5px; "><strong><?php echo $_SESSION['cartcount']; ?></strong></td>
                                      <td width="32%" align="left" valign="middle" bgcolor="#F2F2F2"  style="padding:5px; border-right:solid 1px #b3c2d7;"><label>$ <?php echo $afercoutot; ?> </label></td>
                                    </tr>
									<?php } else { ?>
									<tr>
                                      <td width="40%" bgcolor="#F2F2F2" class="registertxt" style="padding:5px; border-left:solid 1px #b3c2d7;border-top:solid 1px #b3c2d7;">Product(s) </td>
                                      <td width="2%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px;border-top:solid 1px #b3c2d7;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px; border-top:solid 1px #b3c2d7;"><strong><?php echo $_SESSION['cartcount']; ?></strong></td>
                                      <td width="32%" align="left" valign="middle" bgcolor="#F2F2F2" style="padding:5px; border-right:solid 1px #b3c2d7;border-top:solid 1px #b3c2d7;"><label>$ <?php if($aftermemtot==0){ echo $ship[0]['price']; }else{ echo $aftermemtot; }?> </label></td>
                                    </tr>
									<?php } ?>
                                    <?php if($selcon[0]['country']==1) { ?>
                                    <tr>
                                      <td width="40%" bgcolor="#f2f2f2" class="registertxt" style="padding:5px; border-left:solid 1px #b3c2d7;">GST 5% </td>
                                      <td width="2%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px"><strong><?php echo '0.5' ; ?> % </strong></td>
                                      <td width="32%" align="left" valign="middle" bgcolor="#F2F2F2" style="padding:5px; border-right:solid 1px #b3c2d7;" ><label>$ <?php $gst = (($ship[0]['price']*0.5)/100); echo $gst; ?> </label></td>
                                    </tr>
                                    <?php } ?>
                                     <?php if(($selcon[0]['country']==1) && ($selcon[0]['state']=="Ontario")) { ?>
                                    <tr>
                                      <td width="40%" bgcolor="#f2f2f2" class="registertxt" style="padding:5px; border-left:solid 1px #b3c2d7;">PST 8% </td>
                                      <td width="2%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px"><strong><?php echo '0.8' ; ?> % </strong></td>
                                      <td width="32%" align="left" valign="middle" bgcolor="#F2F2F2" style="padding:5px; border-right:solid 1px #b3c2d7;" ><label>$ <?php $pst = (($ship[0]['price']*0.8)/100); echo $pst; ?> </label></td>
                                    </tr>
                                    <?php } ?>
                                    
									<tr>
                                      <td width="40%" bgcolor="#f2f2f2" class="registertxt" style="padding:5px; border-left:solid 1px #b3c2d7;">Shipping Method </td>
                                      <td width="2%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" bgcolor="#F2F2F2" class="registertxt" style="padding:5px"><strong><?php echo ucfirst($ship[0]['ship_method']); ?></strong></td>
                                      <td width="32%" align="left" valign="middle" bgcolor="#F2F2F2" style="padding:5px; border-right:solid 1px #b3c2d7;" ><label>$ <?php echo $ship_cost; ?> </label></td>
                                    </tr>
									<!--<tr bgcolor="#F2F2F2">
                                      <td width="40%" class="registertxt" style="padding:5px; border-left:solid 1px #b3c2d7;">Shipping Discount </td>
                                      <td width="2%" align="left" valign="middle" class="registertxt" style="padding:5px;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" class="registertxt" style="padding:5px;"><strong><?php //echo $price[0]['ship_discount']; ?> %</strong></td>
                                      <td width="32%" align="left" valign="middle" style="padding:5px; border-right:solid 1px #b3c2d7;"><label>$ <?php //echo $discount_price; ?> </label></td>
                                    </tr>-->
									<tr bgcolor="#F2F2F2">
                                      <td width="40%" class="registertxt" style="padding:5px; border-left:solid 1px #b3c2d7;border-bottom:solid 1px #b3c2d7;">Total </td>
                                      <td width="2%" align="left" valign="middle" class="registertxt" style="padding:5px;border-bottom:solid 1px #b3c2d7;"><strong>:</strong></td>
                                      <td width="26%" align="left" valign="middle" class="registertxt" style="padding:5px;border-bottom:solid 1px #b3c2d7;"><strong>&nbsp;
                                      <input type="hidden" name="cart_total" value="<?php echo $total; ?>" /></strong></td>
                                      <td width="32%" align="left" valign="middle" class="total" style="padding:5px; border-right:solid 1px #b3c2d7;border-bottom:solid 1px #b3c2d7;"><label>$ <?php echo $total; ?> </label></td>
                                    </tr>
									<tr><td colspan="4">&nbsp;</td></tr>
									<tr>
                                      <td width="40%" class="registertxt">&nbsp;</td>
                                      <td width="2%" align="left" valign="middle">&nbsp;</td>
                                      <td width="26%" align="left" valign="middle" style="padding-left:17px"><input type="submit" name="checkout" value="Payment" class="go_btn" /></td>
                                      <td width="32%" align="left" valign="middle">&nbsp;</td>
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