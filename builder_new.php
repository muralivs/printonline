<?php
session_start();
include_once("config.php");
include_once("code/loader.php");
//CheckSessionOut();

//$cat = Select(PFO_CAT);
$cat = SelectOrderBy(PFO_CAT,'category');
//$style = Select(PFO_STYLE);
$style = SelectOrderBy(PFO_STYLE,'style');

$cartid = $_SESSION['pfo_userid'];

if(!isset($_SESSION['pfo_userid']))
{
header("Location:login.php");
}

$qry = mysql_query("SELECT * FROM `pfo_cart` WHERE `user_id` = '$cartid' ");
$ccount = mysql_num_rows($qry);
if($ccount>0)
{
$cartc = $ccount;
}
else
{
$cartc = 0;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="<?php echo $site_description; ?>">
<meta name="keywords" content="<?php echo $site_keyword; ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $pro_title; ?></title>
<link href="css/pro-styles.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />

<!--------------------------editor---tools---------------------->
<!--------------------------editor---tools---------------------->
<!--------------------------editor---tools---------------------->
<script type="text/javascript">

/*function test()
{
alert('s');
}*/

<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script type="text/javascript" language="javascript" src="js/accordion_menu/accordion_menu.js"></script>
<script type="text/javascript" language="javascript" src="js/accordion_menu/ddaccordion.js"></script>
<script type="text/javascript" language="javascript" src="js/accordion_menu/jquery-1.2.6.pack.js"></script>
<script src="js/user_validation.js"></script>



<script src='js/scroller.js ' type='text/javascript' language='javascript1.2'></script>

<link rel="stylesheet" href="css/jqzoom.css" type="text/css">
<link href="css/ts.css" rel="stylesheet" type="text/css" />
<script src="js/portfolio.js"></script>
<script type="text/javascript">

$(function() {
	$(".jqzoom").jqzoom();
});
</script>
</head>

<body onLoad="load('table-content',3000,'','11'); slideshow ('startslide');" >
<div class="bgBottom" >

<table width="95%" border="0" style="margin-left:25px;" cellspacing="0" cellpadding="0">
      <tr>
        <td width="67%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="82%" align="left" valign="middle"><a href="index.php"><img src="images/<?php echo SITE_LOGO; ?>" width="232" height="49" class="logo" border="0" /></a></td>
            <td width="18%" align="right" valign="bottom"><img src="images/customersupt.jpg" width="133" height="30" class="logo" /></td>
          </tr>
        </table></td>
        <td width="33%" rowspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right">
            <div class="topnavlink">
            <ul>
            <li><a href="index.php">Home</a></li>
             <li>.</li>
             <li><a href="aboutus.php"> About us</a></li> 
             <li>.</li>
			<li><a href="contactus.php"> Contact us</a></li> 
             <li>.</li>             
             <li><a href="faq.php"> FAQ </a></li> 
             <li>.</li>
             <li><a href="enquiry.php">  Enquiry</a></li> 
             <li>.</li>
             <li><a href="help.php"> Help</a></li> 
            </ul>
            </div>            </td>
          </tr>
          
        </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px">
            <tr>
              <td width="32%" align="center" valign="top" style="padding-bottom:5px">
<div id="craftysyntax" style="padding-left:5px;">
<!--<script type="text/javascript" src="http://pfo.udhayanidhi.com/livechat/livehelp_js.php?eo=1&department=1&amp;serversession=1&amp;pingtimes=15"></script>-->

<!-- BEGIN Comm100 Live Chat Button Code --><a href="http://livechat.comm100.com/" target="_blank" onclick="comm100_152563.openChatWindow(event,64,-1);return false;"><img style="border:0px" id="comm100_ButtonImage" src="https://chatserver.comm100.com/BBS.aspx?siteId=152563&amp;planId=64&amp;partnerId=-1" alt="Live Chat"/></a><script src="https://chatserver.comm100.com/js/LiveChat.js?siteId=152563&amp;planId=64&amp;partnerId=-1" type="text/javascript"></script><br /><span id="comm100_track" style="font-family: Arial; font-size: 10px; font-weight:normal; color: Gray; line-height: 12px;"><a href="http://livechat.comm100.com/" style="text-decoration: none; color: Gray; font-weight: bold;" target="_blank"></a></span><!-- End Comm100 Live Chat Button Code -->
</div>

</td>
              <td width="68%" align="center" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="viewcartbg">
                <tr>
                  <td width="20%" height="58" align="center" valign="middle" style="padding:5px"><img src="images/cartimg.jpg" width="33" height="27" />                    </td>
                  <td width="53%" align="left" valign="top" class="mycart_txt" style="padding:5px">My Cart Details<br />
                   <span class="mycart_txt_normal"> You currently have 
                    (<?php echo $cartc; ?>) items in your cart</span></td>
                  <td width="27%" align="left" valign="middle">
                   
                      <input type="image" name="imageField" id="imageField" src="images/cart_btn.jpg" onclick="window.location='display_cart.php' " />                  </td>
                </tr>
              </table></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="10%" align="center" valign="middle" class="mainnavbg"><a href="categories.php" class="mainnav_link">Categories</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="14%" align="center" valign="middle" class="mainnavbg"><a href="portfolio.php" class="mainnav_link">My Portfolio</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
              <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="9%" align="center" valign="middle" class="mainnavbg"><a href="product.php" class="mainnav_link">Products</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="11%" align="center" valign="middle" class="mainnavbg"><a href="services.php" class="mainnav_link">Services</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="11%" align="center" valign="middle" class="mainnavbg"><a href="images.php" class="mainnav_link">My Images</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="15%" align="center" valign="middle" class="mainnavbg"><a href="bookmark.php" class="mainnav_link">My Bookmarks</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
              <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="25%" align="center" valign="middle" class="mainnavbg"><a href="orderhistory.php" class="mainnav_link">Order History</a></td>
            <td width="2%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="selectbg">
          <tr>
            <td width="50%" colspan="4" align="left" valign="middle" >
			<form name="form_search" method="post" action="categories.php">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" class="category_boxbg">
                  <select name="selcat" class="category_boxbg_txt" >
                                        <option value="">Select your profession</option>
										<?php for($c=0; $c<count($cat); $c++) { ?>
										<option value="<?php echo $cat[$c]['cat_id']; ?>" <?php if($cat[$c]['cat_id']==$_REQUEST['selcat']) echo "selected"; ?>><?php echo $cat[$c]['category']; ?></option>
										<?php } ?>
                                       
                                    </select>               </td>
                <td width="2%">&nbsp;</td>
                <td width="31%" class="category_boxbg">
                 <select name="selstyle" class="category_boxbg_txt" >
                                        <option value="">Select your style</option>
										<?php for($s=0; $s<count($style); $s++) { ?>
										<option value="<?php echo $style[$s]['sty_id']; ?>" <?php if($style[$s]['sty_id']==$_REQUEST['selstyle']) echo "selected"; ?>><?php echo $style[$s]['style']; ?></option>
										<?php } ?>
                                    </select>             </td>
                <td width="45%" style="padding-left:10px">
                  <input type="image" src="images/but_go.jpg" name="prodsearch" value="Submit" />               </td>
              </tr>
            </table>
			</form>
			</td>
            <td width="2%" style="padding-left:5px">&nbsp;</td>
			<?php if(isset($_SESSION['pfo_userid'])) { ?>
            <td width="12%" align="left" valign="middle"  style="padding-left:2px;">&nbsp;</td>
              <td width="12%" align="left" valign="middle">&nbsp;</td>
               
              <td width="1%">&nbsp;</td>
              <td width="1%" style="padding-left:5px">&nbsp;</td>
           <td width="31%" align="right" valign="top" style="padding-top:20px;padding-right:20px" class="Welcome_txt">Welcome <?php echo $_SESSION['pfo_username']; ?> / 
             <a href="logout.php" class="Logout_link">Logout</a></td>
			  <?php } else { ?>
			  <td width="32%" colspan="3" align="left" valign="middle"  style="padding-left:2px;">
			<form name="form_login" method="post" action="login.php">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" class="category_boxbg"><input name="login_email" type="text" class="username_txt" id="textfield32" onfocus="if(this.value=='User name') this.value='';" onblur="if(this.value=='') this.value='User name';" value="<?php if($_SESSION['Session_email']!=''){ echo $_SESSION['Session_email']; } else {?>User name<?php } ?>" /></td>
                <td width="2%">&nbsp;</td>
                <td width="31%" class="category_boxbg"><input name="login_pass" type="password" class="username_txt" id="textfield33" onfocus="if(this.value=='Password') this.value='';" onblur="if(this.value=='') this.value='Password';" value="<?php if($_SESSION['Session_email']!=''){ echo $_SESSION['password']; } else {?>Password<?php } ?>" /></td>
                <td width="45%" style="padding-left:10px"><input type="submit" name="submit_login" id="button222" value="Go" class="go_btn" onClick="javascript:return LoginValidation();"/>                </td>
              </tr>
            </table>
			</form>
			</td>
            <td width="1%" style="padding-left:5px"><img src="images/linkmainnav_divider.jpg" /></td>
            <td width="15%" align="center" valign="top" style="padding-top:7px"><a href="forgot_pass.php" class="forgot_txtlink">Forgot Password?</a><br />
              <a href="registration.php" class="forgot_txtlink"> New User Signup Here</a></td>
			  <?php } ?>
			  
          </tr>
          
        </table></td>
        </tr>
		<?php if($page == 'index') { ?>
      <tr>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="65%"><img src="images/banner.jpg" width="620" height="224" /></td>
            <td width="35%"><img src="images/custombusi.jpg" width="340" height="224" /></td>
          </tr>
        </table></td>
      </tr>
	  <?php }  ?>
      
    </table>

<table width="95%" border="0" style="margin-left:25px;" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" >
    <?php include_once("includes/header.php"); ?>
	</td>
  </tr>
<?php 
include ("includes/db_connect.php");
include("admin/includes/resize-class.php");

if(isset($_REQUEST['upload_image']))
{
	$image = $_FILES['newimage']['name'];
	$tittle = $_REQUEST['imagetittle'];
	
	if($image == "")
	{
		header("Location:new_meme.php?error=0&image&#image"); //new_meme.php?image&#image
		exit;
	}
	
	if($tittle == "")
	{
		header("Location:new_meme.php?error=1&image&#image");
		exit;
	}
	
	if($image != "")
	{
		$img_size=$_FILES['newimage']['size'];
		if($img_size > 2097152) //2097152-B = 20-MB
		{
			header("Location:new_meme.php?bigimg&image&#image");
		}
		else
		{
			$image_ar=explode(".",$image);
			//echo $image_ar[1];exit;
			if((strtolower($image_ar[1]) == "jpg") || (strtolower($image_ar[1]) == "jpeg") || (strtolower($image_ar[1]) == "png"))
			{
				$image_new="fileimages".rand(100,999)."(".date("Y-m-d").").".$image_ar[1];
				
				//$image_new=str_replace(" ","-",$image_new);
				//$image_new=str_replace("%","",$image_new);
				
				$sourceimg=$_FILES['newimage']['tmp_name'];
				$destination="uploads/".$image_new;
				move_uploaded_file($sourceimg,$destination);
				
				// *** 1) Initialise / load image
				$resizeObj = new resize($destination);
				
				// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
				$resizeObj -> resizeImage(600, 'auto');
				
				// *** 3) Save image
				$resizeObj -> saveImage($destination, 100);
				
			} 
			else
			{
				header("Location:new_meme.php?error=2&image&#image");
				exit;
			}
			
			mysql_query("INSERT INTO des_gallery (gal_tittle, gal_image, gal_upload_by, ip_address, postdate) VALUES ('$tittle', '$image_new', 1, '".$_SERVER['REMOTE_ADDR']."', NOW())") or die("image insert error in builder oage : ".mysql_error());
			
			header("Location:builder.php?img=".mysql_insert_id());
		}
	}
	
	//$temp_image = $image_new;
}


function createimage($hidcont)
{
	$left 	= array();
	$top 	= array();
	$color	= array();
	$textalign 	= array();
	$fontsize	= array();
	$innertxt 	= array();
	$newtxt_width 	= array();
	$newtxt_height 	= array();
	
	$html = $hidcont;
	$dom = new DOMDocument;
	$dom->loadHTML($html);
	$divs = $dom->getElementsByTagName('div');	
	$cnt	=	0; 
	foreach($divs as $div)
	{	
	echo $div;

		$id = $div->getAttribute('id');
		$style =  $div->getAttribute('style');
		if(!empty($id))
		{
			$stylearr	= explode(";", $style);
			if(count($stylearr)>0)
			{
			for($tst_flag=0; $tst_flag<8; $tst_flag++)
			{
		
			$split_arrstr=explode(":",$stylearr[$tst_flag]);
			//print_r($split_arrstr);
			if(trim($split_arrstr[0])=="color")
			{
			$color[] = trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="left")
			{
				  $left[] = trim($split_arrstr[1])."<br>";
			}
			if(trim($split_arrstr[0])=="top")
			{
				  $top[] =  trim($split_arrstr[1])."<br>";
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
	
	return array($left, $top, $newtxt_width, $newtxt_height,$innertxt,$color,$fontsize);
}



function rgb2html($r, $g=-1, $b=-1)
{
    if (is_array($r) && sizeof($r) == 3)
        list($r, $g, $b) = $r;

    $r = intval($r); $g = intval($g);
    $b = intval($b);

    $r = dechex($r<0?0:($r>255?255:$r));
    $g = dechex($g<0?0:($g>255?255:$g));
    $b = dechex($b<0?0:($b>255?255:$b));

    $color = (strlen($r) < 2?'0':'').$r;
    $color .= (strlen($g) < 2?'0':'').$g;
    $color .= (strlen($b) < 2?'0':'').$b;
    return '#'.$color;
}


function innerHTML($tag)
{
	$doc = new DOMDocument();
	$doc->appendChild($doc->importNode($tag, TRUE));
	$innertext = trim($doc->saveHTML());
	$tagname = $tag->nodeName;
	return preg_replace('@^<'.$tagname.'[^>]*>|</'.$tagname.'>$@', "", $innertext);
}

?>
<script type="text/javascript" src="js/tabber.js"></script>

<link href="css/builderstyle.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/example.css" TYPE="text/css" MEDIA="screen">

<link rel="stylesheet" href="development-bundle/themes/base/jquery.ui.all.css">
<link rel="stylesheet" href="development-bundle/demos/demos.css">
<link rel="stylesheet" href="css/meme.css" type="text/css" />
<!-- draggable element support function -->
<script src="development-bundle/jquery-1.7.1.js"></script>
<script src="development-bundle/ui/jquery.ui.core.js"></script>		
<script src="development-bundle/ui/jquery.ui.widget.js"></script>
<script src="development-bundle/ui/jquery.ui.mouse.js"></script>
<script src="development-bundle/ui/jquery.ui.draggable.js"></script>
<script src="development-bundle/ui/jquery.ui.resizable.js"></script>
<!-- draggable element support function -->
<script type="text/javascript" src="js/drag.js"></script>
<script type="text/javascript" src="jscolor/jscolor.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

 <script type="text/javascript">
	//alert("test");
function save_image()
{

	if(document.getElementById("img1") != null)
	{
		w=document.getElementById("img1").clientWidth;
		h=document.getElementById("img1").clientHeight;
		l=document.getElementById("draggabled1").offsetLeft;
		t=document.getElementById("draggabled1").offsetTop;
		document.getElementById("img_w").value=w;
		document.getElementById("img_h").value=h;
		document.getElementById("img_l").value=l;
		document.getElementById("img_t").value=t;

	}	
	
	if(document.getElementById("backimg") != null)
	{
		w1=document.getElementById("backimg").clientWidth;
		h1=document.getElementById("backimg").clientHeight;
		l1=document.getElementById("draggabled2").offsetLeft;
		t1=document.getElementById("draggabled2").offsetTop;
		document.getElementById("img_w1").value=w1;
		document.getElementById("img_h1").value=h1;
		document.getElementById("img_l1").value=l1;
		document.getElementById("img_t1").value=t1;
	}	
	
	
	if(document.getElementById("upimg1") != null)
	{
		w1=document.getElementById("upimg1").clientWidth;
		h1=document.getElementById("upimg1").clientHeight;
		l1=document.getElementById("draggableup1").offsetLeft;
		t1=document.getElementById("draggableup1").offsetTop;
		document.getElementById("upimg_w1").value=w1;
		document.getElementById("upimg_h1").value=h1;
		document.getElementById("upimg_l1").value=l1;
		document.getElementById("upimg_t1").value=t1;
	}	
	
	
	if(document.getElementById("upimg2") != null)
	{
		w1=document.getElementById("upimg2").clientWidth;
		h1=document.getElementById("upimg2").clientHeight;
		l1=document.getElementById("draggableup2").offsetLeft;
		t1=document.getElementById("draggableup2").offsetTop;
		document.getElementById("upimg_w2").value=w1;
		document.getElementById("upimg_h2").value=h1;
		document.getElementById("upimg_l2").value=l1;
		document.getElementById("upimg_t2").value=t1;
	}
	
	
	var i=1;
	var arrlen_new = captionater.length;
	//alert(arrlen_new);//exit(0);
	for(i=1;i<=arrlen_new;i++)
	{
		//alert('txtnew'+i);
		//var caption_val = document.getElementById('txtnew'+i).value;
		//alert(caption_val);
		//if(caption_val === "Enter here to make meme")
		//{
			//alert("Created caption must filled by some words, \nif u dont want that cation means close by pressing \"X\" Button");
			//document.getElementById('txtnew'+i).focus();
			//return false;
			
		//}
	}
	var htmlnew=document.getElementById('containment-wrapper').innerHTML;
	//alert(htmlnew);
	document.getElementById('div_hidden_content').value=htmlnew;
	var dupimg=document.getElementById('wraper_img').src;
	var nnn=dupimg.split("/");
	//return false;
	
	var htmlnew=document.getElementById('containment-wrapper2').innerHTML;
	document.getElementById('div_hidden_content2').value=htmlnew;
	var dupimg2=document.getElementById('wraper_img2').src;
	var nnn2=dupimg2.split("/");
	//alert(htmlnew);
	document.imagelab.submit();
	//alert(nnn[nnn.length-1]);
	//window.location="test.php?newhtml="+htmlnew+"&imgid="+nnn[nnn.length-1];
	//window.location="test_old 9-5-12.php?newhtml="+htmlnew+"&imgid="+nnn[nnn.length-1];
}

function save_image1()
{	
	//alert("test");
	var i=1;
	var arrlen_new = captionater2.length;
	var htmlnew=document.getElementById('containment-wrapper').innerHTML;
	if(document.getElementById("backimg_name") != null)
	{
		w1=document.getElementById("backimg_name").clientWidth;
		h1=document.getElementById("backimg_name").clientHeight;
		l1=document.getElementById("draggabled2").offsetLeft;
		t1=document.getElementById("draggabled2").offsetTop;
		document.getElementById("img_w1").value=w1;
		document.getElementById("img_h1").value=h1;
		document.getElementById("img_l1").value=l1;
		document.getElementById("img_t1").value=t1;
	}	
	//alert(arrlen_new);//exit(0);
	for(i=1;i<=arrlen_new-1;i++)
	{
		//alert('txtnew'+i);
		var caption_val = document.getElementById('txtnew2'+i).value;
		//alert(caption_val);
		if(caption_val === "Enter here to make meme")
		{
			alert("Created caption must filled by some words, \nif u dont want that cation means close by pressing \"X\" Button");
			document.getElementById('txtnew'+i).focus();
			return false;
			
		}
	}
	var htmlnew=document.getElementById('containment-wrapper2').innerHTML;
	//alert(htmlnew);
	document.getElementById('div_hidden_content2').value=htmlnew;
	var dupimg=document.getElementById('wraper_img2').src;
	var nnn=dupimg.split("/");
	var htmlnew=document.getElementById('containment-wrapper').innerHTML;
	//alert(htmlnew);
	document.getElementById('div_hidden_content').value=htmlnew;
	var dupimg=document.getElementById('wraper_img').src;
	//return false;
	document.imagelab.submit();
	//alert(nnn[nnn.length-1]);
	//window.location="test.php?newhtml="+htmlnew+"&imgid="+nnn[nnn.length-1];
	//window.location="test_old 9-5-12.php?newhtml="+htmlnew+"&imgid="+nnn[nnn.length-1];
}

</script>

<script language="javascript">

document.write('<style type="text/css">.tabber{display:none;}<\/style>');

/*function meme_validate()
{
	var i=1;
	var arrlen_new = captionater.length;
	//alert(arrlen_new);//exit(0);
	for(i=1;i<arrlen_new;i++)
	{
		var caption_val = document.getElementById('txtnew'+i).innerHTML;
		//alert(caption_val);
		if(caption_val == "Enter here to make meme")
		{
			alert("Created caption must filled by some words, if u dont want that cation means close by pressing \"X\" Button");
			return false;
			
		}
	}
}*/


function change_imgview(val)
{
document.getElementById('containment-wrapper').innerHTML="<img id='wraper_img' src='"+val+"' style='position:relative; max-width:600px;' />";
}

</script>

<style type="text/css">

        #vtab {
            
            
            height: 100%;
        }
        #vtab > ul > li {
            width: 110px;
            height: 110px;
            
            list-style-type: none;
            display: block;
            text-align: center;
            margin: auto;
            padding-bottom: 10px;
            border: 1px solid #fff;
            /*position: relative;*/
            border-right: none;
            opacity: .3;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=30);
        }
        #vtab > ul > li.home {
            background: url('images/front.jpg') no-repeat center center;
        }
        #vtab > ul > li.login {
            background: url('images/back.jpg') no-repeat center center;
        }
       
        #vtab > ul > li.selected {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
            border: 1px solid #ddd;
            border-right: none;
            z-index: 10;
            background-color: #fafafa !important;
            /*position: relative;*/
        }
        #vtab > ul {
            float: left;
            width: 110px;
            text-align: left;
            display: block;
            margin: auto 0;
            padding: 0;
            /*position: relative;*/
            top: 30px;
        }
        #vtab > div {
            background-color: #fafafa;
            margin-left: 110px;
            border: 1px solid #ddd;
            min-height: 500px;
            padding: 12px;
            /*position: relative;*/
            z-index: 9;
            -moz-border-radius: 20px;
        }
        #vtab > div > h4 {
            color: #800;
            font-size: 1.2em;
            border-bottom: 1px dotted #800;
            padding-top: 5px;
            margin-top: 0;
        }
        #loginForm label {
            float: left;
            width: 100px;
            text-align: right;
            clear: left;
            margin-right: 15px;
        }
        #loginForm fieldset {
            border: none;
        }
        #loginForm fieldset > div {
            padding-top: 3px;
            padding-bottom: 3px;
        }
        #loginForm #login {
            margin-left: 115px;
        }
    </style>
    <script type="text/javascript">
        $(function() {
            var $items = $('#vtab>ul>li');
            $items.click(function() {
			    save1();
                $items.removeClass('selected');
                $(this).addClass('selected');

                var index = $items.index($(this));
                $('#vtab>div').hide().eq(index).show();
				
            }).eq(1).click();
			
        });
	


    </script>
	<script>
function save1()
{
if(document.getElementById("img1") != null)
{
	w=document.getElementById("img1").clientWidth;
	h=document.getElementById("img1").clientHeight;
	l=document.getElementById("draggabled1").offsetLeft;
	t=document.getElementById("draggabled1").offsetTop;
	document.getElementById("img_w").value=w;
	document.getElementById("img_h").value=h;
	document.getElementById("img_l").value=l;
	document.getElementById("img_t").value=t;
}
if(document.getElementById("backimg") != null)
{
	
	w1=document.getElementById("backimg").clientWidth;
	h1=document.getElementById("backimg").clientHeight;
	l1=document.getElementById("draggabled2").offsetLeft;
	t1=document.getElementById("draggabled2").offsetTop;
	document.getElementById("img_w1").value=w1;
	document.getElementById("img_h1").value=h1;
	document.getElementById("img_l1").value=l1;
	document.getElementById("img_t1").value=t1;
}

}


function show_frontview()
{

document.getElementById('backview').style.visibility="hidden";
document.getElementById('backview').style.height="0px";
document.getElementById('backview').style.overflow="hidden";
document.getElementById('frontview').style.visibility="visible";
document.getElementById('frontview').style.height="auto";
document.getElementById('frontview').style.overflow="visible";

}

function show_backview()
{
document.getElementById('frontview').style.visibility="hidden";
document.getElementById('frontview').style.height="0px";
document.getElementById('frontview').style.overflow="hidden";
document.getElementById('backview').style.visibility="visible";
document.getElementById('backview').style.height="auto";
document.getElementById('backview').style.overflow="visible";
}






function increse_size(val)
{
if(val=="f")
{
var oldimg_height=document.getElementById("img1").clientHeight;
var oldimg_width=document.getElementById("img1").clientWidth;
//alert(document.getElementById("draggabled1").clientWidth);

document.getElementById("draggabled1").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("draggabled1").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
document.getElementById("img1").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("img1").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
}
else
{
var oldimg_height=document.getElementById("backimg").clientHeight;
var oldimg_width=document.getElementById("backimg").clientWidth;
//alert(document.getElementById("draggabled1").clientWidth);

document.getElementById("draggabled2").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("draggabled2").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
document.getElementById("backimg").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("backimg").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
}
}

function decrese_size(val)
{
if(val=="f")
{
var oldimg_width=document.getElementById("img1").width;
var oldimg_height=document.getElementById("img1").height;

document.getElementById("draggabled1").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("draggabled1").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
document.getElementById("img1").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("img1").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
}
else
{
var oldimg_height=document.getElementById("backimg").clientHeight;
var oldimg_width=document.getElementById("backimg").clientWidth;
//alert(document.getElementById("draggabled1").clientWidth);

document.getElementById("draggabled2").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("draggabled2").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
document.getElementById("backimg").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("backimg").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
}
}





function increse_sizeup(val)
{
if(val=="f")
{
var oldimg_height=document.getElementById("upimg1").clientHeight;
var oldimg_width=document.getElementById("upimg1").clientWidth;
//alert(document.getElementById("draggabled1").clientWidth);

document.getElementById("draggableup1").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("draggableup1").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
document.getElementById("upimg1").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("upimg1").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
}
else
{
var oldimg_height=document.getElementById("upimg2").clientHeight;
var oldimg_width=document.getElementById("upimg2").clientWidth;
//alert(document.getElementById("draggabled1").clientWidth);

document.getElementById("draggableup2").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("draggableup2").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
document.getElementById("upimg2").style.height=parseInt(oldimg_height)+parseInt(10)+"px";
document.getElementById("upimg2").style.width=parseInt(oldimg_width)+parseInt(10)+"px";
}
}

function decrese_sizeup(val)
{
if(val=="f")
{
var oldimg_width=document.getElementById("upimg1").width;
var oldimg_height=document.getElementById("upimg1").height;

document.getElementById("draggableup1").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("draggableup1").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
document.getElementById("upimg1").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("upimg1").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
}
else
{
var oldimg_width=document.getElementById("upimg2").width;
var oldimg_height=document.getElementById("upimg2").height;

document.getElementById("draggableup2").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("draggableup2").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
document.getElementById("upimg2").style.height=parseInt(oldimg_height)-parseInt(10)+"px";
document.getElementById("upimg2").style.width=parseInt(oldimg_width)-parseInt(10)+"px";
}
}



	</script>
	
<link rel="stylesheet" href="lib/demo.css" />


	
<script type="text/javascript" src="lib/jquery.dimensions.js"></script>
	<script type="text/javascript" src="lib/jquery.accordion.js"></script>
	
	<script type="text/javascript">
	jQuery().ready(function(){
		// simple accordion
		jQuery('#list1a').accordion();
		jQuery('#list1a2').accordion({
			autoheight: false
		});
		
		
		// bind to change event of select to control first and seconds accordion
		// similar to tab's plugin triggerTab(), without an extra method
		var accordions = jQuery('#list1a, #list1b, #list2, #list3, #navigation, #wizard');
		
		var accordions = jQuery('#list1a2, #list1b, #list2, #list3, #navigation, #wizard');
		
		jQuery('#switch select').change(function() {
			accordions.accordion("activate", this.selectedIndex-1 );
		});
		jQuery('#close').click(function() {
			accordions.accordion("activate", -1);
		});
		jQuery('#switch2').change(function() {
			accordions.accordion("activate", this.value);
		});
		jQuery('#enable').click(function() {
			accordions.accordion("enable");
		});
		jQuery('#disable').click(function() {
			accordions.accordion("disable");
		});
		jQuery('#remove').click(function() {
			accordions.accordion("destroy");
			wizardButtons.unbind("click");
		});
	});
	</script>



  <tr>
    <td align="center" valign="top">
<form name="imagelab" action="text_advanced.php"  method="post" enctype="multipart/form-data" >

<?php if(!isset($_REQUEST['imgmeme'])) { ?>
<div style="background-color:#FFFFFF" >
<div style="float:left; width:380px;" align="right">
<!--<input name="" type="button" style="background:url(images/front-bt.jpg) no-repeat; width:66px; height:25px; border:0px; cursor:pointer;" onclick="show_shirtview();" />-->
<a href="javascript:void(0);" onclick="show_frontview();" style="text-decoration:none;"><img src="images/front-bt.jpg" border="0" /></a>
</div>

<div style="float:left; width:480px;" align="right">
<!--<input name="" type="button" style="background:url(images/back-bt.jpg) no-repeat; width:66px; height:25px; border:0px;" onclick="show_shirtview();"/>-->
<a href="javascript:void(0);" onclick="show_backview();" style="text-decoration:none;"><img src="images/back-bt.jpg" border="0" /></a>
</div>
<div class="clr"></div>
</div>
<div class="main-table" style="margin-top:0px;">
<!-- Menu Part -->

<!-- Content Part -->
<div class="content-part" style="margin-top:0px;">

<div class="content" id="frontview">

<textarea name="div_hidden_content" id="div_hidden_content" style="display:none"   ></textarea>
    <input type="hidden" name="textnew_color" id="textnew_color" value="#000000" />
	<input type="hidden" name="imge" id="imge" value="images/star.gif" />
	<input type="hidden" name="upimge" id="upimge" value="images/star.gif" />
	<input type="hidden" name="img_w" id="img_w" value=""/>
	<input type="hidden" name="img_h" id="img_h" value=""/>
	<input type="hidden" name="img_t" id="img_t" value=""/>
	<input type="hidden" name="img_l" id="img_l" value=""/>
	<input type="hidden" name="img_w1" id="img_w1" value=""/>
	<input type="hidden" name="img_h1" id="img_h1" value=""/>
	<input type="hidden" name="img_t1" id="img_t1" value=""/>
	<input type="hidden" name="img_l1" id="img_l1" value=""/>
	<input type="hidden" name="upimg_w1" id="upimg_w1" value=""/>
	<input type="hidden" name="upimg_h1" id="upimg_h1" value=""/>
	<input type="hidden" name="upimg_t1" id="upimg_t1" value=""/>
	<input type="hidden" name="upimg_l1" id="upimg_l1" value=""/>
	<input type="hidden" name="upimg_w2" id="upimg_w2" value=""/>
	<input type="hidden" name="upimg_h2" id="upimg_h2" value=""/>
	<input type="hidden" name="upimg_t2" id="upimg_t2" value=""/>
	<input type="hidden" name="upimg_l2" id="upimg_l2" value=""/>
	<?php 
		
		if(isset($_REQUEST['id'])) {
			//$_SESSION['raw_img_id'] = $_REQUEST['id'];
			
			if(isset($_REQUEST['strip']))
			{
				$load_img=mysql_fetch_array(mysql_query("SELECT * FROM  drt_product_shirt  WHERE prod_id='".$_REQUEST['id']."'"));
			 	//$temp_image = "uploads/".$load_img['meme_name'];
				?>
				<input type="hidden" name="strip" value="<?php echo $_REQUEST['id']; ?>" />
				<?php
			}
			else
			{
				$load_img=mysql_fetch_array(mysql_query("SELECT * FROM  pfo_products  WHERE prod_id='".$_REQUEST['id']."'"));
			 	$temp_fimage = "itemImages/images/".$load_img['front_image'];
				$temp_bimage = "itemImages/images/".$load_img['back_image'];
				 //echo $temp_bimage ;
			}
			 //echo $temp_image; exit;
		}

?>
		
	<input type="hidden" name="imgid" id="imgid" value="<?php echo $temp_fimage; ?>" />
	<input type="hidden" name="prod_id" id="prod_id" value="<?php echo $_REQUEST['id']; ?>"/>


<input type="hidden" name="notextdiv" id="notextdiv" value="2" />
<!-- Content Left -->
<div class="content-left">
<div class="border-top">
<img src="images/add-txt.jpg" class="imgtop" />
<img src="images/arrow-icon2.jpg" class="imgtop" align="right" /></div>
<div class="border-middle">
<div class="border-middle-area">


<div  >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Font</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<select name="select" id="select" onchange="font_change(this.value);" style="width:126px; border:1px solid #a7a6aa;">
<option value="Arial">Arial</option>
	  <option value="AbductionII">AbductionII</option>
	  <option value="Times New Roman">Times New Roman</option>
	  <option value="Courier">Courier</option>
	  <!--<option value="Pipe">Pipe</option>-->
	  <option value="Verdana">Verdana</option>
	  <option value="Geneva">Geneva</option>
	  <option value="Blockography">Blockography</option>
	  <option value="Memes">Memes</option>
	  <option value="Memetica">Memetica</option>
</select></div>

<div class="clr"></div>
</div>



<!--<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Size</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<select style="width:126px; border:1px solid #a7a6aa;">
<option>35</option>
</select></div>
<div class="clr"></div>
</div>-->



<!--<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Alignment</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<img src="images/alignment.jpg" />
</div>
<div class="clr"></div>
</div>-->

<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Color </div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<!--<img src="images/color.jpg" />-->
<span id="clr" style="float:left; width:130px;">
			<div style="background-color:black; float:left; color:#000000;" onclick="change_color(this);">#000000</div>
			<div style="background-color:#FF0000; color:#FF0000;" onclick="change_color(this);">#FF0000</div>
			<div style="background-color:#008000; color:#008000;" onclick="change_color(this);">#008000</div>
			<div style="background-color:#FFA500; color:#FFA500;" onclick="change_color(this);">#FFA500</div>
			<div style="background-color:#FFFF00; color:#FFFF00;" onclick="change_color(this);">#FFFF00</div>
			<div style="background-color:#ff00ff; color:#ff00ff;" onclick="change_color(this);">#ff00ff</div>
			<div style="background-color:#9ecc3b; color:#9ecc3b;" onclick="change_color(this);">#9ecc3b</div>
			<div style="background-color:#FFBBDD; color:#FFBBDD;" onclick="change_color(this);">#FFBBDD</div>
			<div style="background-color:#fff460; color:#fff460;" onclick="change_color(this);">#fff460</div>
			<div style="background-color:#F43059; color:#F43059;" onclick="change_color(this);">#F43059</div>
			<div style="background-color:#0099FF; color:#0099FF;" onclick="change_color(this);">#0099FF</div>
			<div style="background-color:#8000FF; color:#8000FF;" onclick="change_color(this);">#8000FF</div>
			<div style="background-color:#FF8000; color:#FF8000;" onclick="change_color(this);">#FF8000</div>
			<div style="background-color:#99FE00; color:#99FE00;" onclick="change_color(this);">#99FE00</div>
			<div style="background-color:#1200FF; color:#1200FF;" onclick="change_color(this);">#1200FF</div>
			<div style="background-color:#FFFFFF; color:#FFFFFF;" onclick="change_color(this);">#FFFFFF</div>
			<div class="fileinputs">
				<input class="color" value="000000" src="images/color_picker.png" onchange="change_color_input(this.value);" title="Click here for more colors">
				<div class="fakefile">
				<img height="23" width="23" src="images/color_picker.png" />
				</div>
			</div>
		</span>
</div>


<div style="clear:both;">

<input name="public_wrap" id="public_wrap" type="checkbox" value="1" onclick="wraptxt();" checked="checked" />
		<label for="public_wrap" style="vertical-align:middle;">Automatically wrap long lines</label>
</div>
<table width="100%" id="captioner" cellpadding="0" cellspacing="0">

</table>

<input name="" type="button" style="background:url(images/add-button.jpg) no-repeat; width:67px; height:25px; border:0px;" onclick="addRow('Enter your text','#000000','36','null','140','50','Arial','350','90');" />


<div class="clr"></div>
</div>

</div>
</div>
<div class="border-bottom">
</div>
<div class="clr"></div>
<!-- 2nd -->
<div class="border-top" style="margin-top:5px;">
<img src="images/add-image.jpg" class="imgtop" />
<img src="images/arrow-icon2.jpg" class="imgtop" align="right" /></div>
<div class="border-middle">
<div class="border-middle-area">

<center>
<a href="JavaScript:void(0);" onClick="window.open('lab_imgup.php?view=front','mywindow','width=550,height=250,scrollbars=no,resizable=no,top=100,left=200')" title="Login with facebook"><input name="" type="button" style="background:url(images/add-button.jpg) no-repeat; width:67px; height:25px; border:0px;"/> </a>
<input name="" type="button" onclick="addimage_uploaded('Delete');" style="background:url(images/remove.jpg) no-repeat; width:73px; height:24px; border:0px;" /></center>


<div style="margin-top:15px;" >
<input type="hidden" name="upimg1_name" id="upimg1_name" />	
<div style="float:left; padding-left:20px;" id="loadupimg">
&nbsp;
</div>
<div class="clr"></div>
</div>


<!--<div style="margin-top:15px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Save as</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<input name="" type="checkbox" value="180" /> Image <input name="" type="checkbox" value="90" /> PDF
</div>
<div class="clr"></div>
</div>-->

<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">&nbsp; </div>
<div style="float:left; padding-left:5px;padding-top:3px;">&nbsp;</div>
<div style="float:left; padding-left:5px;">
<input name="meme_save" type="image"  src="images/save-img-bt.jpg" onclick="return save_image();" />
</div>
<div class="clr"></div>
</div>

</div>
</div>

<div class="clr"></div>




<div class="border-bottom">
</div>
<div class="clr"></div>

</div>
<!-----------------text------------------------>

                            <!-----------------text------------------------>
                            
<!-- Content Center-->
<div class="content-center">

<div align="center">
<div id="containment-wrapper" style="float:left; width:650px; margin-top:50px;">
<img id="wraper_img" src="<?php if($temp_fimage != '') { echo $temp_fimage; } else { ?>images/no_photo.jpg<?php }   ?>" width="650" height="450" />
</div>
</div>

</div>
<!-- Content right -->

<div class="clr"></div>
</div>
<script language="javascript">
	//onload_builder();
	//jquery_get_width_height()
	addRow("Company name","#000000","46",'null','35','15','Arial','350','90');
	addRow("Company message","#000000","26",'null','35','75','Arial','350','90');
	addRow("Address Line1","#000000","26",'null','35','160','Arial','350','90');
	addRow("Address Line2","#000000","26",'null','35','200','Arial','350','90');
	addRow("Phone / other","#000000","26",'null','35','240','Arial','350','90');
	addRow("Email / other","#000000","26",'null','35','280','Arial','350','90');
	addRow("Web / other","#000000","26",'null','35','320','Arial','350','90');
	
	addRow("Full name","#000000","36",'null','430','60','Arial','200','90');
	addRow("Job title","#000000","20",'null','430','105','Arial','200','90');
</script>








<div class="content" id="backview" style="visibility:hidden; height:0px; overflow:hidden;">

<textarea name="div_hidden_content2" id="div_hidden_content2" style="display:none"    ></textarea>
    <input type="hidden" name="textnew_color2" id="textnew_color2" value="#000000" />
	<?php 
		
		if(isset($_REQUEST['id'])) {
			//$_SESSION['raw_img_id'] = $_REQUEST['id'];
			
			if(isset($_REQUEST['strip']))
			{
				$load_img=mysql_fetch_array(mysql_query("SELECT * FROM  drt_product_shirt  WHERE prod_id='".$_REQUEST['id']."'"));
			 	//$temp_image = "uploads/".$load_img['meme_name'];
				?>
				<input type="hidden" name="strip" value="<?php echo $_REQUEST['id']; ?>" />
				<?php
			}
			else
			{
				//$load_img=mysql_fetch_array(mysql_query("SELECT * FROM  drt_product_shirt  WHERE prod_id='".$_REQUEST['id']."'"));
			 	//$temp_fimage = "uploads/".$load_img['tshirt_frontimg'];
				//$temp_bimage = "uploads/".$load_img['tshirt_backimg'];
			}
			 //echo $temp_image; exit;
		}

?>
		
	<input type="hidden" name="imgid2" id="imgid2" value="<?php echo $temp_bimage; ?>" />


<input type="hidden" name="notextdiv2" id="notextdiv2" value="2" />
<!-- Content Left -->
<div class="content-left">
<div class="border-top">
<img src="images/add-txt.jpg" class="imgtop" />
<img src="images/arrow-icon2.jpg" class="imgtop" align="right" /></div>
<div class="border-middle">
<div class="border-middle-area">


<div>
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Font</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<select name="select2" id="select2" onchange="font_change(this.value);" style="width:126px; border:1px solid #a7a6aa;">
<option value="Arial">Arial</option>
	  <option value="AbductionII">AbductionII</option>
	  <option value="Times New Roman">Times New Roman</option>
	  <option value="Courier">Courier</option>
	  <!--<option value="Pipe">Pipe</option>-->
	  <option value="Verdana">Verdana</option>
	  <option value="Geneva">Geneva</option>
	  <option value="Blockography">Blockography</option>
	  <option value="Memes">Memes</option>
	  <option value="Memetica">Memetica</option>
</select></div>

<div class="clr"></div>
</div>

<!--<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Size</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<select style="width:126px; border:1px solid #a7a6aa;">
<option>35</option>
</select></div>
<div class="clr"></div>
</div>-->



<!--<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Alignment</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<img src="images/alignment.jpg" />
</div>
<div class="clr"></div>
</div>-->

<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Color </div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<!--<img src="images/color.jpg" />-->
<span id="clr" style="float:left; width:130px;">
			<div style="background-color:black; float:left; color:#000000;" onclick="change_color(this);">#000000</div>
			<div style="background-color:#FF0000; color:#FF0000;" onclick="change_color2(this);">#FF0000</div>
			<div style="background-color:#008000; color:#008000;" onclick="change_color2(this);">#008000</div>
			<div style="background-color:#FFA500; color:#FFA500;" onclick="change_color2(this);">#FFA500</div>
			<div style="background-color:#FFFF00; color:#FFFF00;" onclick="change_color2(this);">#FFFF00</div>
			<div style="background-color:#ff00ff; color:#ff00ff;" onclick="change_color2(this);">#ff00ff</div>
			<div style="background-color:#9ecc3b; color:#9ecc3b;" onclick="change_color2(this);">#9ecc3b</div>
			<div style="background-color:#FFBBDD; color:#FFBBDD;" onclick="change_color2(this);">#FFBBDD</div>
			<div style="background-color:#fff460; color:#fff460;" onclick="change_color2(this);">#fff460</div>
			<div style="background-color:#F43059; color:#F43059;" onclick="change_color2(this);">#F43059</div>
			<div style="background-color:#0099FF; color:#0099FF;" onclick="change_color2(this);">#0099FF</div>
			<div style="background-color:#8000FF; color:#8000FF;" onclick="change_color2(this);">#8000FF</div>
			<div style="background-color:#FF8000; color:#FF8000;" onclick="change_color2(this);">#FF8000</div>
			<div style="background-color:#99FE00; color:#99FE00;" onclick="change_color2(this);">#99FE00</div>
			<div style="background-color:#1200FF; color:#1200FF;" onclick="change_color2(this);">#1200FF</div>
			<div style="background-color:#FFFFFF; color:#FFFFFF;" onclick="change_color2(this);">#FFFFFF</div>
			<div class="fileinputs">
				<input class="color" value="000000" src="images/color_picker.png" onchange="change_color_input2(this.value);" title="Click here for more colors">
				<div class="fakefile">
				<img height="23" width="23" src="images/color_picker.png" />
				</div>
			</div>
		</span>
</div>

<div style="clear:both;">
<input name="public_wrap2" id="public_wrap2" type="checkbox" value="1" onclick="wraptxt2();" checked="checked" />
		<label for="public_wrap" style="vertical-align:middle;">Automatically wrap long lines</label>
</div>

<table width="100%" id="captioner2" cellpadding="0" cellspacing="0">

</table>

<input name="" type="button" style="background:url(images/add-button.jpg) no-repeat; width:67px; height:25px; border:0px;" onclick="addRow2('Enter your text','#000000','36','null','140','50','Arial','350','90');" />


<div class="clr"></div>
</div>

</div>
</div>
<div class="border-bottom">
</div>
<div class="clr"></div>
<!-- 2nd -->
<div class="border-top" style="margin-top:5px;">
<img src="images/add-image.jpg" class="imgtop" />
<img src="images/arrow-icon2.jpg" class="imgtop" align="right" /></div>
<div class="border-middle">
<div class="border-middle-area">

<center>
<a href="JavaScript:void(0);" onClick="window.open('lab_imgup.php?view=back','mywindow','width=550,height=250,scrollbars=no,resizable=no,top=100,left=200')" title="Login with facebook"><input name="" type="button" style="background:url(images/add-button.jpg) no-repeat; width:67px; height:25px; border:0px;"/> </a>
<input name="" type="button" style="background:url(images/remove.jpg) no-repeat; width:73px; height:24px; border:0px;" /></center>


<div style="margin-top:15px;" >
<input type="hidden" name="upimg2_name" id="upimg2_name" />	
<div style="float:left; padding-left:15px;" id="loadupimg1">


&nbsp;
</div>
<div class="clr"></div>
</div>


<!--<div style="margin-top:15px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">Save as</div>
<div style="float:left; padding-left:5px;padding-top:3px;">:</div>
<div style="float:left; padding-left:5px;">
<input name="" type="checkbox" value="180" /> Image <input name="" type="checkbox" value="90" /> PDF
</div>
<div class="clr"></div>
</div>-->

<div style="margin-top:7px;" >
<div style="float:left; text-align:right; padding-top:3px; width:63px;">&nbsp; </div>
<div style="float:left; padding-left:5px;padding-top:3px;">&nbsp;</div>
<div style="float:left; padding-left:5px;">
<input name="meme_save" type="image"  src="images/save-img-bt.jpg" onclick="return save_image();" />
</div>
<div class="clr"></div>
</div>

</div>
</div>
<div class="border-bottom">
</div>
<div class="clr"></div>

<!--3rd--->
<!-- 2nd -->



<div class="clr"></div>

</div>
<!-- Content Center-->
<div class="content-center">

<div align="center">
<div id="containment-wrapper2" style="float:left; width:650px; margin-top:50px;">
<img src="<?php if($temp_bimage != '') { echo $temp_bimage; } else { ?>images/no_photo.jpg<?php }?>" id="wraper_img2" width="650" height="450" />
</div>
</div>

</div>
<!-- Content right -->
<div class="content-right">



		
<script language="javascript">
	//onload_builder();
	//jquery_get_width_height()
	addRow2("Company name","#000000","66",'null','120','50','Arial','500','90');
	addRow2("Website","#000000","24",'null','260','200','Arial','350','90');
</script> 

<div class="clr"></div>
</div>
<div class="clr"></div>
</div>







</div>

</div>









<?php } ?>




</form>




<!-- content end -->    
    
    
    
    </td>
</tr>
  
    
	
  </table>
  
  

 <script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<table width="95%" border="0" style="margin-left:25px;" cellspacing="0" cellpadding="0" class="footerbg">
                  <tr>
                    <td width="1%" align="left" valign="top"><img src="images/footer_leftcurve.jpg" width="8" height="38" /></td>
                    <td width="61%" align="left" valign="middle">
                    
                     <div class="footer">
            <ul>
             <li><a href="javascript:void(0)" onclick="MM_openBrWindow('terms.php','terms','status=no,scrollbars=yes,resizable=no,width=700,height=600')"> Terms of Use</a></li> 
             <li>|</li>
			<li><a href="categories.php">   Categories</a></li> 
             <li>|</li>             
             <li><a href="portfolio.php">My Portfolio</a></li> 
             <li>|</li>
             <li><a href="product.php">  Products</a></li> 
             <li>|</li>
             <li><a href="services.php">Services</a></li> 
            <li>|</li>
             <li><a href="images.php"> My Image</a></li> 
            <li>|</li>
             <li><a href="bookmark.php"> My Bookmarks</a></li> 
            <li>|</li>
             <li><a href="orderhistory.php">Order History</a></li> 
            </ul>
            </div>                    </td>
                    <td width="3%" nowrap="nowrap" class="footer_comlink"></td>
                    
                    <td width="32%" align="right" valign="middle" class="footer_comlink" style="text-decoration:none;">copyright info. &copy; <?php echo date("Y");?>. <a href="http://www.2daybiz.com" target="_blank" class="footer_comlink">2daybiz.com</a></td>
                    <td width="3%" align="right" valign="top"><img src="images/footer_rightcurve.jpg" width="9" height="38" /></td>
                  </tr>
                </table>

</body>
</html>