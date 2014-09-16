<?php
if($_REQUEST['temp'])
{
$temp = $_REQUEST['temp'];
$exp = explode('.',$temp);
$file = $exp[0];
}
else
{
$file = 'no_image';
}
$id =100;

?>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="js/AC_RunActiveContent.js" language="javascript"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="contentbg" height="200" valign="middle" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td scope="col"><div align="center">
      <script language="javascript">
	  file = 'itemImages/images/<?php echo $file; ?>'
	  id = '<?php echo $id; ?>'
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '950',
			'height', '503',
			'src', 'business_v12',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'business_v12',
			'bgcolor', '#efefef',
			'name', 'business_v12',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'business_v12',
			'salign', '',
			'flashvars', 'loaderFile='+file+'&Id='+id
			); //end AC code
	}
</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="950" height="503" id="business_v12" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="business_v12.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#efefef" />	<embed src="business_v12.swf" quality="high" bgcolor="#efefef" width="950" height="503" name="business_v9" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
</noscript>
    </div></td>
  </tr>
</table></td>
                </tr>
              </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:15px">
                  <tr>
                    <td width="5%" height="30" align="center" valign="top" class="creditheading">&nbsp;</td>
                     <td width="77%" height="30" align="left" valign="top" class="creditheading">All Major Credit / Debit Cards Accepted</td>
                    <td width="18%" rowspan="2" align="left" valign="top" class="creditheading"><img src="images/paypal.jpg" width="81" height="97" /></td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
                    <td align="left"><img src="images/creditcards.jpg" width="372" height="48" /></td>
                    </tr>
                </table>