<link rel="stylesheet" href="css/tab-view.css" type="text/css" media="screen">
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/tab-view.js">
	/************************************************************************************************************
	(C) www.dhtmlgoodies.com, October 2005
	
	This is a script from www.dhtmlgoodies.com. You will find this and a lot of other scripts at our website.	
	
	Terms of use:
	You are free to use this script as long as the copyright message is kept intact. However, you may not
	redistribute, sell or repost it without our permission.
	
	Updated:
		
		March, 14th, 2006 - Create new tabs dynamically
	
	Thank you!
	
	www.dhtmlgoodies.com
	Alf Magne Kalleland
	
	************************************************************************************************************/		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="54" align="left" valign="middle"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                      <td width="6%" align="right"><img src="images/heading_icon.jpg" width="21" height="18" /></td>
                      <td width="94%" class="heading1" style="padding-left:10px">Products</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="center" valign="top" class="contentbg"><table width="667" cellspacing="0" cellpadding="0">
                    
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                        <tr>
                          <td width="44%"><img src="images/samplecard.jpg" width="324" height="176" /></td>
                          <td width="56%" align="left" valign="top"><table width="90%" border="0" align="right" cellpadding="0" cellspacing="1">
                            <tr>
                              <td class="productheading" style="padding-top:5px; padding-bottom:10px">Custom Design Templates</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" class="prd_smallheading" style="padding-top:5px; padding-bottom:10px">Make a great first impression<br />
                                Starting Price at $ 12.99</td>
                            </tr>
                            <tr>
                              <td  style="padding-top:5px; padding-bottom:10px"><table width="86%" border="0" align="center" cellpadding="0" cellspacing="5">
                                <tr>
                                  <td width="6%"><img src="images/product_icon.jpg" width="11" height="10" /></td>
                                  <td width="94%">Horizontal</td>
                                </tr>
                                <tr>
                                  <td><img src="images/product_icon.jpg" width="11" height="10" /></td>
                                  <td>Vertical</td>
                                </tr>
                                <tr>
                                  <td><img src="images/product_icon.jpg" width="11" height="10" /></td>
                                  <td>Edge Curve Designs</td>
                                </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
                    
                    <tr>
                      <td align="left" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="1%"><img src="images/chooseleftcurve.jpg" width="9" height="35" /></td>
                          <td width="98%" bgcolor="#4680a3">&nbsp;</td>
                          <td width="0%"><img src="images/chooserightcurve.jpg" width="10" height="35" /></td>
                        </tr>
                        <tr>
                          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="productborder">
                            <tr>
                              <td width="14%" style="padding:20px 10px 20px 20px"><img src="images/browseicon.jpg" width="53" height="77" /></td>
                              <td width="34%" align="left" valign="top" style="padding:10px"><a href="categories.php" class="browseheading1">Browse Our Design</a>
                                <p >Select a design template and personalize it to best suit your needs. Easily add your own logo or photo.</p>
                                <table width="60%" border="0" align="right" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="91%" align="right" valign="middle"><a href="categories.php" class="morelink">Browse</a></td>
                                    <td width="9%" align="right"><img src="images/greenarrow.jpg" width="5" height="8" /></td>
                                  </tr>
                                </table></td>
                              <td width="15%" style="padding:20px 0px 20px 20px"><img src="images/developicon.jpg" width="74" height="75" /></td>
                              <td width="37%" align="left" valign="top" style="padding:10px"><a href="builder_new.php?id=<?php echo $fet_latestcard['prod_id']; ?>" class="browseheading1">Develop a design</a>
                                <p >Have our step-by-step design wizard guide you through creating your design.<br />
                                </p>
                                <table width="60%" border="0" align="right" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="91%" align="right" valign="middle"><a href="builder_new.php?id=<?php echo $fet_latestcard['prod_id']; ?>" class="morelink">Add Design</a></td>
                                    <td width="9%" align="right"><img src="images/greenarrow.jpg" width="5" height="8" /></td>
                                  </tr>
                                </table>                               </td>
                            </tr>
                            <tr>
                              <td style="padding:20px"><img src="images/uploadicon.jpg" width="51" height="71" /></td>
                              <td align="left" valign="top" style="padding:10px"><a href="uploaddesign.php" class="browseheading1">Upload your own complete design</a>
                                <p >Upload your own finished design and we'll print it for you.</p>
                                <table width="60%" border="0" align="right" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="91%" align="right" valign="middle"><a href="uploaddesign.php" class="morelink">Upload</a></td>
                                    <td width="9%" align="right"><img src="images/greenarrow.jpg" width="5" height="8" /></td>
                                  </tr>
                                </table></td>
                              <td style="padding:20px"><img src="images/contacticon.jpg" width="58" height="67" /></td>
                              <td align="left" valign="top" style="padding:10px"><span class="browseheading">Let us create it for you</span>
                                <p >Let our creative services team do the writing and designing for you<br />
                                <span class="contactgreen">Contact : 1-866-310-3278</span></p></td>
                            </tr>
                          </table></td>
                          </tr>
                      </table>
                        <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:15px">
                          <tr>
                            <td align="left" valign="top">
                            
                            <div id="dhtmlgoodies_tabView1">
	<div class="dhtmlgoodies_aTab">
	  <table width="100%" border="0" cellspacing="5" cellpadding="0" >
        <tr>
          <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="48%" align="left" valign="top" style="padding-left:10px; padding-right:20px"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" >
                <tr>
                  <td width="25%" height="25" align="center" valign="middle" style="background-color:#FDFEF8; border-top:solid 1px #e2e5d5;border-left:solid 1px #e2e5d5" class="prd_smallheading">Qty </td>
                  <td width="25%" align="center" class="prd_smallheading" style="background-color:#FDFEF8; border-top:solid 1px #e2e5d5;" > Matt</td>
                  <td width="50%" align="center" class="prd_smallheading" style="background-color:#FDFEF8; border-top:solid 1px #e2e5d5;border-right:solid 1px #e2e5d5" >Glossy Finish</td>
                </tr>
				<?php for($p=0; $p<count($data); $p++) { ?>
                <tr>
                  <td height="25" align="center" valign="middle" style="background-color:#FDFEF8; border-left:solid 1px #e2e5d5" ><?php echo $data[$p]['qty']; ?></td>
                  <td align="center" valign="middle" style="background-color:#FDFEF8; " ><?php echo $data[$p]['matt']; ?></td>
                  <td align="center" valign="middle" style="background-color:#FDFEF8; border-right:solid 1px #e2e5d5" ><?php echo $data[$p]['glossy']; ?></td>
                </tr>
				<?php } ?>
                 <tr>
                  <td align="center" colspan="3" valign="middle" style="background-color:#FDFEF8; border-left:solid 1px #e2e5d5; border-right:solid 1px #e2e5d5;border-bottom:solid 1px #e2e5d5">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td height="50" align="right" valign="bottom" bgcolor="#FFFFFF" style="padding-right:10px">&nbsp;</td>
                </tr>
              </table></td>
              <td width="52%" align="left" valign="top"><table width="100%" border="0" cellspacing="8" cellpadding="0" class="tabbg">
                <tr>
                  <td width="71%">Uploaded logo/photo/design*</td>
                  <td width="29%">$3.49 </td>
                </tr>
                <tr>
                  <td>Blank Back Side</td>
                  <td> INCLUDED</td>
                </tr>
                <tr>
                  <td>Colour Back Side </td>
                  <td> $9.99 </td>
                </tr>
                <tr>
                  <td>Black &amp; White Back Side</td>
                  <td>$3.49 </td>
                </tr>
                <tr>
                  <td>Matt Finish</td>
                  <td>INCLUDED </td>
                </tr>
                <tr>
                  <td>Foil Accent Starting at </td>
                  <td>$7.99 </td>
                </tr>
                <tr>
                  <td>100-lb (265g/m<sup>2</sup>) Premium Matt Paper</td>
                  <td>$7.99 </td>
                </tr>
                <tr>
                  <td>Document Proof (PDF)</td>
                  <td>$1.99 </td>
                </tr>
                <tr>
                  <td>Electronic Business Card</td>
                  <td>$3.49 </td>
                </tr>
                <tr>
                  <td>Card Holder </td>
                  <td>$4.99</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
	</div>
	
	<div class="dhtmlgoodies_aTab">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td width="27%">Document Trim Size</td>
        <td width="73%">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Horizontal</strong>
          <p>87mm x 49mm<br />
            1028 x 579 pixels</p></td>
        <td align="left" valign="top"><strong>Vertical</strong>
          <p>49mm x 87mm<br />
            579 x 1028 pixels</p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td><span colspan="2" id="spanBleedSizeHeader_088">Full Bleed Size</span></td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
       <tr>
        <td><strong>Horizontal</strong>
          <p>90mm x 52mm<br />
            1062 x 615 pixels</p></td>
        <td align="left" valign="top"><strong>Vertical</strong>
          <p>52mm x 90mm<br />
            615 x 1062 pixels</p></td>
      </tr>
       <tr>
         <td colspan="2">Finished artwork should use the full bleed dimensions for best results.</td>
         </tr>
    </table></td>
  </tr>
</table>
	</div>
	
	<div class="dhtmlgoodies_aTab">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="42%"><table width="97%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/trim.jpg" width="214" height="150" /></td>
          </tr>
          <tr>
            <td height="20" align="left" valign="top"><strong>Key</strong></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="6" cellpadding="0">
              <tr>
                <td width="20%"><img src="images/key_bleed.gif" width="40" height="2" /></td>
                <td width="80%">Full Bleed</td>
              </tr>
              <tr>
                <td><img src="images/key_trim.gif" width="40" height="2" /></td>
                <td>Trim</td>
              </tr>
              <tr>
                <td><img src="images/key_safe_margin.gif" width="40" height="2" /></td>
                <td>Safe Margin</td>
              </tr>
              <tr>
                <td><img src="images/key_bleed_area.gif" width="40" height="8" /></td>
                <td>Bleed Area</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="58%" align="left" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td><strong>Full Bleed Size (starting document size)</strong></td>
          </tr>
          <tr>
            <td>90mm x 52mm<br />
              1062 x 615 pixels</td>
          </tr>
          <tr>
            <td><strong>Document Trim Size (final size after being cut)</strong></td>
          </tr>
          <tr>
            <td>87mm x 49mm<br />
              1028 x 579 pixels</td>
          </tr>
          <tr>
            <td>Resolution</td>
          </tr>
          <tr>
            <td>300 DPI</td>
          </tr>
          <tr>
            <td><a href="#" class="morelink">Accepted File Type</a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
	</div>
	
	<!--<div class="dhtmlgoodies_aTab">
	  <table width="100%" border="0" cellspacing="5" cellpadding="0">
            <tr>
              <td class="tabbg browseheading" style="padding:5px">Custom Business Card Design</td>
            </tr>
            <tr>
              <td style="padding:5px"><ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Etiam sed mi libero, a bibendum orci.</li>
                <li>Nullam imperdiet metus malesuada tellus ultrices sed feugiat neque tincidunt.</li>
              </ul>              </td>
            </tr>
            <tr>
              <td><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></td>
            </tr>
            <tr>
              <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal  distribution of letters, as opposed to using 'Content here, content  here', making it look like readable English.</td>
            </tr>
            <tr>
              <td><strong>Etiam sed mi libero, a bibendum orci.</strong></td>
            </tr>
            <tr>
              <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal  distribution of letters, as opposed to using 'Content here, content  here', making it look like readable English.</td>
            </tr>
            <tr>
              <td><strong>Nullam imperdiet metus malesuada tellus ultrices sed feugiat neque tincidunt.</strong></td>
            </tr>
            <tr>
              <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal  distribution of letters, as opposed to using 'Content here, content  here', making it look like readable English.</td>
            </tr>
          </table>
		  <br>
	</div>-->
</div>
<script type="text/javascript">
initTabs('dhtmlgoodies_tabView1',Array('Price list','Product Details','OnUpload Specification'),0,650,'auto');
</script>
                            
                            </td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
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