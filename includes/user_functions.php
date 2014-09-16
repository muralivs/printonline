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
		if($h>300) $h=300;
		
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

function getPagingQueryp($sql, $itemPerPage = 10)
{
	if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		$page = (int)$_GET['page'];
	} else {
		$page = 1;
	}
	
	// start fetching from this row number
	$offset = ($page - 1) * $itemPerPage;
	
	return $sql . " LIMIT $offset, $itemPerPage";
	}
	
function getPagingLinkp($sql, $itemPerPage = 10,$strGet)
{

	$result        = mysql_query($sql) or die(mysql_error());
	$pagingLink    = '';
	$totalResults  = mysql_numrows($result);
	$totalPages    = ceil($totalResults / $itemPerPage);
			// how many link pages to show
	$numLinks      = 10;
	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
			$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		//print "asddf".$self;
				if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
			$pageNumber = (int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = " <a href=\"$self?page=$page&$strGet/\" class=\"heading2\"><img src='images/prev_but.jpg' border='0'></a> ";
			} else {
				$prev = " <a href=\"$self?$strGet\" class=\"heading2\"><img src='images/prev_but.jpg' border='0'></a> ";
			}	
				
			//$first = " <a href=\"$self?$strGet\" class=\"heading2\">[First]</a> ";
		} else {
			$prev  = ''; // we're on page one, don't show 'previous' link
			$first = ''; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = " <a href=\"$self?page=$page&$strGet\" class=\"heading2\"><img src='images/next_bt.jpg' border='0'></a> ";
			//$last = " <a href=\"$self?page=$totalPages&$strGet\" class=\"heading2\">[Last]</a> ";
		} else {
			$next = ''; // we're on the last page, don't show 'next' link
			$last = ''; // nor 'last page' link
		}

		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
			    
				$pagingLink[] = " <span class='activepagination'>$page</span> ";   // no need to create a link to current page
			} else {
				if ($page == 1) {
				  
					$pagingLink[] = " <a href=\"$self?$strGet\" class=\"pagination\">$page</a> ";
				} else {	
				 
					$pagingLink[] = " <a href=\"$self?page=$page&$strGet\" class=\"pagination\">$page</a> ";
				}	
			}
	
		}
		
		$pagingLink = implode('  ', $pagingLink);
		
		// return the page navigation link
		$pagingLink = $first . $prev . $pagingLink . $next . $last;
		
	}
	
	return $pagingLink;
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
        // se o arquivo não existir, erro
        if (!file_exists($imagem))
        {
            $this->errormsg= "Arquivo não encontrado.";
            return false;
        }
        else
        {
            $this->origem= $imagem;
            $this->destino= $destino;
        }
        // obtém a extensão do arquivo
        if (!$this->ext= $this->getExtension($imagem))
        {
            $this->errormsg= "Tipo de arquivo inválido.";
            return false;
        }
        // gera a imagem do thumbnail com o caminho e nome do arquivo especificados
        $this->createThumbImg($aprox);
    }
    
    // retorna as dimensões (x,y) do thumbnail a ser gerado
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
            // deve ser aproximado, mantém tamanho original para o thumb.
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

        // obtém as dimensões da imagem original
        $origem_x= ImagesX($img_origem);
        $origem_y= ImagesY($img_origem);
        
        // obtém as dimensões do thumbnail
        $vetor= $this->getThumbXY($origem_x, $origem_y, $aprox);
        $x= $vetor['x'];
        $y= $vetor['y'];
        
        // cria a imagem do thumbnail
        $img_final = ImageCreateTrueColor($x, $y);
        ImageCopyResampled($img_final, $img_origem, 0, 0, 0, 0, $x+1, $y+1, $origem_x, $origem_y);
        // o arquivo é gravado
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
    
    // obtém a extensão do arquivo
    function getExtension($imagem)
    {
        // isso é para obter o mime-type da imagem.
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

class Profile extends EasyThumbnailPhoto
{
function Registration($table,$memtable,$protitle,$sitename,$sitelogo,$adminmail)
{
if(isset($_REQUEST['submit_reg']))
{
	
  include("securimage2/securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);
 
 if($valid) {
	  
$email = $_POST['reg_email'];
$check_email = "SELECT * FROM `$table` WHERE `email` = `$email` ";

if(get_num_rows($check_email)==0)
{
$firstname = $_REQUEST['reg_firstname'];
$lastname = $_REQUEST['reg_lastname'];
$address1 = $_REQUEST['reg_address1'];
$address2 = $_REQUEST['reg_address2'];
$phone = $_REQUEST['reg_phone'];
$fax = $_REQUEST['reg_fax'];
$mobile = $_REQUEST['reg_mobile'];
$country = $_REQUEST['reg_country'];
$state = $_REQUEST['reg_state'];
$city = $_REQUEST['reg_city'];
$zip = $_REQUEST['reg_zip'];
$password = $_REQUEST['reg_pass'];
$time = time();

$query = "INSERT INTO `$table` (firstname,lastname,address1,address2,phone,fax,mobile,country,state,city,zipcode,email,password,reg_date) VALUES('$firstname','$lastname','$address1','$address2','$phone','$fax','$mobile','$country','$state','$city','$zip','$email','$password','$time') ";

if(query($query))
{
$rid = mysql_insert_id();
$refer = md5($email);
//$siting_id = "http://www.sjayan.com/products/buniesscardnew/";

$siting_id=SITE_NAME;

query("INSERT INTO `$memtable` (user_id,membertype,title,joining_date) VALUES('$rid','1','Free Membership',now()) ");

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$adminmail.'' . "\r\n";
$sub="Registration confirmation - '".$protitle."' ";
$message="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi $fname</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Congratulation... You have registered with ".$protitle." </td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your Username : $email<br>

				password : $password</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Click The Following Link To Activate Your Account</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:20px;'><a href='".$siting_id."register_success.php?uid=$rid&refer=$refer' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$siting_id."/index.php</a></td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$siting_id."index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$siting_id."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright ".date('Y').". ".$sitename ."</td>
		</tr>
	</table>";
	
@mail($email,$sub,$message,$headers);
header("Location:register_success.php");
}
}
else
{
return "Email Address Already Exist";
}

} // end of captcha yes
else
{
	$_SESSION['reg_firstname'] = $_REQUEST['reg_firstname'];
	$_SESSION['reg_lastname'] = $_REQUEST['reg_lastname'];
	$_SESSION['reg_address1'] = $_REQUEST['reg_address1'];
	$_SESSION['reg_address2'] = $_REQUEST['reg_address2'];
	$_SESSION['reg_phone'] = $_REQUEST['reg_phone'];
	$_SESSION['reg_fax'] = $_REQUEST['reg_fax'];
	$_SESSION['reg_mobile'] = $_REQUEST['reg_mobile'];
	$_SESSION['reg_country'] = $_REQUEST['reg_country'];
	$_SESSION['reg_state'] = $_REQUEST['reg_state'];
	$_SESSION['reg_city'] = $_REQUEST['reg_city'];
	$_SESSION['reg_zip'] = $_REQUEST['reg_zip'];
	
	$_SESSION['reg_email'] = $_REQUEST['reg_email'];

	header("location:registration.php?emsg=Invalid Captcha Code");exit;
}

}
}

function Activation($table,$id,$refer)
{
$query = "SELECT * FROM `$table` WHERE `reg_id` = '$id' ";
$data =  get_rsltset($query);
$email = $data[0]['email'];
$astatus = $data[0]['active_status'];
if($refer == md5($email))
{
if($astatus == 0) {
$act_query = "UPDATE `$table` SET `active_status` = '1' WHERE `reg_id` = '$id' ";
query($act_query);
return activated;
}
else
{
return already_activated;
}
}
else
{
return notactivated;
}
}

function Login($table,$adminmail,$sitename,$sitelogo,$protitle)
{
if(isset($_REQUEST['dlogin']))
{
$email = base64_decode($_REQUEST['email']);
$password = base64_decode($_REQUEST['password']);
}
else
{
$email = $_REQUEST['login_email'];
$password = $_REQUEST['login_pass'];
}

//$select_username=mysql_query("SELECT * FROM `jos_register` WHERE email='$email'");
$count_username=get_num_rows("SELECT * FROM `$table` WHERE `email`='$email'");

//$select_password=mysql_query("SELECT * FROM `jos_register` WHERE email='$email' AND password='$password'");
$count_password=get_num_rows("SELECT * FROM `$table` WHERE `email`='$email' AND `password`='$password'");

//$select_block=mysql_query("SELECT * FROM `jos_register` WHERE email='$email' AND password='$password' AND status=1");
$count_block=get_num_rows("SELECT * FROM `$table` WHERE `email`='$email' AND `password`='$password' AND `reg_status`=1");

//$select_active=mysql_query("SELECT * FROM `jos_register` WHERE email='$email' AND password='$password' AND active_status=1");
$count_active=get_num_rows("SELECT * FROM `$table` WHERE `email`='$email' AND `password`='$password' AND `active_status`=1");

//$select_paid=mysql_query("SELECT * FROM `jos_register` WHERE email='$email' AND password='$password' AND payment_status=1");
//$count_paid=get_num_rows($select_paid);


if($count_username==0 and $count_password==0)
{
header("Location:login.php?flag=errorlogin");
}
else if($count_username==0)
{
header("Location:login.php?flag=errorlogin");
}
else if($count_password==0)
{
header("Location:login.php?flag=errorlogin");
}
else if($count_block==0)
{
header("Location:login.php?flag=errorblock");
}
else if($count_active==0)
{
header("Location:login.php?flag=erroractive");
}
else
	{
				$fetch_login = get_rsltset("SELECT * FROM `$table` WHERE `email`='$email' AND `password`='$password' AND `reg_status`=1 AND `active_status`=1");
					
					 $_SESSION['pfo_userid']=$fetch_login[0]['reg_id'];
					 $_SESSION['pfo_email']=$fetch_login[0]['email'];
					 $_SESSION['pfo_username'] =  ucfirst($fetch_login[0]['firstname']);
					
					 
					$time = time();
					mysql_query("UPDATE `$table` SET `last_signin` = '$time' WHERE `reg_id` ='".$_SESSION['pfo_userid']."'");
					
				
					if($_REQUEST['rem'])
						{
						setcookie("pfoname",$email,time()+60*60*24*30);
						setcookie("pfopassword",$password,time()+60*60*24*30);
						}
						else if($_REQUEST['rem']==NULL)
						{
						setcookie ("pfoname",$email, time() - 3600);
						setcookie ("pfopassword",$password, time() - 3600);
						}
////////////////ALERT MAIL///////////////////////////////////////////////////////////////////////////						
						$expire_date=mysql_fetch_array(mysql_query("SELECT * FROM `pfo_membership` WHERE `user_id`='".$_SESSION['pfo_userid']."'"));
						$exp_date=$expire_date['expiry_date'];
						$today1=date("Y-m-d");
						$ts5 = strtotime(" $exp_date - 5 days");
						$fivedayleft = date('Y-m-d', $ts5);
						$ts2 = strtotime(" $exp_date - 2 days");
						$twodayleft = date('Y-m-d', $ts2);
						$ts1 = strtotime(" $exp_date + 1 days");
						$onedayex = date('Y-m-d', $ts1);
						if($fivedayleft==$today1)
						{
					/////////////////Alert before 5 days////////////////////////////////
				$fname = $fetch_login[0]['firstname'];
				$email = $fetch_login[0]['email'];
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$adminmail.'' . "\r\n";
				
				$sub="Alert Mail - '".$protitle."' ";
				$message="
					<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
						<tr bgcolor='#FFFFFF' height='25'>
							<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr bgcolor='#FFFFFF' height='30'>
							<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi $fname</b></td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your membership validity is going to over with in 5 day. </td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Click The Following Link To Login</td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:20px;'><a href='".$sitename."/login.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."/index.php</a></td>
						</tr>
						<tr bgcolor='#FFFFFF'>
							<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
								".$protitle." Team<br>
								<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr height='40'>
							<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
				color: #000000;'>&copy; Copyright 2009. ".$sitename ."</td>
						</tr>
					</table>";
				
				@mail($email,$sub,$message,$headers);

	
					////////////////////////////////////////////////////////////////////	
						}
						else if($twodayleft==$today1)
						{
					/////////////////Alert before 2 days////////////////////////////////
				$fname = $fetch_login[0]['firstname'];
				$email = $fetch_login[0]['email'];
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$adminmail.'' . "\r\n";
				
				$sub="Alert Mail - '".$protitle."' ";
				$message="
					<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
						<tr bgcolor='#FFFFFF' height='25'>
							<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr bgcolor='#FFFFFF' height='30'>
							<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi $fname</b></td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your membership validity is going to over with in 2 day. </td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Click The Following Link To Login</td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:20px;'><a href='".$sitename."/login.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."/index.php</a></td>
						</tr>
						<tr bgcolor='#FFFFFF'>
							<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
								".$protitle." Team<br>
								<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr height='40'>
							<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
				color: #000000;'>&copy; Copyright 2009. ".$sitename ."</td>
						</tr>
					</table>";
				
				@mail($email,$sub,$message,$headers);

	
					////////////////////////////////////////////////////////////////////	
						}
						else if($onedayex==$today1)
						{
					/////////////////Alert before 5 days////////////////////////////////
				$fname = $fetch_login[0]['firstname'];
				$email = $fetch_login[0]['email'];
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$adminmail.'' . "\r\n";
				
				$sub="Alert Mail - '".$protitle."' ";
				$message="
					<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
						<tr bgcolor='#FFFFFF' height='25'>
							<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr bgcolor='#FFFFFF' height='30'>
							<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi $fname</b></td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your membership validity is expired </td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Click The Following Link To Login</td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
							<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:20px;'><a href='".$sitename."/login.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."/index.php</a></td>
						</tr>
						<tr bgcolor='#FFFFFF'>
							<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
								".$protitle." Team<br>
								<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr height='40'>
							<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
				color: #000000;'>&copy; Copyright 2009. ".$sitename ."</td>
						</tr>
					</table>";
				
				@mail($email,$sub,$message,$headers);

	
					////////////////////////////////////////////////////////////////////	
						}
						
					mysql_query("UPDATE `pfo_membership` SET `title`='Free Membership' WHERE `user_id`='".$_SESSION['pfo_userid']."' and `expiry_date`< NOW()"); 
					
////////////////ALERT MAIL///////////////////////////////////////////////////////////////////////////						
					header("Location:home.php");	
						
						
						
		}
		}
		
function  HomeAccount($regtable,$memtable)
{
$id = $_SESSION['pfo_userid'];
$query = "SELECT * FROM `$regtable` LEFT JOIN `$memtable` ON $regtable.reg_id = $memtable.user_id WHERE $regtable.reg_id = '$id' ";
return get_rsltset($query);
}
function UpdateProfile($table)
{
$uid = $_SESSION['pfo_userid'];

$fname = $_REQUEST['reg_firstname'];
$lname = $_REQUEST['reg_lastname'];
$address1 = $_REQUEST['reg_address1'];
$address2 = $_REQUEST['reg_address2'];
$country = $_REQUEST['reg_country'];
$state = $_REQUEST['reg_state'];
$city = $_REQUEST['reg_city'];
$zip = $_REQUEST['reg_zip'];
$phone = $_REQUEST['reg_phone'];
$fax = $_REQUEST['reg_fax'];
$mobile = $_REQUEST['reg_mobile'];

$query = "UPDATE `$table` SET `firstname` = '$fname', `lastname` = '$lname', `address1` = '$address1', `address2` = '$address2', `phone` = '$phone', `fax` = '$fax', `mobile` = '$mobile', `country` = '$country', `state` = '$state', `city` = '$city', `zipcode` = '$zip' WHERE `reg_id` = '$uid' ";

if(query($query))
{
header("Location:myaccount.php?task=view&suc=profile");
}}

function UpdatePhoto($table)
{
$time = time();
$imagename = $time.$_FILES['file']['name'];
		$imagetype=$_FILES['file']['type'];
		$imagesize=$_FILES['file']['size'];
		$img_type=getimagesize($_FILES['file']['tmp_name']);
		
		$image=$_FILES['file']['name'];
		$ext=explode(".",$image);
		$extension=$ext[1];
	
		if(($extension=='jpg' || $extension=='gif' || $extension=='png'))
		{
		$tmpname=$_FILES['file']['tmp_name'];
		$fpath="profile_photos/".$imagename;
		$ftimages = "profile_thumb/".$imagename;
		$ftimages_small = "profile_thumb/".$imagename;
		move_uploaded_file($tmpname,$fpath);
		
		$thumb= new EasyThumbnailPhoto;
		$thumb1= new EasyThumbnailPhoto;
			
		$thumb -> EasyThumbnail($fpath, $ftimages, 140);
		$thumb1 -> EasyThumbnail($fpath, $ftimages_small, 130);
		
		$selqry = "SELECT `photo` FROM `$table` WHERE `reg_id` = '".$_SESSION['pfo_userid']."' ";
		$data = get_rsltset($selqry);
		$uphoto = $data[0]['photo'];
		@unlink("profile_photos/".$uphoto);
		@unlink("profile_thumb/".$uphoto);
		
		$query = "UPDATE `$table` SET `photo` = '$imagename' WHERE `reg_id` = '".$_SESSION['pfo_userid']."' ";
		
		if(query($query))
		{
		header("Location:myaccount.php?task=view&suc=photo");
		}
        }
		else
		{
		header("Location:myaccount.php?task=editphoto&err=error");
		}  
}

function UpdatePass($table,$protitle,$sitename,$sitelogo,$adminmail)
{
$oldpass=$_POST['old_pass'];
$newpass=$_POST['new_pass'];

$query="SELECT * FROM `$table` WHERE `password` = '$oldpass' AND `reg_id` = '".$_SESSION['pfo_userid']."' ";
//$datas = get_rsltset($query);

if(get_num_rows($query)>0)
{
$uppass="UPDATE `$table` SET `password` = '$newpass' WHERE `reg_id`='".$_SESSION['pfo_userid']."' ";

if(query($uppass))
{
$datas = get_rsltset($query);

$fname = $datas[0]['firstname'];
$email = $datas[0]['email'];


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$adminmail.'' . "\r\n";

$sub="Change Password - '".$protitle."' ";
$message="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi $fname</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>You have Changed Your Password </td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your Username : $email<br>

				password : $newpass</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Click The Following Link To Login</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:20px;'><a href='".$sitename."/login.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."/index.php</a></td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright 2009. ".$sitename ."</td>
		</tr>
	</table>";

@mail($email,$sub,$message,$headers);

header("Location:myaccount.php?task=view&suc=pass");
}
else
{
return error;
}
}
else
{
return error;
}

}

function UpdateEmail($table,$protitle,$sitename,$adminmail)
{
$cemail = $_REQUEST['new_email'];
$selqry = "SELECT `email` FROM `$table` WHERE `email` = '$cemail'";
if(get_num_rows($selqry)==0)
{
$query = "UPDATE `$table` SET `email` = '$cemail' WHERE `reg_id` = '".$_SESSION['pfo_userid']."'";
if(query($query))
{
header("Location:myaccount.php?task=view&suc=email");
}
}
else
{
header("Location:myaccount.php?task=editemail&error");
}
}
//////////////////////////MemberShip Request//////////////
function MembershipRequest($table)
{
$type=$_REQUEST['membership_request'];
$uid = $_SESSION['pfo_userid'];
$count=mysql_num_rows(mysql_query("SELECT * FROM $table where `user_id`='$uid'"));

if($count==0) 
$query="INSERT INTO $table (`user_id`,`request_type`,`status`) VALUES ('$uid','$type','Waiting Status')"; 
else
echo "<script>alert('Your old request is still processing...');window.location.href='home.php';</script>";
if(query($query))
{
echo "<script>alert('Your request has been sent'); window.location.href='home.php';</script>";
//header("Location:home.php");
}
}
/////////////////////////////////////////////////////////
function ProductList($table)
{
$cnt = 10;
if(isset($_REQUEST['prodsearch_x']))
{
$position = $_REQUEST['position'];
$cat_id = $_REQUEST['selcat'];
$sty_id = $_REQUEST['selstyle'];


if($position!="" || $cat_id!="" || $sty_id!="")
{
$where = "WHERE";
}
$wher = "";

if($position!="")
{
$wher.= " `position` = '$position' ";
}
if($cat_id!="")
{
	if($position!="") { $and = "AND"; } else { $and = ""; }
$wher.= "$and `cat_id` = '$cat_id' ";
}
if($sty_id!="")
{
	if($position!="" || $cat_id!="") { $and = "AND"; } else { $and = ""; }
$wher.= "$and `style` = '$sty_id' ";
}
$strGet="cnt=$cnt";
$query = "SELECT * FROM `$table` $where $wher ";
}
else
{
$strGet="cnt=$cnt";
$query = "SELECT * FROM `$table` WHERE `position` = 'H'  ";
}

$rs=get_rsltset(getPagingQueryp($query,$cnt));
$paging['paging']=getPagingLinkp($query,$cnt,$strGet);
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

function ProductListSearch($table)
{

$cnt = 10;
$key = $_REQUEST['search_key'];
$query = "SELECT * FROM `$table` WHERE `title` LIKE  '$key%'  ";


$rs=get_rsltset(getPagingQueryp($query,$cnt));
$paging['paging']=getPagingLinkp($query,$cnt,$strGet);
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

function ProductSubList($table)
{
$cnt = 10;
if(isset($_REQUEST['subcat']))
{
$position = $_REQUEST['position'];
$cat_id = $_REQUEST['selcat'];
$sty_id = $_REQUEST['selstyle'];
$subcat_id = $_REQUEST['subcat'];


if($position!="" || $cat_id!="" || $sty_id!="" || $subcat_id!="")
{
$where = "WHERE";
}
$wher = "";

if($position!="")
{
$wher.= " `position` = '$position' ";
}
if($cat_id!="")
{
	if($position!="") { $and = "AND"; } else { $and = ""; }
$wher.= "$and `cat_id` = '$cat_id' ";
}
if($sty_id!="")
{
	if($position!="" || $cat_id!="") { $and = "AND"; } else { $and = ""; }
$wher.= "$and `style` = '$sty_id' ";
}
if($subcat_id!="")
{
	if($position!="" || $cat_id!="" || $sty_id!="") { $and = "AND"; } else { $and = ""; }
$wher.= "$and `subcat_id` = '$subcat_id' ";
}
$strGet="cnt=$cnt";
$query = "SELECT * FROM `$table` $where $wher ";
}
else
{
$strGet="cnt=$cnt";
$query = "SELECT * FROM `$table` WHERE `position` = 'H'  ";
}

$rs=get_rsltset(getPagingQueryp($query,$cnt));
$paging['paging']=getPagingLinkp($query,$cnt,$strGet);
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


function MyBookmark($protab,$booktable,$uid)
{
$cnt = 10;
$strGet="";
$query = "SELECT * FROM `$protab` WHERE `prod_id` IN (SELECT `prod_id` FROM `$booktable` WHERE `user_id` = '$uid' ) ";

$rs=get_rsltset(getPagingQueryp($query,$cnt));
$paging['paging']=getPagingLinkp($query,$cnt,$strGet);
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

function UploadImage($table,$uid)
{
$time = time();
$imagename = $time.$_FILES['up_image']['name'];
		$imagetype=$_FILES['up_image']['type'];
		$imagesize=$_FILES['up_image']['size'];
		$img_type=getimagesize($_FILES['up_image']['tmp_name']);
		//print_r($img_type);exit;
		$dimonsion=$img_type[0]."*".$img_type[1];
		$image=$_FILES['up_image']['name'];
		$ext=explode(".",$image);
		$extension=$ext[1];
	
		if(($extension=='jpg' || $extension=='gif' || $extension=='png'))
		{
		$tmpname=$_FILES['up_image']['tmp_name'];
		$fpath="myimages_photos/".$imagename;
		$ftimages = "myimages_thumb/".$imagename;
		$ftimages_small = "myimages_thumb/".$imagename;
		move_uploaded_file($tmpname,$fpath);
		
		$thumb= new EasyThumbnailPhoto;
		$thumb1= new EasyThumbnailPhoto;
			
		$thumb -> EasyThumbnail($fpath, $ftimages, 140);
		$thumb1 -> EasyThumbnail($fpath, $ftimages_small, 130);
		
				
		$query = "INSERT INTO `$table` (user_id,img_name,img_type,img_dimen,img_date) VALUES ('$uid','$imagename','image','$dimonsion','$time') ";
		
		if(query($query))
		{
		header("Location:images.php?photo=suc");
		}
        }
		else
		{
		header("Location:images.php?photo=error");
		} 
}

function UploadDesign($table,$uid)
{
$time = time();
$imgtype = $_REQUEST['cardtype'];
$fimg = $_FILES['up_fimage']['name'];
$bimg = $_FILES['up_bimage']['name'];

if($fimg !="")
{

		$fimgname = $time.$fimg;
		$image=$_FILES['up_fimage']['name'];
		$ext=explode(".",$image);
		$extension=$ext[1];
		$bimgname = $time.$bimg;
		if(($extension=='jpg' || $extension=='gif' || $extension=='png' || $extension=='jpeg'))
		{
		$tmpname=$_FILES['up_fimage']['tmp_name'];
		
		
		$fpath="itemImages/images/".$fimgname;
		$ftimages = "itemImages/images/".$fimgname;
		$ftimages_small = "itemImages/thumbs/".$fimgname;
		move_uploaded_file($tmpname,$fpath);
		
		$thumb= new EasyThumbnailPhoto;
		$thumb1= new EasyThumbnailPhoto;
		if($imgtype=='H')
		{	
		$thumb -> EasyThumbnail($fpath, $ftimages, 140);
		$thumb1 -> EasyThumbnail($fpath, $ftimages_small, 130);
		}
		else
		{
		$thumb -> EasyThumbnail($fpath, $ftimages, 90);
		$thumb1 -> EasyThumbnail($fpath, $ftimages_small, 90);
		}
		
		$tmpnameb=$_FILES['up_bimage']['tmp_name'];
		$fpathb="itemImages/images/".$bimgname;
		$ftimagesb = "itemImages/images/".$bimgname;
		$ftimages_smallb = "itemImages/thumbs/".$bimgname;
		move_uploaded_file($tmpnameb,$fpathb);
		
		if($imgtype=='H')
		{	
		$thumb -> EasyThumbnail($fpathb, $ftimagesb, 140);
		$thumb1 -> EasyThumbnail($fpathb, $ftimages_smallb, 130);
		}
		else
		{
		$thumb -> EasyThumbnail($fpathb, $ftimagesb, 90);
		$thumb1 -> EasyThumbnail($fpathb, $ftimages_smallb, 90);
		}
		
		$selqry = "SELECT * FROM `$table` WHERE `user_id` = '$uid' ";
		if(get_num_rows($selqry)==0)
		{
		$query = "INSERT INTO `$table` (user_id,frontimage,backimage) VALUES ('$uid','$ftimages_small','$ftimages_smallb') ";
		}
		else
		{
		$query = "UPDATE `$table` SET `frontimage` = '$ftimages_small', `backimage` = '$ftimages_smallb' WHERE `user_id` = '$uid' ";
		}
		
}
		
		
		
		if(query($query))
		{
		header("Location:uploaddesign.php?photo=suc");
		}
        }
		else
		{
		header("Location:uploaddesign.php?photo=error");
		} 
}

function ShippingAddress($table,$table2,$uid)
{
$fname = $_REQUEST['sfname'];
$lname = $_REQUEST['slname'];
$email = $_REQUEST['semail'];
$add1 = $_REQUEST['sadd1'];
$add2 = $_REQUEST['sadd2'];
$country = $_REQUEST['scountry'];
$state = $_REQUEST['sstate'];
$city = $_REQUEST['scity'];
$zip = $_REQUEST['szip'];
$phone = $_REQUEST['sphone'];
$fax = $_REQUEST['sfax'];
$mobile = $_REQUEST['smobile'];
$ship_method = $_REQUEST['ship_method'];

$shqry = mysql_query("UPDATE `$table2` SET `ship_method` = '$ship_method' WHERE `user_id` = '$uid' ");

$selqry = "SELECT `firstname` FROM `$table` WHERE `user_id` = '$uid' ";
if(get_num_rows($selqry)==0)
{
$query = "INSERT INTO `$table` (user_id,firstname,lastname,email,address1,address2,country,state,city,zip,phone,fax,mobile) VALUES ('$uid','$fname','$lname','$email','$add1','$add2','$country','$state','$city','$zip','$phone','$fax','$mobile') ";
}
else
{
$query = "UPDATE `$table` SET `firstname` = '$fname', `lastname` = '$lname',`email` = '$email', `address1` = '$add1', `address2` = '$add2', `country` = '$country', `state` = '$state', `city` = '$city', `zip` = '$zip', `phone` = '$phone', `fax` = '$fax', `mobile` = '$mobile'  WHERE `user_id` = '$uid' ";
}

query($query);

header("Location:checkout.php");
}

function OwntoCart($uid)
{

	$selqry = "SELECT * FROM `pfo_uploaddesign` WHERE `user_id` = '$uid' ";
	$data = get_rsltset($selqry);
	
	$fimg = $data[0]['frontimage'];
	$bimg = $data[0]['backimage'];
	
	$inqry = "INSERT INTO `pfo_cart` (`user_id`,`imgpathf`,`imgpathb`,`imgcount`,`quantity`,`paper`,`ship_method`) VALUES ('$uid','$fimg','$bimg','0','100','matt','standard')";
	
	if(query($inqry))
	{
		header("Location:display_cart.php");
	}
}



}

function Select($table)
{
$query = "SELECT * FROM `$table` ";
return get_rsltset($query);
}

function SelectWhere($table,$where)
{
$query = "SELECT * FROM `$table` $where ";
return get_rsltset($query);
}

function SelectOrderBy($table,$field)
{
$query = "SELECT * FROM `$table` ORDER BY $field ";
return get_rsltset($query);
}

function CombineTemplate($tab1,$tab2)
{
$uid = $_SESSION['pfo_userid'];
$selqry = mysql_query("SELECT * FROM `$tab1` order by id desc limit 0,2");

$imgcount = 0;
$image = "";
while($row = mysql_fetch_array($selqry))
{
$qnty = $row['quanty'];
$id = $row['id'];
$imgcount = $imgcount+$row['imgcount'];
$image .= $row['imgpath'].",";
}
//print_r($image);
$img = explode(',',$image);

$ctime = time();


mysql_query("INSERT INTO `$tab2` (id,user_id,imgpathf,imgpathb,imgcount,quantity,paper) VALUES ('$id','$uid','$img[1]','$img[0]','$imgcount','$qnty','matt') ");


mysql_query("INSERT INTO `pfo_portfolio` (id,user_id,imgpathf,imgpathb,imgcount,quantity,cdate) VALUES ('$id','$uid','$img[1]','$img[0]','$imgcount','$qnty','$ctime') ");

mysql_query("DELETE FROM `$tab1` WHERE `user_id` = '$uid' ");

}

function Enquiry($table,$protitle,$sitename,$sitelogo,$adminmail)
{
$name = $_REQUEST['enq_name'];
$email = $_REQUEST['enq_email'];
$subject = $_REQUEST['enq_subject'];
$message = $_REQUEST['enq_message'];

$query = "INSERT INTO `$table` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
if(query($query))
{
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$adminmail.'' . "\r\n";
$sub="Enquiry From- '".$protitle."' ";
$message="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>$name Sent an Enquiry</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Name : $name<br></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Email : $email<br></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Subject : $subject<br></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Message : $message<br></td>
		</tr>
		
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright 2009. ".$sitename ."</td>
		</tr>
	</table>";
	
//@mail('enquiry@printfastonline.com',$sub,$message,$headers);
@mail($adminmail,$sub,$message,$headers);
header("Location:enquiry.php?post=success");
}
}

function CheckSessionIn()
{
if(!isset($_SESSION['pfo_userid']))
{
header("Location:login.php");
}
}

function CheckSessionOut()
{
if(isset($_SESSION['pfo_userid']))
{
header("Location:home.php");
}
}

function SelectedCountry($table,$cid)
{
$query = "SELECT * FROM `$table` WHERE `countryid` = '$cid' ";
$cname = get_rsltset($query);
echo $cname[0]['country'];
} 

function SelectedCategory($table,$cid)
{
$query = "SELECT * FROM `$table` WHERE `cat_id` = '$cid' ";
$cname = get_rsltset($query);
echo $cname[0]['category'];
}

function DeleteImages($table)
{
$img_id = $_REQUEST['img_id'];
$selqry = "SELECT * FROM `$table` WHERE `img_id` = '$img_id' ";
$data = get_rsltset($selqry);
$img = $data[0]['img_name'];

@unlink("myimages_thumb/".$img);
@unlink("myimages_photos/".$img);

$query = "DELETE FROM `$table` WHERE `img_id` = '$img_id' ";
if(query($query))
{
header("Location:images.php?photo=del");
}
}

function DeleteFromCart($table,$pid)
{
$selqry = "SELECT * FROM `$table` WHERE `id` = '$pid' ";
$data = get_rsltset($selqry);

$fimg = $data[0]['imgpathf'];
$bimg = $data[0]['imgpathb'];

//@unlink($fimg);
//@unlink($bimg);

$delqry = "DELETE FROM `$table` WHERE `id` = '$pid' ";
if(query($delqry))
{
header("Location:display_cart.php?del=suc");
}

}


function GetCoupon($table)
{
$cp_id = $_REQUEST['coupon'];

$selqry = "SELECT * FROM `$table` WHERE `coupon` = '$cp_id' ";
if(get_num_rows($selqry)==0)
{
return norecord;
}
else
{
return get_rsltset($selqry);
}

}

function DeletePortfolio($table)
{
$port_id = $_REQUEST['port_id'];

$qry = "DELETE FROM `$table` WHERE `id` = '$port_id' ";
if(query($qry))
{
header("Location:portfolio.php?port=del");
}

}

function PortfolioToCart($table1,$table2)
{
 $port_id = $_REQUEST['port_id'];
 
 $selqry = "SELECT * FROM `$table1` WHERE `id` = '$port_id' ";
 
 $data = get_rsltset($selqry);
 
 $uid = $data[0]['user_id'];
 $imf = $data[0]['imgpathf'];
 $imb = $data[0]['imgpathb'];
 $imc = $data[0]['imgcount'];
 $quantity = $data[0]['quantity'];
 
 mysql_query("INSERT INTO `$table2` (user_id,imgpathf,imgpathb,imgcount,quantity) VALUES ('$uid','$imf','$imb','$imc','$quantity')");
 
 header("Location:display_cart.php");
}

function ShoppingCart($tab1,$tab2,$total,$uid,$protitle,$sitename,$sitelogo,$adminmail)
{

$val = rand(0,10000);
$order = str_replace(0,1,strtoupper(md5($val)));
$orderid = substr(str_replace('O','P',$order),0,10);

$qry = mysql_query("SELECT * FROM `$tab2` WHERE `order_id` = '$orderid' ");
while(mysql_num_rows($qry)>0)
{
$val = rand(0,10000);
$order = str_replace(0,1,strtoupper(md5($val)));
$orderid = substr(str_replace('O','P',$order),0,10);
}

//echo $orderid;

$_SESSION['orderid'] = $orderid;

$selqry = "SELECT * FROM `$tab1` WHERE `user_id` = '$uid' ";

$fdata = get_rsltset($selqry);

for($s=0; $s<count($fdata); $s++)
{
//mysql_query("INSERT INTO `$tab2` (user_id,prod_id,order_id,imgpathf,imgpathb,imgcount,quantity,paper,ship_method,total,pur_date,pay_status) VALUES ('$uid','".$fdata[$s]['prod_id']."','$orderid','".$fdata[$s]['imgpathf']."','".$fdata[$s]['imgpathb']."','".$fdata[$s]['imgcount']."','".$fdata[$s]['quantity']."','".$fdata[$s]['paper']."','".$fdata[$s]['ship_method']."','$total','".time()."','0') ");
mysql_query("INSERT INTO `$tab2` (user_id,order_id,imgpathf,imgpathb,imgcount,quantity,paper,ship_method,total,pur_date,pay_status) VALUES ('$uid','$orderid','".$fdata[$s]['imgpathf']."','".$fdata[$s]['imgpathb']."','".$fdata[$s]['imgcount']."','".$fdata[$s]['quantity']."','".$fdata[$s]['paper']."','".$fdata[$s]['ship_method']."','$total','".time()."','0') ");
}
$selmem = "SELECT * FROM `pfo_shipping` WHERE `user_id` = '$uid' ";
$mdata = get_rsltset($selmem);

$fname = $mdata[0]['firstname'];
$email = $mdata[0]['email'];
$curyear = date("Y").".";


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$adminmail.'' . "\r\n";
$sub="Business Card Order Details - '".$protitle."' ";
$message="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi ".$fname."</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>You Have Successfully Purchased Business Card in ".$protitle."</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Your Order Number : ".$orderid." </b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Your Order Payment is in Pending. </b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>We will contact you soon. </b></td>
		</tr>
		
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright ".$curyear.$sitename ."</td>
		</tr>
	</table>";
	
	$message_admin ="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>".$fname." Have Purchased Business Card in ".$protitle."</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Order Number : ".$orderid." </b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Order Payment is in Pending. </b></td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright ".$curyear.$sitename ."</td>
		</tr>
	</table>";
	
@mail($email,$sub,$message,$headers);
@mail($adminmail,$sub,$message_admin,$headers);


$delqry = "DELETE FROM `$tab1` WHERE `user_id` = '$uid' ";

query($delqry);

return $orderid;
}

function PaySuccess($table,$protitle,$sitename,$sitelogo,$adminmail,$oid,$uid)
{
$upqry = "UPDATE `$table` SET `pay_status` = '1' WHERE `order_id` = '$oid' ";

$selqry = "SELECT * FROM `pfo_register` WHERE `reg_id` = '$uid' ";
$udata = get_rsltset($selqry);
$fname = $udata[0]['firstname'];
$email = $udata[0]['email'];
//$design_mail = "production@printfastonline.com";
$design_mail = $adminmail;

if(query($upqry))
{
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$adminmail.'' . "\r\n";
$sub="Business Card Order Details - '".$protitle."' ";

$message="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td><img src='".$sitename."/images/$sitelogo' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi ".$fname."</b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>We Have Successfully Received Your Payment. </b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Thank You for Your Payment, We will contact you soon. </b></td>
		</tr>
		
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright ".$curyear.$sitename ."</td>
		</tr>
	</table>";
	
	$message_admin ="
	<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#C0D842' style='border:solid 10px #C0D842;'>
		<tr bgcolor='#FFFFFF' height='25'>
			<td colspan='2'><img src='".$sitename."/images/$sitelogo' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td colspan='2'>&nbsp;</td></tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' colspan='2' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Hi </b></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' colspan='2' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'>".$mes."</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='30'>
			<td valign='top' colspan='2' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'>&nbsp;</td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:10px;'>Front Side</td>
			<td style='padding-left:10px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'><img src='".$sitename."/".$fimg."' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF' height='35'>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:10px;'>Back Side</td>
			<td style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b; padding-left:10px;'><img src='".$sitename."/".$bimg."' border='0' /></td>
		</tr>
		<tr bgcolor='#FFFFFF'>
		 	<td align='left' colspan='2' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
				".$protitle." Team<br>
				<font><a href='".$sitename."/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
		</tr>
		<tr bgcolor='#FFFFFF'><td colspan='2'>&nbsp;</td></tr>
		<tr height='40'>
			<td align='right' colspan='2' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #C0D842;
color: #000000;'>&copy; Copyright ".$curyear.$sitename ."</td>
		</tr>
	</table>";
		
	@mail($adminmail,$sub,$message_admin,$headers);
	@mail($design_mail,$sub,$message_admin,$headers);
	@mail($email,$sub,$message,$headers);
}
}

?>