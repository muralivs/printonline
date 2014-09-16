<?php


/*print_r($_REQUEST);
exit;*/

session_start();

$_SESSION['tnewcolor_front']=$_REQUEST['textnew_color'];

$_SESSION['tnewcolor_back']=$_REQUEST['textnew_color2'];

include_once("config.php");

$_SESSION['public_list'] = $_REQUEST['public_list'];

$_SESSION['published_by'] = $_REQUEST['published_by'];

$_SESSION['div_hidden_content'] = $_REQUEST['div_hidden_content'];

$_SESSION['ffamily']=$_REQUEST['select'];

$_SESSION['fcolor']=$_REQUEST['textnew_color'];

$_SESSION['fwwarp']=$_REQUEST['public_wrap'];

if(isset($_REQUEST['strip']) && ($_REQUEST['strip'] != "")) {
	$_SESSION['strip']=$_REQUEST['strip'];
}

	 $newimg = $_REQUEST['imgid'];	
	
	 $public_wrap = $_REQUEST['public_wrap'];
	 
	 $img = $newimg;
	 
	 
	$ffamily=$_REQUEST['select'];
	
	$ffcolor=$_REQUEST['textnew_color'];
	
	$exp_memeimg=explode("/",$img);
	

	$fth_gal=mysql_fetch_array(mysql_query("select * from des_gallery where gal_image='$exp_memeimg[1]'"));

	 $_SESSION['gal_imgid']=$fth_gal['gal_id'];


	require_once('image_lib/image_lib_class.php');
	//require_once('image_lib/imagestring.php')
	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	 

 


error_reporting(0);
define("ALIGN_LEFT", "left");
define("ALIGN_CENTER", "center");
define("ALIGN_RIGHT", "right");

function createimage()
{
	$nleft 	= array();
	$ntop 	= array();
	$color	= array();
	$textalign 	= array();
	$fontsize	= array();
	$innertxt 	= array();
	$newtxt_width 	= array();
	$newtxt_height 	= array();
	
	
	$html = $_REQUEST['div_hidden_content'];
	//echo $_REQUEST['div_hidden_content'];
	$dom = new DOMDocument;
	$dom->loadHTML($html);
	$divs = $dom->getElementsByTagName('div');	

	
	
	$cnt	=	0; 
	foreach($divs as $div)
	{	
	$div;

		$id = $div->getAttribute('id');
		
		$style =  $div->getAttribute('style');
		if(!empty($id))
		{

			$stylearr	= explode(";", $style);
			//print_r($stylearr);
				//exit;
			if(count($stylearr)>0)
			{
			for($tst_flag=0; $tst_flag<8; $tst_flag++)
			{
		
			$split_arrstr=explode(":",$stylearr[$tst_flag]);
			/*print_r($split_arrstr);*/
			if(trim($split_arrstr[0])=="color")
			{
			$color[] = trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="left")
			{
				  $nleft[] = trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="top")
			{
				  $ntop[] =  trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="text-align")
			{
				  $textalign[] =  trim($split_arrstr[1])."<br>";
			}
			
			if(trim($split_arrstr[0])=="width")
			{
				  $newtxt_width[] =  trim($split_arrstr[1])."<br>";
			}
			
			if(trim($split_arrstr[0])=="height")
			{
				  $newtxt_height[] =  trim($split_arrstr[1])."<br>";
			}
			
				  
			}
			 
							  
			}
			

		$spans = $dom->getElementsByTagName('span')->item($cnt);	
		if($spans->hasAttributes())
		{	
			$innertxt[] = innerHTML($spans);	
			foreach($spans->attributes as $span)
			{
				$name = $span->nodeName;
				$value	= $span->nodeValue; 
				switch($name)
				{
					case "style":
						$fontsize[] = str_replace( array(":",";","px") , "", (strstr($value, ":" )));
						break;
				}
			}
		}
		$cnt = $cnt + 1;
	}
		
	
	}
/*	print_r($color);
	exit;*/
	return array($nleft, $ntop, $newtxt_width, $newtxt_height,$innertxt);
}


function innerHTML($tag)
{
	$doc = new DOMDocument();
	$doc->appendChild($doc->importNode($tag, TRUE));
	$innertext = trim($doc->saveHTML());
	$tagname = $tag->nodeName;
	return preg_replace('@^<'.$tagname.'[^>]*>|</'.$tagname.'>$@', "", $innertext);
}



	 
	 switch($ffamily)
	 {
	 case "Blockography":
	 $newf_family="Fonts/Blockography.ttf";
	 break;
	 case "Arial":
	 $newf_family="Fonts/arial.ttf";
	 break;
	 case "Times New Roman":
	 $newf_family="Fonts/times.ttf";
	 break;
	 case "Courier":
	 $newf_family="Fonts/cour.ttf";
	 break;
	 case "Verdana":
	 $newf_family="Fonts/verdana.ttf";
	 break;
	 case "Geneva":
	 $newf_family="Fonts/geneva-normal.ttf";
	 break;
	 case "Memetica":
	 $newf_family="Fonts/Memetica.ttf";
	 break;
	 case "Memes":
	 $newf_family="Fonts/Memes.ttf";
	 break;
	 case "Pipe":
	 $newf_family="Fonts/abc,pipe.ttf";
	 break;
	 case "AbductionII":
	 $newf_family="Fonts/AbductionII.ttf";
	 break;
	 case "Eclipse":
	 $newf_family="Fonts/EclipseDEMO.ttf";
	 break;
	 case "BOWSHADW":
	 $newf_family="Fonts/BOWSHADW.TTF";
	 break;
	 case "Action Man Shaded":
	 $newf_family="Fonts/Action Man Shaded.ttf";
	 break;
	 default:
	 $newf_family="Fonts/arial.ttf";
	 break;
	 }
	 
	 
	$imageLibObj = new imageLib($img);

	$new_hcontent= createimage();
	
	$diff_text=$_REQUEST['memetext'];
	
	$im = imagecreate(650,400);
	//$white = imagecolorallocate($im,255,255,255);
	$black = imagecolorallocate($im, 0, 0, 0);
 	// Make the background transparent
	imagecolortransparent($im,$black);
	//imagealphablending($im, true);
	imagepng($im,"test1.png");
	$imageLibObj1 = new imageLib("test1.png");
	
	//$diff_text=$new_hcontent[4];
/*"<pre>".print_r($new_hcontent)."</pre>";
exit;*/
	
	/*	Purpose: Add text to your image
     *	Usage:	 addText([text], [position], [padding], [font_color], [font_size], [angle], [font])
     * 	Params:	 text - the string of text to add
     * 			 position - Specified by "width x height". EG: 200 x 300
     * 			 padding - Ignored when specifying exact pixel location
     *			 font_color - The color of the font
     *			 font_size - The size of the font in pixels
     *			 angle - The angle of the text in degress
     *			 font - You can supply your own ttf font. Pass in the name and
     *				path
     *	Output:	 This will add the word "test" 20px in and 30px down on the 
     *			 original image. The text will be gray (#ccc), 12px high, read
	 * 				left to right (angle = 0) and will use the font arialbd.ttf
     *			 default color, white.
     */

	 $i=0;
	foreach($diff_text as $new_dtext)
	{
	/*if($public_wrap!=1)
	{
	$new_dtext=str_replace("\n","\t",$new_dtext);
	}*/
	
	$newf_left=explode("px",$new_hcontent[0][$i]);
	$newf_top=explode("px",$new_hcontent[1][$i]);
	$newf_width=explode("px",$new_hcontent[2][$i]);
	$newf_height=explode("px",$new_hcontent[3][$i]);
	
	$curralign="center";
	
	if($newf_width[0]!='')
	{
	$org_widthtxt=$newf_width[0];
	}
	else
	{
	$org_widthtxt='352';
	}
	if($newf_height[0]!='')
	{
	$org_heighttxt=$newf_height[0];
	}
	else
	{
	$org_heighttxt='90';
	}
	$leading=1;
	
    $height_width=trim($newf_left[0]).'x'.trim($newf_top[0]);
 
	$newfsize=explode("px",$_REQUEST["txtfont"][$i]);
	
	$currlines='';
	
	if($_REQUEST['public_wrap']==1)
	{
	$currfont = imageloadfont($newf_family);
	$new_dtext = wordwrap($new_dtext, floor(($org_widthtxt-150) / imagefontwidth($currfont)), "\n");
    $currlines = explode("\n", $new_dtext);
	/*print_r($currlines);
	exit;*/
	}
	

	
$imageLibObj -> addText($new_dtext, $height_width, 0, $_SESSION['tnewcolor_front'], ($newfsize[0]-10), 0, $newf_family,$org_widthtxt,$org_heighttxt, $currlines);
$imageLibObj1-> addText($new_dtext, $height_width, 0, $_SESSION['tnewcolor_front'], ($newfsize[0]-10), 0, $newf_family,$org_widthtxt,$org_heighttxt, $currlines);
if($i>0){
$imageLibObj -> saveImage("frontview.png", 100);
}
$i++;
}
?>
<img src='frontview.png' />
<?php
$imageLibObj1 -> saveImage("frontdesign.png", 100);
	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	
	
	
	
	
	
	$imageLibObj -> saveImage('output_img/output_5.2.png', 100);
	
	$imageLibObjs = new imageLib("output_img/output_5.2.png");
	
	$image_proper=getimagesize("output_img/output_5.2.png");
	$imageLibObjs = new imageLib("frontview.png");
	$imageLibObjs1 = new imageLib("frontdesign.png");
	
	$watermark_pos=($image_proper[0]-115)." x ".($image_proper[1]-25);
	
	//$imageLibObjs -> addWatermark('images/desimeme.png', $watermark_pos, 0, 70,0,0,0,0,0);
			
	if($_REQUEST['img1_name']!='')	
	{
		 $w=$_REQUEST['img_w'];
		$h=$_REQUEST['img_h'];
		$t=$_REQUEST['img_t'];
		$l=$_REQUEST['img_l'];
		
		$img1name=$_REQUEST['img1_name'];
		//echo $imag1name;
		
		$pose=($img_t . " x " .$img_l);

		$imageLibObjs -> addWatermark($img1name,$pose,0,0 ,1,$w,$h,$t,$l);
		//$imageLibObjs -> addWatermark('images/star.gif',$pose,0,0 ,1,$w,$h,$t,$l);
		$imageLibObjs1 -> addWatermark($img1name,$pose,0,0,1,$w,$h,$t,$l);
	}
	
	
	$name = 'front'.rand(100,999).'.png';
	$imageLibObjs -> saveImage("frontview.png", 100);
	
	$name_design1 = 'fdesign'.rand(100,999).'.png';
	$imageLibObjs1 -> saveImage("frontdesign.png", 100);
	
	$imageLibObjs = new imageLib("frontview.png");
	$imageLibObjs1 = new imageLib("frontdesign.png");
	
	
	if($_REQUEST['upimg1_name']!='')	
	{
		$upw1=$_REQUEST['upimg_w1'];
		$uph1=$_REQUEST['upimg_h1'];
		$upt1=$_REQUEST['upimg_t1'];
		$upl1=$_REQUEST['upimg_l1'];
		
		$upimg1name=$_REQUEST['upimg1_name'];
		//echo $imag1name;
		
		$pose=($upt1 . " x " .$upl1);

		$imageLibObjs -> addWatermark($upimg1name,$pose,0,0 ,1,$upw1,$uph1,$upt1,$upl1);
		//$imageLibObjs -> addWatermark('images/star.gif',$pose,0,0 ,1,$w,$h,$t,$l);
		$imageLibObjs1 -> addWatermark($upimg1name,$pose,0,0 ,1,$upw1,$uph1,$upt1,$upl1);
	}
	
	
	$imageLibObjs -> borderPreset('simple');

	$imageLibObjs -> saveImage("output_img/output_5.2.png", 100);
	
	
	//$imageLibObjs -> saveImage("products/images/".$name, 100);
	
	
	
	
	
	$name = 'front'.rand(100,999).'.png';
	$imageLibObjs -> saveImage("frontview.png", 100);
	$imageLibObjs -> saveImage("userdesign/".$name, 100);
	
	
	$name_design1 = 'fdesign'.rand(100,999).'.png';
	$imageLibObjs1 -> saveImage("frontdesign.png", 100);
	$imageLibObjs1 -> saveImage("userdesign/".$name_design1, 100);
	
	
	
	
//For backside image	
	
	
	
$_SESSION['public_list'] = $_REQUEST['public_list'];

$_SESSION['published_by'] = $_REQUEST['published_by'];

$_SESSION['div_hidden_content2'] = $_REQUEST['div_hidden_content2'];

$_SESSION['ffamily2']=$_REQUEST['select2'];

$_SESSION['fcolor']=$_REQUEST['textnew_color2'];

$_SESSION['fwwarp']=$_REQUEST['public_wrap2'];

if(isset($_REQUEST['strip']) && ($_REQUEST['strip'] != "")) {
	$_SESSION['strip']=$_REQUEST['strip'];
}

	 $newimg = $_REQUEST['imgid2'];	
	 //echo #newimg;
	 
	 $public_wrap = $_REQUEST['public_wrap2'];
	 
	 $img = $newimg;
	 
	$ffamily=$_REQUEST['select'];
	
	$ffcolor=$_REQUEST['textnew_color2'];
	
	$exp_memeimg=explode("/",$img);
	
	$fth_gal=mysql_fetch_array(mysql_query("select * from des_gallery where gal_image='$exp_memeimg[1]'"));

	 $_SESSION['gal_imgid']=$fth_gal['gal_id'];


	require_once('image_lib/image_lib_class.php');
	//require_once('image_lib/imagestring.php')
	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	 




error_reporting(0);
define("ALIGN_LEFT", "left");
define("ALIGN_CENTER", "center");
define("ALIGN_RIGHT", "right");

function createimage1()
{
	
	$nleft 	= array();
	$ntop 	= array();
	$color	= array();
	$textalign 	= array();
	$fontsize	= array();
	$innertxt 	= array();
	$newtxt_width 	= array();
	$newtxt_height 	= array();
	
	$html = $_REQUEST['div_hidden_content2'];
	//echo $_REQUEST['div_hidden_content2'];
	$dom = new DOMDocument;
	$dom->loadHTML($html);
	$divs = $dom->getElementsByTagName('div');	
	$cnt	=	0; 
	foreach($divs as $div)
	{	
	$div;

		$id = $div->getAttribute('id');
		$style =  $div->getAttribute('style');
		if(!empty($id))
		{

			$stylearr	= explode(";", $style);
/*			print_r($stylearr);
			exit;*/
			if(count($stylearr)>0)
			{
			for($tst_flag=0; $tst_flag<8; $tst_flag++)
			{
		
			$split_arrstr=explode(":",$stylearr[$tst_flag]);
			/*print_r($split_arrstr);*/
			if(trim($split_arrstr[0])=="color")
			{
			$color[] = trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="left")
			{
				  $nleft[] = trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="top")
			{
				  $ntop[] =  trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="text-align")
			{
				  $textalign[] =  trim($split_arrstr[1])."<br>";
			}
			
			if(trim($split_arrstr[0])=="width")
			{
				  $newtxt_width[] =  trim($split_arrstr[1])."<br>";
			}
			
			if(trim($split_arrstr[0])=="height")
			{
				  $newtxt_height[] =  trim($split_arrstr[1])."<br>";
			}
			
				  
			}
			 
							  
			}
			

		$spans = $dom->getElementsByTagName('span')->item($cnt);	
		if($spans->hasAttributes())
		{	
			$innertxt[] = innerHTML1($spans);	
			foreach($spans->attributes as $span)
			{
				$name = $span->nodeName;
				$value	= $span->nodeValue; 
				//echo $name;
				switch($name)
				
				{
					case "style":
						$fontsize[] = str_replace( array(":",";","px") , "", (strstr($value, ":" )));
						break;
				}
			}
		}
		$cnt = $cnt + 1;
	}
		
	
	}
/*	print_r($color);
	exit;*/
	return array($nleft, $ntop, $newtxt_width, $newtxt_height,$innertxt);
}


function innerHTML1($tag)
{
	$doc = new DOMDocument();
	$doc->appendChild($doc->importNode($tag, TRUE));
	$innertext = trim($doc->saveHTML());
	$tagname = $tag->nodeName;
	return preg_replace('@^<'.$tagname.'[^>]*>|</'.$tagname.'>$@', "", $innertext);
}



	 
	 switch($ffamily)
	 {
	 case "Blockography":
	 $newf_family="Fonts/Blockography.ttf";
	 break;
	 case "Arial":
	 $newf_family="Fonts/arial.ttf";
	 break;
	 case "Times New Roman":
	 $newf_family="Fonts/times.ttf";
	 break;
	 case "Courier":
	 $newf_family="Fonts/cour.ttf";
	 break;
	 case "Verdana":
	 $newf_family="Fonts/verdana.ttf";
	 break;
	 case "Geneva":
	 $newf_family="Fonts/geneva-normal.ttf";
	 break;
	 case "Memetica":
	 $newf_family="Fonts/Memetica.ttf";
	 break;
	 case "Memes":
	 $newf_family="Fonts/Memes.ttf";
	 break;
	 case "Pipe":
	 $newf_family="Fonts/abc,pipe.ttf";
	 break;
	 case "AbductionII":
	 $newf_family="Fonts/AbductionII.ttf";
	 break;
	 case "Eclipse":
	 $newf_family="Fonts/EclipseDEMO.ttf";
	 break;
	 case "BOWSHADW":
	 $newf_family="Fonts/BOWSHADW.TTF";
	 break;
	 case "Action Man Shaded":
	 $newf_family="Fonts/Action Man Shaded.ttf";
	 break;
	 default:
	 $newf_family="Fonts/arial.ttf";
	 break;
	 }
	 
	 
	$imageLibObj = new imageLib($img);

	$new_hcontent= createimage1();
	
	$diff_text1=$_REQUEST['memetext2'];
	$im1 = imagecreate(650,400);
	//$white = imagecolorallocate($im1,255,255,255);
	$black = imagecolorallocate($im1, 0, 0, 0);

 	// Make the background transparent
	imagecolortransparent($im1,$black);
	imagepng($im1,"test2.png");
	$imageLibObj1 = new imageLib("test2.png");
	//echo $imgname;
	//$diff_text=$new_hcontent[4];
/*"<pre>".print_r($new_hcontent)."</pre>";
exit;*/
	
	/*	Purpose: Add text to your image
     *	Usage:	 addText([text], [position], [padding], [font_color], [font_size], [angle], [font])
     * 	Params:	 text - the string of text to add
     * 			 position - Specified by "width x height". EG: 200 x 300
     * 			 padding - Ignored when specifying exact pixel location
     *			 font_color - The color of the font
     *			 font_size - The size of the font in pixels
     *			 angle - The angle of the text in degress
     *			 font - You can supply your own ttf font. Pass in the name and
     *				path
     *	Output:	 This will add the word "test" 20px in and 30px down on the 
     *			 original image. The text will be gray (#ccc), 12px high, read
	 * 				left to right (angle = 0) and will use the font arialbd.ttf
     *			 default color, white.
     */

	 $i=0;
	foreach($diff_text1 as $new_dtext)
	{
	/*if($public_wrap!=1)
	{
	$new_dtext=str_replace("\n","\t",$new_dtext);
	}*/
	
	$newf_left=explode("px",$new_hcontent[0][$i]);
	$newf_top=explode("px",$new_hcontent[1][$i]);
	$newf_width=explode("px",$new_hcontent[2][$i]);
	$newf_height=explode("px",$new_hcontent[3][$i]);
	
	$curralign="center";
	
	if($newf_width[0]!='')
	{
	$org_widthtxt=$newf_width[0];
	}
	else
	{
	$org_widthtxt='352';
	}
	if($newf_height[0]!='')
	{
	$org_heighttxt=$newf_height[0];
	}
	else
	{
	$org_heighttxt='90';
	}
	$leading=1;
	
    $height_width=trim($newf_left[0]).'x'.trim($newf_top[0]);
 
	$newfsize=explode("px",$_REQUEST["txtfont"][$i]);
	
	$currlines='';
	
	if($_REQUEST['public_wrap2']==1)
	{
	$currfont = imageloadfont($newf_family);
	$new_dtext = wordwrap($new_dtext, floor(($org_widthtxt-150) / imagefontwidth($currfont)), "\n");
    $currlines = explode("\n", $new_dtext);
	/*print_r($currlines);
	exit;*/
	}
	

	
$imageLibObj -> addText($new_dtext, $height_width, 0, $_SESSION['tnewcolor_back'], ($newfsize[0]-10), 0, $newf_family,$org_widthtxt,$org_heighttxt, $currlines);
$imageLibObj1 -> addText($new_dtext, $height_width, 0,$_SESSION['tnewcolor_back'], ($newfsize[0]-10), 0, $newf_family,$org_widthtxt,$org_heighttxt, $currlines);

//echo $imageLibObj2 -> addText($new_dtext, $height_width, 0, $ffcolor, ($newfsize[0]-10), 0, $newf_family,$org_widthtxt,$org_heighttxt, $currlines);

if($i>0){
$imageLibObj -> saveImage("backview.png", 100);
}
$i++;
}
?>
<img src='backview.png' />
<?php
$imageLibObj1 -> saveImage("backdesign.png", 100);


	
	
	$imageLibObj -> saveImage('output_img/output_5.21.png', 100);
	
	$imageLibObjs = new imageLib("output_img/output_5.21.png");
	
	$image_proper=getimagesize("output_img/output_5.21.png");
	$imageLibObjs = new imageLib("backview.png");
	$imageLibObjs1 = new imageLib("backdesign.png");
	
	$watermark_pos=($image_proper[0]-115)." x ".($image_proper[1]-25);
	
	//$imageLibObjs -> addWatermark('images/desimeme.png', $watermark_pos, 0, 70,0,0,0,0,0);
			
	if($_REQUEST['backimg_name']!='')	
	{
		 $w1=$_REQUEST['img_w1'];
		$h1=$_REQUEST['img_h1'];
		$t1=$_REQUEST['img_t1'];
		$l1=$_REQUEST['img_l1'];
		
		$img2name=$_REQUEST['backimg_name'];
		//echo $imag1name;
		
		$pose=($img_t1 . " x " .$img_l1);

		$imageLibObjs -> addWatermark($img2name,$pose,0,0 ,1,$w1,$h1,$t1,$l1);
		//$imageLibObjs -> addWatermark('images/star.gif',$pose,0,0 ,1,$w,$h,$t,$l);
		$imageLibObjs1 -> addWatermark($img2name,$pose,0,0,1,$w1,$h1,$t1,$l1);
	}
	
	$name1 = 'back'.rand(100,999).'.png';
	$imageLibObjs -> saveImage("backview.png", 100);
	
	$name1 = 'back'.rand(100,999).'.png';
	$imageLibObjs -> saveImage("backview.png", 100);
	
	$imageLibObjs = new imageLib("backview.png");
	$imageLibObjs1 = new imageLib("backdesign.png");
		
	
	if($_REQUEST['upimg2_name']!='')	
	{
		$upw2=$_REQUEST['upimg_w2'];
		$uph2=$_REQUEST['upimg_h2'];
		$upt2=$_REQUEST['upimg_t2'];
		$upl2=$_REQUEST['upimg_l2'];
		
		$upimg2name=$_REQUEST['upimg2_name'];
		//echo $imag1name;
		
		$poseup=($upt2 . " x " .$upl2);

		$imageLibObjs -> addWatermark($upimg2name,$poseup,0,0 ,1,$upw2,$uph2,$upt2,$upl2);
		//$imageLibObjs -> addWatermark('images/star.gif',$pose,0,0 ,1,$w,$h,$t,$l);
		$imageLibObjs1 -> addWatermark($upimg2name,$poseup,0,0 ,1,$upw2,$uph2,$upt2,$upl2);
	}
	
	
	
	$imageLibObjs -> borderPreset('simple');

	$imageLibObjs -> saveImage("output_img/output_5.21.png", 100);
	

	
	
	
	
	
	$name1 = 'back'.rand(100,999).'.png';
	$imageLibObjs -> saveImage("backview.png", 100);
	$imageLibObjs -> saveImage("userdesign/".$name1, 100);
	
	
	$name_design2 = 'bdesign'.rand(100,999).'.png';
	$imageLibObjs1 -> saveImage("backdesign.png", 100);
	$imageLibObjs1 -> saveImage("userdesign/".$name_design2, 100);
	
	
	
	
	
	
	
	

	
	
	/*if($_REQUEST['backimg_name']!='')	
	{
		 $w1=$_REQUEST['img_w1'];
		$h1=$_REQUEST['img_h1'];
		$t1=$_REQUEST['img_t1'];
		$l1=$_REQUEST['img_l1'];
		
		$img2name=$_REQUEST['backimg_name'];
		//echo $imag1name;
		
		$pose2=($img_t . " x " .$img_l);

		$imageLibObjs -> addWatermark($img2name,$pose2,0,0 ,1,$w1,$h1,$t1,$l1);
		//$imageLibObjs -> addWatermark('images/star.gif',$pose,0,0 ,1,$w,$h,$t,$l);
		$imageLibObjs2 -> addWatermark($img2name,$pose2,0,0,1,$w1,$h1,$t1,$l1);
	}
	
	
	
	
	
	$imageLibObjs -> borderPreset('simple');

	$name1 = 'front'.rand(100,999).'.png';
	
	$imageLibObjs -> saveImage("products/images/".$name1, 100);
	
	
	
	$name_design2 = 'bdesign'.rand(100,999).'.png';
	$imageLibObjs2 -> saveImage("d2.png", 100);
	$imageLibObjs2 -> saveImage("products/images/".$name_design2, 100);*/
	

	
	//$imageLibObjs -> addWatermark('images/desimeme.png', $watermark_pos, 0, 70,0,0,0,0,0);
			
/*	if($_REQUEST['backimg_name']!='')	
	{
	 $w1=$_REQUEST['img_w1'];
	$h1=$_REQUEST['img_h1'];
	$t1=$_REQUEST['img_t1'];
	$l1=$_REQUEST['img_l1'];
		
		$backimg_name=$_REQUEST['backimg_name'];
		//echo $imag1name;
		
		$pose2=($img_t1 . " x " .$img_l1);

		$imageLibObjs2 -> addWatermark($backimg_name,$pose2,0,0 ,1,$w1,$h1,$t1,$l1);
		//$imageLibObjs -> addWatermark('images/star.gif',$pose,0,0 ,1,$w,$h,$t,$l);
		$imageLibObjs3 -> addWatermark($backimg_name,$pose2,0,0,1,$w1,$h1,$t1,$l1);
	}
	
	
	$imageLibObjs2 -> borderPreset('simple');

	$imageLibObjs -> saveImage("output_img/output_5.21.png", 100);
	$name = 'back'.rand(100,999).'.png';
	
	$imageLibObjs -> saveImage("products/images/".$name, 100);
	
	
	
	
	
	$name_design2 = 'bdesign'.rand(100,999).'.png';
	$imageLibObjs2 -> saveImage("d2.png", 100);
	$imageLibObjs3 -> saveImage("products/images/".$name_design2, 100);*/
	
	


	$prod_id=$_REQUEST['prod_id'];
	
	

//header("Location:newimage.php?id=$name&id1=$name1&prod_id=$prod_id&design1=$name_design1&design2=$name_design2");
echo "<script>window.location='newimage.php?id=$name&id1=$name1&prod_id=$prod_id&design1=$name_design1&design2=$name_design2'</script>"
?>
