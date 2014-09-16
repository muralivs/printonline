<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" colspan="2"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Settings</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
					<td width="20%" valign="top"><?php @include _PATH_TEMPLATE."leftsetting.php"; ?></td>
                      <td width="80%" align="left" valign="top" style="padding:5px">
					  <?php if($task=='view') { ?>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					     <tr>
                          <td align="right"><a href="custom.php?task=help" class="mainnav_link"><< Back</a></td>
                        </tr>

                        <tr>
                          <td class="registerheading">Help</td>
                        </tr>
						<?php if(isset($_REQUEST['upsuccess'])) { ?>
						<tr>
                          <td class="error" align="center">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="../images/icon/active.gif" border="0"  /></td>
    <td>Selected Record Updated Successfully</td>
  </tr>
</table>

						  </td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  						  
						    <tr>
                              <td width="3%">&nbsp;</td>
                              <td width="84%" align="left" valign="middle" class="mycart_txt"><?php echo $data[0]['question']; ?></td>
							  <td width="5%"><a href="help.php?qid=<?php echo $data[0]['id']; ?>&task=edit" ><img src="../images/icon/edit.png" border="0"  /></a></td>
							  <td width="7%">
							  <a href="javascript: void(0)" onClick="alert('This feature is disabled in Demo version');" ><img src="../images/icon/delete.jpg" border="0"  /></a>
							  <!--<a href="javascript: void(0)" onClick="javascript: if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='custom.php?task=help&del=help&qid=<?php echo $data[0]['id']; ?>'; else return false; " ><img src="../images/icon/delete.jpg" border="0"  /></a> --></td>
                              <td width="1%">&nbsp;</td>
                            </tr>
							 <tr>
                              <td colspan="2" align="left" class="registertxt"><?php echo $data[0]['answer']; ?></td>
                            </tr>
                            <tr>
                              <td colspan="5" align="center">&nbsp; </td>
                            </tr>
							  

                          </table>                      
					      </td>
                        </tr>
                      </table>
					  <?php } else if($task=='edit') { ?>
					  <form name="form_edit" method="post" >
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					  <tr>
                          <td align="right"><a href="custom.php?task=help" class="mainnav_link"><< Back</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">Help</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  						  
						    <tr>
                              <td width="12%" class="heading3">Question</td>
                              <td width="84%" align="left" valign="middle"><input type="text" name="help_question" value="<?php echo $data[0]['question']; ?>" style="width:410px;" ></td>

                              <td width="4%">&nbsp;</td>
                            </tr>
							 <tr>
							 <td width="12%" class="heading3">Answer</td>
                              <td align="left"><textarea name="help_answer" cols="50" rows="10"><?php echo $data[0]['answer']; ?></textarea></td>
							   <td width="4%">&nbsp;</td>
                            </tr>
							 <tr>
                              <td colspan="3" align="center" class="registertxt">
							  <!--<input type="submit" name="help_update" class="go_btn" value="Update" onClick="alert('This feature is disabled in Demo version'); return false;"> -->
							  <input type="submit" name="help_update" class="go_btn" value="Update" onClick="javascript:return HelpUpdate(); "> </td>
                            </tr>
                            <tr>
                              <td colspan="5" align="center">&nbsp; </td>
                            </tr>
							  

                          </table>                      
					      </td>
                        </tr>
                      </table>
					  </form>
					  <?php }  else if($task=='add') { ?>
					   <form name="form_edit" method="post" >
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					  <tr>
                          <td align="right"><a href="custom.php?task=help" class="mainnav_link"><< Back</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">Help</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  						  
						    <tr>
                              <td width="12%" class="heading3">Question</td>
                              <td width="84%" align="left" valign="middle"><input type="text" name="help_question" value="" style="width:410px;" ></td>

                              <td width="4%">&nbsp;</td>
                            </tr>
							 <tr>
							 <td width="12%" class="heading3">Answer</td>
                              <td align="left"><textarea name="help_answer" cols="50" rows="10"></textarea></td>
							   <td width="4%">&nbsp;</td>
                            </tr>
							 <tr>
                              <td colspan="3" align="center" class="registertxt">
							  <!--<input type="submit" name="help_add" class="go_btn" value="Add" onClick="alert('This feature is disabled in Demo version'); return false;"> -->
							  <input type="submit" name="help_add" class="go_btn" value="Add" onClick="javascript:return HelpUpdate(); "> </td>
                            </tr>
                            <tr>
                              <td colspan="5" align="center">&nbsp; </td>
                            </tr>
							  

                          </table>                      
					      </td>
                        </tr>
                      </table>
					  </form>
					  <?php }  ?>
					  </td>
                    </tr>
                  </table></td>
                </tr>
              </table>