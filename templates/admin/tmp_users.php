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
                          <td width="60%"  style="padding:5px 5px 0px 5px">User Management</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
						
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
					  <tr>
                          <td class="registerheading">User Search</td>
                        </tr>
						 <tr>
                          <td>&nbsp;</td>
                        </tr>
						<tr>
                          <td><table width="100%" bgcolor="#E9F2FF" cellpadding="2" cellspacing="8">
						  <form name="search" method="get" action="">
                            <tr>
                              <td width="14%" class="heading3">Name </td>
                              <td width="2%">:</td>
                              <td width="84%"><input type="text" name="ser_name" value="<?php $_POST['ser_name']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="heading3">Date of joining between </td>
                              <td>:</td>
                              <td><select name="day" id="day">
							  <option value="">DD</option>
							 <?php for($i=1; $i<=31; $i++) { if(strlen($i)!=2){$i="0".$i;} ?>
							
							  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							  <?php } ?>
							  </select>&nbsp;<select name="month" id="month"><option value="">MM</option>
							  <?php for($m=1; $m<=12; $m++){ if(strlen($m)!=2){$m="0".$m;} ?>
							   <option value="<?php echo $m; ?>"><?php echo $m; ?></option>
							 <? } ?>
							  </select>&nbsp;<select name="year" id="year"><option value="">YY</option>
							  <?php $year=date(Y); $addedyear=$year-10; for($y=$year; $y>$addedyear; $y--){ ?>
							   <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
							  <?php } ?>
							  
							  </select> 
                                &nbsp;<span class="heading3">And</span>&nbsp; <select name="today" id="today"><option value="">DD</option>
								 <?php for($ii=1; $ii<=31; $ii++) { if(strlen($ii)!=2){$ii="0".$ii;} ?>
							
							  <option value="<?php echo $ii; ?>"><?php echo $ii; ?></option>
							  <?php } ?>
								</select>&nbsp;<select name="tomonth" id="tomonth"><option value="">MM</option>
								 <?php for($mm=1; $mm<=12; $mm++){ if(strlen($mm)!=2){$mm="0".$mm;} ?>
							   <option value="<?php echo $mm; ?>"><?php echo $mm; ?></option>
							 <? } ?>
								
								</select>&nbsp;<select name="toyear" id="toyear"><option value="">YY</option>
								 <?php $year=date(Y); $addedyear1=$year-10; for($yy=$year; $yy>$addedyear1; $yy--){ ?>
							   <option value="<?php echo $yy; ?>"><?php echo $yy; ?></option>
							  <?php } ?>
								</select>  </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td><input type="submit" name="search" value="Search" class="go_btn" onClick="return validate();" /></td>
                          </tr>
						  </form>
						  </table></td>
                        </tr>
						<tr>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="registerheading">User List</td>
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
                              <td width="5%" align="center" class="heading3">Id</td>
							  <td width="14%" align="center" class="heading3">Photo</td>
							  <td width="14%" align="center" class="heading3">Firstname</td>
							  <td width="22%" align="center" class="heading3">Email</td>
							  <td width="19%" align="center" class="heading3">Membership</td>
							  <td width="27%" align="center" class="heading3">Last Login</td>
							   <td class="heading3" colspan="4" align="center">Action</td>
                            </tr>
							 <?php 
							 if($user_count>1) {
							 for($u=0; $u<count($data); $u++) {
							 
$img = $data[$u]['photo'];
if($img=="")
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
}
							 ?> 
                            <tr bgcolor="#FFFFFF">
                              <td class="registertxt"><?php echo $u+1; ?></td>
							  <td class="registertxt"><img src="<?php echo $photo; ?>" border="0" height="100" /></td>
							  <td class="registertxt"><?php echo $data[$u]['firstname']; ?></td>
							  <td class="registertxt"><?php echo $data[$u]['email']; ?></td>
							  <td class="registertxt">
							  <?php 
							  $user_id=$data[$u]['reg_id'];
							  $mem_card=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_membership` where user_id='$user_id'"));
							  if($mem_card['title']){
							  echo $mem_card['title'];}
							  else
							  {
							  echo "Free Member";
							  }
							  ?>
							  </td>
							  <td class="registertxt" ><?php if($data[$u]['last_signin']=="") echo "No Last Login" ; else echo date("Y-m-d",$data[$u]['last_signin']);  ?></td>
							  <td width="4%" class="registertxt"><a href="#" class="mainnav_link" onclick="window.open('mailusers.php?uid=<?php echo $data[$u]['reg_id']; ?>',
'welcome','width=500,height=300,menubar=no')"><img src="../images/icon/mail.jpg" border="0" alt="Mail" title="Mail" ></a></td>
							  <td width="4%" class="registertxt"><a href="userview.php?uid=<?php echo $data[$u]['reg_id']; ?>" class="mainnav_link"><img src="../images/icon/view.png" border="0" alt="View" title="View" ></a></td>
							  <td width="4%" class="registertxt">
							  <a href="javascript:void(0);" onclick="if(confirm('Are You Sure Want to Delete THis Record?')) document.location.href='users.php?del=user&uid=<?php echo $data[$u]['reg_id']; ?>'" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a>
							 
						  <!--<a href="javascript:void(0);" onclick="alert('This feature is disabled in Demo version');" class="mainnav_link"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a> -->
							 
							  </td>
							  <td width="5%" class="registertxt">
							 
							 <!-- <div id="blockid<?php echo $data[$u]['reg_id']; ?>"><?php if($data[$u]['reg_status']==1) { ?>
							  <a href="javascript:void(0);" onclick="alert('This feature is disabled in Demo version');" ><img src="../images/icon/unblock.png" border="0" title="Block" /></a> 
							  <?php } else if($data[$u]['reg_status']==0) { ?>
							  <a href="javascript:void(0);" onclick="alert('This feature is disabled in Demo version');" ><img src="../images/icon/block.png" border="0" title="Unblock"/></a>
							  <?php } ?>
							  </div> -->
							 
							  <div id="blockid<?php echo $data[$u]['reg_id']; ?>"><?php if($data[$u]['reg_status']==1) { ?>
							  <a href="javascript:void(0);" onclick="BlockUser(<?php echo $data[$u]['reg_id']; ?>,1,'blockid<?php echo $data[$u]['reg_id']; ?>');" ><img src="../images/icon/unblock.png" border="0" title="Block" /></a> 
							  <?php } else if($data[$u]['reg_status']==0) { ?>
							  <a href="javascript:void(0);" onclick="BlockUser(<?php echo $data[$u]['reg_id']; ?>,0,'blockid<?php echo $data[$u]['reg_id']; ?>');" ><img src="../images/icon/block.png" border="0" title="Unblock"/></a>
							  <?php } ?>
							  </div> </td>
                            </tr>
							 <?php } } else {  ?>
							 <tr>
                              <td colspan="10" align="center">No Datas Available</td>
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