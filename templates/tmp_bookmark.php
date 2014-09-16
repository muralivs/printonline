<script>
var xmlHttp

function RemoveBook(str)
{ 

	xmlHttp=GetXmlHttpObject()
	//document.getElementById("book").innerHTML="<img src='images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/remove_bookmark.php"
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
id = xmlHttp.responseText;
document.getElementById("id"+id).innerHTML=""
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
<link href="css/jquery.path-menu.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="js/jquery.metadata.js"></script>
		<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>
		<script type="text/javascript" src="js/jquery.path-menu.js"></script>

<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="54" align="left" valign="middle"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                      <td width="6%" align="right"><img src="images/heading_icon.jpg" width="21" height="18" /></td>
                      <td width="94%" class="heading1" style="padding-left:10px">My Bookmark</td>
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
                          <td align="center" valign="top"><table width="648" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="center" valign="top">&nbsp;</td>
                              <td width="43">&nbsp;</td>
                              <td width="387">&nbsp;</td>
                            </tr>
                            <tr>
							<?php 
							if($book_count>1) { 
						 for ($p=0; $p<count($book); $p++) { ?>
                              <td width="216" align="center" valign="top" id="id<?php echo $book[$p]['prod_id']; ?>"><table width="210" cellpadding="0" cellspacing="0" class="product_box">
                                <tr>
                                  <td align="left" valign="top"><table width="180" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td height="14"></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top"><img src="itemImages/thumbs/<?php echo $book[$p]['front_image']; ?>" width="186" height="109" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td align="left" valign="middle"><a href="itemImages/images/<?php echo $book[$p]['front_image']; ?>" rel="lightbox" ><img src="images/search_img.jpg" width="16" height="14" border="0" /></a></td>
                                          <td width="54" class="bus_card_textblue">
                                          
                                          <div class='PathMenuBar {hoverIntent:true}' id='PathMenuBar<?php echo $p; ?>'>
                                     <div class='PathElement'>
				    <a title='Options' href='javascript:void(0);'>Options</a>
					<div class='PathPopup'>
						<a title='Bookmarside' href='javascript:void(0);'  onclick="RemoveBook(<?php echo $book[$p]['prod_id']; ?>)" >Remove</a>
						<a title='Backside' href='itemImages/images/<?php echo $book[$p]['back_image']; ?>' rel="lightbox" style="overflow:auto;" >Backside</a>
						
					</div>
				</div>     
                                          
                                          </div>
                                          
                                          
                                          </td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="right" style="padding:10px 0px 5px 0px"><input type="image" src="images/select_but.jpg" name="Submit3" value="Submit" onclick="javascript: window.location = 'builder_new.php?id=<?php echo $book[$p]['prod_id']; ?>' " />
									  
									  <!--<input type="image" src="images/select_but.jpg" name="Submit3" value="Submit" onclick="javascript: window.location = 'lab.php?temp=<?php echo $book[$p]['front_image']; ?>' " />--></td>
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
							<tr>
                              <td align="center" valign="middle" colspan="3" class="X5Subtitles">No Datas Available</td>
                            </tr>
							<?php } ?>
                             <tr>
							 
                                     <td align="right" colspan="3" valign="middle"><?php echo $pagingLink['paging'];  ?></td>
                             </tr>
                            <tr>
                              <td align="center" valign="top">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
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