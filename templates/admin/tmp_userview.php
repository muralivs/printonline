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

</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">User Management</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Details of <?php echo $data[0]['firstname']; ?></td>
                        </tr>
						<tr><td align="right" style="padding:10px 200px 0px 0px;"><a href="users.php"><img src="../images/icon/back_16.png" border="0" title="Back to User List" alt="Back"> </a></td></tr>
                        <tr>
                          <td align="left" valign="top">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" width="20%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><img src="<?php echo $photo; ?>" border="0"></td>
  </tr>
</table>
</td>
    <td width="80%"><table width="70%" align="left" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="10" style="margin-top:10px; margin-bottom:15px">
						    <tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">First Name</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['firstname']; ?></td>
                            </tr>
							 <tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Last Name</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['lastname']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Email</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['email']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Member type</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3">
							  <?php 
							  $user_id=$_REQUEST['uid'];
							  $mem_card=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_membership` where user_id='$user_id'"));
							  if($mem_card['title']){
							  echo $mem_card['title'];}
							  else
							  {
							  echo "Free Member";
							  }
							  ?>
							  </td>
                            </tr>
							<?php if(($mem_card['title']=="Gold")||($mem_card['title']=="Silver")||($mem_card['title']=="Platinum")) {?>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Duration</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $mem_card['joining_date']." to ".$mem_card['expiry_date'] ;   ?></td>
                            </tr>
							
							<?php } ?>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Address 1</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['address1']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Address 2</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['address2']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Phone</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['phone']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Fax</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['fax']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Mobile</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['mobile']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Country</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php SelCountryId(PFO_COUNTRY,$data[0]['country']); ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">State</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['state']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">City</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['city']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Zip / Postal Code</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo $data[0]['zipcode']; ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Signup Date</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php echo date("d-m-y,h:m:i",$data[0]['reg_date']); ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Last Login</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php if($data[0]['last_signin']=="") { echo "No Last Login"; } else { echo date("d-m-y,h:m:i",$data[0]['last_signin']) ; } ?></td>
                            </tr>
							<tr bgcolor="#FFFFFF">
                              <td width="39%" align="left" class="heading3">Status</td>
							  <td width="9%" align="center" class="heading3">:</td>
							  <td width="52%" align="left" class="heading3"><?php if($data[0]['reg_status']==1) echo "Active"; else if($data[0]['reg_status']==0) echo "Inactive"; ?></td>
                            </tr>
							 
                          </table></td>
  </tr>
</table>

                                                
						     </td>
                        </tr>
                      </table></td>
                      </tr>
                   
                  </table></td>
                </tr>
              </table>