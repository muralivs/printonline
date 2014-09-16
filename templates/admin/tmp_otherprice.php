
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
                          <td class="registerheading">Edit Other Price</td>
                        </tr>
                        <tr>
                      <td align="left" valign="top">
					  <form name="form_oprice" method="post">
                          <table width="55%" align="center" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="3" style="margin-top:10px; margin-bottom:15px">
						    <tr bgcolor="#FFFFFF">
							  <td width="6%" align="center" class="heading3">Price per Logo</td>
							  <td width="6%" align="center" class="upload"><input type="text" name="logo" value="<?php echo $oprice[0]['logo']; ?>"> $ </td>
							 </tr>
							 <tr bgcolor="#FFFFFF">
                              <td width="55%" align="center" class="heading3">Slow Shipping</td>
							   <td width="6%" align="center" class="upload"><input type="text" name="slow" value="<?php echo $oprice[0]['slow']; ?>"> $ </td>
							  </tr>
							  <tr bgcolor="#FFFFFF">
							   <td width="55%" align="center" class="heading3">Standard Shipping</td>
							   <td width="55%" align="center" class="upload"> <input type="text" name="standard" value="<?php echo $oprice[0]['standard']; ?>"> $ </td>
							   </tr>
							   <tr bgcolor="#FFFFFF">
							   <td width="55%" align="center" class="heading3">Shipping Discount</td>
							   <td width="55%" align="center" class="upload"> <input type="text" name="ship_disc" value="<?php echo $oprice[0]['ship_discount']; ?>"> % </td>
							   </tr>
							<tr bgcolor="#FFFFFF"><td align="center" colspan="3">
							<input type="submit" class="go_btn" name="sub_oprice" value="Submit" onClick="javascript: return OtherPriceValid(); "> 
						<!--<input type="button" class="go_btn" name="sub_oprice" value="Submit" onClick="alert('This feature is disabled in Demo version');">	 -->
							</td></tr>
                      </table>
					  </form>
					  </td>
                      </tr>
                   
                  </table>
				      <?php } else { ?>
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					  <tr>
                          <td align="right"><a href="price.php" class="plink">Back to Price</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">Other Price</td>
                        </tr>
						<?php if($_REQUEST['update']=='suc') { ?>
						<tr>
                          <td class="X5Subtitles" align="center">Updated Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="70%" align="center" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="3" style="margin-top:10px; margin-bottom:15px">
						    <tr>
							  <td width="20%" align="center" class="heading3">Price per Logo</td>
                              <td width="27%" align="center" class="heading3">Slow Shipping</td>
							   <td width="27%" align="center" class="heading3">Standard Shipping</td>
							   <td width="26%" align="center" class="heading3">Shipping Discount</td>
                            </tr>
							<?php for($o=0; $o<count($oprice); $o++) { ?>
							 <tr bgcolor="#FFFFFF">
							   <td width="20%" align="center" class="upload"><?php echo $oprice[$o]['logo']; ?></td>
                               <td width="27%" align="center" class="upload">$ <?php echo $oprice[$o]['slow']; ?></td>
							   <td width="27%" align="center" class="upload">$ <?php echo $oprice[$o]['standard'] ?></td>
							   <td width="26%" align="center" class="upload">$ <?php echo $oprice[$o]['ship_discount'] ?></td>
                            </tr>
							<?php } ?>
							<tr><td align="right" colspan="4"><a href="otherprice.php?task=edit" class="mainnav_link">Edit Price</a></td></tr>
                      </table></td>
                      </tr>
                        <tr>
                          <td align="left" valign="top">&nbsp;</td>
                        </tr>
                  </table>
					  <?php } ?>
				  </td>
                </tr>
              </table>