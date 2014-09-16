<?php
      $prev_Name = $_POST['prev_Name'];
      $prev_Ext = $_POST['prev_Ext'];
	  $oldfile = $prev_Name . $prev_Ext;
	  $newfile = $prev_Name . time() . $prev_Ext;
	  $oldfilename= "uploads/" . $oldfile;
	  $newfilename = "uploads/" . $newfile;
	    
	  rename($oldfilename, $newfilename);
	  
	  echo '&pr_Open=good&';
	  echo '&pr_Close=good&';
	  echo '&pr_Write=good&';
	  echo '&pr_Close02=good&';
	  echo '&pr_Rename=good&';
	  echo '&new_File=' . $newfile . '&';
?>
