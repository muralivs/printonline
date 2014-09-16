<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px">My Order History</td>
                    </tr>
                    
                    <tr>
                      <td align="justify" style="padding:5px" ></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"  style="padding:10px">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="top"  style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="right"><table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="54%" height="22" align="left" class="bus_card_textblack" style="padding-left:15px"><!--Sort By: <a href="#" class="read_link">Upload Date </a>--> </td>
                                  <td width="46%" align="right" class="bus_card_textblack" style="padding-right:15px"><span class="bus_card_textblack" style="padding-right:15px"><?php echo $pagingLink['paging'];  ?></span></td>
                                </tr>
                                
                              </table></td>
                            </tr>
                          </table>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="shoptablebg" style="margin-top:10px">
<!--                              <tr>
                                <td width="6%" align="center" class="prd_smallheading" style="padding:5px">No.</td>
                                <td width="27%" align="center" class="prd_smallheading">Preview</td>

                                <td width="22%" align="center" class="prd_smallheading">Action</td>
                                </tr>-->
								<?php 
								if( (isset($_REQUEST['page'])) && ($_REQUEST['page']!="") )
									{
									$s = ((($_REQUEST['page']-1)*10)+1);
									}
									else
									{
									$s=1;
									}

								if($order_count>1) {
								for($o=0; $o<count($myorder); $o++) {
								 ?>
                              <tr>
                                <td width="9%" align="left" valign="top" bgcolor="#FFFFFF" style="padding:15px 5px 5px 5px; border-bottom:solid 1px #B3C2D7; border-right:solid 1px #b3c2d7"><?php echo $s; ?>.</td>
                                <td width="60%" align="center" valign="middle" bgcolor="#FFFFFF"  style="padding:0px 5px 0px 5px; border-right:solid 1px #b3c2d7;border-bottom:solid 1px #B3C2D7; "><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="60%" align="center" style="padding:5px; border-right:solid 1px #b3c2d7;">Order Id</td>
                                    <td width="40%" align="center" ><?php echo $myorder[$o]['order_id'];  ?></td>
                                  </tr>
								  <tr>
                                    <td align="center" style="padding:5px; border-right:solid 1px #b3c2d7;">Purchased Date</td><td align="center"><?php echo date("Y-M-d", $myorder[$o]['pur_date']);  ?></td>
                                  </tr>
                                </table></td>
                                
                                <td width="31%" align="center" valign="middle" bgcolor="#FFFFFF"  style="padding:5px;border-bottom:solid 1px #B3C2D7; " ><a href="order_details.php?oid=<?php echo $myorder[$o]['id']; ?>" class="read_link">Details</a></td>
                              </tr>
                              <?php $s++; } } else { ?>
							  <tr>
							  <td colspan="3" height="75" bgcolor="#FFFFFF" valign="middle" align="center" class="X5Subtitles" style="border-top:solid 1px #CACACA;">No Order History</td>
							  </tr>
							  <?php } ?>
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