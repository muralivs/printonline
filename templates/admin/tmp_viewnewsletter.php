<script>

var xmlHttp

function BlockUser(id,str,div)
{
 
divval = div
	xmlHttp=GetXmlHttpObject()
	//document.getElementById("subid").innerHTML="<img src='../images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="../ajax/blockuser.php"
		url=url+"?id="+id+"&q="+str
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

function validate()
{
/*alert(document.search.day.value);
alert(document.search.month.value);
alert(document.search.year.value);
alert(document.search.today.value);
alert(document.search.tomonth.value);
alert(document.search.year.value);*/

if((document.search.day.value!="") || (document.search.month.value!="") || (document.search.year.value!="") || (document.search.today.value!="") || (document.search.tomonth.value!="") || (document.search.toyear.value!=""))
{
if(document.search.day.value=="")
{
alert('Please Select From Day');
document.search.day.focus();
return false;
}
if(document.search.month.value=="")
{
alert('Please Select From Month');
document.search.month.focus();
return false;
}
if(document.search.year.value=="")
{
alert('Please Select From Year');
document.search.year.focus();
return false;
}
if(document.search.today.value=="")
{
alert('Please Select To Day');
document.search.today.focus();
return false;
}
if(document.search.tomonth.value=="")
{
alert('Please Select To Month');
document.search.tomonth.focus();
return false;
}
if(document.search.toyear.value=="")
{
alert('Please Select To Year');
document.search.toyear.focus();
return false;
}
}
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Newsletter Management</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
						
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px">
                      <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					
						<tr>
                          <td align="right"  style="padding-right:20px;"><a href="newsletterview.php" class="mainnav_link"> << Back</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">View Newsletter </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
							  <td width="25%" align="center" class="heading3">Mail to</td>
							  <td width="75%" align="left" class="registertxt"><?php if($data['email']=="non") echo "Non Members"; else echo $data['email']; ?></td>
                            </tr>
							<tr>
							  <td width="25%" align="center" class="heading3">Message</td>
							  <td width="75%" align="left" class="registertxt"><?php echo $data['message']; ?></td>
                            </tr>
							<tr>
							  <td width="25%" align="center" class="heading3">Attachment</td>
                              <td width="75%" align="left" class="registertxt"><a href="download.php?f=<?php echo $data['attachment']; ?>" class="mainnav_link"><?php echo $data['attachment']; ?></a></td>

                            </tr>
                          </table>                      
						     </td>
                        </tr>
                      
                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>