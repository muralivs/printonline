<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
	<link href="css/jquery.path-menu.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="js/jquery.metadata.js"></script>
		<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>
		<script type="text/javascript" src="js/jquery.path-menu.js"></script>
		<script type="text/javascript">
<!--

//-->
		</script>
		<script>
var xmlHttp

function BookMark(str)
{ 

	xmlHttp=GetXmlHttpObject()
	//document.getElementById("book").innerHTML="<img src='images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/bookmark.php"
		url=url+"?q="+str+"&uid=<?php echo $uid; ?>"
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById("book").innerHTML=xmlHttp.responseText 
} 
}

function GetXmlHttpObject()
{ 
var objXMLHttp=null
if (window.XMLHttpRequest)
{
objXMLHttp=new XMLHttpRequest()
}
else if (window.ActiveXObject)
{
objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
}
return objXMLHttp
}
 
</script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #CED5DF}
-->
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="54" align="left" valign="middle"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                      <td width="6%" align="right"><img src="images/heading_icon.jpg" width="21" height="18" /></td>
                      <td width="94%" class="heading1" style="padding-left:10px">Product Templates</td>
                    </tr>
                  </table>
                    <table width="667" cellspacing="0" cellpadding="0" style="margin-top:10px; margin-bottom:10px">
                      <tr>
                        <td class="bus_card_bgleft" width="10"></td>
                        <td align="left" valign="top" class="bus_card_bgcenter">
						<form name="form_pt" method="post">
						<table width="638" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="53"><table width="280" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="134" align="left" class="bus_card_textblue">Business Card Option</td>
                                    <td width="18" align="left" valign="middle"><input name="position" type="radio" value="H" checked="checked" <?php if($_REQUEST['position']=='H') echo 'checked'?> /></td>
                                    <td width="60" align="left" class="bus_card_textblack">Horizontal</td>
                                    <td width="18" align="left" valign="middle"><input name="position" type="radio" value="V" <?php if($_REQUEST['position']=='V') echo 'checked'?> /></td>
                                    <td class="bus_card_textblack">Vertical</td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="300" align="left" valign="middle">
									<select name="selcat" class="bus_cardbox" >
                                        <option value="">Select your profession</option>
										<?php for($c=0; $c<count($cat); $c++) { ?>
										<option value="<?php echo $cat[$c]['cat_id']; ?>" <?php if($cat[$c]['cat_id']==$_REQUEST['selcat']) echo "selected"; ?>><?php echo $cat[$c]['category']; ?></option>
										<?php } ?>
                                       
                                    </select>
									</td>
                                    <td width="300" align="left">
									<select name="selstyle" class="bus_cardbox" >
                                        <option value="">Select your style</option>
										<?php for($s=0; $s<count($style); $s++) { ?>
										<option value="<?php echo $style[$s]['sty_id']; ?>" <?php if($style[$s]['sty_id']==$_REQUEST['selstyle']) echo "selected"; ?>><?php echo $style[$s]['style']; ?></option>
										<?php } ?>
                                    </select>
									</td>
                                    <td align="left" valign="middle"><input type="image" src="images/but_go.jpg" name="prodsearch" value="Submit" /></td>
                                  </tr>
                              </table></td>
                            </tr>
                        </table>
						</form>
						</td>
                        <td class="bus_card_bgright" width="10"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align="center" valign="top" class="contentbg"><table width="667" cellspacing="0" cellpadding="0">
                    
                    <tr>
                      <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    
                    <tr>
                      <td align="left" valign="top"><table style="border:1px solid #CED5DF;" width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="30" align="left" valign="top" bgcolor="#EEF2F3"><table width="100%" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #CED5DF;">
                            <tr>
                              <td style="padding-left:16px;" class="bus_card_textblue14" width="411" height="30"><?php SelectedCategory(PFO_CAT,$_REQUEST['selcat']); ?></td>
                              <td width="252" align="left" valign="middle"><table width="235" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="22" align="right" class="bus_card_textblack" style="padding-right:15px"><?php
								  if(count($prod)>0)
								  {
								  $cpage = $_REQUEST['page']; 
								  $cnt = $_REQUEST['cnt'];
								  if(count($prod)>($cpage*$cnt))
								  {
								  $last = $cpage*$cnt;
								  }
								  else
								  {
								  $last = (($cpage*$cnt)-($cnt-1))+(count($prod)-1);
								  }
								  
								   if($cpage=="") echo "Viewing Lists 1 - ".count($prod); else echo "Viewing Lists ". (($cpage*$cnt)-($cnt-1)) ." - ".$last; 
								   
								   } ?></td>
                                </tr>
                                
                                <tr>
                                  <td><table width="99%" cellspacing="0" cellpadding="0">
                                    <tr>
                                     <td align="right" valign="middle"><?php echo $pagingLink['paging'];  ?></td>
                                    </tr>
                                  </table></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="center" valign="top"><table width="648" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="center" valign="top">&nbsp;</td>
                              <td><div id="book"></div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
							<?php
							 if($product_count>1) { 
							 for ($p=0; $p<count($prod); $p++) { ?>
                              <td width="216" align="center" valign="top"><table width="210" cellpadding="0" cellspacing="0" class="product_box" style="margin-bottom:5px">
                                <tr>
                                  <td align="left" valign="top"><table width="180" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td height="14"></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top"><img src="itemImages/thumbs/<?php echo $prod[$p]['front_image']; ?>" width="185" height="135" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td align="left" valign="middle"><a href="itemImages/images/<?php echo $prod[$p]['front_image']; ?>" rel="lightbox" ><img src="images/search_img.jpg" width="16" height="14" border="0" /></a></td>
                                          <td width="54" class="bus_card_textblue">
                                          
                                          <div class='PathMenuBar {hoverIntent:true}' id='PathMenuBar<?php echo $p; ?>'>
                                     <div class='PathElement'>
				    <a title='Options' href='javascript:void(0);'>Options</a>
					<div class='PathPopup'>
						<a title='Bookmarside' href='javascript:void(0);'  onclick="BookMark(<?php echo $prod[$p]['prod_id']; ?>)" >Bookmark</a>
						<a title='Backside' href='itemImages/images/<?php echo $prod[$p]['back_image']; ?>' rel="lightbox" style="overflow:auto;" >Backside</a>					</div>
				</div>     
                                          </div>                                          </td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="right" style="padding:10px 0px 5px 0px"><!--<input type="image" src="images/select_but.jpg" name="Submit3" value="Submit" onclick="javascript: window.location = 'lab.php?temp=<?php echo $prod[$p]['front_image']; ?>' " />--><input type="image" src="images/select_but.jpg" name="Submit3" value="Submit" onclick="javascript: window.location = 'builder_new.php?id=<?php echo $prod[$p]['prod_id']; ?>' " /></td>
                                    </tr>
                                  </table></td>
                                </tr>
                              </table></td>
							  
							  <?php $c=$p+1; if($c%3 == 0) { ?> </tr><tr><td></td></tr> <?php } ?>
                              		<script>
									$(document).ready(function(){
		// path-menu elements initialization after document's loaded
		$('#PathMenuBar<?php echo $p; ?>').path_menu(/*{animation_speed:0}*/);
		$('#Menu1').path_menu({animation_speed:0});
	});
									</script>	  
							  <?php } } else { ?>
							  <td colspan="3" align="center" class="X5Subtitles"> No Datas Available</td>
							  <?php } ?>
                            
                            <tr>
                              <td align="center" valign="top">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center" valign="top">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td  bgcolor="#EEF2F3"><table width="100%" cellspacing="0" cellpadding="0" style="border-top:1px solid #CED5DF;">
                            <tr>
                              <td width="395" class="bus_card_textblue14 style1" style="padding-left:16px;" >&nbsp;</td>
                              <td align="left" valign="middle" class="style1"><table width="235" cellspacing="0" cellpadding="0">
                               
                                <tr>
                                  <td><table width="98%" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td align="right"><?php echo $pagingLink['paging'];  ?></td>
                                      </tr>
                                  </table></td>
                                </tr> 
                                <tr>
                                  <td height="35" align="right" class="bus_card_textblack" style="padding-right:15px"><?php
								   if(count($prod)>0)
								  {
								  $cpage = $_REQUEST['page']; 
								  $cnt = $_REQUEST['cnt'];
								  if(count($prod)>($cpage*$cnt))
								  {
								  $last = $cpage*$cnt;
								  }
								  else
								  {
								  $last = (($cpage*$cnt)-($cnt-1))+(count($prod)-1);
								  }
								  
								   if($cpage=="") echo "Viewing Lists 1 - ".count($prod); else echo "Viewing Lists ". (($cpage*$cnt)-($cnt-1)) ." - ".$last;  
								   } ?></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table></td>
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