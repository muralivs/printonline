<script>

var xmlHttp

function SubscribeNews()
{ 
str = document.form_news.news_email.value;
if(echeck(str))
{
//alert(str);
	xmlHttp=GetXmlHttpObject()
	document.getElementById("newsid").innerHTML="<img src='images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/subnews.php"
		url=url+"?e="+str
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
}
else
{
alert("Invalid Email Id");
}
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{
res = xmlHttp.responseText
if(res==1)
{
document.getElementById("newsid").innerHTML="<td valign='middle'><span class='green'>Given Email Id Subscribed Successfully.</span></td>"; 
document.form_news.news_email.value='';
}
else if(res==0)
{
document.getElementById("newsid").innerHTML="<td valign='middle'><span class='red'>Given Email Id Already Subscribed With Us.</span></td>"; 
} 

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
                  <td class="contentbg">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <!--<tr>
                      <td style="padding:20px 5px 20px 5px" class="search_td">
					  <form name="frm_search" method="post" action="search.php">
					  <table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="78%" class="search_boxbg">
                            <input name="textfield2" type="text" class="search_txt" id="textfield2" value="Search here" />                          </td>
                          <td width="22%"> <input type="submit" name="button" id="button" value="Search" class="search_btn" /></td>
                        </tr>
                      </table>
					  </form>
					  </td>
                    </tr>-->
                    <tr>
                      <td align="left" valign="top" class="heading3" style="padding:10px 5px 10px 5px">My Portfolio</td>
                    </tr>
                    <tr>
                      <td style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td align="left" valign="top"><img src="images/portfolio1.jpg" width="145" height="78" /></td>
                          <td align="right" valign="top"><img src="images/portfolio2.jpg" width="146" height="78" /></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                     <td align="left" valign="top" class="heading3" style="padding:10px 5px 10px 5px">Design Lab</td>
                    </tr>
                    <tr>
                      <td style="padding:5px"><img src="images/designlab.jpg" width="298" height="174" /></td>
                    </tr>
                    <tr>
                      <td style="padding:20px 5px 20px 5px" class="search_td">
					  <form name="form_news" method="post">
					  <table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td height="30" align="left" valign="top" class="heading3" >Subscribe To Our News Letters</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="78%" class="search_boxbg">
                            <input name="news_email" type="text" class="search_txt" id="textfield2" onfocus="if(this.value=='Your E-mail Id') this.value='';" onblur="if(this.value=='') this.value='Your E-mail Id';" value="Your E-mail Id" />                          </td>
                          <td width="22%"> <input type="button" name="button" id="button" value="Subscribe" class="search_btn" onclick="javascript:SubscribeNews();"/></td>
                        </tr>
						<tr><td colspan="2" ><div id="newsid" class="statusdisplay" align="center"  style="background:#FFFFCC;"></div></td></tr>
                      </table>
					  </form> 
					  </td>
                    </tr>
                    <tr>
                      <td style="padding:5px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="11" align="left" valign="top" class="upload_tdstop"><img src="images/upload_leftcurve.jpg" width="11" height="12" /></td>
                          <td width="94%" class="upload_tdstop"></td>
                          <td width="2%"><img src="images/upload_rightcurve.jpg" width="11" height="11" /></td>
                        </tr>
                        <tr>
                          <td width="11"  class="upload_tdsleft">&nbsp;</td>
                          <td class="upload_middletds" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="18%" style="padding-top:5px; padding-bottom:10px"><img src="images/upload_icon.jpg" width="48" height="43" /></td>
                              <td width="30%" class="upload_heading">Upload Design<br />
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px">
                                    <tr>
                                      <td width="76%" align="right"><a href="#" class="read_link"> Read more</a></td>
                                      <td width="24%" style="padding-left:5px"><img src="images/blue_arrow.jpg" width="7" height="10" /></td>
                                    </tr>
                                </table></td>
                              <td width="22%">&nbsp;</td>
                              <td width="30%" rowspan="2" align="left" valign="top"><img src="images/lowestprice.jpg" width="82" height="41" />
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px">
                                  <tr>
                                    <td width="76%" align="right"><a href="#" class="read_link"> Read more</a></td>
                                    <td width="24%" style="padding-left:5px"><img src="images/blue_arrow.jpg" width="7" height="10" /></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td align="center" style="padding-top:5px; padding-bottom:10px"><img src="images/guarantee.jpg" width="39" height="43" /></td>
                             <td colspan="2" class="upload_heading">Satisfaction Guarantee<br />
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px">
                                    <tr>
                                      <td width="76%" align="right"><a href="#" class="read_link"> Read more</a></td>
                                      <td width="24%" style="padding-left:5px"><img src="images/blue_arrow.jpg" width="7" height="10" /></td>
                                    </tr>
                                </table></td>
                              </tr>
                          </table></td>
                          <td class="upload_tdsright">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" class="upload_tdsbottom"><img src="images/upload_downlftcurve.jpg" width="10" height="11" /></td>
                          <td class="upload_tdsbottom"></td>
                          <td><img src="images/upload_downrgtcurve.jpg" width="11" height="12" /></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
              </table>