<script>

var xmlHttp

function CheckPass(str)
{

	xmlHttp=GetXmlHttpObject()
	document.getElementById("ckpass").innerHTML="<img src='../images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="../ajax/ckadminpass.php"
		url=url+"?pass="+str
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById('ckpass').innerHTML=xmlHttp.responseText 
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
                      <td class="heading1 dottedborder" style="padding:5px" colspan="2"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Change Password</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
					  <?php if(isset($_REQUEST['ch'])) { ?>
					  <tr><td colspan="2">&nbsp;</td></tr>
					  <tr>
					  	<td colspan="2" valign="middle" align="center" class="X5Subtitles"><?php if($_REQUEST['ch']=='suc') echo "Password Changed Successfully"; else if($_REQUEST['ch']=='invalid') echo "Invalid Old Password"; ?></td>
					  </tr>
					  <?php } ?>
                    <tr>
					<td width="20%" valign="top"><?php @include _PATH_TEMPLATE."leftsetting.php"; ?></td>
                      <td width="80%" align="left" valign="top" style="padding:5px">
					  <table width="90%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Change Password</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
						  <form name="form_pass" method="post">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="20%" class="pcurrent">Old Password <span class="startrequire"></span></td>
                              <td width="8%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="72%" align="left" valign="middle"><input type="password" name="oldpass" value="" style="width:200px;" onchange="CheckPass(this.value); " /></td>
                            </tr>
							<tr style="height:5px;"> 
							<td width="20%" >&nbsp;</td>
                              <td width="8%" align="left" valign="middle">&nbsp;</td>
                              <td width="72%" align="left" valign="top"><div id="ckpass"></div></td>
							  </tr>
                            <tr>
                              <td class="pcurrent">New Password<span class="startrequire"></span></td>
                              <td width="8%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="password" name="newpass" value="" style="width:200px;" /></td>
                            </tr>
							  <tr>
                              <td class="pcurrent">Confirm Password<span class="startrequire"></span></td>
                              <td width="8%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><input type="password" name="newcpass" value="" style="width:200px;" /></td>
                              </tr>
							  <tr><td colspan="3">&nbsp;</td></tr>
							   <tr>
                              <td class="pcurrent">&nbsp;</td>
                              <td width="8%" align="left" valign="middle">
							  <!--<input type="submit" name="submit_pass" class="go_btn" id="button2" value="Change" onClick="alert('This feature is disabled in Demo version'); return false;"/> -->
							  <input type="submit" name="submit_pass" class="go_btn" id="button2" value="Change" onClick="javascript:return ChangePass(); "/> </td>
                              <td align="left" valign="middle">&nbsp;</td>
                              </tr>
                          </table>                      
						  </form>
					      </td>
                        </tr>
                        

                      </table>
					  </td>
                    </tr>
                   
                  </table></td>
                </tr>
              </table>