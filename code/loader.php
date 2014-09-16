<?PHP
session_start();
	/** Load Class Filess */
	//require_once(_PATH_INCLUDE."class.session.inc"); 
	//require_once(_PATH_INCLUDE."class.mysql.inc");
	//require_once(_PATH_INCLUDE."class.db.inc");
	require_once(_PATH_INCLUDE."default_functions.php");
	require_once(_PATH_INCLUDE."class.userfunctions.inc");
	require_once(_PATH_INCLUDE."user_functions.php");
	//require_once(_PATH_INCLUDE."class.pageing.inc");
	//require_once(_PATH_INCLUDE."Cart.Class.php");
	//require_once(_PATH_INCLUDE."cart.functions.php");
	require_once(_PATH_INCLUDE."db_connect.php");

	/** Create database object */
	//$sqlobj=new dbconn(_HOSTNAME, _USERNAME, _PASSWORD, _DATABASE);
	
	//$dbconnect = dbconn(_HOSTNAME, _USERNAME, _PASSWORD, _DATABASE);
	
	/** Create session object */
	//$sesobj=new SESSION_MANAGEMENT();
	
	/** Create User Profile object */
	$probj=new Profile();

	/** Create UserFunctions object */
	$userobj=new UserFunctions();
	
	/** Create Pageing Object */
	//$pageobj=new Pageing('5');
	
	//$cartobj = new cartcart();

	set_time_limit (3600);

function getVariable($key, $defval=NULL)
	{
		if(isset($_POST[$key]))
			return $_POST[$key];
		else if(isset($_GET[$key]))
			return $_GET[$key];
		else
			return $defval;
	} 
function rupeefy ($num,$dec) {
	$format="%.$dec" . "f";  
	$number=sprintf($format,$num);
	$str=strtok($number,".");
	$dc=strtok(".");      
	$str=corupfy($str);
	$return="Rs.&nbsp;$str";

	if ($dec!=0){
		$return = "$return" . ".$dc";
	}
	return($return); 
}
## corupfy Function
function corupfy ($str)  { 
	$n = strlen($str); 
	if ($n <= 3) { 
			$return=$str;
	} 
	else { 
			$pre=substr($str,0,$n-3); 
			$post=substr($str,$n-3,3); 
			$pre=corupfy($pre); 
			$return="$pre,$post"; 
	}
	return($return); 
}
function imageResize($filename, $target) { 
	$imagedata = getimagesize($filename);
	$width = $imagedata[0];
	$height = $imagedata[1];
	if($width>$target) {
		if ($width > $height) { 
			$percentage = ($target / $width); 
		} else { 
			$percentage = ($target / $height); 
		} 
		$height = round($height * $percentage); 
		$width = round($width * $percentage); 
	}
	return 'width="'.$width.'" height="'.$height.'"'; 
}
function dollarfy ($num,$dec) {
		$format="%.$dec" . "f";  
		$number=sprintf($format,$num);
		$str=strtok($number,".");
		$dc=strtok(".");      
		$str=commify($str);
		$return="&pound;$str";

		if ($dec!=0) 
		{ 
				$return = "$return" . ".$dc";
		} 
		return($return); 
}
## Commify Function
function commify ($str)  { 
		$n = strlen($str); 
		if ($n <= 3) { 
				$return=$str;
		} 
		else { 
				$pre=substr($str,0,$n-3); 
				$post=substr($str,$n-3,3); 
				$pre=commify($pre); 
				$return="$pre,$post"; 
		}
		return($return); 
}
?>