<script>
function FormSubmit()
{
document.upload_images.submit();
//document.getElementById('upload').style.display = 'none';
document.getElementById('upload').innerHTML = "<img src='images/loading.gif' border='0' >";
}
</script>

<script type="text/javascript" src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px">My Image</td>
                      </tr>
                    
                    <tr>
                      <td align="justify" style="padding:5px" ></td>
                      </tr>
                   <?php if(isset($_REQUEST['photo'])) { ?>
				   <tr>
                      <td align="center" class="X5Subtitles" ><?php if($_REQUEST['photo']=='suc') echo "Image Uploaded Successfully"; else if($_REQUEST['photo']=='error') echo "<span class='red'>ERROR : Un Specified Image Format</span>"; else if($_REQUEST['photo']=='del') echo "Selected Image Deleted Successfully"; ?></td>
                   </tr>
				   <?php } ?>
                    <tr>
                      <td align="left" valign="top"  style="padding:10px"><table width="667" cellspacing="0" cellpadding="0" style="margin-top:10px; margin-bottom:10px">
                        <tr>
                          <td align="left" valign="top"><table width="98%" align="center" cellpadding="0" cellspacing="0" class="registerheading">
                            <tr>
                              <td height="25" ><table width="98%" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="134" align="left" class="bus_card_textblue">Upload Image, Logo, and Pictures</td>
                                    <td width="18" align="left" valign="middle">&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top"><form id="form2" name="upload_images" method="post" action="" enctype="multipart/form-data">
                               <table width="98%" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td colspan="2">
								<div id="upload" align="center">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
                                      <td width="47" align="left" valign="middle" class="upload" >Upload</td>
                                      <td height="40" align="left"><input type="file" name="up_image" id="textfield2" onChange="javascript:FormSubmit(); " />    
                                       </td>
									   <td><span>You Can Upload a JPG, PNG, GIF</span></td>
                                 </tr>
									</table>
								</div>

									</td>
								</tr>
                                    
								
                                    <tr>
                                      <td colspan="2"  align="justify" valign="middle" class="registertxt" style="padding:5px">You are free to upload your image and see how it looks before  ordering. If you place an order containing an uploaded image, there is  a fee of $ 2.24. This is a  one-time fee per image, meaning that you can continue to use that  particular image in other products or successive orders at no further  cost.  There is no limit on the number of images uploaded and stored.</td>
                                      </tr>
                                  </table>
                              </form></td>
                            </tr>
                          </table></td>
                          </tr>
                      </table>
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
                              <tr>
                                <td width="6%" align="center" class="prd_smallheading" style="padding:5px;border-bottom:1px solid #CED5DF;">No.</td>
                                <td width="27%" align="center" class="prd_smallheading" style="padding:5px;border-bottom:1px solid #CED5DF;">Preview</td>
                                <td width="45%" align="center" class="prd_smallheading" style="padding:5px;border-bottom:1px solid #CED5DF;">Details</td>
                                <td width="22%" align="center" class="prd_smallheading" style="padding:5px;border-bottom:1px solid #CED5DF;">Action</td>
                                </tr>
								<?php 
								if( (isset($_REQUEST['page'])) && ($_REQUEST['page']!="") )
									{
									$s = ((($_REQUEST['page']-1)*10)+1);
									}
									else
									{
									$s=1;
									}
								if($img_count>1) {
								for($m=0; $m<count($myimg); $m++) {
								$img = $myimg[$m]['img_name'];
								if($img!="") {
								if(file_exists("myimages_thumb/".$img)) {
								 ?>
                              <tr>
                                <td align="left" valign="top" bgcolor="#FFFFFF" style="padding:15px 5px 5px 5px; border-right:solid 1px #b3c2d7"><?php echo $s; ?>.</td>
                                <td align="center" valign="middle" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="center"><img src="myimages_thumb/<?php echo $img; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30" align="center" valign="middle"><a href='myimages_photos/<?php echo $img; ?>' rel="lightbox" class="read_link">Preview</a></td>
                                  </tr>
                                </table></td>
                                <td align="left" valign="top" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7">
                                  <table width="100%" border="0" cellspacing="5" cellpadding="0">
                                      <tr>
                                        <td><strong>Type :</strong> <?php echo $myimg[$m]['img_type']; ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>File Name:</strong>  <?php echo $myimg[$m]['img_name']; ?> </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Uploaded Date</strong>:  <?php echo date("d/m/y",$myimg[$m]['img_date']); ?> </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Dimensions</strong>:  <?php echo $myimg[$m]['img_dimen']; ?> </td>
                                      </tr>
                                    </table>
                               </td>
                                <td align="center" valign="middle" bgcolor="#FFFFFF"  style="padding:5px;" ><a href="javascript:void(0);" onclick="if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='images.php?del=images&img_id=<?php echo $myimg[$m]['img_id']; ?>'; else return false;"><img src="images/delete.gif" width="32" height="32" border="0" /></a></td>
                                </tr>
                              <?php } } $s++; } } else { ?>
							  <tr>
							  <td colspan="4" height="75" valign="middle" align="center" class="X5Subtitles" style="border-top:solid 1px #CACACA;">No Datas Available</td>
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