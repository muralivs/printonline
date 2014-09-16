<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/pro-styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

function change_fupphoto()
{
var ssss="<img src='"+document.getElementById('newfile').value+"' width='100' height='100' style='margin-left:25px;'><input type='hidden' name='uploadedimg_front' value='"+document.getElementById('newfile').value+"'><br /><a href='javascript:void(0);' onclick='javascript:increse_sizeup(\"f\");' style='text-decoration:none;' title='Big'><img src='images/plusButton.png' border='0'  /></a>&nbsp;&nbsp;<a href='javascript:void(0);' onclick='javascript:decrese_sizeup(\"f\");' style='text-decoration:none;' title='Small'><img src='images/minusButton.png' border='0' /></a>";
//alert(ssss);
window.opener.document.getElementById('loadupimg').innerHTML = ssss;
window.opener.addimage_uploaded(document.getElementById('newfile').value);
window.close();
}

function change_bupphoto()
{
var ssss="<img src='"+document.getElementById('newfile').value+"' width='100' height='100' style='margin-left:25px;'><input type='hidden' name='uploadedimg_front' value='"+document.getElementById('newfile').value+"'><br /><a href='javascript:void(0);' onclick='javascript:increse_sizeup(\"b\");' style='text-decoration:none;' title='Big'><img src='images/plusButton.png' border='0'  /></a>&nbsp;&nbsp;<a href='javascript:void(0);' onclick='javascript:decrese_sizeup(\"b\");' style='text-decoration:none;' title='Small'><img src='images/minusButton.png' border='0' /></a>";
//alert(ssss);
window.opener.document.getElementById('loadupimg1').innerHTML = ssss;
window.opener.addimage_uploaded1(document.getElementById('newfile').value);
window.close();
}

function validate1()
{
if(document.getElementById('filename').value=='')
{
alert("Please upload the image");
return false;
}
}


</script>

<script type="text/javascript" src="js/ajaxupload.js">


function photo_upload(upload)
{

    var re_text = /\.jpg|\.png|\.gif|\.jpeg/i;
	
    var filename = upload;

    if(filename.search(re_text) == -1)
    {
        alert("Image does not have Image(jpg, gif, png) extension");
		
  //      upload.register.reset();
  
  // 	  upload.value;
  
  		document.getElementById('filename').value = "" ;

		
        return;
    }



</script>
</head>

<body>
<form name="register" id="register" method="post" action="" enctype="multipart/form-data" onsubmit="return validate1();" >
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="profile_big_box" >
					  <tr>
                                 <td valign="middle" align="left" colspan="4" bgcolor="#3188c4" height="35">&nbsp; &nbsp; <font color="#FFFFFF" size="3"><b>Update Photo</b></font> </td>
                            </tr>
  <tr>  
     <td style="margin:5px;">
     
<table width="100%" border="0" cellspacing="2" cellpadding="4"  >
  <tr>
    <td width="216" height="120" align="center">
<span id="upload_area"></span>
<!--<img src="<?php echo $proimg; ?>" border="0" width="100" height="110"  style="border:1px solid #d6d6d6; background-color:#FFFFFF; padding:3px;" /></span><h3>Current photo</h3>--></td>
    <td width="480" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="profile_mainclass" style="color:#666666; margin-top:7px;">
  <tr>
    <td height="50"> 
	
	<span style="font-size:24px; font-weight:bold; font-family:'Times New Roman', Times, serif; color:#000000; letter-spacing:2px;"><input type="hidden" name="filename" value="filename" />
									<input type="file" name="filename" id="filename" onChange=" ajaxUpload(this.form,'ajaxupload.php?filename=name&amp;maxSize=9999999999&amp;maxW=4288&amp;fullPath=clipart/upload/&amp;relPath=clipart/upload/&amp;colorR=255&amp;colorG=255&amp;colorB=255&amp;maxH=2848','upload_area','File Uploading Please Wait...&lt;br /&gt;&lt;img src=\'images/loader_light_blue.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'images/error.gif\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" /> 
									
</span> 


</td>
  </tr>
  
  
  
  
  <tr>
    <td height="22" style="padding-top:3px;" id="dfdfdf">
	
<span style="font-size:12px; color:#666666;">Only Jpg,png and gif images are allowded and Maxsize(5 MB)</span>
	
	</td>
  </tr>

  
  <tr>
    <td style="padding-top:7px; height:50px;">
	<?php if($_REQUEST['view']=="front") { ?>
	<input type="button" id="tttt"  name="tt" class="txtbutttonnew"  value="  Add image  " onclick="change_fupphoto();" />
	<?php } else { ?>
	<input type="button" id="tttt"  name="tt" class="txtbutttonnew"  value="  Add image  " onclick="change_bupphoto();" />
	&nbsp;
	<?php } ?></td>
</tr> 
<tr>
    <td style="padding-top:7px;"><span style="float:right; margin-right:25px; color:#FFFFFF; font-weight:bold;"><a href="javascript:window.close();" style="color:#000000; text-decoration:none;"> Close window</a></span></td>
</tr>  
  

  

</table>

    
    
    </td>
  </tr>
</table>

     
  <div style=" border-bottom:1px dashed #CCCCCC; margin-left:25px; margin-right:25px;"></div>  
    
    </td>
  </tr>
  <tr>
    <td>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="3"  class="profile_mainclass_2">
  <tr>
    <td width="20%" height="1"></td>
    <td width="80%"></td>
  </tr>


 


  
</table>

    

    
    </td>
  </tr>
</table>
</form>
</body>
</html>
