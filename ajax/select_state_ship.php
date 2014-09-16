<?php
include "../includes/db_connect.php";
$table = PFO_STATE;  
$cid=$_GET['cid'];

if($cid==1 || $cid == 2)
{
$selqry = mysql_query("SELECT * FROM `$table` WHERE `cid` = '$cid' ");
?>
<select name="sstate" id="select2" >
                                  <option value="" selected="selected">Select State</option>
								  <?php 
								  while($state = mysql_fetch_array($selqry))
{ ?>
								   <option value="<?php echo $state['state']; ?>" ><?php echo $state['state']; ?> </option>
								  <?php } ?>
                              </select>
<?php 
}
else
{ ?>
<input type="text" name="sstate" id="textfield11" />
<?php } ?>