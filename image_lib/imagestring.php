<?php

function ImageStringItalic($image, $font, $x, $y, $str, $col, $italicness = 2, $ImageString = 'ImageString') {
	// http://www.puremango.co.uk/2009/04/php-imagestringright-center-italic/

	// sanitise italicness input
	$italicness = (int)$italicness;
	
	if($italicness>3) {
		$italicness = 3;
	}
	if($italicness<1) {
		$italicness = 1;
	}

	// calculate how long the string is in pixels
	$font_width = ImageFontWidth($font);
	$font_height = ImageFontHeight($font);
	$str_width = strlen($str)*$font_width;

	// create temp image large enough to hold the italic text
	$ti_width = $str_width+$font_width; // we make the image one character higher and wider than it needs to be to contain the string,
	$ti_height = $font_height+$font_height; // so that eg if we're using ImageStringUnderlined, we have the extra space available to us.
	$temp_im = ImageCreateTrueColor($ti_width, $ti_height);

	// get the RGB values for the chosen colour 
	$rgb = ImageColorsForIndex($image, $col);
	
	// give the temp images transparent backgrounds
	// making sure it's different to $col
	// (we could just allocate $rgb['red']+1, but what if red is 255? likewise 0, and perhaps ImageCreate rather than ImageCreateTrueColor will affect the colours
	// we we divide by two and add one, which should make the new RGB significantly different from $col)
	$bg = ImageColorAllocate($temp_im, $rgb['red']/2+1, $rgb['green']/2+1, $rgb['blue']/2+1);
	ImageFill($temp_im,0,0,$bg);
	ImageColorTransparent($temp_im,$bg);

	// assign colour to temp image
	$col = ImageColorAllocateAlpha($temp_im,$rgb['red'],$rgb['green'],$rgb['blue'],$rgb['alpha']);

	// write the string on the temp image
	if(!function_exists($ImageString) || $ImageString==__FUNCTION__) {
		// don't allow recursion
		$ImageString = 'ImageString';
	}
	$ImageString($temp_im, $font, 0, 0, $str, $col);

	// copy full width, 1 pixel high slices of temp_im onto the original image
	// but have each slice slightly more to the right than the previous one
	// we work from the bottom up, this making it italic (rather than backwards-slanted)
	$factor = 4 - $italicness; // the higher the factor, the less italic
	$x_offset = $x-($italicness*2)+1;
	for($i=$font_height, $j=0 ; $i>0 ; $i-=$factor, $j++) {
		if($italicness<3) {
			// copy a larger height chunk of temp_im; the more we do this, the less italic
			ImageCopyMerge($image, $temp_im, $x_offset+$j, $y+$i+1, 0, $i+1, $ti_width, $factor-1, 100);
		}
		ImageCopyMerge($image, $temp_im, $x_offset+$j, $y+$i, 0, $i, $ti_width, 1, 100);
	}
	
	ImageDestroy($temp_im);
}

function ImageStringRight($image, $font, $y, $str, $col,$r_padding=1, $ImageString = 'ImageString') {
	// http://www.puremango.co.uk/2009/04/php-imagestringright-center-italic/

	$font_width = ImageFontWidth($font);
	$str_width = strlen($str)*$font_width;
	if(!function_exists($ImageString) || $ImageString==__FUNCTION__) {
		// don't allow recursion
		$ImageString = 'ImageString';
	}
	$ImageString($image, $font, ImageSX($image)-$str_width-$r_padding, $y, $str, $col);
}

function ImageStringCenter($image, $font, $y, $str, $col, $ImageString = 'ImageString') {
	// http://www.puremango.co.uk/2009/04/php-imagestringright-center-italic/
	
	$font_width = ImageFontWidth($font);
	$str_width = strlen($str)*$font_width;
	if(!function_exists($ImageString) || $ImageString==__FUNCTION__) {
		// don't allow recursion
		$ImageString = 'ImageString';
	}
	$ImageString($image, $font, intval((ImageSX($image)-$str_width)/2), $y, $str, $col);
}

function ImageStringUnderlined($image, $font, $x, $y, $str, $col, $ImageString = 'ImageString') {
	// http://www.puremango.co.uk/2009/04/php-imagestringright-center-italic/
	
	$font_width = ImageFontWidth($font);
	$font_height = ImageFontHeight($font);
	$str_width = strlen($str)*$font_width;
	if(!function_exists($ImageString) || $ImageString==__FUNCTION__) {
		// don't allow recursion
		$ImageString = 'ImageString';
	}
	$ImageString($image, $font, $x, $y, $str, $col);
	ImageLine($image, $x, $y+$font_height, $x+$str_width, $y+$font_height, $col);
}

function ImageStringShadow($image, $font, $x, $y, $str, $col, $col2=false, $ImageString = 'ImageString') {
	// http://www.puremango.co.uk/2009/04/php-imagestringright-center-italic/
	
	if($col2===false) {
		$col2 = ImageColorAllocate($image,0,0,0);
	}

	if(!function_exists($ImageString) || $ImageString==__FUNCTION__) {
		// don't allow recursion
		$ImageString = 'ImageString';
	}
	$ImageString($image, $font, $x+1, $y+1, $str, $col2);
	$ImageString($image, $font, $x, $y, $str, $col);
}

// some helper functions for "nesting" effects.
function ImageStringItalicUnderlined($image, $font, $x, $y, $str, $col) {
	ImageStringItalic($image, $font, $x, $y, $str, $col, 2, 'ImageStringUnderlined');
}

function ImageStringItalicShadow($image, $font, $x, $y, $str, $col) {
	ImageStringItalic($image, $font, $x, $y, $str, $col, 2, 'ImageStringShadow');
}

function ImageStringShadowUnderlined($image, $font, $x, $y, $str, $col) {
	ImageStringUnderlined($image, $font, $x, $y, $str, $col, 'ImageStringShadow');
}

function ImageStringShadowItalicUnderlined($image, $font, $x, $y, $str, $col) {
	ImageStringUnderlined($image, $font, $x, $y, $str, $col, 'ImageStringItalicShadow');
}
function ImageStringItalic1($image, $font, $x, $y, $str, $col) {
	ImageStringItalic($image, $font, $x, $y, $str, $col, 1);
}
function ImageStringItalic3($image, $font, $x, $y, $str, $col) {
	ImageStringItalic($image, $font, $x, $y, $str, $col, 3);
}


$im = ImageCreate(rand(45,70)*10,400);

// fill background
$bg = ImageColorAllocate($im,150,150,220);
$black = ImageColorAllocate($im,0,0,0);
$white = ImageColorAllocate($im,255,255,255);
ImageFill($im,0,0,$bg);

$red = ImageColorAllocate($im,200,0,0);
$col = ImageColorAllocate($im,250,250,20);

// draw strings
$y = 0;
$font = 5;
$font_height = ImageFontHeight($font);

ImageStringCenter($im, 5, $y, 'Playing With PHP ImageString - puremango.co.uk', $red, 'ImageStringItalicUnderlined'); $y+=$font_height;
$y+=($font_height/2);

ImageStringRight($im, $font, $y, 'Right-Aligned', $col); $y+=$font_height;
ImageStringRight($im, $font, $y, 'Right + Italic', $col, 5, 'ImageStringItalic'); $y+=$font_height;
ImageStringRight($im, $font, $y, 'Right + Underlined', $col, 5, 'ImageStringUnderlined'); $y+=$font_height;
ImageStringRight($im, $font, $y, 'Right + Italic + Underlined', $col, 5, 'ImageStringItalicUnderlined'); $y+=$font_height;
$y+=($font_height/2);

ImageStringCenter($im, $font, $y, 'Centered', $col); $y+=$font_height;
ImageStringCenter($im, $font, $y, 'Center + Italic', $col, 'ImageStringItalic'); $y+=$font_height;
ImageStringCenter($im, $font, $y, 'Center + Underlined', $col, 'ImageStringUnderlined'); $y+=$font_height;
ImageStringCenter($im, $font, $y, 'Center + Italic + Underlined', $col, 'ImageStringItalicUnderlined'); $y+=$font_height;
$y+=($font_height/2);

ImageStringItalic($im, $font, 0, $y, 'Italic-1', $col, 1); $y+=$font_height;
ImageStringItalic($im, $font, 0, $y, 'Italic-2 (default)', $col); $y+=$font_height;
ImageStringItalic($im, $font, 0, $y, 'Italic-3', $col, 3); $y+=$font_height;
$y+=($font_height/2);

ImageStringItalic($im, $font, 0, $y, 'Italic-1 Underlined', $col, 1,'ImageStringUnderlined'); $y+=$font_height;
ImageStringItalic($im, $font, 0, $y, 'Italic-2 Underlined', $col, 2, 'ImageStringUnderlined'); $y+=$font_height;
ImageStringItalic($im, $font, 0, $y, 'Italic-3 Underlined', $col, 3, 'ImageStringUnderlined'); $y+=$font_height;
$y+=($font_height/2);

ImageStringShadow($im, $font, 0, $y, 'Drop Shadow', $col); $y+=$font_height;
ImageStringCenter($im, $font, $y, 'Centered w/ Drop Shadow', $col, 'ImageStringShadow'); $y+=$font_height;
ImageStringRight($im, $font, $y, 'Right + Shadow', $col, 5, 'ImageStringShadow'); $y+=$font_height;
$y+=($font_height/2);

ImageStringCenter($im, 5, $y, 'and finally, a little bit of everything!', $col, 'ImageStringShadowItalicUnderlined'); $y+=$font_height;
ImageStringCenter($im, 2, $y, '(that\'s italic, underlined and centered, with a drop shadow)', $col, 'ImageStringItalic1'); $y+=$font_height;
$y+=($font_height/2);
$y+=($font_height/2);

ImageString($im, 2, 0, $y, 'These functions work well on all the built-in PHP fonts (1-5)...', $col); $y+=$font_height;
ImageStringRight($im, 3, $y, '...and they\'ll even work with ImageLoadFont!', $col, 3, 'ImageStringItalic3'); $y+=$font_height;

Header('Content-type: image/png');
ImagePng($im);
ImageDestroy($im);
?>