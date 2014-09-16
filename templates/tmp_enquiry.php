<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Enquiry</td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Enquiry Form</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <form id="form1" name="form_enquiry" method="post" action="">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php if($_REQUEST['post']=='success') { ?>
						  <tr>
                              <td width="23%" class="green" colspan="3" align="center">Enquiry Posted Successfully</td>                            
                          </tr>
						 <?php } ?> 
						   <tr>
						      <td>&nbsp;</td>
							  <td>&nbsp;</td>
						      <td width="40%" align="right" valign="bottom" class="startrequire">* Required Information</td>
						   </tr>
 						   <tr>
                              <td width="23%" class="registertxt">Name</td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><input type="text" name="enq_name" id="textfield2" value="" style="width:255px;" /> <span class="startrequire">*</span>                             </td>
                              </tr>
                            <tr>
                              <td class="registertxt">E-Mail</td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><label>
                                <input type="text" name="enq_email" id="textfield3" value="" style="width:255px;" />
                              </label><span class="startrequire">*</span></td>
                              </tr>
							  <tr>
                              <td class="registertxt">Subject</td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><label>
                                <input type="text" name="enq_subject" id="textfield3" value="" style="width:255px;" />
                              </label><span class="startrequire">*</span></td>
                              </tr>
							  <tr>
                              <td class="registertxt">Message</td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><label>
                                <textarea name="enq_message" cols="30" rows="5" ></textarea>
                              </label><span class="startrequire">*</span></td>
                              </tr>
                            <tr><td colspan="3">&nbsp;</td></tr>
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" style="padding-left:75px;"><input type="submit" name="submit_enq" class="go_btn" id="button2" value="Submit" onClick="javascript:return EnquiryValidation();" /></td>
                            </tr>
                            
                          </table>
                          </form>                          </td>
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