<script>
var xmlHttp

function CheckEmail(str)
{ 

if(echeck(str)==true)
	{
	xmlHttp=GetXmlHttpObject()
	document.getElementById("ckemail").innerHTML="<img src='images/loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/check_email.php"
		url=url+"?q="+str+"&sesid=<?php echo $uid; ?>"
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
	}
	else
	{
		alert("Invalid Email");
	}
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById("ckemail").innerHTML=xmlHttp.responseText 
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="48%"  style="padding:5px 5px 0px 5px">Hi <?php echo $_SESSION['pfo_username']; ?> </td>
                          <td width="52%" align="right" valign="bottom" class="startrequire">
                          <form id="form1" name="form1" method="post" action="">
                          <table width="60%" border="0" cellspacing="4" cellpadding="0">
                            <tr>
                              <td width="45%">
                            
                                <input type="button" class="account_btn" name="button2" id="button2" value="My Account" onclick="window.location.href='myaccount.php?task=view'" />
                                
                              </td>
                              <td width="55%">
							  <input type="button" class="account_btn" name="button3" id="button3" value="Edit My Account" onclick="window.location.href='myaccount.php?task=editdetails'"  /></td>
                            </tr>
                          </table>
                          </form>
                          </td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px">
					  <form id="form1" name="form_email" method="post" action="">
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Change Email</td>
                        </tr>
						<?php if(isset($_REQUEST['error'])) { ?>
						<tr>
                          <td class="red" align="center">Email Already Exist</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td>
                          
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
                            <tr>
                              <td class="pcurrent" width="18%">Your Email </td>
                              <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle" width="79%"><?php echo $datas[0]['email']; ?></td>
                            </tr>
                            <tr>
                              <td class="pcurrent">New Email</td>
                               <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37%" valign="middle"><input type="text" name="new_email" id="textfield4" onChange="javascript:CheckEmail(this.value); " /></td>
    <td width="63%" valign="middle"><div id="ckemail" style="float:inherit;"></div></td>
  </tr>
</table>

							  </td>
                            </tr>
                             <tr>
                              <td class="registertxt">&nbsp;</td>
                              <td height="50" colspan="2" align="left" valign="bottom" >
                                <input type="submit" name="submit_editemail" class="go_btn" id="button2" value="Submit"  onClick="javascript:return ChangeEmail(); "/>
                                <input type="reset" name="button3" id="button3" class="go_btn" value="Reset" />
							
                             </td>
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