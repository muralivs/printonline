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
		var url="ajax/flipimage.php"
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

function FormSubmit()
{
document.frmcart.submit();
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px">My Shopping Cart</td>
                      </tr>
                    
                    <tr>
                      <td align="justify" style="padding:5px" ></td>
                      </tr>
                   
                    <tr>
                      <td align="left" valign="top"  style="padding:10px">
					  <form name="frmcart" method="post">
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td  style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="shoptablebg">
                              <tr>
                                <td width="30%" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Your Card</td>
                                <td width="26%" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Description</td>
                                <td width="26%" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Quantity / Paperstock</td>
                                <td width="10%" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Price</td>
                                <td width="8%" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Total</td>
								<td width="8%" align="center" class="prd_smallheading" style="padding:5px; border-bottom:solid 1px #b3c2d7;">Remove</td>
                              </tr>
							  <?php if($cartcount>0) { 
							  $amt=0;
							  for($c=0; $c<$cartcount; $c++) {
							  $qty = $data[$c]['quantity'];
							  $paper = $data[$c]['paper'];
							  
							  if(($qty==0) || ($qty==""))
							  {
							  $qty = 100;
							  }
							  if($paper=="")
							  {
							  $paper = "matt";
							  }
							  
							  $prqry = mysql_query("SELECT * FROM `pfo_price` WHERE `qty` = '$qty' ");
							  $price = mysql_fetch_array($prqry);
							  
							  
							  ?>
						  <tr>
						 
							<td bgcolor="#FFFFFF" style="padding:5px; border-right:solid 1px #b3c2d7">
							 <div id="dimageid<?php echo $c; ?>">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><img src="<?php echo $data[$c]['imgpathf']; ?>" border="0" width="350" height="200" /></td>
</tr>

<tr>
    <td align="center"><a href="javascript: void(0); " onclick="FlipCard('F','dimageid<?php echo $c; ?>','<?php echo $data[$c]['id']; ?>'); " class="plink">Flip Card</a></td>
  </tr>
</table> 
							</div>
							</td>
						 
                                <td align="left" valign="top" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                    <tr>
                                      <td height="25"><strong>Premium Business Card</strong></td>
                                    </tr>
                                    
                                    <tr>
                                      <td height="25"><strong>Uploaded Logo</strong></td>
                                    </tr>
                                    <tr>
                                      <td height="25"><strong>Paper Stock</strong></td>
                                    </tr>
                                </table></td>
                                <td align="left" valign="top" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7">
                                  <table width="100%" border="0" cellspacing="5" cellpadding="0">
                                      <tr>
                                        <td><select id="id" name="quantity[]" onchange="javascript: FormSubmit(); ">
										    <option value="100" <?php if($qty==100) echo "Selected"; ?> >100</option>
                                            <option value="250" <?php if($qty==250) echo "Selected"; ?> >250</option>
                                            <option value="500" <?php if($qty==500) echo "Selected"; ?> >500</option>
                                            <option value="1000" <?php if($qty==1000) echo "Selected"; ?> >1000</option>
                                            <option value="2000" <?php if($qty==2000) echo "Selected"; ?> >2000</option>
											<option value="5000" <?php if($qty==5000) echo "Selected"; ?> >5000</option>
                                        </select></td>
                                      </tr>
                                     
                                      <tr>
                                        <td height="25">$ <?php echo $logoprice[0]['logo']; ?> X <?php echo $data[$c]['imgcount']; ?></td>
                                      </tr>
                                      <tr>
                                        <td><select id="id1" name="paper[]" onchange="javascript: FormSubmit(); ">
                                            <option value="matt" <?php if($paper=='matt') echo "Selected"; ?> >Matt Finish</option>
                                            <option value="glossy" <?php if($paper=='glossy') echo "Selected"; ?> >Glossy Finish</option>
                                            </select>    <input type="hidden" name="cid[]" value="<?php echo $data[$c]['id']; ?>" />                 </td>
                                       </tr>
                                    </table>
                                </td>
                                <td align="left" valign="top" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                    <tr>
                                      <td height="25" align="center" valign="middle">$ <?php echo $price[$paper]; ?></td>
                                    </tr>
                                    
                                    <tr>
                                      <td height="25" align="center" valign="middle">$ <?php echo ($logoprice[0]['logo']*$data[$c]['imgcount']); ?></td>
                                    </tr>
                                    <tr>
                                      <td height="25" align="center" valign="middle">&nbsp;</td>
                                    </tr>
                                </table></td>
                                <td align="left" valign="bottom" bgcolor="#FFFFFF"  style="padding:5px; border-right:solid 1px #b3c2d7" ><strong><?php echo (($price[$paper]) + ($logoprice[0]['logo']*$data[$c]['imgcount']) ); ?> $</strong></td>
								 <td align="left" valign="middle" bgcolor="#FFFFFF"  style="padding:5px"><strong><a href="javascript: void(0);" onclick=" if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='display_cart.php?del=prod&pid=<?php echo $data[$c]['id']; ?>'; else return false; "><img src="images/delete.gif" width="32" height="32" border="0" /></a></strong></td>
                              </tr>
							  <?php 
							  //$amt = 0;
							  $amt = $amt + (($price[$paper]) + ($logoprice[0]['logo']*$data[$c]['imgcount']) );
							  } } else { ?>
							  <tr>
                                <td bgcolor="#FFFFFF" colspan="6" valign="middle" height="100" align="center" class="prd_smallheading">Your Cart is Empty</td>
                              </tr>
							  <?php } ?>
                            </table>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px">
                                <tr>
                                  <td width="94%" height="25" align="right" valign="middle" class="prd_smallheading">Total Price</td>
                                  <td width="6%" align="left" valign="middle" style="padding-left:5px"><strong><?php echo $amt; ?> $</strong><?php $_SESSION['amt'] = $amt; ?></td>
                                </tr>
                                <tr>
                                  <td colspan="2"><table width="40%" border="0" align="right" cellpadding="0" cellspacing="6">
                                    <tr>
                                      <td width="62%" align="right"><span style="padding-left:10px">
                                        <!--<input type="button" name="button3" id="button3" value="Continue Design" class="go_btn" onclick="javascript: window.location='lab.php' " />-->
										<input type="button" name="button3" id="button3" value="Continue Design" class="go_btn" onclick="javascript: window.location='builder_new.php?id=<?php echo $fet_latestcard['prod_id']; ?>' " />
                                      </span></td>
                                      <td width="38%"><span style="padding-left:10px">
									  <?php if($cartcount>0) { ?>
                                        <input type="button" name="button2" id="button2" value="Checkout" class="go_btn" onclick="javascript: window.location='shipping.php' " />
										<?php } ?>
                                      </span></td>
                                    </tr>
                                  </table></td>
                                  </tr>
                            </table></td>
                        </tr>
                      </table>
					  </form>
					  </td>
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