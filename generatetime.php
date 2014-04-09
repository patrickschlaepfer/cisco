<?php

$width = 295;
$height = 140;

$im = imagecreatetruecolor($width, $height) or die('Cannot Initialize new GD image stream');

$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);

$today = date("H:i");

imagefill($im, 0, 0, $white);

$font = imageloadfont('Arial-72.gdf');
imagestring($im, $font,25, 15, $today, $black);

header ("Content-type: image/png");
imagepng($im);
imagedestroy($im);
?>
