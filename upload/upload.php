<?php
// Add security here
move_uploaded_file($_FILES['Filedata']['tmp_name'], getcwd() . "/uploads/".$_FILES['Filedata']['name']);
chmod(getcwd() . "/uploads/".$_FILES['Filedata']['name'], 0777); 
?>
