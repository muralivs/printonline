<script type="text/javascript" src="../js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
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
					  <?php if($task=='aboutus') { ?>
					  <form name="frm_aboutus" method="post" >
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Custom About Us</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="3%">&nbsp;</td>
                              <td width="96%" align="center" valign="middle"><textarea name="custompage" cols="25" rows="5"><?php echo $data[0]['aboutus']; ?></textarea></td>
                              <td width="3%"><input type="hidden" name="pagename" value="aboutus" ></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><input type="submit" name="sub_custom" value="Update" class="go_btn" onClick="" > </td>
                            </tr>
							  
                          </table>                      
					      </td>
                        </tr>
                      </table>
					  </form>
					  <?php } else if($task=='contactus') { ?>
					  <form name="frm_contactus" method="post" >
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Custom Contact Us</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="3%">&nbsp;</td>
                              <td width="96%" align="center" valign="middle"><textarea name="custompage" cols="25" rows="5"><?php echo $data[0]['contactus']; ?></textarea></td>
                              <td width="3%"><input type="hidden" name="pagename" value="contactus" ></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><input type="submit" name="sub_custom" value="Update" class="go_btn" onClick="" > </td>
                            </tr>
							  
                          </table>                      
					      </td>
                        </tr>
                      </table>
					  </form>
					  <?php }  else if($task=='services') { ?>
					  <form name="frm_servicves" method="post" >
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Custom Services</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="3%">&nbsp;</td>
                              <td width="96%" align="center" valign="middle"><textarea name="custompage" cols="25" rows="5"><?php echo $data[0]['services']; ?></textarea></td>
                              <td width="3%"><input type="hidden" name="pagename" value="services" ></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><input type="submit" name="sub_custom" value="Update" class="go_btn" onClick="" > </td>
                            </tr>
							  
                          </table>                      
					      </td>
                        </tr>
                      </table>
					  </form>
					  <?php }
					   else if($task=='terms') { ?>
					  <form name="frm_terms" method="post" >
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Custom Terms and Condition</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="3%">&nbsp;</td>
                              <td width="96%" align="center" valign="middle"><textarea name="custompage" cols="25" rows="5"><?php echo $data[0]['terms']; ?></textarea></td>
                              <td width="3%"><input type="hidden" name="pagename" value="terms" ></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><input type="submit" name="sub_custom" value="Update" class="go_btn" onClick="" > </td>
                            </tr>
							  
                          </table>                      
					      </td>
                        </tr>
                      </table>
					  </form>
					  <?php } else if($task=='help') { ?>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					   <tr>
                          <td align="right"><a href="help.php?task=add" class="mainnav_link">Add New Question</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">Help</td>
                        </tr>
						<?php if(isset($_REQUEST['delsuccess'])) { ?>
						<tr>
                          <td class="error" align="center">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="../images/icon/active.gif" border="0"  /></td>
    <td>Selected Record Deleted Successfully</td>
  </tr>
</table>

						  </td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php 
						  if($help_count>1) {
						  for($h=0; $h<count($help); $h++) { ?>
						    <tr>
                              <td width="3%"><?php echo $h+1; ?></td>
                              <td width="84%" align="left" valign="middle"><a href="help.php?qid=<?php echo $help[$h]['id']; ?>&task=view" class="morelink"><?php echo $help[$h]['question']; ?></a></td>
							  <td width="5%">
							  
							  <a href="help.php?qid=<?php echo $help[$h]['id']; ?>&task=edit" ><img src="../images/icon/edit.png" border="0"  /></a> </td>
							  <td width="7%">
							  
							  <!--<a href="javascript: void(0)" onClick="alert('This feature is disabled in Demo version'); " ><img src="../images/icon/delete.jpg" border="0"  /></a> -->
							  <a href="javascript: void(0)" onClick="javascript: if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='custom.php?task=help&del=help&qid=<?php echo $help[$h]['id']; ?>'; else return false; " ><img src="../images/icon/delete.jpg" border="0"  /></a> </td>
                              <td width="1%">&nbsp;</td>
                            </tr>
							<?php } } else { ?>
							<tr>
                              <td colspan="5" align="center" class="X5Subtitles">No Data Available </td>
                            </tr>
							<?php } ?>
                            <tr>
                              <td colspan="5" align="center">&nbsp; </td>
                            </tr>
							  <tr>
                              <td colspan="5" align="center" class="pcurrent"><?php echo $pagingLink['paging'];  ?></td>
                            </tr>
                          </table>                      
					      </td>
                        </tr>
                      </table>
					  <?php } else if($task=='faq') { ?>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					   <tr>
                          <td align="right"><a href="faq.php?task=userques" class="mainnav_link">User Asked Questions</a> &nbsp;|&nbsp; <a href="faq.php?task=add" class="mainnav_link">Add New Question</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">Faq</td>
                        </tr>
						<?php if(isset($_REQUEST['delsuccess'])) { ?>
						<tr>
                          <td class="error" align="center">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="../images/icon/active.gif" border="0"  /></td>
    <td>Selected Record Deleted Successfully</td>
  </tr>
</table>

						  </td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php 
						  if($faq_count>1) {
						  for($f=0; $f<count($faq); $f++) { ?>
						    <tr>
                              <td width="3%"><?php echo $f+1; ?></td>
                              <td width="84%" align="left" valign="middle"><a href="faq.php?qid=<?php echo $faq[$f]['id']; ?>&task=view" class="morelink"><?php echo $faq[$f]['question']; ?></a></td>
							  <td width="5%"><a href="faq.php?qid=<?php echo $faq[$f]['id']; ?>&task=edit" ><img src="../images/icon/edit.png" border="0"  /></a></td>
							  <td width="7%">
							 <!-- <a href="javascript: void(0)" onClick="alert('This feature is disabled in Demo version');" ><img src="../images/icon/delete.jpg" border="0"  /></a> -->
							  <a href="javascript: void(0)" onClick="javascript: if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='custom.php?task=faq&del=faq&qid=<?php echo $faq[$f]['id']; ?>'; else return false; " ><img src="../images/icon/delete.jpg" border="0"  /></a> </td>
                              <td width="1%">&nbsp;</td>
                            </tr>
							<?php } } else { ?>
							<tr>
                              <td colspan="5" align="center" class="X5Subtitles">No Data Available </td>
                            </tr>
							<?php } ?>
                            <tr>
                              <td colspan="5" align="center">&nbsp; </td>
                            </tr>
							  <tr>
                              <td colspan="5" align="center" class="pcurrent"><?php echo $pagingLink['paging'];  ?></td>
                            </tr>
                          </table>                      
					      </td>
                        </tr>
                      </table>
					  <?php } ?>
					  </td>
                    </tr>
                  </table></td>
                </tr>
              </table>