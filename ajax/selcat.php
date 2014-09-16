<?php
include "../includes/db_connect.php";
$table = PFO_SUBCAT;  
$id=$_GET['id'];

if($id!="")
{ 
$query = mysql_query("SELECT * FROM `$table` WHERE `cat_id` = '$id' ");
	//$data = mysql_fetch_array($query);
}

?>

				 <select name="selsubcat">
					<option value="">Select Sub Category</option>
					<?php while($data = mysql_fetch_array($query)) { ?>
					<option value="<?php echo $data['subcat_id']; ?>"><?php echo $data['subcategory']; ?></option>
					<?php } ?>
				 </select>
<!--<?php
include "../includes/db_connect.php";
$table = PFO_SUBCAT;  
$id=$_GET['id'];

if($id!="")
{ 
$query = mysql_query("SELECT * FROM `$table` WHERE `cat_id` = '$id' ");
	//$data = mysql_fetch_array($query);
}

?>

				 <select name="selsubcat">
					<option value="">Select Sub Category</option>
					<?php while($data = mysql_fetch_array($query)) { ?>
					<option value="<?php echo $data['subcat_id']; ?>"><?php echo $data['subcategory']; ?></option>
					<?php } ?>
				 </select>
-->