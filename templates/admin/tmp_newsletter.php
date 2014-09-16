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
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">News Letter</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                      
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">News Letter</td>
                        </tr>
                        <tr><td align="right" style="padding-right:20px;"><a href="newsletterview.php" class="mainnav_link"> << Back </a></td></tr>
						<?php if($_REQUEST['sent']=='suc') { ?>
						<tr>
                          <td class="error" align="center">News Letter Sent Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
								  <tr>
								
									<td width="80%">
									<form name="news" method="post" enctype="multipart/form-data">
									<table width="70%" align="center" border="0" cellspacing="3" cellpadding="10" style="margin-top:10px; margin-bottom:15px">
										<tr bgcolor="#FFFFFF">
                                            <td width="14%" align="left" class="heading3">Mail to</td>
                                            <td width="86%" align="left" class="heading3"><select name="mailto">
                                            	<option value="all">All</option>
                                                <option value="non">Non - Members</option>
                                                <option value="Free Membership">Free Members</option>
                                                <option value="Silver">Silver Members</option>
                                                <option value="Gold">Gold Members</option>
                                                <option value="Platinum">Platinum Members</option>
                                            </select></td>
										</tr>
                                        <tr bgcolor="#FFFFFF">
										<td align="left" class="heading3" colspan="2"><textarea name="newsletter" cols="45" rows="15"></textarea></td>
										</tr>
										<tr bgcolor="#FFFFFF">
										<td align="left" class="heading3">Attachment</td>
										<td align="left" class="heading3"><input type="file" name="file_attach"></td>
										</tr>
										<tr><td>&nbsp;</td></tr>
										<tr><td align="center" colspan="2">
										<!--<input type="button" class="go_btn" name="submit_news" value="Submit" onclick="alert('This feature is disabled in Demo version');"> -->
										<input type="submit" class="go_btn" name="submit_news" value="Submit"> </td></tr>
									</table>
								  </form>
								  </td>
								  </tr>
								</table>

                                                
						     </td>
                        </tr>
                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>