<?php
include "../includes/db_connect.php";
$table = PFO_NEWS;  
$email=$_GET['e'];

if($email!="")
{ 
$selqry = mysql_query("SELECT * FROM `$table` WHERE `email` = '$email'");
$num = mysql_num_rows($selqry);
if($num==0)
{
mysql_query("INSERT INTO `$table` (email) VALUES ('$email') ");
echo "1";

}
else
{
echo "0";
}
}

?>

<?php
include "../includes/db_connect.php";
$table = PFO_NEWS;  
$email=$_GET['e'];

if($email!="")
{ 
$selqry = mysql_query("SELECT * FROM `$table` WHERE `email` = '$email'");
$num = mysql_num_rows($selqry);
if($num==0)
{
mysql_query("INSERT INTO `$table` (email) VALUES ('$email') ");
echo "1";

}
else
{
echo "0";
}
}

?>

