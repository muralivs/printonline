<?php
$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('2daybiz_businesscard', $link);

if($_POST['id'])
{
$id=$_POST['id'];
$id = mysql_escape_string($id);
$sql = "delete from pfo_bookmark where book_id='$id'";
mysql_query( $sql);
}
?>