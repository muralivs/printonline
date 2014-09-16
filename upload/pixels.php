<?php
session_start();
error_reporting(0);
if($_SESSION['loadpictre']=="")
{
	$_SESSION['loadpictre']="front";
}
$w = (int)$_POST['width'];
$h = (int)$_POST['height'];
$img = imagecreatetruecolor($w, $h);
imagefill($img, 0, 0, 0xFFFFFF);
$rows = 0;
$cols = 0;
for($rows = 0; $rows < $h; $rows++)
{
	$c_row = explode(",", $_POST['px' . $rows]);
	for($cols = 0; $cols < $w; $cols++)
	{
		$value = $c_row[$cols];
		if($value != "")
		{
			$hex = $value;
			while(strlen($hex) < 6)
			{
				$hex = "0" . $hex;
			}
			$r = hexdec(substr($hex, 0, 2));
			$g = hexdec(substr($hex, 2, 2));
			$b = hexdec(substr($hex, 4, 2));
			$test = imagecolorallocate($img, $r, $g, $b);
			imagesetpixel($img, $cols, $rows, $test);
		}
	}
}
$image=time() .".jpg";
imagejpeg($img, "images1/".$_SESSION['loadpictre']."/". time() . ".jpg", 90);
if ($_SESSION['loadpictre']=="front")
{
	$_SESSION['loadpictre']="back";
}
else if ($_SESSION['loadpictre']=="back")
{
	$_SESSION['loadpictre']="front";
}
?>
<script>
	window.close();
</script>