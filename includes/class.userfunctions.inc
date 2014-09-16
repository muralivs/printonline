<?PHP
class UserFunctions
{
	
	function getVariable($key, $defval="")
	{
		if(isset($_POST[$key]))
		return $_POST[$key];
		else if(isset($_GET[$key]))
		return $_GET[$key];
		else
		return $defval;
	 }
	function filecheck($filename)
	{
		return is_file($filename);
	}
	function tmp_filecheck($filename)
	{
		return $this->filecheck(_PATH_TEMPLATE.$filename.".php");
	}
	function code_filecheck($filename)
	{
		return $this->filecheck(_PATH_CODE.$filename.".php");
	}  
	function splitword($word,$offset)
	{
		$temp = "";
		if($temp1 = explode(" ",$word))
		{
			for($i=0;$i<$offset;$i++)
			{
				$temp .= " ".$temp1[$i];
			}
			if(isset ($temp1[$offset+1]))	
			{
				$temp .= "... ";
			}
		}
		return $temp;
	}
	function formcheck($fields,$alretmsg)
	{
		$msg = "";
		for($i=0;$i<count($fields);$i++) {
			if($this->getVariableFromRequest($fields[$i])==""){
				$msg = "Please fill the ".$alretmsg[$i].".";
				break;
			}
		}
		return $msg;
	}
}
?>