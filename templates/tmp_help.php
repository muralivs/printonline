
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script> 
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/jqModal.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="css/jqModal.css">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" class="contentbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading1 dottedborder" style="padding:5px" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="60%"  style="padding:5px 5px 0px 5px">Help</td>
                          <td width="40%" align="right" valign="bottom" class="startrequire">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                    <tr>
                      <td align="left" valign="top" style="padding:5px"><table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px">
                        <tr>
                          <td class="registerheading">Help Questions</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">
                          <table width="100%" border="0" cellspacing="3" cellpadding="0" style="margin-top:10px; margin-bottom:15px">
						  <?php if(count($help)>0) { 
						  for($h=0; $h<count($help); $h++) { ?>
						  <script type="text/javascript">
$().ready(function() {

	$('#ex<?php echo $help[$h]['id'];  ?>').jqm({ajax:'ajax/help_answer.php?qid=<?php echo $help[$h]['id'];  ?>', trigger: 'a.ex22trigger<?php echo $help[$h]['id'];  ?>'});
});
</script>
						     <tr>
                              <td width="4%" class="registertxt"><?php echo $h+1; ?><span class="startrequire"></span></td>
                              <td width="96%" align="left" valign="middle"><a href="ajax/help_answer.php?qid=<?php echo $help[$h]['id'];  ?>" class="ex22trigger<?php echo $help[$h]['id']; ?> morelink" ><?php echo $help[$h]['question']; ?></a></td>
                            </tr>
							<div style="z-index: 1000; display: none; overflow:hidden;" class="jqmWindow jqmID2" 
                                    id="ex<?php echo $help[$h]['id'];  ?>"> </div>
							<?php  } } else { ?>
							<tr><td colspan="2" class="X5Subtitles" align="center">No Data Available</td></tr>
							<?php } ?>
							
                          </table>
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