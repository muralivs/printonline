<?php
include "../includes/db_connect.php";
$table = PFO_REGISTER;  
$name=$_GET['q'];
$email = $_GET['fq'];
if($name!=""){ 
$cnt_user=mysql_num_rows(mysql_query("select `email` from `$table` where `email`='$name'"));
	if($cnt_user >0){
echo "<td valign='middle' width='25'>&nbsp;</td><td valign='middle'><span class='red'>$name already registered with us.<br>";
echo "<font class='red'>Use <a href='javascript:void(0)' onclick='javascript: Fun()' class='link'>Forgot Password</a></font>&nbsp;";
echo "<span class='red'>or Enter Some Other Email Id.<br></td>";

	}
	else{
	echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;&nbsp;$name is Available.</span></td>";
	}
}
if($email!="")
{
$query = mysql_query("SELECT * FROM `$table` WHERE `email` = '$email' ");
$cnt_email = mysql_num_rows($query);
if($cnt_email>0)
{
$data = mysql_fetch_array($query);

$fname = $data['firstname'];
$uname = $data['email'];
$pass = $data['password'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.ADMIN_MAIL.'' . "\r\n";
$sub="Login Details From - '".PRO_TITLE."' ";
$message="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".SITE_NAME."/images/".SITE_LOGO."' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi $fname</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your Login Details From ".PRO_TITLE."</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your Username : $email<br>

				password : $pass</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Click The Following Link To Login</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:20px;'><a href='".SITE_NAME."/login.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".SITE_NAME."/login.php</a></td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".PRO_TITLE." Team<br>
				<font><a href='".SITE_NAME."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".SITE_NAME."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright 2009. ".SITE_NAME ."</td>
		</tr>
	</table>";
	
$send = @mail($email,$sub,$message,$headers);
if($send)
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='green'>&nbsp;&nbsp;Password Sent to $email.</span></td>";
echo "<META http-equiv='refresh' content='5; URL=login.php' > ";
}
else
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;&nbsp;Mail Server Problem.</span></td>";
}
}
else
{
echo "<td valign='middle' width='20'>&nbsp;</td><td valign='middle'><span class='red'>&nbsp;&nbsp;No Such Account $email.</span></td>";
}
}

?>