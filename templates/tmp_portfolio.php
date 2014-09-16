<script>
var xmlHttp

function FlipCard(str,div,pid)
{ 
	divval = div
	//alert(div);
	xmlHttp=GetXmlHttpObject()
	//document.getElementById("dimageid").innerHTML="<img src='images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/flipimageport.php"
		url=url+"?q="+str+"&pid="+pid+"&did="+div
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
	
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{
document.getElementById(divval).innerHTML=xmlHttp.responseText 
} 
}
 
//########################################

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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px">My Portfolio</td>
                      </tr>
                    
                    <tr>
                      <td align="justify" style="padding:5px" ></td>
                      </tr>
                   <?php if(isset($_REQUEST['port'])) { ?>
				   <tr>
                      <td align="center" class="X5Subtitles" ><?php if($_REQUEST['port']=='del') echo "Selected Item Deleted Successfully"; ?></td>
                   </tr>
				   <?php } ?>
                    <tr>
                      <td align="left" valign="top"  style="padding:10px">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="top"  style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="right"><table width="100%" cellspacing="0" cellpadding="0" >
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
                                <td width="27%" align="center" class="prd_smallheading" style="border-bottom:1px solid #CED5DF;">Preview</td>
                                <td width="45%" align="center" class="prd_smallheading" style="border-bottom:1px solid #CED5DF;">Details</td>
                                <td width="22%" align="center" class="prd_smallheading" style="border-bottom:1px solid #CED5DF;">Action</td>
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
								for($m=0; $m<count($myport); $m++) {
								$img = $myport[$m]['imgpathf'];
								if($img!="") {
								if(file_exists($img)) {
								 ?>
                              <tr>
                                <td align="left" valign="top" bgcolor="#FFFFFF" style="padding:15px 5px 5px 5px; border-right:solid 1px #b3c2d7;border-bottom:1px solid #CED5DF;"><?php echo $s; ?>.</td>
                                <td align="center" valign="middle" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7;border-bottom:1px solid #CED5DF;">
								<div id="dimageid<?php echo $m; ?>">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="center"><img src="<?php echo $img; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30" align="center" valign="middle"><a href="javascript: void(0); " onclick="FlipCard('F','dimageid<?php echo $m; ?>','<?php echo $myport[$m]['id']; ?>'); " class="read_link">Flip Card</a></td>
                                  </tr>
                                </table>
								</div>
								</td>
                                <td align="left" valign="top" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7;border-bottom:1px solid #CED5DF;"">
                                  <table width="100%" border="0" cellspacing="5" cellpadding="0">
                                      <tr>
                                        <td><strong>Created Date :</strong> <?php echo date("Y-m-d",$myport[$m]['cdate']); ?></td>
                                      </tr>
                                      <tr>
                                        <td ><strong><a href="portfolio.php?add=cart&port_id=<?php echo $myport[$m]['id']; ?>" class="read_link">Add to Cart</a></strong></td>
                                      </tr>
                                  </table>
                               </td>
                                <td align="center" valign="top" bgcolor="#FFFFFF"  style="padding:15px 5px 5px 5px; border-bottom:1px solid #CED5DF;" ><a href="javascript:void(0);" onclick="if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='portfolio.php?del=port&port_id=<?php echo $myport[$m]['id']; ?>'; else return false;"><img src="images/delete.gif" width="32" height="32" border="0" /></a></td>
                              </tr>
                              <?php } }  $s++; } } else { ?>
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