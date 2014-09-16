
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Price List</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px">
					  <?php if($_REQUEST['task']=='edit') { ?>
				  		<table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Edit Price</td>
                        </tr>
                        <tr>
                      <td align="left" valign="top">
					  <form name="form_price" method="post">
                          <table width="45%" align="center" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="3" style="margin-top:10px; margin-bottom:15px">
						    <tr>
							  <td width="6%" align="center" class="heading3">Quantity</td>
                              <td width="55%" align="center" class="heading3">Matt</td>
							   <td width="55%" align="center" class="heading3">Glossy Finish</td>
                            </tr>
							<?php for($p=0; $p<count($data); $p++) { ?>
							 <tr bgcolor="#FFFFFF";>
							  <td width="6%" align="center" class="upload"><?php echo $data[$p]['qty']; ?>
							  <input type="hidden" name="txt_qty[]" value="<?php echo $data[$p]['qty']; ?>"></td>
                              <td width="55%" align="center" class="upload"> <input type="text" name="txt_matt[]" value="<?php echo $data[$p]['matt']; ?>"></td>
							   <td width="55%" align="center" class="upload"> <input type="text" name="txt_glorry[]" value="<?php echo $data[$p]['glossy'] ?>"></td>
                            </tr>
							<?php } ?>
							<tr bgcolor="#FFFFFF"><td align="center" colspan="3">
							<input type="submit" class="go_btn" name="sub_price" value="Submit" onClick=""> 
							<!--<input type="button" class="go_btn" name="sub_price" value="Submit" onClick="alert('This feature is disabled in Demo version');"> -->
							</td></tr>
                      </table>
					  </form>
					  </td>
                      </tr>
                   
                  </table>
				      <?php } else { ?>
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					  <tr>
                          <td align="right"><a href="otherprice.php" class="plink">Other Price</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">Price</td>
                        </tr>
						<?php if($_REQUEST['update']=='suc') { ?>
						<tr>
                          <td class="X5Subtitles" align="center">Updated Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="40%" align="center" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="3" style="margin-top:10px; margin-bottom:15px">
						    <tr>
							  <td width="6%" align="center" class="heading3">Quantity</td>
                              <td width="55%" align="center" class="heading3">Matt</td>
							   <td width="55%" align="center" class="heading3">Glossy Finish</td>
							
                            </tr>
							<?php for($p=0; $p<count($data); $p++) { ?>
							 <tr bgcolor="#FFFFFF";>
							  <td width="6%" align="center" class="upload"><?php echo $data[$p]['qty']; ?></td>
                              <td width="55%" align="center" class="upload">$ <?php echo $data[$p]['matt']; ?></td>
							   <td width="55%" align="center" class="upload">$ <?php echo $data[$p]['glossy'] ?></td>
							    
                            </tr>
							<?php } ?>
							<tr><td align="right" colspan="3"><a href="price.php?task=edit" class="mainnav_link">Edit Price</a></td></tr>
                      </table></td>
                      </tr>
                   
                  </table>
					  <?php } ?>
				  </td>
                </tr>
              </table>