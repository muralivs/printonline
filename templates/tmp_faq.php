<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script> 
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/jqModal.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="css/jqModal.css">

<script>
var xmlHttp
function PostQuery(str)
{ 
	//str = document.form_reg.reg_email.value;
	xmlHttp=GetXmlHttpObject()
	document.getElementById("querypost").innerHTML="<img src='images/icon/loading.gif' border='0'>"; 
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		}
		 
		var url="ajax/post_faq.php"
		url=url+"?q="+str
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}

function stateChanged() 
{
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
document.getElementById("querypost").innerHTML=xmlHttp.responseText
document.form_faq.faq_question.value=''; 
} 
} 
//#######################################
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
                          <td width="60%"  style="padding:5px 5px 0px 5px">FAQ</td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Faq Questions</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php if(count($faq)>0) { 
						  for($f=0; $f<count($faq); $f++) { ?>
						   <script type="text/javascript">
$().ready(function() {

	$('#ex<?php echo $faq[$f]['id'];  ?>').jqm({ajax:'ajax/faq_answer.php?qid=<?php echo $faq[$f]['id'];  ?>', trigger: 'a.ex22trigger<?php echo $faq[$f]['id'];  ?>'});
});
</script>
						     <tr>
                              <td width="4%" class="registertxt"><?php echo $f+1; ?><span class="startrequire"></span></td>
                              <td width="96%" align="left" valign="middle"><a href="ajax/faq_answer.php?qid=<?php echo $faq[$f]['id'];  ?>" class="ex22trigger<?php echo $faq[$f]['id']; ?> morelink" ><?php echo $faq[$f]['question']; ?></a></td>
                            </tr>
							<div style="z-index: 1000; display: none; overflow:hidden;" class="jqmWindow jqmID2" 
                                    id="ex<?php echo $faq[$f]['id'];  ?>"> </div>
							<?php  } } else { ?>
							<tr><td colspan="2" class="X5Subtitles" align="center">No Data Available</td></tr>
							<?php } ?>
                          </table>
						  </td>
                        </tr>
                        <tr>
						<td>
						<form name="form_faq" method="post">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" align="left" class="registerheading">Ask New Question</td>
  </tr>
  <tr><td colspan="3">&nbsp;</td></tr>
    <tr>
    <td width="15%" class="creditheading">Question</td>
    <td width="70%"><input type="text" name="faq_question" value="" style="width:400px;" onChange="javascript: PostQuery(this.value); "></td>
	<td width="15%" ><input type="button" name="submit_faq" value="Post" class="go_btn" onClick="javascript:return FaqValidate(); "></td>
  </tr>
  <tr><td colspan="3" align="center"><div id="querypost"></div></td></tr>
</table>
						</form>
						</td>
						</tr>

                      </table></td>
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