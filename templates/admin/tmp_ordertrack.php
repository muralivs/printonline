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
                          <td width="60%"  style="padding:5px 5px 0px 5px">Order Tracking</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Order List</td>
                        </tr>
						<?php if($_REQUEST['del']=='suc') { ?>
						<tr>
                          <td class="error" align="center">Selected Record Deleted Successfully</td>
                        </tr>
						<?php } ?>
						<?php if($_REQUEST['err']=='sent') { ?>
						<tr>
                          <td class="error" align="center">Mail Sent Sucessfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="12%" align="center" class="heading3">User</td>
							  <td width="11%" align="center" class="heading3">Front Side</td>
							  <td width="11%" align="center" class="heading3">Back Side</td>
							  <td colspan="2" align="center" class="heading3">Details</td>
							  <td class="heading3" colspan="3" align="center">Action</td>
                            </tr>
							 <?php 
							 if($user_count>1) {
							 for($u=0; $u<count($data); $u++) {
							 
$fimg = "../".$data[$u]['imgpathf'];
$bimg = "../".$data[$u]['imgpathb'];
/*if($img=="")
{
$photo = "../profile_thumb/no_photo.jpg";
}
else
{
if(file_exists("../profile_thumb/".$img))
{
$photo = "../profile_thumb/".$img;
}
else
{
$photo = "../profile_thumb/no_photo.jpg";
}
}*/
							 ?> 
                            <tr bgcolor="#FFFFFF">
                              <td class="registertxt"><a href="shipping_details.php?uid=<?php echo $data[$u]['user_id']; ?>" class="mainnav_link"><?php $userid=$data[$u]['user_id']; $where = "WHERE `reg_id` = '$userid' ";
$userdetails =  $adobj->SelectWhere(PFO_REGISTER,$where);  echo $userdetails[0]['firstname'];  ?></a></td>
							  <td class="registertxt"><img src="<?php echo $fimg; ?>" border="0" height="125" width="125" /></td>
							  <td class="registertxt"><img src="<?php echo $bimg; ?>" border="0" height="125" width="125" /></td>
							  <td width="30%" class="registertxt"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                      <tr>
                                        <td><strong>Order Id :</strong> <?php echo $data[$u]['order_id']; ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Purchased Date :</strong>  <?php echo date("d / M / Y",$data[$u]['pur_date']); ?> </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Used Logo/Images :</strong>  <?php echo $data[$u]['imgcount']; ?> </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Quantity :</strong>  <?php echo $data[$u]['quantity']; ?> </td>
                                      </tr>
									  <tr>
                                        <td><strong>Paper :</strong>  <?php echo $data[$u]['paper']; ?> </td>
                                      </tr>
									  
								
                              </table></td>
							  <td width="25%" class="registertxt"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                 
									  
									  <tr>
                                        <td><strong>Shipping Method :</strong>  <?php echo $data[$u]['ship_method']; ?> </td>
                                      </tr>
									  <tr>
                                        <td><strong>Total Price :</strong>  <?php echo $data[$u]['total']; ?> $ </td>
                                      </tr>
									  <tr>
                                        <td><strong>Payment Status :</strong>  <?php if($data[$u]['pay_status']==0) echo "Pending"; else echo "Paid"; ?> </td>
                                      </tr>
									  <tr>
                                        <td><strong>Order Status :</strong>  <?php echo $data[$u]['order_status']; ?> </td>
                                      </tr>
									   <tr>
                                        <td>
										<a href="javascript: void(0)" onclick="window.open('../templates/admin/tmp_orderstatus.php?oid=<?php echo $data[$u]['order_id']; ?>','Order_Status','width=400, height=275,resizable=no') " class="accountmorelink" >Update Order Status</a>
										
										</td>
                                      </tr>
                              </table></td>
                              <td width="3%" class="registertxt">
							  <a href="javascript: void(0)" onclick="window.open('../templates/admin/tmp_ordermail.php?oid=<?php echo $data[$u]['order_id']; ?>','Order_Mail','width=550, height=375, x=300, y=300, resizable=no') " class="accountmorelink" ><img src="../images/icon/mail.jpg" border="0" alt="Send Mail" title="Send Mail"></a>
							  </td>
							  <td width="3%" class="registertxt"><a href="javascript:void(0);" onClick="javascript: window.open('../templates/admin/tmp_pdf.php?oid=<?php echo $data[$u]['order_id']; ?>','name');" class="mainnav_link"><img src="../images/icon/download.png" border="0" alt="Download PDF" title="Download PDF"></a></td>
							  <td width="3%" class="registertxt">
							  <a href="javascript:void(0);" onClick="if(confirm('Are You Sure Want to Delete THis Record?')) document.location.href='ordertrack.php?del=order&sid=<?php echo $data[$u]['id']; ?>'" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a>
							  
							 <!-- <a href="javascript:void(0);" onClick="alert('This feature is disabled in Demo version');" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a> -->
							  
							  </td>
                            </tr>
							 <?php } } else {  ?>
							 <tr>
                              <td colspan="8" align="center">No Datas Available</td>
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