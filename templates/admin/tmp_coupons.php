<script>

var xmlHttp

function CreateCoupons()
{
 document.getElementById('coupon').style.display = '';
 per = document.frm_disc.cp_disc.value;
	xmlHttp=GetXmlHttpObject()
	//document.getElementById("subid").innerHTML="<img src='../images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="../ajax/createcoupons.php"
		//alert(url);
		url=url+"?per="+per
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById('coupon').innerHTML=xmlHttp.responseText 
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

function DivClose()
{
document.getElementById('coupon').style.display = 'none';
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Coupons</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px">
					<?php if($_REQUEST['task']=='used') { ?>  
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Used Coupons</td>
                        </tr>
						<tr>
                          <td valign="middle" align="center"><input type="button" name="coupons" value="Create Coupons" class="account_btn" onClick="CreateCoupons(); "><div id="coupon"></div></td>
                        </tr>
						<tr>
                          <td align="right" style="padding:5px 135px 0px 0px ;"><a href="coupons.php" class="mainnav_link">Back Coupons</a></td>
                        </tr>
						<?php if($_REQUEST['del']=='suc') { ?>
						<tr>
                          <td class="X5Subtitles" align="center">Selected Coupon Deleted Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="70%" align="center" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="3" style="margin-top:10px; margin-bottom:15px">
						    <tr>
							 <!-- <td width="5%" align="center" class="heading3">S.No</td>-->
                              <td width="32%" align="center" class="heading3">Coupon</td>
							  <td width="30%" align="center" class="heading3">Discount</td>
							  <td width="19%" align="center" class="heading3">Status</td>
							  <td width="14%" align="center" class="heading3">Delete</td>
                            </tr>
							<?php if($coupon_count>1) { 
							for($c=0; $c<count($udata); $c++) { ?>
							<tr bgcolor="#FFFFFF">
							  <!--<td width="5%" align="center"><?php echo $c+1; ?></td>-->
                              <td width="32%" align="center"><?php echo $data[$c]['coupon']; ?></td>
							  <td width="30%" align="center"><?php echo $data[$c]['cp_discount']; ?> % </td>
							  <td width="19%" align="center"><?php if($data[$c]['cp_status']==0) echo "Not Used"; else if($data[$c]['cp_status']==1) echo "Used"; ?></td>
							  <td width="14%" align="center">
							  <a href="javascript:void(0);" onclick="if(confirm('Are You Sure Want to Delete THis Record?')) document.location.href='coupons.php?del=ucoupon&cid=<?php echo $data[$c]['cp_id']; ?>'" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a>
<!--<a href="javascript:void(0);" onclick="alert('This feature is disabled in Demo version');" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a> -->
							  </td>
                            </tr>
							<?php }  } else { ?>
							<tr bgcolor="#FFFFFF"><td align="center" class="X5Subtitles" colspan="5">No Datas Available</td></tr>
							<?php } ?>
							<tr bgcolor="#FFFFFF"><td align="center" class="pcurrent" colspan="5"><?php echo $pagingLink['paging'];  ?></td></tr>
                      </table></td>
                      </tr>
                   
                  </table>
				  <?php } else if($_REQUEST['task']=='add') { ?>  
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Create Coupons</td>
                        </tr>
						<tr>
                          <td align="right" style="padding:5px 135px 0px 0px ;"><a href="coupons.php" class="mainnav_link">Back to Coupons</a></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
						  <form name="frm_disc" method="post">
                          <table width="70%" align="center" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="3" style="margin-top:10px; margin-bottom:15px">
						    <tr bgcolor="#FFFFFF">
                              <td width="32%" align="center" class="heading3">Discount Percentage</td>
                              <td width="32%" align="center"><input type="text" name="cp_disc" /> % <div id="coupon"></div></td>
							 </tr>
							 <tr bgcolor="#FFFFFF"><td colspan="2" align="center">Only Enter Whole Number (eg. 1,2,3)</td></tr>
							  <tr bgcolor="#FFFFFF">
                              <td width="32%" colspan="2" align="center">
							  <!--<input type="button" name="dc_submit" value="Submit" class="account_btn" onClick="alert('This feature is disabled in Demo version');" /> -->
							  <input type="button" name="dc_submit" value="Submit" class="account_btn" onClick="CreateCoupons();" /> </td>
							 </tr>
                      </table>
					  </form>
					  </td>
                      </tr>
                   
                  </table>
				  <?php } else { ?>
				  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Coupons</td>
                        </tr>
						<tr>
                          <td valign="middle" align="center"><input type="button" name="coupons" value="Create Coupons" class="account_btn" onClick="javascript: window.location = 'coupons.php?task=add'; "></td>
                        </tr>
						<tr>
                          <td align="right" style="padding:5px 135px 0px 0px ;"><a href="coupons.php?task=used" class="mainnav_link">Used Coupons</a></td>
                        </tr>
						<?php if($_REQUEST['del']=='suc') { ?>
						<tr>
                          <td class="X5Subtitles" align="center">Selected Coupon Deleted Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="70%" align="center" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="3" style="margin-top:10px; margin-bottom:15px">
						    <tr>
							  <!--<td width="5%" align="center" class="heading3">S.No</td>-->
                              <td width="31%" align="center" class="heading3">Coupon</td>
							  <td width="30%" align="center" class="heading3">Discount</td>
							  <td width="20%" align="center" class="heading3">Status</td>
							  <td width="14%" align="center" class="heading3">Delete</td>
                            </tr>
							<?php if($coupon_count>1) { 
							for($c=0; $c<count($data); $c++) {
							 ?>
							<tr bgcolor="#FFFFFF">
							  <!--<td width="5%" align="center"><?php echo $c+1; ?></td>-->
                              <td width="31%" align="center"><?php echo $data[$c]['coupon']; ?></td>
							  <td width="30%" align="center"><?php echo $data[$c]['cp_discount']; ?> % </td>
							  <td width="20%" align="center"><?php if($data[$c]['cp_status']==0) echo "Not Used"; else if($data[$c]['cp_status']==1) echo "Used"; ?></td>
							  <td width="14%" align="center">
							  <?php 
							  if(isset($_REQUEST['page'])){
							    $red_url="coupons.php?del=coupon&cid=".$data[$c]['cp_id']."&page=".$_REQUEST['page'];
							  }
							  else{
							    $red_url="coupons.php?del=coupon&cid=".$data[$c]['cp_id'];
							  }
							  ?>
							  <a href="javascript:void(0);" onclick="if(confirm('Are You Sure Want to Delete THis Record?')) document.location.href='<?php echo $red_url; ?>'" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a> 
							<!--  <a href="javascript:void(0);" onclick="alert('This feature is disabled in Demo version');" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a> -->
							  </td>
                            </tr>
							<?php }  } else { ?>
							<tr bgcolor="#FFFFFF"><td align="center" class="X5Subtitles" colspan="5">No Datas Available</td></tr>
							<?php } ?>
							<tr bgcolor="#FFFFFF"><td align="center" class="pcurrent" colspan="5"><?php echo $pagingLink['paging'];  ?></td></tr>
                      </table></td>
                      </tr>
                   
                  </table>
				  <?php } ?>
				  </td>
                </tr>
              </table>