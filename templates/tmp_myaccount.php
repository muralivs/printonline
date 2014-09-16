<?php 
if($task == 'view') 
{
@include _PATH_TEMPLATE."accountview.php";
}
if($task == 'editdetails')
{
@include _PATH_TEMPLATE."accountedit.php";
}
if($task == 'editphoto')
{
@include _PATH_TEMPLATE."editphoto.php";
}
if($task == 'editpass')
{
@include _PATH_TEMPLATE."editpass.php";
}
if($task == 'editemail')
{
@include _PATH_TEMPLATE."editemail.php";
}
?>


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