<?php
session_start();
include_once("includes/db_connect.php");
require_once('image_lib/image_lib_class.php');
$newimg = $_REQUEST['id'];
$newimg1 = $_REQUEST['id1'];
/*$newimg = explode(".",$_REQUEST['id']);

$newimage = "meme".rand('100','999').rand('100','999').".".$newimg[sizeof($newimg)-1];

echo $newimage;*/

if($_SESSION['public_list'] == "")
{
	$public = 1;
}
else
{
	$public = 0;
}

if($_SESSION['published_by'] == "Anonymous")
{
	$publish = 0;
}
elseif($_SESSION['published_by'] == "My_Account")
{
	$publish = 1;
}




?>
<!--<img  src="output_img/<?php echo $newimg; ?>" />
<img  src="output_img/<?php echo $newimg1; ?>" />-->



<?php 
/**include("includes	/resize-class.php");

	//$targ_w = 700;
	//$targ_h = 400; //150;
	//$jpeg_quality = 0;
	//$name = 'sample-resized'.rand(100,999).'.png';
	
	//$prvno = $_GET['prvno'];
	
	//$src = "products/images/".$newimg; //'demo_files/pool.jpg';
	$src1 = "products/images/".$newimg1;
	
	list($width, $height, $type, $attr) = getimagesize($src);
   
	$img_r = imagecreatefrompng($src);
	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
	$img_s=imagecreatefrompng($src1);
	//imagecopyresampled($dstr,$img_r,0,0,250,250,$targ_w,$targ_h,200,200);
	imagecopyresampled($dst_r,$img_r,0,0,0,0,$targ_w,$targ_h,750,350);
	//header('Content-type: image/png');
	//imagejpeg($dst_r,null,$jpeg_quality,$name);
	//imagecopyresampled($dst_r,$img_r,0,0,0,0,$targ_w,$targ_h,400,400);
	
	
	imagecopyresampled($dst_r,$img_s,350,0,0,0,$targ_w,$targ_h,750,350);
	imagepng($dst_r, "test123.png");
	//echo "testing";
	//croped_images
	
	// *** 1) Initialise / load image
	$resizeObj = new resize('test123.png');

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop) landscape
	$resizeObj -> resizeImage(400, 300, 'landscape');

	// *** 3) Save image	
	$resizeObj -> saveImage("output_img/".$name, 100);
	
	//echo $name;
	
	//echo "---";
	
	//echo $prvno = $prvno+1;
	
	//header("Location:test.php");
	//echo $name;*/
	
//$query1= mysql_query("INSERT INTO des_meme (meme_userid, meme_name, meme_status, gal_public, gal_publish, meme_contents,ffamily,fcolor,fwordwrap,meme_galid) VALUES (1, '$name', 0, $public, $publish, '".$_SESSION['div_hidden_content2']."','$_SESSION[ffamily]','$_SESSION[fcolor]','$_SESSION[fwwrap]','$_SESSION[gal_imgid]')") or die("Meme insert error - ".mysql_error());
$front=$newimg;
$back=$newimg1;
$left=$_REQUEST['design1'];
$right=$_REQUEST['design2'];
$prod_id=$_REQUEST['prod_id'];

/*$sel_productprice=mysql_fetch_array(mysql_query("select * from pfo_cart"));*/
	$newmerge=mysql_insert_id();
	
	$front="userdesign/".$front;
	$back="userdesign/".$back;
	
	
	echo "insert into pfo_cart(user_id,imgpathf,imgpathb,quantity,paper,ship_method,price) values ('$_SESSION[pfo_userid]','$front','$back','100','matt','slow','150')";
	 $query2=mysql_query("insert into pfo_cart(user_id,imgpathf,imgpathb,quantity,paper,ship_method,price) values ('$_SESSION[pfo_userid]','$front','$back','100','matt','slow','150')");
	$pid=mysql_insert_id();
if($query2)
{
		//header("Location:product_details.php?did=$pid");
		echo"<script>window.location='display_cart.php'</script>";
		header("Location:display_cart.php");
		exit;
}
?> 
<a href="index.php">Home</a>