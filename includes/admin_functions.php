<?php

function createThumbnail($srcFile, $destFile, $width , $quality = 75)
{
	$thumbnail = '';
	//echo $descFile;
	if (file_exists($srcFile)  && isset($destFile))
	{
		$size        = getimagesize($srcFile);
		
		$w           = number_format($width, 0, ',', '');
		$h           = number_format(($size[1] / $size[0]) * $width, 0, ',', '');
		if($h>200) $h=200;
		
		$thumbnail =  copyImage($srcFile, $destFile, $w, $h, $quality);
	}
	
	// return the thumbnail file name on sucess or blank on fail
	return basename($thumbnail);
}


function copyImage($srcFile, $destFile, $w, $h, $quality = 75)
{
    $tmpSrc     = pathinfo(strtolower($srcFile));
    $tmpDest    = pathinfo(strtolower($destFile));
    $size       = getimagesize($srcFile);

    if ($tmpDest['extension'] == "gif" || $tmpDest['extension'] == "jpg")
    {
       $destFile  = substr_replace($destFile, 'jpg', -3);
	
	  // $w           = number_format($width, 0, ',', '');
		//$h           = number_format(($size[1] / $size[0]) * $width, 0, ',', '');
	
	   
       $dest      =imagecreatetruecolor($w, $h);
       imageantialias($dest, TRUE);
    } elseif ($tmpDest['extension'] == "png") {
       $dest = imagecreatetruecolor($w, $h);
	 
       imageantialias($dest, TRUE);
    } 
	else {
      return false;
    }
	//echo $size[2];
    switch($size[2])
    {
       case 1:       //GIF
           $src = imagecreatefromgif($srcFile);
           break;
       case 2:       //JPEG
           $src = imagecreatefromjpeg($srcFile);
           break;
       case 3:       //PNG
           $src = imagecreatefrompng($srcFile);
           break;
       default:
           return false;
           break;
    }

    imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);
	
    switch($size[2])
    {
       case 1:
	   		imagegif($dest,$destFile);
       case 2:
           imagejpeg($dest,$destFile, $quality);
           break;
       case 3:
           imagepng($dest,$destFile);
		  
    }
    return $destFile;

}

class EasyThumbnailPhoto
{
    var $debug= true;
    var $errflag= false;
    var $ext;
    var $origem;
    var $destino;
    var $errormsg;
    function EasyThumbnail($imagem, $destino, $aprox)
    {
        // se o arquivo no existir, erro
        if (!file_exists($imagem))
        {
            $this->errormsg= "Arquivo no encontrado.";
            return false;
        }
        else
        {
            $this->origem= $imagem;
            $this->destino= $destino;
        }
        // obtm a extenso do arquivo
        if (!$this->ext= $this->getExtension($imagem))
        {
            $this->errormsg= "Tipo de arquivo invlido.";
            return false;
        }
        // gera a imagem do thumbnail com o caminho e nome do arquivo especificados
        $this->createThumbImg($aprox);
    }
    
    // retorna as dimenses (x,y) do thumbnail a ser gerado
    function getThumbXY($x, $y, $aprox)
    {
         if ($x >= $y)
        {
            if ($x > $aprox)
            {
                $x1= (int)($x * ($aprox/$x));
                $y1= (int)($y * ($aprox/$x));
            }
            else
            {
                $x1= $x;
                $y1= $y;
            }
        }
        else
        {
            if ($y > $aprox)
            {
                $x1= (int)($x * ($aprox/$y));
                $y1= (int)($y * ($aprox/$y));
            }
            // Caso a imagem seja menor do que
            // deve ser aproximado, mantm tamanho original para o thumb.
            else
            {
                $x1= $x;
                $y1= $y;
            }
        }
        $vet= array("x" => $x1, "y" => $y1);
        return $vet;
    }
    
    // cria a imagem do thumbnail
    function createThumbImg($aprox)
    {
        // imagem de origem
        $img_origem= $this->createImg();

        // obtm as dimenses da imagem original
        $origem_x= ImagesX($img_origem);
        $origem_y= ImagesY($img_origem);
        
        // obtm as dimenses do thumbnail
        $vetor= $this->getThumbXY($origem_x, $origem_y, $aprox);
        $x= $vetor['x'];
        $y= $vetor['y'];
        
        // cria a imagem do thumbnail
        $img_final = ImageCreateTrueColor($x, $y);
        ImageCopyResampled($img_final, $img_origem, 0, 0, 0, 0, $x+1, $y+1, $origem_x, $origem_y);
        // o arquivo  gravado
        if ($this->ext == "png")
            imagepng($img_final, $this->destino);
		elseif ($this->ext == "gif")
            imagegif($img_final, $this->destino);
        elseif ($this->ext == "jpg")
            imagejpeg($img_final, $this->destino);
			elseif ($this->ext == "bmp")
            imagewbmp($img_final, $this->destino);
    }
    
    // cria uma imagem a partir do arquivo de origem
    function createImg()
    {
        // imagem de origem
        if ($this->ext == "png")
            $img_origem= imagecreatefrompng($this->origem);
		elseif ($this->ext == "gif")
            $img_origem= imagecreatefromgif($this->origem);
        elseif ($this->ext == "jpg" || $this->ext == "jpeg")
            $img_origem= imagecreatefromjpeg($this->origem);
			elseif ($this->ext == "jpg" || $this->ext == "jpeg")
            $img_origem= imagecreatefromwbmp($this->origem);
        return $img_origem;
    }
    
    // obtm a extenso do arquivo
    function getExtension($imagem)
    {
        // isso  para obter o mime-type da imagem.
        $mime= getimagesize($imagem);

        if ($mime[2] == 1)
        {
           $ext= "gif";
           return $ext;
        }
		elseif ($mime[2] == 2)
        {
           $ext= "jpg";
           return $ext;
        }
        elseif ($mime[2] == 3)
        {
           $ext= "png";
           return $ext;
        }
		elseif ($mime[2] == 4)
        {
           $ext= "bmp";
           return $ext;
        }
        else
           return false;
    }
    
    // mensagem de erro
    function getErrorMsg()
    {
        return $this->errormsg;
    }
    
    function isError()
    {
        return $this->errflag;
    }
}

class AdminFunctions extends EasyThumbnailPhoto
{
function Admin_Login($table)
{
if(isset($_REQUEST['dlogin']))
{
$uname = base64_decode($_REQUEST['username']);
$pass = base64_decode($_REQUEST['password']);
} else{
$uname = mysql_real_escape_string($_REQUEST['admin_uname']);
$pass = mysql_real_escape_string($_REQUEST['admin_pass']);
}
$query = "SELECT * FROM `$table` WHERE `username` = '$uname' AND `password` = '$pass' ";

if(get_num_rows($query)>0)
{
$data = get_rsltset($query);

$_SESSION['admin_userid'] = $data[0]['id'];
header("Location:home.php");
}
else
{
header("Location:index.php?flag=errorlogin");
}
}

function SelectAll($table)
{
$query = "SELECT * FROM `$table` ";
return get_rsltset($query);
}

function SelectAllPage($table,$str)
{
$query = "SELECT * FROM `$table` ";
if($table=='pfo_newsletter'){
   $query .= " ORDER BY ne_id DESC";
}
elseif($table=='pfo_coupon'){
   $query .= " ORDER BY cp_id DESC";
}
$strGet="$str";

$rs=get_rsltset(getPagingQuery($query,10));
$paging['paging']=getPagingLink($query,10,$strGet);
if(!empty($paging))
		{
			array_push($rs,$paging);
			return $rs;
		}
		else
		{
			return $rs;
		}
}

function SelectAllPageWhere($table,$str,$where)
{
$query = "SELECT * FROM `$table` $where";

$strGet="$str";
$rs=get_rsltset(getPagingQuery($query,10));
$paging['paging']=getPagingLink($query,10,$strGet);
if(!empty($paging))
		{
			array_push($rs,$paging);
			return $rs;
		}
		else
		{
			return $rs;
		}
}

function SelectAllPageWhereOrder($table,$str,$where)
{
$query = "SELECT * FROM `$table` $where";

$strGet="$str";
$rs=get_rsltset(getPagingQuery($query,10));
$paging['paging']=getPagingLink($query,10,$strGet);
if(!empty($paging))
		{
			array_push($rs,$paging);
			return $rs;
		}
		else
		{
			return $rs;
		}
}

function SelectSubcat($table,$str,$where)
{
$query = "SELECT * FROM `$table` $where";

$strGet="$str";
$rs=get_rsltset(getPagingQuery($query,25));
$paging['paging']=getPagingLink($query,25,$strGet);
if(!empty($paging))
		{
			array_push($rs,$paging);
			return $rs;
		}
		else
		{
			return $rs;
		}
}

function SelectCatStyle($table,$str)
{
$query = "SELECT * FROM `$table` ";

$strGet="$str";
$rs=get_rsltset(getPagingQuery($query,25));
$paging['paging']=getPagingLink($query,25,$strGet);
if(!empty($paging))
		{
			array_push($rs,$paging);
			return $rs;
		}
		else
		{
			return $rs;
		}
}


function CheckSession()
{
if(!isset($_SESSION['admin_userid']))
{
header("Location:index.php");
}
}

function UpdateAll($table)
{
$field = $_REQUEST['pagename'];
$message = $_REQUEST['custompage'];

$query = "UPDATE `$table` SET `$field` = '$message' ";
if(query($query))
{
header("Location:custom.php?task=$field");
}
}
function SelectWhere($table,$where)
{
$query = "SELECT * FROM `$table` $where " ; 
return get_rsltset($query);
}

function DeleteAll($table,$where)
{
echo $query = "DELETE FROM `$table` $where";
if(query($query))
{
return success;
//header("Location:custom.php?task=help&delsuccess");
}
}
function DeleteMRequest($table,$where)
{
echo $query = "DELETE FROM `$table` $where";
if(query($query))
{
return success;
header("Location:package.php?view=list");
}
}

function Update($table,$field,$where)
{
$query = "UPDATE `$table` SET $field $where";
if(query($query))
{
return success;
}
}
function AddHelp($table)
{
$query = "INSERT INTO `$table`(`question`,`answer`) VALUES ('".$_REQUEST['help_question']."','".$_REQUEST['help_answer']."')";

if(query($query))
{
$qid = mysql_insert_id();
header("Location:help.php?task=view&qid=$qid");
}
}
function AddFaq($table)
{
$query = "INSERT INTO `$table`(`question`,`answer`,`status`) VALUES ('".$_REQUEST['faq_question']."','".$_REQUEST['faq_answer']."','1')";

if(query($query))
{
$qid = mysql_insert_id();
header("Location:faq.php?task=view&qid=$qid");
}
}
function UpdateSettings($table)
{
$title = $_REQUEST['title'];
$protitle = $_REQUEST['pro_title'];
$site_name = $_REQUEST['site_name'];
$admin_mail = $_REQUEST['admin_mail'];
$site_logo = $_FILES['site_logo']['name']; 
$paypal_id = $_REQUEST['paypal_id'];

if($site_logo!='')
{
$up_logo = $_FILES['site_logo']['name'];
 move_uploaded_file($_FILES["site_logo"]["tmp_name"], "../images/" . $_FILES["site_logo"]["name"]) or die('Uploaded Error');
}
else
{
$up_logo = $_REQUEST['site_logo1'];
}


$query = "UPDATE `$table` SET `title` = '$title',`project_title` = '$protitle',`site_name` = '$site_name',`admin_mail` = '$admin_mail', `site_logo` = '$up_logo', `paypal_id` = '$paypal_id'";

if(query($query))
{
header("Location:settings.php?updated");
}
}
function UpdatePackage($table)
{
$silver_discount=$_REQUEST['silver_discount'];
$gold_discount=$_REQUEST['gold_discount'];
$platinum_discount=$_REQUEST['platinum_discount'];
$silver_duration=$_REQUEST['silver_duration_year']*12 + $_REQUEST['silver_duration_month'];
$gold_duration=$_REQUEST['gold_duration_year']*12 + $_REQUEST['gold_duration_month'];
$platinum_duration=$_REQUEST['platinum_duration_year']*12 + $_REQUEST['platinum_duration_month'];
$query = "UPDATE `$table` SET `silver_discount`='$silver_discount',`silver_duration`='$silver_duration',`gold_discount`='$gold_discount',`gold_duration`='$gold_duration',`platinum_discount`='$platinum_discount',`platinum_duration`='$platinum_duration'";

if(query($query))
{
header("Location:package.php?updated");
}
}

function UpdatePass($table)
{
$opass = $_REQUEST['oldpass'];
$npass = $_REQUEST['newpass'];

$query = "SELECT * FROM `$table` WHERE `password` = '$opass' ";
if(get_num_rows($query)>0)
{
$upqry = "UPDATE `$table` SET `password` = '$npass' ";
if(query($upqry))
{
header("Location:changepass.php?ch=suc");
}
}
else
{
header("Location:changepass.php?ch=invalid");
}

}


function DeleteCat($table)
{
$cat_id = $_REQUEST['cat_id'];
$query = "DELETE FROM `$table` WHERE `cat_id` = '$cat_id' ";
if(query($query))
{
header("Location:categories.php?del=suc");
}
}
function DeleteSubCat($table)
{
$cat_id = $_REQUEST['cat_id'];
$subcat_id = $_REQUEST['subcat_id'];
$query = "DELETE FROM `$table` WHERE `subcat_id` = '$subcat_id' ";
if(query($query))
{
header("Location:subcat.php?cat_id=$cat_id&del=suc");
}
}

function DeleteState($table)
{
$cid = $_REQUEST['cid'];
$sid = $_REQUEST['sid'];
$query = "DELETE FROM `$table` WHERE `sid` = '$sid' ";
if(query($query))
{
header("Location:state.php?cid=$cid&del=suc");
}
}

function DeleteCountry($table)
{
$cnt_id = $_REQUEST['cat_id'];
$query = "DELETE FROM `$table` WHERE `countryid` = '$cnt_id' ";
if(query($query))
{
header("Location:country.php?del=suc");
}
}
function DeleteStyle($table)
{
$sty_id = $_REQUEST['sty_id'];
$query = "DELETE FROM `$table` WHERE `sty_id` = '$sty_id' ";
if(query($query))
{
header("Location:styles.php?del=suc");
}
}
function AddProduct($table)
{
include("resize.php");
$title = $_REQUEST['prod_title'];
$cat_id = $_REQUEST['selcat'];
$subcat_id = $_REQUEST['selsubcat'];
$sty_id = $_REQUEST['selstyle'];
$position = $_REQUEST['position'];
/*$normal_ship = $_REQUEST['normal_ship'];
$standart_ship = $_REQUEST['standard_ship'];*/

$fimg = $_FILES['fimage']['name'];
$bimg = $_FILES['bimage']['name'];

if(($fimg!='') and ($bimg!=''))
{
$tim = time();
$fphoto = $tim.$fimg;
//$bphoto = time().$bimg;

$fsize = round((filesize($_FILES['fimage']['tmp_name']))/(1024));
$bsize = round((filesize($_FILES['bimage']['tmp_name']))/(1024));

$fpix = getimagesize($_FILES['fimage']['tmp_name']);
$bpix = getimagesize($_FILES['bimage']['tmp_name']);


$fextension = explode(".",$fimg);
$bextension = explode(".",$bimg);

$fext = $fextension[1];
$bext = $bextension[1];

$bphoto = $tim.$fextension[0].'b.'.$fextension[1];

if(($fext=='jpg' || $fext=='gif' || $fext=='png'))
{
if(($bext=='jpg' || $bext=='gif' || $bext=='png'))
{
	/*if(($fsize>8 and $fsize<2048) and ($bsize>8))
	{*/
		
$ftmpname=$_FILES['fimage']['tmp_name'];
$btmpname=$_FILES['bimage']['tmp_name'];

		$fpath="../itemImages/original/".$fphoto;
		$ftimages = "../itemImages/images/".$fphoto;
		$ftimages_small = "../itemImages/thumbs/".$fphoto;
		move_uploaded_file($ftmpname,$fpath);
		
		$thumb= new EasyThumbnailPhoto;
		$thumb1= new EasyThumbnailPhoto;
			
		resize_pic($fpath,650,450,$ftimages);
		resize_pic($fpath,130,88,$ftimages_small);
			
		/*$thumb -> EasyThumbnail($fpath, $ftimages, 185);
		$thumb1 -> EasyThumbnail($fpath, $ftimages_small, 185);*/
		
		$bpath="../itemImages/original/".$bphoto;
		$btimages = "../itemImages/images/".$bphoto;
		$btimages_small = "../itemImages/thumbs/".$bphoto;
		move_uploaded_file($btmpname,$bpath);
		
		$thumb= new EasyThumbnailPhoto;
		$thumb1= new EasyThumbnailPhoto;
		
		resize_pic($bpath,650,450,$btimages);
		resize_pic($bpath,130,88,$btimages_small);
			
		/*$thumb -> EasyThumbnail($bpath, $btimages, 185);
		$thumb1 -> EasyThumbnail($bpath, $btimages_small, 185);*/
		
		$query = "INSERT INTO `$table` (cat_id,subcat_id,style,title,position,front_image,back_image) VALUES ('$cat_id','$subcat_id','$sty_id','$title','$position','$fphoto','$bphoto')";
if(query($query))
{
header("Location:products.php?add=suc");
}
/*	}
	else
	{
		header("Location:products.php?task=add&add=inb");
	}*/
	
}
else
{
header("Location:products.php?task=add&add=inb");
}
}
else
{
header("Location:products.php?task=add&add=inf");
}
}
else
{
header("Location:products.php?task=add&add=noimg");
}

}

function DelProduct($table)
{
$prod_id = $_REQUEST['prod_id'];
$query = "DELETE FROM `$table` WHERE `prod_id` = '$prod_id' ";
if(query($query))
{
header("Location:products.php?del=suc");
}
}

function UpdateProduct($table)
{
$prod_id = $_REQUEST['prod_id'];
$title = $_REQUEST['prod_title'];
$cat_id = $_REQUEST['selcat'];
$subcat_id = $_REQUEST['selsubcat'];
$sty_id = $_REQUEST['selstyle'];
$position = $_REQUEST['position'];
/*$normal_ship = $_REQUEST['normal_ship'];
$standart_ship = $_REQUEST['standard_ship'];*/

$fimg = $_FILES['fimage']['name'];
$bimg = $_FILES['bimage']['name'];

if($fimg!="")
{
$fphoto = time().$fimg;

$fextension = explode(".",$fimg);

$fext = $fextension[1];

if(($fext=='jpg' || $fext=='gif' || $fext=='png'))
{
$ftmpname=$_FILES['fimage']['tmp_name'];


		$fpath="../itemImages/images/".$fphoto;
		$ftimages = "../itemImages/thumbs/".$fphoto;
		$ftimages_small = "../itemImages/thumbs/".$fphoto;
		move_uploaded_file($ftmpname,$fpath);
		
		$thumb= new EasyThumbnailPhoto;
		$thumb1= new EasyThumbnailPhoto;
			
		$thumb -> EasyThumbnail($fpath, $ftimages, 185);
		$thumb1 -> EasyThumbnail($fpath, $ftimages_small, 185);
}
else
{
		header("Location:products.php?task=edit&add=inf");
}	
		
}
else
{
$fphoto = $_REQUEST['fhimage'];
}

if($bimg!="")
{
$bphoto = time().$bimg;

$bextension = explode(".",$bimg);

$bext = $bextension[1];

if(($bext=='jpg' || $bext=='gif' || $bext=='png'))
{
$btmpname=$_FILES['bimage']['tmp_name'];

		$bpath="../itemImages/images/".$bphoto;
		$btimages = "../itemImages/thumbs/".$bphoto;
		$btimages_small = "../itemImages/thumbs/".$bphoto;
		move_uploaded_file($btmpname,$bpath);
		
		$thumb= new EasyThumbnailPhoto;
		$thumb1= new EasyThumbnailPhoto;
			
		$thumb -> EasyThumbnail($bpath, $btimages, 185);
		$thumb1 -> EasyThumbnail($bpath, $btimages_small, 185);
		}
		else
		{
		header("Location:products.php?task=edit&add=inb");
		}
}
else
{
$bphoto = $_REQUEST['bhimage'];
}


$query = "UPDATE `$table` SET `cat_id` = '$cat_id',`subcat_id` = '$subcat_id',`style` = '$sty_id',`title` = '$title',`position` = '$position',`front_image` = '$fphoto',`back_image` = '$bphoto' WHERE `prod_id` = '$prod_id' ";
	
		
if(query($query))
{
header("Location:products.php?edit=suc");
}


}

function Newsletter($table,$protitle,$sitename,$adminmail)
{
$mess = trim($_REQUEST['newsletter']);
$mailto = $_REQUEST['mailto'];

if($mailto=="all")
{
$selmem = "SELECT `email` FROM `pfo_register` ";
$data = get_rsltset($selmem);
	for($n=0; $n<count($data); $n++)
	{
		$mail .= $data[$n]['email'].",";
	}
	
$selmem2 = "SELECT `email` FROM `pfo_newsletter` ";
$data2 = get_rsltset($selmem2);
	for($n2=0; $n2<count($data2); $n2++)
	{
		$mail .= $data2[$n2]['email'].",";
	}
	
}
else if($mailto=="non")
{
	$selmem = "SELECT * FROM `pfo_newsletter` ";
	$data = get_rsltset($selmem);
	for($n=0; $n<count($data); $n++)
	{
		$mail .= $data[$n]['email'].",";
	}
}
else
{
$selmem = "SELECT * FROM `pfo_membership` WHERE `title` = '$mailto' ";
$data = get_rsltset($selmem);
	for($n=0; $n<count($data); $n++)
	{
		$uid = $data[$n]['user_id'];
		$selqry = "SELECT `email` FROM `pfo_register` WHERE `reg_id` = '$uid' ";
		$data2 = get_rsltset($selqry);
		$mail .= $data2[0]['email'].",";
	}
}



if($_FILES['file_attach']['name']!="")
{
$name = time().$_FILES['file_attach']['name'];
$file = $_FILES['file_attach']['tmp_name'];

if(move_uploaded_file($file, 'newsletter/'.$name))
{
$attach = "Download Attachment : <a href='".$sitename."/admin/download.php?f=$name'>" . $name. "</a>";
}

}

$exmail = explode(",",$mail);
for($e=0; $e<count($exmail); $e++)
{
//ini_set('max_execution_time', 30);
//set_time_limit(30);
//sleep(2);
$email = $exmail[$e];
$curyear = date("Y");
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$adminmail.'' . "\r\n";
$sub="News Letter - '".$protitle."' ";
$message="
    <html>
	<head><title></title></head>
	<body>
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='$sitename/images/logo.jpg' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>

		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'> $mess </td>
		</tr>
		<tr bgcolor='#FFFFFF' height='25'>
			<td style='padding-left:20px; font-size:12px; line-height:20px;' > $attach </td>
		</tr>
		<tr bgcolor='#FFFFFF' height='25'>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				$protitle Team<br>
				<font><a href='$sitename/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>$sitename</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright $curyear $sitename </td>
		</tr>
	</table>
	</body>
	</html>
	 "; 
	
//mail($email,$sub,$message,$headers);

}
mysql_query("INSERT INTO `pfo_newsletter` (`email`,`message`,`attachment`) VALUES ('$mailto','$mess','$name')");
header("Location: newsletterview.php?sent=suc");
}

//****************************************sankar*********************
function getmailId($table)
{
$uid=$_REQUEST['uid'];
$query="SELECT * FROM $table WHERE reg_id='$uid'";
return get_rsltset($query);
}

function userSearch($table,$str)
{
$name=trim($_REQUEST['ser_name']);
$fromday=$_REQUEST['day'];
$frommonth=$_REQUEST['month'];
$fromyear=$_REQUEST['year'];
$today=$_REQUEST['today'];
$tomonth=$_REQUEST['tomonth'];
$toyear=$_REQUEST['toyear'];
$fromdate=$fromday."-".$frommonth."-".$fromyear;
$fromdate=strtotime($fromdate);
$todate=$today."-".$tomonth."-".$toyear;
$todate=strtotime($todate);

//echo $fromdate=mktime(0,0,0,intval($frommonth),intval($fromday),intval($fromyear));
//echo "----";
//$todate=mktime(0,0,0,intval($tomonth),intval($today),intval($toyear));
//echo mktime(0,0,0,intval('10'),intval('29'),intval('2009'));
//echo  "----";
//echo  time();

if($name!='' || $fromdate!='' || $todate!='')
{
$wher="where";
}
$where = "";
if($name!='')
{
$where.="`firstname` LIKE '%$name%' OR `lastname` LIKE '%$name%'";
}
if($fromdate!='' && $todate!='')
{
$and="";
if($name!='')
{
$and="AND";
}
$where.="$and `reg_date` BETWEEN '$fromdate' AND '$todate'";
}

$query = "SELECT * FROM `$table` $wher $where ";
$strGet="ser_name=$name&day=$fromday&month=$frommonth&year=$fromyear&today=$today&tomonth=$tomonth&toyear=$toyear&search=Search";
$rs=get_rsltset(getPagingQuery($query,5));
$paging['paging']=getPagingLink($query,5,$strGet);
if(!empty($paging))
		{
			array_push($rs,$paging);
			return $rs;
		}
		else
		{
			return $rs;
		}
}

function sendMail($protitle,$sitename,$adminmail,$firstname)
{
$curyear = date("Y").".";
$email = $_POST['mail'];
$mess = $_POST['message'];
$subject = $_POST['subject'];
$attach = "";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$adminmail.'' . "\r\n";
$sub="Admin Mail - '".$subject."' ";
$message="
    <html>
	<head><title></title></head>
	<body>
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".$sitename."/images/logo.jpg' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>

		<tr bgcolor='#FFFFFF' height='35'>
		  <td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Hi ".$firstname." </td>
  </tr>
          
		 <tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'> Subject :".$subject." </td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'> ".$mess." </td>
		</tr>
		<tr bgcolor='#FFFFFF' height='25'>
			<td style='padding-left:20px; font-size:12px; line-height:20px;' >  </td>
		</tr>
		<tr bgcolor='#FFFFFF' height='25'>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright  ".$curyear.$sitename ."</td>
		</tr>
	</table>
	</body>
	</html>
";
if(mail($email,$sub,$message,$headers)){
return sent;
?>
<script>window.opener.location='users.php?err=sent';window.close();</script>
<?php
}else
{
return notsent;
}
}
}

function SelCountryId($table,$con_id)
{
$query = "SELECT `country` FROM `$table` WHERE `countryid` = '$con_id' ";
$data = get_rsltset($query);
echo $data[0]['country'];
}

function SelCatId($table,$cat_id)
{
$query = "SELECT `category` FROM `$table` WHERE `cat_id` = '$cat_id' ";
$data = get_rsltset($query);
echo $data[0]['category'];
}

function SelSubCatId($table,$subcat_id)
{
$query = "SELECT `subcategory` FROM `$table` WHERE `subcat_id` = '$subcat_id' ";
$data = get_rsltset($query);
echo $data[0]['subcategory'];
}

function SelStyleId($table,$sty_id)
{
$query = "SELECT `style` FROM `$table` WHERE `sty_id` = '$sty_id' ";
$data = get_rsltset($query);
echo $data[0]['style'];
}

function DeleteUser($rtab,$btab,$itab)
{
$uid = $_REQUEST['uid'];

$selqry = "SELECT * FROM `$rtab` WHERE `reg_id` = '$uid' ";
$data = get_rsltset($selqry);

$img = $data[0]['photo'];
if($img!="")
{
@unlink("../profile_photos/".$img);
@unlink("../profile_thumb/".$img);
}




query("DELETE FROM `$rtab` WHERE `reg_id` = '$uid' ");
query("DELETE FROM `$btab` WHERE `user_id` = '$uid' ");

$qry = "SELECT * FROM `$itab` WHERE `user_id` = '$uid' ";

$imgdata = get_rsltset($qry);
for($i=0; $i<count($imgdata); $i++)
{
$image = $imgdata[$i]['img_name'];
@unlink("../myimages_photos/".$image);
@unlink("../myimages_thumb/".$image);
}

query("DELETE FROM `$itab` WHERE `user_id` = '$uid' ");

header("Location:users.php?del=suc");
}

function DeleteOrder($stab)
{
$sid = $_REQUEST['sid'];

$selqry = "SELECT * FROM `$stab` WHERE `id` = '$sid' ";
$data = get_rsltset($selqry);

$fimg = $data[0]['imgpathf'];
$bimg = $data[0]['imgpathb'];
if($img!="")
{
@unlink("../".$fimg);
@unlink("../".$bimg);
}

query("DELETE FROM `$stab` WHERE `id` = '$sid' ");

header("Location:../ordertrack.php?del=suc");
}

function DeleteCoupon($table)
{
$cp_id = $_REQUEST['cid'];
$qry = "DELETE FROM `$table` WHERE `cp_id` = '$cp_id' ";

if(isset($_REQUEST['page'])){
   $url="coupons.php?del=suc&page=".$_REQUEST['page'];
}
else{
   $url="coupons.php?del=suc";
}

	if(query($qry))
	{
	 header("Location:$url");
	}

}

function DeleteUsedCoupon($table)
{
$cp_id = $_REQUEST['cid'];
$qry = "DELETE FROM `$table` WHERE `cp_id` = '$cp_id' ";

if(isset($_REQUEST['page'])){
   $url="coupons.php?del=suc&page=".$_REQUEST['page'];
}
else{
   $url="coupons.php?del=suc";
}

	if(query($qry))
	{
	 header("Location:$url");
	}
}

function SelectPrice($table)
{
$query = "SELECT * FROM `$table` ";
return get_rsltset($query);
}

function UpdatePrice($table)
{
$cnt = count($_REQUEST['txt_qty']);
$qty = $_REQUEST['txt_qty'];
$matt = $_REQUEST['txt_matt'];
$glorry = $_REQUEST['txt_glorry'];

for($i=0; $i<$cnt; $i++)
{
$qry = "UPDATE `$table` SET `matt` = '$matt[$i]', `glossy` = '$glorry[$i]' WHERE `qty` = '$qty[$i]' ";
query($qry);
}
header("Location:price.php?update=suc");
}

function UpdateOtherPrice($table)
{
$logo = $_REQUEST['logo'];
$slow = $_REQUEST['slow'];
$stand = $_REQUEST['standard'];
$disc = $_REQUEST['ship_disc'];

$upqry = "UPDATE `$table` SET `logo` = '$logo', `slow` = '$slow', `standard` = '$stand', `ship_discount` = '$disc' ";

if(query($upqry))
{
header("Location:otherprice.php?update=suc");
}
}
function ConvertPDF()
{
/////////////////////////////////////////////////////////////
// create handle for new PDF document
$pdf = pdf_new();

// open a file
pdf_open_file($pdf, "philosophy.pdf");

// start a new page (A4)
pdf_begin_page($pdf, 595, 842);

// get and use a font object
$arial = pdf_findfont($pdf, "Arial", "host", 1); pdf_setfont($pdf, $arial, 10);

// print text
pdf_show_xy($pdf, "There are more things in heaven and earth, Horatio,", 50, 750); pdf_show_xy($pdf, "than are dreamt of in your philosophy", 50, 730);

// end page
pdf_end_page($pdf);

// close and save file
pdf_close($pdf); 
/////////////////////////////////////////////////////////////
// create handle for new PDF document

/*$pdf = pdf_new();
// open a file
pdf_open_file($pdf, "c:\\wamp\\www\\philosophy.pdf");
// start a new page (A4)
pdf_begin_page($pdf, 595, 842);
// get and use a font object
$arial = pdf_findfont($pdf, "Courier", "host", 0);
 pdf_setfont($pdf, $arial, 10);
// print text
pdf_show_xy($pdf, "There are more things in heaven and earth, Horatio,",50, 750);
pdf_show_xy($pdf, "than are dreamt of in your philosophy", 50,730);
// end page
pdf_end_page($pdf);
// close and save file
pdf_close($pdf);


$dir="http://localhost/prabhu/ntest/";
$_REQUEST["file"]="home.php";
if (isset($_REQUEST["file"])) {
   echo $file=$dir.$_REQUEST["file"];
    header("Content-type: application/force-download");
    header("Content-Transfer-Encoding: Binary");
    header("Content-length: ".filesize($file));
    header("Content-disposition: attachment; filename=\"".basename($file)."\"");
    readfile("$file");
} else {
    echo "No file selected";
}*/
}

?>
