<?php
session_start();
header ("content-type: text/xml");
include("includes/db_connect.php");
$userid=$_SESSION['pfo_userid'];
//$userid=3;
$sql=mysql_query("SELECT * FROM pfo_myimage WHERE user_id='$userid'");
echo "<root>";
while($row=mysql_fetch_array($sql)){

echo"<item>
   <title>".$row['img_name']."</title>
    <image>myimages_photos/".$row['img_name']."</image>
  </item>";
  }
echo"</root>";
?><?php
session_start();
header ("content-type: text/xml");
include("includes/db_connect.php");
$userid=$_SESSION['pfo_userid'];
//$userid=3;
$sql=mysql_query("SELECT * FROM pfo_myimage WHERE user_id='$userid'");
echo "<root>";
while($row=mysql_fetch_array($sql)){

echo"<item>
   <title>".$row['img_name']."</title>
    <image>myimages_photos/".$row['img_name']."</image>
  </item>";
  }
echo"</root>";
?>