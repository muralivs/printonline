<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Shipping Address</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Details of <?php echo $data[0]['firstname']; ?></td>
                        </tr>
						<tr><td align="right" style="padding:10px 200px 0px 0px;"><a href="ordertrack.php"><img src="../images/icon/back_16.png" border="0" title="Back to User List" alt="Back"> </a></td></tr>
                        <tr>
                          <td align="left" valign="top">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" width="20%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
</table>
</td>
    <td width="80%"><table width="70%" align="left" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="10" style="margin-top:10px; margin-bottom:15px">
						    <tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">First Name</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['firstname']; ?></td>
                            </tr>
							 <tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Last Name</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['lastname']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Email</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['email']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Address 1</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['address1']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Address 2</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['address2']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Phone</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['phone']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Fax</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['fax']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Mobile</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['mobile']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Country</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php SelCountryId(PFO_COUNTRY,$data[0]['country']); ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">State</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['state']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">City</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['city']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Zip / Postal Code</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['zip']; ?></td>
                            </tr>
							 
                          </table></td>
  </tr>
</table>

                                                
						     </td>
                        </tr>
                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>