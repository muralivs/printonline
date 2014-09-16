<table width="100%" border="0" cellspacing="0" cellpadding="0">
               
                <tr>
                  <td class="contentbg" style="padding-right:8px"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                    
                    <!--<tr>
                      <td align="center" style="padding-top:5px"><table width="200" cellspacing="0" cellpadding="0" style="margin-bottom:10px">
                        <tr>
                          <td height="91" align="left" valign="top" bgcolor="#F2F8EC" style="border:1px solid #DDE7D4;"><table width="180" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="15"></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="textfield2" id="textfield2" /></td>
                            </tr>
                            <tr>
                              <td height="11" align="right"></td>
                            </tr>
                            <tr>
                              <td align="right"><input type="image" src="images/search_but.jpg" name="Submit4" value="Submit" /></td>
                            </tr>
                          </table>                            </td>
                        </tr>
                      </table></td>
                    </tr>-->
                    <?php if(isset($_REQUEST['selcat'])) {
					if($subcnt>0) { ?>
                   
                    <tr>
                      <td align="center" style="padding-top:5px"><table width="200" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="32" align="left" valign="middle" style="background-color:#8AC001; border:1px solid #5B9400;"><img src="images/categories_title.jpg" width="113" height="20" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="top" style="background-color:#ECFFD9; border:1px solid #DDE7D4;"><table width="187" cellspacing="0" cellpadding="0">                        <?php for($sb=0; $sb<$subcnt; $sb++) { ?>
                            <tr>
                              <td align="left" valign="middle" class="categories_text"><a href="categories.php?selcat=<?php echo $_REQUEST['selcat']; ?>&selstyle=<?php echo $_REQUEST['selstyle']; ?>&position=<?php echo $_REQUEST['position']; ?>&subcat=<?php echo $subcat[$sb]['subcat_id']; ?>" class="categories_link"><?php echo $subcat[$sb]['subcategory']; ?></a></td>
                            </tr> 
					    <?php } ?>              
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
					<?php } } ?>
                     <tr>
                      <td align="center" style="padding-top:5px"><a href="membership.php"><img src="images/member.jpg" width="204" height="91" border="0" /></a></td>
                    </tr>
                    <tr>
                       <td align="center" style="padding-top:5px"><img src="images/chat_support.jpg" width="203" height="189" /></td>
                    </tr>
                    <tr>
                      <td align="center" style="padding-top:5px"><img src="images/upload_promo.jpg" width="205" height="79" border="0" /></td>
                    </tr>
                    <tr>
                      <td align="center" style="padding-top:5px"><img src="images/satisfaction_promo.jpg" width="205" height="79" border="0" /></td>
                    </tr>
                    <tr>
                      <td align="center" style="padding-top:5px"><img src="images/lowest_promo.jpg" width="205" height="79" border="0" /></td>
                    </tr>
                  
                    <!--<tr>
                      <td align="center" style="padding-top:5px"><table width="200" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="91" align="left" valign="top" bgcolor="#F2F8EC" style="border:1px solid #DDE7D4;"><table width="180" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="15"></td>
                              </tr>
                              <tr>
                                <td height="25" class="bus_card_textblue14">News Letters </td>
                              </tr>
                              <tr>
                                <td><input type="text" name="textfield22" id="textfield22" /></td>
                              </tr>
                              <tr>
                                <td height="8" align="right"></td>
                              </tr>
                              <tr>
                                <td align="right"><input type="image" src="images/go.jpg" name="Submit42" value="Submit" /></td>
                              </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>-->
                  </table></td>
                </tr>
              </table>