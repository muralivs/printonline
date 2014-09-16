<script>
var xmlHttp2
function SelectState(cid)
{ 
	xmlHttp2=GetXmlHttpObject()
	//document.getElementById("ckemail").innerHTML="<img src='images/icon/loading.gif' border='0'>"; 
		if (xmlHttp2==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/select_state_ship.php"
		url=url+"?cid="+cid
		url=url+"&sid="+Math.random()
		xmlHttp2.onreadystatechange=stateChanged3 
		xmlHttp2.open("GET",url,true)
		xmlHttp2.send(null)

}

function stateChanged3() 
{ 
if (xmlHttp2.readyState==4 || xmlHttp2.readyState=="complete")
{ 
document.getElementById("stateid").innerHTML=xmlHttp2.responseText 
} 
}
//#######################################
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
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="dottedborder" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px" class="heading1">Enter Shipping information </td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">* Required Information</td>
                        </tr>
                      </table></td>
                      </tr>
                    
                    <tr>
                      <td align="justify" style="padding:5px" ></td>
                      </tr>
                   
                    <tr>
                      <td align="left" valign="top"  style="padding:10px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        
                        <tr>
                          <td align="left" valign="top" style="padding:5px">
						  <form name="frmshipp" method="post">
						  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                              <tr>
                                <td class="registerheading">Choose a Delivery Time - <span class="startrequire"> All Price Shown exclude applicable taxes</span></td>
                              </tr>
                              <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                                      <tr>
                                        <td width="5%" class="registertxt"><label>
                                          <input type="radio" name="ship_method" id="radio" value="slow" checked="checked" />
                                        </label></td>
                                        <td width="38%" align="left" valign="middle" class="registertxt1"><strong>Slow: 21 Days </strong>- $ <?php echo $prod_detail[0]['slow']; ?></td>
                                        <td width="57%" align="left" valign="middle">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td class="registertxt"><input type="radio" name="ship_method" id="radio2" value="standard" /></td>
                                        <td align="left" valign="middle" class="registertxt1"><strong>Standard: 14 Days </strong>- $ <?php echo $prod_detail[0]['standard']; ?></td>
                                        <td align="left" valign="middle">&nbsp;</td>
                                      </tr>
                                    </table>
                                </td>
                              </tr>
                              <tr>
                                <td class="registerheading">Contact Information</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top">
                                  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                                    
                                    <tr>
                                      <td width="23%" class="registertxt">First Name </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td width="73%" align="left" valign="middle"><label>
                                        <input type="text" name="cfname" value="<?php echo $add[0]['firstname']; ?>" readonly=""/>
                                      </label></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Last Name </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="clname" value="<?php echo $add[0]['lastname']; ?>" readonly="" /></td>
                                    </tr>
									<tr>
                                      <td class="registertxt">Email </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="cemail" value="<?php echo $add[0]['email']; ?>" readonly="" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Address1 </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="cadd1" value="<?php echo $add[0]['address1']; ?>" readonly="" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Address 2 </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="cadd2" value="<?php echo $add[0]['address2']; ?>" readonly="" /></td>
                                    </tr>
									 <tr>
                                      <td class="registertxt">Country </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle">
									  <select name="ccountry" id="select2" disabled="disabled">
                                          <?php 
								  for($c=0; $c<count($selcountry); $c++)
								   {?>
								   <option value="<?php echo $selcountry[$c]['countryid']; ?>" <?php if($add[0]['country']==$selcountry[$c]['countryid']) echo "Selected"; ?> ><?php echo $selcountry[$c]['country']; ?> </option>
								  <?php } ?>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Province / State </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="cstate" value="<?php echo $add[0]['state']; ?>" readonly="" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">City </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="ccity" value="<?php echo $add[0]['city']; ?>" readonly="" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Postal Code/Zip code</td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input name="czip" type="text" value="<?php echo $add[0]['zipcode']; ?>" readonly="" />                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Phone </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="cphone" value="<?php echo $add[0]['phone']; ?>" readonly="" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Fax </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="cfax" value="<?php echo $add[0]['fax']; ?>" readonly="" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Mobile </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="cmobile" value="<?php echo $add[0]['mobile']; ?>" readonly="" /></td>
                                    </tr>
                                   
                                  </table>
                                </td>
                              </tr>
							  
							   <tr>
                                <td class="registerheading">Shipping Information</td>
                              </tr>
							  <tr>
                                <td class=""> <input type="checkbox" name="chkship" onclick="javascript: ChangeAddress(); " />&nbsp; Shipping Information Same as Contact Information</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top">
                                  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                                    
                                    <tr>
                                      <td width="23%" class="registertxt">First Name <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td width="73%" align="left" valign="middle"><label>
                                        <input type="text" name="sfname" />
                                      </label></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Last Name <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="slname" id="textfield4" /></td>
                                    </tr>
									<tr>
                                      <td class="registertxt">Email <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="semail" id="textfield4" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Address1 <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="sadd1" id="textfield5" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Address 2 </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="sadd2" id="textfield6" /></td>
                                    </tr>
									 <tr>
                                      <td class="registertxt">Country <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><select name="scountry" id="select2" onchange="SelectState(this.value);">
                                          <option value="" selected="selected">Select Country</option>
                                   <?php 
								  for($c=0; $c<count($selcountry); $c++)
								   {?>
								   <option value="<?php echo $selcountry[$c]['countryid']; ?>" ><?php echo $selcountry[$c]['country']; ?> </option>
								  <?php } ?>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Province / State <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><div id="stateid"><input type="text" name="sstate" id="textfield11" /></div></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">City <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="scity" id="textfield10" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Postal Code/Zip code<span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input name="szip" type="text" id="textfield12" size="12" />                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Phone <span class="startrequire">*</span></td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="sphone" id="textfield7" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Fax </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="sfax" id="textfield8" /></td>
                                    </tr>
                                    <tr>
                                      <td class="registertxt">Mobile </td>
                                      <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                                      <td align="left" valign="middle"><input type="text" name="smobile" id="textfield9" /></td>
                                    </tr>
									<tr><td class="3">&nbsp;</td></tr>
									<tr>
                                      <td class="registertxt">&nbsp;</td>
                                      <td width="4%" align="left" valign="middle" class="registertxt">&nbsp;</td>
                                      <td align="left" valign="middle"><input type="submit" name="shipping" id="textfield9" class="go_btn" value="Submit" onclick="javascript : return ShippingValidate(); " /></td>
                                    </tr>
                                   
                                  </table>
                                </td>
                              </tr>
                          </table>
						  </form>
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