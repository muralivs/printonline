<?php
// Add security here
move_uploaded_file($_FILES['total_Images']['tmp_name'], getcwd() . "/images/".$_FILES['total_Images']['name']);
chmod(getcwd() . "/images/".$_FILES['total_Images']['name'], 0777); 
	  echo '&prConnect=good&';
	  echo '&prTableBlank=good&';
	  echo '&prCheckPassword=good&';
?>
