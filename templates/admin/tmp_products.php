<script>
var xmlHttp

function SelectSubCat(str)
{ 
	xmlHttp=GetXmlHttpObject()
	document.getElementById("subid").innerHTML="<img src='../images/icon//loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="../ajax/selcat.php"
		url=url+"?id="+str
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById("subid").innerHTML=xmlHttp.responseText 
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
                          <td width="60%"  style="padding:5px 5px 0px 5px">Product Management</td>
                          <td width="40%" align="right" valign="bottom" >&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="center" valign="top" style="padding:5px">
					  <?php if($task == 'add') { ?>
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Add New Product</td>
                        </tr>
						<tr>
                          <td align="right" style="padding:10px 200px 0px 0px;"><a href="products.php" class="mainnav_link"><img src="../images/icon/back_16.png" border="0" alt="Back" title="Back" ></a></td>
                        </tr>
						<?php if(isset($_REQUEST['add'])) { ?>
						<tr>
                          <td align="center" class="error"><?php if($_REQUEST['add']=='noimg') echo "Please Select Images"; else if($_REQUEST['add']=='inb') echo "Invalid File Format for Back Image"; else if($_REQUEST['add']=='inf') echo "Invalid File Format for Front Image"; ?></td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="center" valign="top">
						  <form name="form_product" method="post" enctype="multipart/form-data" >
                          <table width="60%" border="0" cellspacing="5" align="center" cellpadding="5" style="margin-top:10px; margin-bottom:15px">
							 <tr><td class="mycart_txt">Title</td><td><input type="text" name="prod_title" ></td></tr>
							 <tr>
								 <td class="mycart_txt">Category</td>
								 <td><select name="selcat" onchange="javascript:SelectSubCat(this.value); ">
								 	<option value="">Select Category</option>
									<?php for($c=0; $c<count($cat); $c++) { ?>
									<option value="<?php echo $cat[$c]['cat_id']; ?>"><?php echo $cat[$c]['category']; ?></option>
									<?php } ?>
								 </select></td>
							 </tr>
							 <tr>
								 <td class="mycart_txt">Sub Category</td>
								 <td><div id="subid"><select name="selsubcat">
								 	<option value="">Select Sub Category</option>
								 </select></div></td>
							 </tr>
							 <tr>
								 <td class="mycart_txt">Styles</td>
								 <td><select name="selstyle">
								 	<option value="">Select Style</option>
									<?php for($s=0; $s<count($sty); $s++) { ?>
									<option value="<?php echo $sty[$s]['sty_id']; ?>"><?php echo $sty[$s]['style']; ?></option>
									<?php } ?>
								 </select>
								 
								 
								 <input type="hidden" name="position" value="H" checked="checked"></td>
							 </tr>
							  <!--<tr><td class="mycart_txt">Position</td><td><input type="radio" name="position" value="H" checked="checked"> Horizontal &nbsp; <input type="radio" name="position" value="V" > Vertical</td></tr>-->
							  <tr><td class="mycart_txt">Front Image</td><td><input type="file" name="fimage" value="" ></td></tr>
							   <tr><td class="mycart_txt">Back Image</td><td><input type="file" name="bimage" value="" ></td></tr>
							    <!--<tr>
								 <td class="mycart_txt">Normal Shipping</td>
								 <td><input type="text" name="normal_ship" value="" /> $ </td>
							 </tr>
                             <tr>
								 <td class="mycart_txt">Standard Shipping</td>
								 <td><input type="text" name="standard_ship" value="" /> $ </td>
							 </tr>-->
							 <!--<tr><td colspan="2">&nbsp;</td></tr>
							 <tr><td colspan="1" class="mycart_txt">Template Size (Pix) </td><td colspan="1">Horizontal - 650 X 400 <br /> Vertical - 150 X 260</td></tr>-->
							  <tr><td class="mycart_txt" colspan="2" align="center">
							 <!-- <input type="button" name="add_product" class="go_btn" value="Add Product" onClick="alert('This feature is disabled in Demo version');" > -->
							  <input type="submit" name="add_product" class="go_btn" value="Add Product" onClick="javascript:return AddProduct();" > </td></tr>
						  </table>
						  </form>                      
						     </td>
                        </tr>
                      </table>
					  <?php } else if($task == 'edit') { ?>
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Edit Product</td>
                        </tr>
						<tr>
                          <td align="right" style="padding:10px 200px 0px 0px;"><a href="products.php" class="mainnav_link"><img src="../images/icon/back_16.png" border="0" alt="Back" title="Back" ></a></td>
                        </tr>
                        <tr>
                          <td align="center" valign="top">
						  <form name="form_eproduct" method="post" enctype="multipart/form-data" >
                          <table width="60%" border="0" cellspacing="5" align="center" cellpadding="5" style="margin-top:10px; margin-bottom:15px">
							 <tr><td class="mycart_txt">Title</td><td align="left"><input type="text" name="prod_title" value="<?php echo $prod_details[0]['title']; ?>" ></td></tr>
							 <tr>
								 <td class="mycart_txt">Category</td>
								 <td align="left"><select name="selcat" onchange="javascript:SelectSubCat(this.value); ">
								 	<option value="">Select Category</option>
									<?php for($c=0; $c<count($cat); $c++) { ?>
									<option value="<?php echo $cat[$c]['cat_id']; ?>" <?php if($prod_details[0]['cat_id']==$cat[$c]['cat_id']) echo 'Selected'; ?> ><?php echo $cat[$c]['category']; ?></option>
									<?php } ?>
								 </select></td>
							 </tr>
							 <tr>
								 <td class="mycart_txt">Sub Category</td>
								 <td align="left"><div id="subid"><select name="selsubcat">
								 	<option value="">Select Sub Category</option>
									<?php for($sb=0; $sb<count($subcat); $sb++) { ?>
									<option value="<?php echo $subcat[$sb]['subcat_id']; ?>" <?php if($prod_details[0]['subcat_id']==$subcat[$sb]['subcat_id']) echo 'Selected'; ?>><?php echo $subcat[$sb]['subcategory']; ?></option>
									<?php } ?>
								 </select></div></td>
							 </tr>
							 <tr>
								 <td class="mycart_txt">Styles</td>
								 <td align="left"><select name="selstyle">
								 	<option value="">Select Style</option>
									<?php for($s=0; $s<count($sty); $s++) { ?>
									<option value="<?php echo $sty[$s]['sty_id']; ?>" <?php if($prod_details[0]['style']==$sty[$s]['sty_id']) echo 'Selected'; ?>><?php echo $sty[$s]['style']; ?></option>
									<?php } ?>
								 </select></td>
							 </tr>
							  <tr><td class="mycart_txt">Position</td><td align="left"><input type="radio" name="position" value="H" <?php if($prod_details[0]['position']=='H') echo 'Checked'; ?>> Horizontal &nbsp; <input type="radio" name="position" value="V" <?php if($prod_details[0]['position']=='V') echo 'Checked'; ?>> Vertical</td></tr>
							  <tr><td class="mycart_txt">Front Image</td><td align="left"><img src="../itemImages/thumbs/<?php echo $prod_details[0]['front_image']; ?>" border="0" /><br /><input type="file" name="fimage" value="" ><input type="hidden" name="fhimage" value="<?php echo $prod_details[0]['front_image']; ?>" /></td></tr>
							   <tr><td class="mycart_txt">Back Image</td><td align="left"><img src="../itemImages/thumbs/<?php echo $prod_details[0]['back_image']; ?>" border="0" /><br /><input type="file" name="bimage" value="" ><input type="hidden" name="bhimage" value="<?php echo $prod_details[0]['back_image']; ?>" /></td></tr>
							    <!--<tr>
								 <td class="mycart_txt">Normal Shipping</td>
								 <td><input type="text" name="normal_ship" value="<?php echo $prod_details[0]['slow']; ?>" /> $ </td>
							 </tr>
                             <tr>
								 <td class="mycart_txt">Standard Shipping</td>
								 <td><input type="text" name="standard_ship" value="<?php echo $prod_details[0]['standard']; ?>" /> $ </td>
							 </tr>-->
							 <tr><td colspan="2"><input type="hidden" name="prod_id" value="<?php echo $_REQUEST['prod_id']; ?>" /></td></tr>
							  <tr><td class="mycart_txt" colspan="2" align="center">
							  <input type="submit" name="edit_product" class="go_btn" value="Update" onClick="javascript:return EditProduct();" > 
							  <!--<input type="button" name="edit_product" class="go_btn" value="Update" onClick="javascript:alert('This feature is disabled in Demo version');" > -->
							  </td></tr>
						  </table>
						  </form>                      
						     </td>
                        </tr>
                      </table>
					  <?php } else if($task == 'view') { ?>
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">View Product </td>
                        </tr>
						<tr>
                          <td align="right" style="padding: 10px 200px 0px 0px;"><a href="products.php" class="mainnav_link"><img src="../images/icon/back_16.png" border="0" alt="Back" title="Back" ></a></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="80%" border="0" cellspacing="5" cellpadding="5" align="center" >
							  <tr>
							  	  <td width="7%">&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Title</td>
								  <td width="64%" align="left" class="summary"><?php echo $prod_details[0]['title']; ?></td>
							  </tr>
							  <tr>
							  	  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Category</td>
								  <td width="64%" align="left" class="summary"><?php SelCatId(PFO_CAT,$prod_details[0]['cat_id']); ?></td>
							  </tr>
							   <tr>
							   	  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Sub Category</td>
								  <td width="64%" align="left" class="summary"><?php SelSubCatId(PFO_SUBCAT,$prod_details[0]['subcat_id']); ?></td>
							  </tr>
							   <tr>
							   	  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Style</td>
								  <td width="64%" align="left" class="summary"><?php SelStyleId(PFO_STYLE,$prod_details[0]['style']); ?></td>
							  </tr>
                              <tr>
							  	  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Position</td>
								  <td width="64%" align="left" class="summary"><?php if($prod_details[0]['position']=='H') echo "Horizontal"; else echo "Vertical"; ?></td>
							  </tr>
                             <!-- <tr>
							  	  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Normal Shipping Charges</td>
								  <td width="64%" align="left" class="summary"><?php  //echo $prod_details[0]['slow']; ?></td>
							  </tr>
                              <tr>
							  	  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Standard Shipping Charges</td>
								  <td width="64%" align="left" class="summary"><?php  //echo $prod_details[0]['standard']; ?></td>
							  </tr>-->
                              <tr>
							  	  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Front Image</td>
								  <td width="64%" align="left" class=""><img src="../itemImages/thumbs/<?php echo $prod_details[0]['front_image']; ?>" border="0" /></td>
							  </tr>
							<tr>  
								  <td>&nbsp;</td> 
								  <td width="29%" align="left" class="heading3">Back Image</td>
								  <td width="64%" align="left" class=""><img src="../itemImages/thumbs/<?php echo $prod_details[0]['back_image']; ?>" border="0" /></td>
                            </tr>
							 
                          </table>                      
						     </td>
                        </tr>
                        <tr>
							<td align="center" class="pcurrent"><?php echo $pagingLink['paging'];  ?></td>
						</tr>
                      </table>
					  <?php } else { ?>
					  <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                       <!-- <tr>
                          <td class="registerheading">Product Management</td>
                        </tr>-->
						<tr>
                          <td align="right"><a href="products.php?task=add" class="mainnav_link">Add Products</a></td>
                        </tr>
						<?php if($_REQUEST['del']=='suc') { ?>
						<tr>
                          <td align="center" class="error">Selected Record Deleted Successfully</td>
                        </tr>
						<?php } ?>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" bgcolor="#E9F2FF" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						    <tr>
                              <td width="5%" align="center" class="heading3">S.No</td>
							  <td width="14%" align="center" class="heading3">Title</td>
							  <td width="22%" align="center" class="heading3">Category</td>
							  <td width="19%" align="center" class="heading3">Position</td>
							  <td width="25%" align="center" class="heading3">Preview</td>
							   <td class="heading3" colspan="3" align="center">Action</td>
                            </tr>
							 <?php 
							 if($product_count>1) {
							 for($p=0; $p<count($data); $p++) {
							 
							 
							 ?> 
                            <tr bgcolor="#FFFFFF">
                              <td class="registertxt"><?php echo $p+1; ?></td>
							  <td class="registertxt"><?php echo $data[$p]['title']; ?></td>
							  <td class="registertxt"><?php SelCatId(PFO_CAT,$data[$p]['cat_id']); ?></td>
							  <td class="registertxt"><?php if($data[$p]['position']=='V') echo 'Vertical'; else if($data[$p]['position']=='H') echo 'Horizontal'; ?></td>
							  <td class="registertxt"><img src="../itemImages/thumbs/<?php echo $data[$p]['front_image']; ?>" border="0" width="130" height="88" /></td>
							  <td width="5%" class="registertxt"><a href="products.php?task=view&prod_id=<?php echo $data[$p]['prod_id']; ?>" class="mainnav_link"><img src="../images/icon/view.png" border="0" alt="View" title="View" ></a></td>
							  <td width="5%" class="registertxt"><a href="products.php?task=edit&prod_id=<?php echo $data[$p]['prod_id']; ?>" class="mainnav_link"><img src="../images/icon/edit.png" border="0" alt="Edit" title="Edit"></a></td>
							  <td width="5%" class="registertxt">
							  <a href="javascript:void(0);" class="mainnav_link" onClick="javascript: if(confirm('Are You Sure Want to Delete This Record?')) document.location.href='products.php?del=prod&prod_id=<?php echo $data[$p]['prod_id']; ?>'; else return false; "><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a>
							 
							 <!-- <a href="javascript:void(0);" class="mainnav_link" onClick="alert('This feature is disabled in Demo version');"><img src="../images/icon/delete.jpg" border="0" alt="Delete" title="Delete"></a> -->
							  </td>
                            </tr>
							 <?php } } else {  ?>
							 <tr><td colspan="8" bgcolor="#FFFFFF">&nbsp;</td></tr>
							 <tr>
                              <td colspan="8" align="center" bgcolor="#FFFFFF" class="error">No Datas Available</td>
                              </tr>
							 <?php } ?>
                          </table>                      
						     </td>
                        </tr>
                        <tr>
							<td align="center" class="pcurrent"><?php echo $pagingLink['paging'];  ?></td>
						</tr>
                      </table>
					  <?php } ?>
					  </td>
                      </tr>
                  </table></td>
                </tr>
              </table>