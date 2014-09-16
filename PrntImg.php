<?php session_start();
ob_start();
include("includes/db_connect.php");

$Wd = (int)$_POST['Width'];
$Ht = (int)$_POST['Height'];
$Ty = (int)$_POST['Type']; // "Front" "Back"
$ImgCnt = (int)$_POST['ImageCount'];
$qty = (int)$_POST['Quanty'];
$id = (int)$_POST['Id'];

$Img = imagecreatetruecolor($Wd, $Ht);

imagefill($Img, 0, 0, 0xFFFFFF);

$Detl = explode(",", $_POST['Pict']);
$Cntr = 0;

	for($Rows=0;$Rows<$Ht;$Rows++) {
		for($Cols=0;$Cols<$Wd;$Cols++) {
			$Hex_Val = $Detl[$Cntr];
			if($Hex_Val != "") {

			while(strlen($Hex_Val) < 6){
				$Hex_Val = "0" . $Hex_Val;
			}

			$R = hexdec(substr($Hex_Val, 0, 2));
			$G = hexdec(substr($Hex_Val, 2, 2));
			$B = hexdec(substr($Hex_Val, 4, 2));

			$Px = imagecolorallocate($Img, $R, $G, $B);
	
			imagesetpixel($Img, $Cols, $Rows, $Px);
			}
			$Cntr++;
		}
	}
	
 $time=time().$Detl[0];
	

//imagejpeg($Img, "objectuploadsmallthumb/$time" .".jpg", 90);
imagejpeg($Img, "userdesign/$time" .".jpg", 90);




$cd=date("d-m-Y");
$uid = $_SESSION['pfo_userid'];


  mysql_query("insert into `pfo_tmpcart`(id,user_id,imgpath,imgcount,imgtype,quanty) values('','$uid','userdesign/$time".".jpg','$ImgCnt','$Ty','$qty')");

/*mysql_query("insert into `pfo_tmpcart`(id,user_id,imgpath,imgcount,imgtype,quanty) values('$id','$uid','userdesign/$time".".jpg','$ImgCnt','$Ty','$qty')");
*/
echo "Welcome message";
?>