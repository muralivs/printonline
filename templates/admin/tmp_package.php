<?php
 
 $silver_year=floor($data[0]['silver_duration']/12);
 $silver_month=$data[0]['silver_duration']%12;
 $gold_year=floor($data[0]['gold_duration']/12);
 $gold_month=$data[0]['gold_duration']%12;
 $platinum_year=floor($data[0]['platinum_duration']/12);
 $platinum_month=$data[0]['platinum_duration']%12;
?>

<script language="javascript">
function package_validate()
{
if(document.form_set.silver_discount.value=="")
{
alert('Please enter the silver card discount');
document.form_set.silver_discount.focus();
return false
}
if(document.form_set.gold_discount.value=="")
{
alert('Please enter the gold card discount');
document.form_set.gold_discount.focus();
return false
}
var reg=/^([0-9]{1,2})+$/; //regular expression defining a 2 digit number

	if (document.form_set.silver_discount.value.match(reg)&&document.form_set.gold_discount.value.match(reg)&&document.form_set.platinum_discount.value.match(reg)&&document.form_set.silver_duration_year.value.match(reg)&&document.form_set.silver_duration_month.value.match(reg)&&document.form_set.gold_duration_year.value.match(reg)&&document.form_set.gold_duration_month.value.match(reg)&&document.form_set.platinum_duration_year.value.match(reg)&&document.form_set.platinum_duration_month.value.match(reg)) {
   		return true;
 	} else {
	alert('Please enter number only');
	document.form_set.platinum_duration_month.focus();
 		return false;
 	}
	
if(document.form_set.platinum_discount.value=="")
{
alert('Please enter the platinum card discount');
document.form_set.platinum_discount.focus();
return false
}
return true
}
</script>
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" colspan="2"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Package</td>
                          <td width="40%" align="right" valign="bottom">&nbsp;</td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
					
                      <td width="80%" align="left" valign="top" style="padding:5px">
					  <?php if($_REQUEST['task']=='editpackage') { ?>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px" align="center">
                        <tr>
                          <td class="registerheading">Edit Package Settings</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
						  <form name="form_set" method="post">
                            <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px" >
							<tr>
							 <td width="22%"></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"></td>
                              <td width="35%" align="left" valign="middle"><strong>
                                <label>
                               DISCOUNT                                </label>
                              </strong></td>
                              <td colspan="4" align="left" valign="middle" ><strong>DURATION</strong></td>
							</tr>
						    <tr>
                              <td width="22%" class="pcurrent">Silver<span class="startrequire"></span></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="35%" align="left" valign="middle"><label>
                                <input name="silver_discount" type="text" size="3" maxlength="2" value="<?php echo $data[0]['silver_discount'] ?>" >
                              <b>%</b></label></td>
							  <td width="5%" align="left" valign="middle" ><input name="silver_duration_year" type="text" size="3" maxlength="2" value="<?php echo $silver_year; ?>"></td>
						      <td width="12%" align="left" valign="middle" >Year</td>
						      <td width="5%" align="left" valign="middle" ><input name="silver_duration_month" type="text" size="3" maxlength="2" value="<?php echo $silver_month; ?>"></td>
						      <td width="18%" align="left" valign="middle" >Month</td>
						    </tr>
							
                            <tr>
                              <td class="pcurrent">Gold<span class="startrequire"></span></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><label>
                                <input name="gold_discount" type="text" size="3" maxlength="2" value="<?php echo $data[0]['gold_discount'] ?>" >
                                <b>%</b>
                              </label></td>
                              <td align="left" valign="middle"><input name="gold_duration_year" type="text" size="3" maxlength="2" value="<?php echo $gold_year; ?>"></td>
                              <td align="left" valign="middle">Year</td>
                              <td align="left" valign="middle"><input name="gold_duration_month" type="text" size="3" maxlength="2"value="<?php echo $gold_month; ?>"></td>
                              <td align="left" valign="middle">Month</td>
                            </tr>
							
							  <tr>
                              <td height="26" class="pcurrent">Platinum<span class="startrequire"></span></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><label>
                                <input name="platinum_discount" type="text" size="3" maxlength="2" value="<?php echo $data[0]['platinum_discount'] ?>">
                                <b>%</b>
                              </label></td>
                              <td align="left" valign="middle"><input name="platinum_duration_year" type="text" size="3" maxlength="2" value="<?php echo $platinum_year; ?>"></td>
							  <td align="left" valign="middle">Year</td>
							  <td align="left" valign="middle"><input name="platinum_duration_month" type="text" size="3" maxlength="2" value="<?php echo $platinum_month; ?>"></td>
							  <td align="left" valign="middle">Month</td>
							  </tr>
							  <tr>
							  <td height="40" colspan="7" align="center" valign="bottom">
							  <!--<input type="submit" name="submit_package" class="go_btn" id="button2" value="Update" onclick="return package_validate()" /> -->
							  <input type="button" name="submit_package" class="go_btn" id="button2" value="Update" onclick="alert('This feature is disabled Demo version');" />
							  </td>
							  </tr>
                          </table>                    
						  </form>
					      </td>
                        </tr>
                        

                      </table>
					  <?php } else if($_REQUEST['view']=="list") {?>
					  <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
					  <tr>
					  <td align="right"><a href="package.php" class="mainnav_link"><img src="../images/icon/back_16.png" border="0" title="Back to User List" alt="Back"></a></td>
					  </tr>
					  </table>
					  <table width="80%" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="0" style="margin-top:10px; margin-bottom:15px" align="center">
					  
					  <tr>
						      <td width="9%" align="center" class="heading3">S.No</td>
							  <td width="40%" align="center" class="heading3">User Name</td>
							  <td width="37%" align="center" class="heading3">Request Type</td>
							   <td width="14%" align="center" class="heading3">Update</td>
                        </tr>
							 <?php 
							  if(!isset($_REQUEST['page'])) { $i=0; }else {$i=($_REQUEST['page']-1)*10;}  
							 if($cat_count>1) {
							 for($c=0; $c<count($cat); $c++) {
							 ?> 
                            <tr bgcolor="#FFFFFF">
                              <td height="26" class="registertxt"><?php echo ++$i; ?></td>
							  <td class="registertxt">
							  <a href="package.php?id=<?php echo $cat[$c]['user_id']; ?>"><?php $user_id=$cat[$c]['user_id'];
							  $userdetails = $adobj->SelectWhere(PFO_REGISTER," WHERE reg_id='$user_id' "); echo $userdetails[0]['firstname']; ?></a></td>
							  <td width="37%" class="registertxt"><?php echo $cat[$c]['request_type']; ?></td>
							  <td align="center" class="registertxt">
							 <!-- <a href="#" onclick="alert('This feature is disabled in Demo version');"><img src="../images/icon/active.gif" border="0"/></a> -->
							  <a href="package.php?mem_id=<?php echo $cat[$c]['id'];  ?>"><img src="../images/icon/active.gif" border="0"/></a> </td>
                            </tr>
							 <?php } } else {  ?>
							 <tr><td colspan="5" bgcolor="#FFFFFF">&nbsp;</td></tr>
							 <tr>
                              <td colspan="5" align="center" bgcolor="#FFFFFF" class="error">No Datas Available</td>
                        </tr>
							 <?php } ?>
							 <tr>
							<td align="center" colspan="5" class="pcurrent"><?php echo $pagingLink['paging'];  ?></td>
						</tr>
                        </table>
					   <?php } else if(isset($_REQUEST['id'])) { ?>
					    <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
					  <tr>
					  <td align="right"><a href="package.php?view=list" class="mainnav_link"><img src="../images/icon/back_16.png" border="0" title="Back to User List" alt="Back"></a></td>
					  </tr></table>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px" align="center">
					  <?php $userdetail = $adobj->SelectWhere(PFO_REGISTER," WHERE reg_id='".$_REQUEST['id']."' "); ?>
					  <tr>
                        <td colspan="3" align="center" valign="top" class="registerheading" ><?php echo $userdetail[0]['firstname']."'s detail "; ?></td>
                        </tr>
						
					  
					  <tr><th width="24%" class="pcurrent">First Name</th>
					  <td width="2%"> : </td>
					  <td width="74%" class="registertxt" ><?php echo $userdetail[0]['firstname']; ?></td>
					  </tr>
					  <tr><th class="pcurrent">Last Name</th><td> : </td><td class="registertxt"><?php echo $userdetail[0]['lastname']; ?></td></tr>					  					  					  <tr><th class="pcurrent">Address  </th><td> : </td><td class="registertxt"><?php echo $userdetail[0]['address1'] ."<br />".$userdetail[0]['address2']."<br />".$userdetail[0]['city']."<br />".$userdetail[0]['state']."<br />".$userdetail[0]['zipcode']; ?></td></tr>
					  <tr>
					    <th class="pcurrent">Email</th>
					    <td> : </td><td class="registertxt"><?php echo $userdetail[0]['email']; ?></td></tr>					  					  <tr>
					      <th class="pcurrent">Phone Number </th>
					      <td> : </td><td class="registertxt"><?php echo $userdetail[0]['phone']; ?></td></tr>					  					  <tr>
					        <th class="pcurrent">Mobile Number </th>
					        <td> : </td><td class="registertxt"><?php echo $userdetail[0]['mobile']; ?></td></tr>					  					  <tr>
					          <th class="pcurrent">Fax</th>
					          <td> : </td><td class="registertxt"><?php echo $userdetail[0]['fax']; ?></td></tr>					  
					  
					  
					  </table>
					   <?php } else if(isset($_REQUEST['mem_id'])){ ?>
					   <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
					  <tr>
					  <td align="right"><a href="package.php?view=list" class="mainnav_link"><img src="../images/icon/back_16.png" border="0" title="Back to User List" alt="Back"></a></td>
					  </tr></table>
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px" align="center">
					  <form name="allow" method="post" action="" >
					  <?php $mem_id=$_REQUEST['mem_id'];
					  $mem_sel=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_membership_request` WHERE `id`='$mem_id'"));
					  $user_name_id=$mem_sel['user_id'];
					  $userdetail = $adobj->SelectWhere(PFO_REGISTER," WHERE reg_id='$user_name_id'"); 
					  ?>
					  <?php
					  $pro_package=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_generalpackage`"));
						  if(isset($_REQUEST['allow']))
							{
									
									$today=date("Y-m-d"); 
									if($_REQUEST['membership_request']=="Silver"){ $duration=$pro_package['silver_duration'];}
									if($_REQUEST['membership_request']=="Gold"){$duration=$pro_package['gold_duration'];}
									if($_REQUEST['membership_request']=="Platinum"){$duration=$pro_package['platinum_duration'];}
									$ts = strtotime(" $today +$duration months");
									$ex_date = date('Y-m-d', $ts); 
									$set=" title='".$_REQUEST['membership_request']."' ,`joining_date`='$today',`expiry_date`='$ex_date'";
									$where="WHERE user_id='".$mem_sel['user_id']."'";
									$mem_update=$adobj->Update(PFO_MEMBERSHIP,$set,$where);
									$del_where=" WHERE id='".$_REQUEST['mem_id']."'";
									$del_mem_list=$adobj->DeleteMRequest(PFO_MEMBER_REQUEST,$del_where);
									header("Location:package.php?view=list");

							}
					  ?>
					  <tr>
					  <td width="49%" align="center"><strong><?php echo $userdetail[0]['firstname']; ?></strong></td>
					  <td width="1%">:</td>
					  <td width="50%" align="left"><select name="membership_request" id="select3">
                          <option value="Silver" <?php if($mem_sel['request_type']=="Silver"){ ?>  selected="selected" <?php } ?>>Silver</option>
                          <option value="Gold" <?php if($mem_sel['request_type']=="Gold"){ ?>  selected="selected" <?php } ?>>Gold</option>
                          <option value="Platinum" <?php if($mem_sel['request_type']=="Platinum"){ ?>  selected="selected" <?php } ?>>Platinum</option>
                        </select></td>
					  </tr><tr></tr><tr>
					  <td  colspan="3" align="center"><input name="allow"  class="go_btn" type="submit" value="Allow" /></td>
					  </tr>
					  </form>
					  </table> 
					  <?php }  else { ?>
					  
					  <table width="80%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px" align="center">
                        <tr>
						<td align="right" ><a href="package.php?view=list" class="mainnav_link">Requested Member list</a></td>
						</tr>
						<tr>
                          <td class="registerheading">General Pcakage</td>
                        </tr>
						
						<?php if(isset($_REQUEST['updated'])) { ?>
						<tr>
                          <td class="error" align="center">Updated Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						 <tr>
							 <td width="20%"></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"></td>
                              <td colspan="2" align="left" valign="middle"><strong>
                                <label>
                               DISCOUNT                                </label>
                              </strong></td>
                              <td colspan="4" align="left" valign="middle" ><strong>DURATION</strong></td>
							</tr>
						    <tr>
                              <td width="20%" class="pcurrent">Silver<span class="startrequire"></span></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td width="5%" align="left" valign="middle"><?php echo $data[0]['silver_discount'] ?></td>
                              <td width="37%" align="left" valign="middle"><strong><b>%</b></strong></td>
                              <td width="35%" align="left" valign="middle"><?php if($silver_year!=0) {echo $silver_year." Year "; } if($silver_month!=0){echo $silver_month." Month ";} ?></td>
						    </tr>
                            <tr>
                              <td class="pcurrent">Gold<span class="startrequire"></span></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><?php echo $data[0]['gold_discount'] ?></td>
                              <td align="left" valign="middle"><strong><b>%</b></strong></td>
                              <td align="left" valign="middle"><?php if($gold_year!=0){echo $gold_year." Year ";} if($gold_month!=0){echo $gold_month." Month ";} ?></td>
                            </tr>
							  <tr>
                              <td class="pcurrent">Platinum<span class="startrequire"></span></td>
                              <td width="3%" align="left" valign="middle" class="registertxt"><strong>:</strong></td>
                              <td align="left" valign="middle"><?php echo $data[0]['platinum_discount'] ?></td>
                              <td align="left" valign="middle"><strong><b>%</b></strong></td>
                              <td align="left" valign="middle"><?php if($platinum_year!=0){echo $platinum_year." Year ";} if($platinum_month!=0){echo $platinum_month." Month ";} ?></td>
							  </tr>
                          </table>                      
					      </td>
                        </tr>
                        <tr><td align="right"><a href="package.php?task=editpackage" class="plink">Edit Package</a></td></tr>

                      </table>
					  <?php  } ?>
					  </td>
                    </tr>
                   
                  </table></td>
                </tr>
</table>