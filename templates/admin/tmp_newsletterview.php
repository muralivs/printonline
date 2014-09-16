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
                          <td align="right"  style="padding-right:20px;"><a href="newsletter.php" class="mainnav_link">Send Newsletter</a></td>
                        </tr>
                        <tr>
                          <td class="registerheading">Newsletter List</td>
                        </tr>
						<?php if($_REQUEST['del']=='suc') { ?>
						<tr>
                          <td class="error" align="center">Selected Record Deleted Successfully</td>
                        </tr>
						<?php } ?>
						<?php if($_REQUEST['sent']=='suc') { ?>
						<tr>
                          <td class="error" align="center">Mail Sent Sucessfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="6%" align="center" class="heading3">Id</td>
							  <td width="27%" align="center" class="heading3">Mail to</td>
							  <td width="36%" align="center" class="heading3">Message</td>
							  <td width="22%" align="center" class="heading3">Attachment</td>
							   <td class="heading3" colspan="2" align="center">Action</td>
                            </tr>
							 <?php 
							 if(count($data)>0) {
							 for($u=0; $u<count($data); $u++) {
							 
							 ?> 
                            <tr bgcolor="#FFFFFF">
                              <td class="registertxt"><?php echo $u+1; ?></td>
							  <td class="registertxt"><?php if($data[$u]['email']=="non") echo "Non Members"; else echo $data[$u]['email']; ?></td>
							  <td class="registertxt"><?php echo substr($data[$u]['message'],0,200); ?></td>
							  <td class="registertxt"><a href="download.php?f=<?php echo $data[$u]['attachment']; ?>" class="mainnav_link"><?php echo $data[$u]['attachment']; ?></a></td>
                              <td width="4%" class="registertxt"><a href="viewnewsletter.php?nid=<?php echo $data[$u]['ne_id']; ?>" class=""><img src="../images/icon/view.png" border="0" alt="View" title="View" ></a></td>
							  <td width="5%" class="registertxt">
							  <a href="javascript:voide(0);" class="mainnav_link" onclick="if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='newsletterview.php?delnews=news&nid=<?php echo $data[$u]['ne_id']; ?>'; else return false; "><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete" ></a>
							  
							 <!-- <a href="javascript:voide(0);" class="mainnav_link" onclick="alert('This feature is disabled in Demo version');"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete" ></a> -->
							  </td>
							 
                            </tr>
							 <?php } } else {  ?>
							 <tr>
                              <td colspan="6" align="center">No Datas Available</td>
                              </tr>
							 <?php } ?>
                          </table>                      
						     </td>
                        </tr>
                        <tr>
							<td align="center" class="pcurrent"><?php echo $pagingLink['paging'];  ?></td>
						</tr>

                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>