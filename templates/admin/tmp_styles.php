<script>
var xmlHttp

function AddStyle()
{ 
str = document.form_style.style.value;

	xmlHttp=GetXmlHttpObject()
	document.getElementById("ckstyle").innerHTML="<img src='../images/icon/loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="../ajax/addstyle.php"
		url=url+"?style="+str
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}

function stateChanged() 
{
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById("ckstyle").innerHTML=xmlHttp.responseText 
} 
}
///////////////////////////////////////////////////////////
var xmlHttp1

function UpdateStyle()
{ 
str = document.form_style.style.value;
styid = document.form_style.sty_id.value;

	xmlHttp1=GetXmlHttpObject()
	document.getElementById("ckstyle").innerHTML="<img src='../images/icon/loading.gif' border='0'>"; 
		if (xmlHttp1==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="../ajax/updatestyle.php"
		url=url+"?style="+str+"&id="+styid;
		url=url+"&sid="+Math.random()
		xmlHttp1.onreadystatechange=stateChanged2 
		xmlHttp1.open("GET",url,true)
		xmlHttp1.send(null)

}

function stateChanged2() 
{ 
if (xmlHttp1.readyState==4 || xmlHttp1.readyState=="complete")
{ 
document.getElementById("ckstyle").innerHTML=xmlHttp1.responseText 
} 
}
/////////////////////////////////////////
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
                          <td width="60%"  style="padding:5px 5px 0px 5px">Styles Management</td>
                          <td width="40%" align="right" valign="bottom" >&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px">
					<?php if($task == 'add') { ?>
					<table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Add New Style</td>
                        </tr>
						<tr>
                          <td align="right" style="padding:15px 225px 0px 0px;"><a href="styles.php" class="mainnav_link"> <img src="../images/icon/back_16.png" border="0" alt="Back" title="Back" > </a></td>
                        </tr>
                        <tr>
                          <td align="center" valign="top">
						  <form name="form_style" method="post">
                          <table width="50%" border="0" cellspacing="3"  cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="41%" align="center" class="mycart_txt">Styles</td>
							  <td width="59%" align="center" class=""><input type="text" name="style" >&nbsp;<div id="ckstyle"></div></td>
                            </tr>
							<tr><td colspan="2">&nbsp;</td></tr>
							<tr>
                              <td colspan="2" align="center" class="">
							 <!-- <input type="button" name="add_style" value="Add Style" class="go_btn" onClick="alert('This feature is disabled in Demo version');"> -->
							  <input type="button" name="add_style" value="Add Style" class="go_btn" onClick="javascript: return AddStyle(); "> </td>
                            </tr>
                          </table>
						  </form>                      
						     </td>
                        </tr>
                        
                      </table>
					<?php } else if($task == 'edit') { ?>
					<table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Edit Style</td>
                        </tr>
						<tr>
                          <td align="right" style="padding:15px 225px 0px 0px;"><a href="styles.php" class="mainnav_link"> <img src="../images/icon/back_16.png" border="0" alt="Back" title="Back" > </a></td>
                        </tr>
                        <tr>
                          <td align="center" valign="top">
						  <form name="form_style" method="post">
                          <table width="50%" border="0" cellspacing="3"  cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="41%" align="center" class="mycart_txt">Style</td>
							  <td width="59%" align="center" class=""><input type="text" name="style" value="<?php echo $style[0]['style']; ?>">&nbsp;<div id="ckstyle"></div></td>
                            </tr>
							<tr><td colspan="2"><input type="hidden" name="sty_id" value="<?php echo $sty_id; ?>"></td></tr>
							<tr>
                              <td colspan="2" align="center" class="">
							 <!-- <input type="button" name="add_style" value="Update" class="go_btn" onClick="alert('This feature is disabled in Demo version');"> -->
							  <input type="button" name="add_style" value="Update" class="go_btn" onClick="javascript: return UpdateStyle(); "> </td>
                            </tr>
                          </table>
						  </form>                      
						     </td>
                        </tr>
                        
                      </table>
					<?php } else { ?>
					<table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Styles</td>
                        </tr>
						<tr>
                          <td align="right" style="padding:10px 100px 0px 0px;"><a href="styles.php?task=add" class="mainnav_link">Add New Styles</a></td>
                        </tr>
                        <tr>
                          <td align="center" valign="top">
                          <table width="50%" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php if($_REQUEST['del'] == 'suc') { ?>
						  <tr><td colspan="4" align="center" class="error">Selected Record Deleted Successfully </td></tr>
						  <?php } ?>
						    <tr>
                              <td width="14%" align="center" class="heading3">S.No</td>
							  <td width="60%" align="center" class="heading3">Styles</td>
							   <td class="heading3" colspan="2" align="center">Action</td>
                            </tr>
							 <?php 
							 if($style_count>1) {
							 for($s=0; $s<count($style); $s++) {
							 ?> 
                            <tr bgcolor="#FFFFFF">
                              <td class="registertxt"><?php echo $s+1; ?></td>
							  <td class="summary" style="padding-left:20px;"><?php echo $style[$s]['style']; ?></td>
							  <td width="11%" class="registertxt"><a href="styles.php?task=edit&sty_id=<?php echo $style[$s]['sty_id']; ?>" class="mainnav_link"><img src="../images/icon/edit.png" border="0" alt="Edit" title="Edit"></a></td>
							  <td width="15%" class="registertxt">
							  <a href="javascript:void(0);" class="mainnav_link" onClick="javascript: if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='styles.php?del=style&sty_id=<?php echo $style[$s]['sty_id']; ?>'; else return false; "><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a>
							 <!-- <a href="javascript:void(0);" class="mainnav_link" onClick="alert('This feature is disabled in Demo version');"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a> -->
							  </td>
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
						     </td>
                        </tr>
                        
                      </table>
					<?php } ?>
					  </td>
                      </tr>
                  </table></td>
                </tr>
              </table>