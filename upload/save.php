<?php
session_start();
ob_start();
$sid=session_id();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Creative Printing</title>
</head>

<body>

<?php
      include("dbconn.php");
	  $objTotal = $_POST['objTotal'];
      $userName = $_POST['userName'];
      $passWord = $_POST['passWord'];
	  $eMail = $_POST['eMail'];
	  $txtProp0 = $_POST['txtProp0'];
	  $color0 = $_POST['color0'];
	  $total_Images = $_POST['alldesign'];
	  $itemcatagery = $_REQUEST['itemcatagery'];
	  $itemproduct = $_POST['totalproduct'];
	  $quantity = $_REQUEST['itemQuan'];
	  $totalCost=$_REQUEST["totalCost"];
	  $newcolor=$_REQUEST['newcolor'];
	  $side=$_REQUEST['backside'];
	  $vv=date("dmyhs");
	  $productsname=$vv."f.jpg"; 
	  $sourcejpg=array("/images1/front/","/images1/back/");
  	  $destinationjpg=array("/images/front/","/images/back/");
	  $jpg=$productsname;
	  $max= count($sourcejpg);
	  for($i=0;$i<$max;$i++)
	  {
 		$dirfront = getcwd() . $sourcejpg[$i];  
		$target_image=getcwd() .$destinationjpg[$i].$jpg;
		if (is_dir($dirfront))
		{
		if ($dh = opendir($dirfront))
		{
			while (($file = readdir($dh)) !== false)
	    	{
				if($file <> "")
				{
					$dir1=$dirfront.$file;
					if (!copy($dir1, $target_image))
					{
					    echo "failed to copy $file...\n";
					}
					chmod($dir1,777);
					unlink($dir1);
				}
			}
			chmod($dh,"777");
			closedir($dh);
		}
	}
 }
 $to="rsuyambu@gmail.com";
	if($_REQUEST["objTotal"]!="")
		$objTotal=$_REQUEST["objTotal"];
	if($_REQUEST["userName"]!="")
		$userName=$_REQUEST["userName"];
	if($_REQUEST["passWord"]!="")
		$passWord=$_REQUEST["passWord"];
	if($_REQUEST["eMail"]!="")
		$eMail=$_REQUEST["eMail"];
	if($_REQUEST["txtProp0"]!="")
		$txtProp0=$_REQUEST["txtProp0"];
	if($_REQUEST["itemcatagery"]!="")
		$itemcatagery=$_REQUEST["itemcatagery"];
	if($_REQUEST["itemproduct"]!="")
		$itemproduct=$_REQUEST["itemproduct"];
	if($_REQUEST["total_Images"]!="")
		$total_Images=$_REQUEST["total_Images"];
	if($_REQUEST["itemQuan"]!="")
		$itemQuan=$_REQUEST["itemQuan"];
	if($_REQUEST["totalCost"]!="")
		$totalCost=$_REQUEST["totalCost"];
	if($_REQUEST['newcolor']!="")
		$newcolor=$_POST['newcolor'];
	if($_REQUEST['backside']!="" )
	$side=$_REQUEST['backside'];
	$rate=$totalCost;
	$pfront="-";
	$pback="-";
	$col="-";
	$qual=$itemQuan;
	$user=$eMail;
	$dt=date("Y-m-d");
	$i="1";
	$j="1";
	$priceqry=mysql_fetch_array(mysql_query("select * from tbprice where product='Full business cards'"));
	$newcolor1="";
	$newcolor2="";
	$newcolor3="";
	$sel_query=Mysql_query("select * from userregistration where email='".$eMail."'");
    if(mysql_num_rows($sel_query)!="0")
	{
$sqlinsert="INSERT INTO `quoteshop` ( `tb_id` , `ses_id`, `producd_name` ,`product_price` , 
`pro_order` , `pro_status`, `userid`, `desdate`,`productsname`) VALUES ('', '$sid','$total_Images','$rate', '$itemQuan', 'active', '$user','$dt','$jpg')";
//echo $sqlinsert;
	Mysql_query($sqlinsert);

	  }
	  else
	  {
		 $i="20";
		 $query="insert into userregistration(name,email,password) values('$userName','$eMail','$passWord')";   		
		 $result = mysql_query($query) or die(mysql_error());
		$sqlinsert="INSERT INTO `quoteshop` ( `tb_id` , `ses_id`, `producd_name` ,`product_price` , 
`pro_order` , `pro_status`, `userid`, `desdate`,`productsname`) VALUES ('', '$sid','$total_Images','$rate', '$itemQuan', 'active', '$user','$dt','$jpg')";
//echo $sqlinsert;
	Mysql_query($sqlinsert);
	   }
  
	$cntshop=mysql_query("select max(tb_id) as cntmax from quoteshop");
	$rscntshop=@Mysql_fetch_array($cntshop);
	$id=$rscntshop['cntmax'];

	$Subject="Creative Printing";

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	
	$headers .= 'From: Enquiry From '.$userName. "\r\n";

	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$SendMessage = '
<table width=600 border=0 cellspacing=0 cellpadding=1>
  <tr>
    <td bgcolor=#666666><table width=100% border=0 cellspacing=0 cellpadding=0>
      <tr>
        <td bgcolor=#FFFFFF><table width=100% border=0 cellspacing=0 cellpadding=0>
          <tr>
            <td height=32 bgcolor=#666666><div align=left><font color=#FFFFFF size=3 face=Arial><strong>&nbsp;&nbsp;Save </strong></font> </div></td>
          </tr>
          <tr>
            <td><table width=100% border=0 cellspacing=0 cellpadding=5>
              <tr>
                <td width=33% bgcolor=#EEEEEE>Total Object</td>
                <td width=2% bgcolor=#EEEEEE>:</td>
                <td width=65% bgcolor=#EEEEEE>'.$objTotal.'</td>
              </tr>
              <tr>
                <td>User Name</td>
                <td>:</td>
                <td>'.$userName.'</td>
              </tr>
              <tr>
                <td bgcolor=#EEEEEE>Password </td>
                <td width=2% bgcolor=#EEEEEE>:</td>
                <td bgcolor=#EEEEEE>'.$passWord.'</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>'.$eMail.'</td>
              </tr>
              
              <tr>
                <td bgcolor=#FFFFFF>Product Type</td>
                <td width=2% bgcolor=#FFFFFF>:</td>
                <td bgcolor=#FFFFFF>'.$total_Images.'</td>
              </tr>
			  <tr>
                <td bgcolor=#FFFFFF>Catagery</td>
                <td width=2% bgcolor=#FFFFFF>:</td>
                <td bgcolor=#FFFFFF>'.$itemcatagery.'</td>
              </tr>
			  <tr>
                <td bgcolor=#FFFFFF>Product</td>
                <td width=2% bgcolor=#FFFFFF>:</td>
                <td bgcolor=#FFFFFF>'.$itemproduct.'</td>
              </tr>
			  <tr>
                <td bgcolor=#FFFFFF>Quantity</td>
                <td width=2% bgcolor=#FFFFFF>:</td>
                <td bgcolor=#FFFFFF>'.$itemQuan.'</td>
              </tr>
			  <tr>
                <td bgcolor=#FFFFFF>card Size</td>
                <td width=2% bgcolor=#FFFFFF>:</td>
                <td bgcolor=#FFFFFF>'.$newcolor.'</td>
              </tr>
			  
			  <tr>
                <td bgcolor=#FFFFFF>Total Price</td>
                <td width=2% bgcolor=#FFFFFF>:</td>
                <td bgcolor=#FFFFFF>'.$totalCost.'</td>
              </tr>
			 
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>';
	mail($to,$Subject,$SendMessage,$headers);

//	echo "<meta http-equiv='refresh' content='0;url=thanks.html'>"; 

?>

</body>
</html>
