<?php
session_start();
header ("content-type: text/xml");
include("includes/db_connect.php");

$sql=mysql_query("SELECT * FROM pfo_products");


echo "<category>";
while($row=mysql_fetch_array($sql)){

$image = explode('.',$row['front_image']);
$img = $image[0];


echo "<title>
    <word>".$row['title']."</word>
    <thumbs>yes</thumbs>
    <helpfulText>choose a catagory to load its list of corresponding items</helpfulText>
    <backTo>nowhere</backTo>
    <thumbnails>
      <pic>
	  	
        <image>".$img."</image>
        <title>test</title>
        <path>itemImages/</path>
        <backto>catagory</backto>
		<id>".$row['prod_id']."</id>
      </pic>
	 </thumbnails>
	 </title>
";
}
echo"</category>";
?><?php
session_start();
header ("content-type: text/xml");
include("includes/db_connect.php");

$sql=mysql_query("SELECT * FROM pfo_products");


echo "<category>";
while($row=mysql_fetch_array($sql)){

$image = explode('.',$row['front_image']);
$img = $image[0];


echo "<title>
    <word>".$row['title']."</word>
    <thumbs>yes</thumbs>
    <helpfulText>choose a catagory to load its list of corresponding items</helpfulText>
    <backTo>nowhere</backTo>
    <thumbnails>
      <pic>
	  	
        <image>".$img."</image>
        <title>test</title>
        <path>itemImages/</path>
        <backto>catagory</backto>
		<id>".$row['prod_id']."</id>
      </pic>
	 </thumbnails>
	 </title>
";
}
echo"</category>";
?>