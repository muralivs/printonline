<script>
var xmlHttp1
function Fun(str)
{ 
	//str = document.form_reg.reg_email.value;
	xmlHttp1=GetXmlHttpObject()
	document.getElementById("forgot_email").innerHTML="<img src='images/icon/loading.gif' border='0'>"; 
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
document.getElementById("forgot_email").innerHTML=xmlHttp1.responseText 
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Forgot Password</td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Forgot Your Password</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <form id="form1" name="form_forgot" method="post" action="">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                            <tr>
                              <td colspan="3" class="registertxt">To obtain your password please enter your e-mail address. Your password will be sent to your e-mail address. </td>
                              </tr>
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="23%" align="right" class="registertxt">E-mail<span class="startrequire"></span></td>
                              <td width="4%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="73%" align="left" valign="middle">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><input type="text" name="email" id="textfield2" onChange="Fun(this.value);" /></td>
    <td><div id="forgot_email"></div></td>
  </tr>
</table>
                              </td>
                              </tr>
                            
                            <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td align="left" valign="middle" class="registertxt">&nbsp;</td>
                              <td height="50" align="left" valign="middle"><input type="button" name="submit_for" class="go_btn" id="button2" value="Submit" onClick="javascript:return Forgot_Validation(); "/></td>
                            </tr>
                          </table>
                          </form>                          </td>
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