<script>
var xmlHttp

function CheckUsername(str)
{ 
	if(echeck(str)==true)
	{
	xmlHttp=GetXmlHttpObject()
	document.getElementById("ckemail").innerHTML="<img src='images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/check_username.php"
		url=url+"?q="+str
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
	}
	else
	{
		alert("Invalid Email");
		document.form_reg.reg_email.focus();
	}
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById("ckemail").innerHTML=xmlHttp.responseText 
} 
} 
//########################################
var xmlHttp1
function Fun()
{ 
	str = document.form_reg.reg_email.value;
	xmlHttp1=GetXmlHttpObject()
	document.getElementById("ckemail").innerHTML="<img src='images/icon/loading.gif' border='0'>"; 
		if (xmlHttp1==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/check_username.php"
		url=url+"?fq="+str
		url=url+"&sid="+Math.random()
		xmlHttp1.onreadystatechange=stateChanged2 
		xmlHttp1.open("GET",url,true)
		xmlHttp1.send(null)

}

function stateChanged2() 
{ 
if (xmlHttp1.readyState==4 || xmlHttp1.readyState=="complete")
{ 
document.getElementById("ckemail").innerHTML=xmlHttp1.responseText 
} 
} 
//#######################################

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
		var url="ajax/select_state.php"
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
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="74%" align="left" valign="top" style="padding:10px 5px 5px 5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Registration </td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">* Required Information</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px">
					  <form id="form_reg" name="form_reg" method="post" action="">
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Personal Details</td>
                        </tr>
                        <tr>
                          <td>
                          
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                            <!--<tr>
                              <td width="23%" class="registertxt">User ID <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><input type="text" name="textfield2" id="textfield2" />                              </td>
                              </tr>-->
                            <tr>
                              <td class="registertxt" width="24%">First Name <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle" width="72%"><label>
                                <input type="text" name="reg_firstname" id="reg_firstname" value="<?php echo $_SESSION['reg_firstname'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Last Name <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_lastname" id="reg_lastname" value="<?php echo $_SESSION['reg_lastname'];?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Address1 <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_address1" id="reg_address1" value="<?php echo $_SESSION['reg_address1'];?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Address 2 </td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_address2" id="reg_address2" value="<?php echo $_SESSION['reg_address2'];?>" /></td>
                            </tr>
							<tr>
                              <td class="registertxt">Country <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><select name="reg_country" id="reg_country" onchange="SelectState(this.value);" value="<?php echo $_SESSION['reg_country'];?>" >
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
                              <td align="left" valign="middle"><div id="stateid"><input type="text" name="reg_state" id="reg_state" value="<?php echo $_SESSION['reg_state'];?>" /></div></td>
                            </tr>
                            <tr>
                              <td class="registertxt">City <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_city" id="reg_city" value="<?php echo $_SESSION['reg_city'];?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Postal Code/Zip code <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle">
                                <input name="reg_zip" type="text" id="reg_zip" size="12" value="<?php echo $_SESSION['reg_zip'];?>" />                             </td>
                            </tr>
                            <tr>
                              <td class="registertxt">Phone <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_phone" id="reg_phone" value="<?php echo $_SESSION['reg_phone'];?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Fax </td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_fax" id="reg_fax" value="<?php echo $_SESSION['reg_fax'];?>" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Mobile </td>
                             <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="text" name="reg_mobile" id="reg_mobile" value="<?php echo $_SESSION['reg_mobile'];?>" /></td>
                            </tr>
                            
                          </table>
                                                    </td>
                        </tr>
                        <tr>
                          <td class="registerheading">Login Information</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                              
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; ">
                           <!-- <tr>
                              <td width="23%" class="registertxt">User ID</td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle"><input type="text" name="textfield2" id="textfield2" />                              </td>
                              </tr>-->
                            <tr>
                              <td class="registertxt" width="24%">E-mail <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle" width="72%">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><input type="text" name="reg_email" id="reg_email"  onChange="javascrpt: CheckUsername(this.value); " value="<?php echo $_SESSION['reg_email'];?>" /></td>
    <td><div id="ckemail"></div></td>
  </tr>
</table>                              </td>
                            </tr>
                            <tr>
                              <td class="registertxt">Password <span class="startrequire">*</span></td>
                               <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="password" name="reg_pass" id="reg_pass" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Confirm Password <span class="startrequire">*</span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="password" name="reg_repass" id="textfield5" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">Captcha Image</td>
                              <td align="center" valign="middle" ><strong>&nbsp;&nbsp;:</strong></td>
                              <td align="left" valign="middle" >
                                                            
                              <!--Captcha Image-->
                              
               <img id="siimage" align="left" style="padding-right: 5px; border: 0" src="securimage2/securimage_show.php?sid=<?php echo md5(time()) ?>" />

        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="19" height="19" id="SecurImage_as3" align="middle">
			    <param name="allowScriptAccess" value="sameDomain" />
			    <param name="allowFullScreen" value="false" />
			    <param name="movie" value="securimage2/securimage_play.swf?audio=securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" />
			    <param name="quality" value="high" />
			
			    <param name="bgcolor" value="#ffffff" />
			    <embed src="securimage2/securimage_play.swf?audio=securimage2/securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" quality="high" bgcolor="#ffffff" width="19" height="19" name="SecurImage_as3" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			  </object>

        <br />
        
        <!-- pass a session id to the query string of the script to prevent ie caching -->
        <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onClick="document.getElementById('siimage').src = 'securimage2/securimage_show.php?sid=' + Math.random(); return false"><img src="securimage2/images/refresh.gif" alt="Reload Image" border="0" onClick="this.blur()" align="bottom" /></a>
        
                              <!--End of captcha image-->
                              
                              </td>
                            </tr>
                            <tr>
                              <td class="registertxt">Enter Captcha Code <span class="startrequire">*</span></td>
                              <td align="center" valign="middle" ><strong>&nbsp;:</strong></td>
                              <td align="left" valign="middle" ><input type="text" name="code" id="code" /></td>
                            </tr>
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td colspan="2" align="left" valign="bottom" ><input type="checkbox" name="checkbox" value="checkbox" /> 
                              I have read the <a href="javascript:void(0);" class="linkOne" onclick="MM_openBrWindow('terms.html','terms','status=no,scrollbars=yes,resizable=no,width=700,height=600')">Terms &amp; Conditions</a> carefully</td>
                            </tr>
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td height="50" colspan="2" align="left" valign="bottom" >
                                <input type="submit" name="submit_reg" class="go_btn" id="button2" value="Submit" onClick="javascript:return RegValidation(); "/>
                                <input type="reset" name="button3" id="button3" class="go_btn" value="Reset" />                             </td>
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
                </table></td>
              
            </tr>
          </table>
		  