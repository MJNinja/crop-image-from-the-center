<?php
//$filename = "../images/blog/default.jpg";'
//$newName = "new.jpg";
//$newNamePath = "../images/";

//#################################################################
// CROP IMAGE FROM THE CENTER
//#################################################################
function cropImage($filename, $newName, $newNamePath){
	$width  = imagesx($filename);
	$height = imagesy($filename);
	$centreX = round($width / 2);
	$centreY = round($height / 2);

	$cropWidth  = 100;
	$cropHeight = 100;
	$cropWidthHalf  = round($cropWidth / 2);
	$cropHeightHalf = round($cropHeight / 2);

	$x1 = max(0, $centreX - $cropWidthHalf);
	$y1 = max(0, $centreY - $cropHeightHalf);	

	$temp = imagecreatetruecolor($cropWidth, $cropHeight);		

	imagecopy($temp,$filename,0,0,$x1,$y1,$width,$height);

	imagejpeg($temp,$newNamePath.$newName,90);
	imagedestroy($temp);
}
?>