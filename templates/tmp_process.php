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
						  <form name="paypal" method="post" action="<?php echo $formaction; ?>">
						  <table width="100%" border="0" cellspacing="3" cellpadding="0" >
                              <tr>
                                <td align="left" valign="top">
                                  <table width="60%" border="0" align="center" cellspacing="3" cellpadding="2" style="margin-top:10px; margin-bottom:15px">
                                    <tr>
                                      <td width="39%" align="center" >
<center><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="333333">Processing Transaction . . . </font></center>
<input type="hidden" name="cmd" value="_xclick" />

<!-- Owner Paypal Id -->
<input type="hidden" name="business" value="<?php echo $paypalmail; ?>" />

<!-- Product Name -->
<input type="hidden" name="item_name" value="<?PHP echo $Product; ?>" />

<!-- Product Amount -->
<input type="hidden" name="amount" value="<?php echo $total; ?>" />

<input type="hidden" name="no_note" value="2" />

<!-- Amount Currency -->
<input type="hidden" name="currency_code" value="CAD" />

<input type="hidden" name="bn" value="PP-BuyNowBF" />

<!-- Success Return Path -->
<input type="hidden" name="return" value="<?php echo $success; ?>">

<!-- Failure Return Path -->
<input type="hidden" name="cancel_return" value="<?php echo $fail; ?>" />

<!--<input type="image" src="paypal_buy.gif" border="0" widtd="150" height="52" />-->

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
<script language="javascript" type="text/javascript">
document.paypal.submit();
</script>            