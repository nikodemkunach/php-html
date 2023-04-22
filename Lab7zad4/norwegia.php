<?php
$width = 600;
$height = 300;
$flag = imagecreatetruecolor($width, $height);

$red = imagecolorallocate($flag, 255, 0, 0);
$blue = imagecolorallocate($flag, 0,0,255);
$white = imagecolorallocate($flag, 255, 255, 255);

imagefill($flag, 0, 0, $red);
imagefilledrectangle($flag, 150,0,250,300,$white);
imagefilledrectangle($flag, 0,100,600,170,$white);
imagefilledrectangle($flag, 180,0,225,300,$blue);
imagefilledrectangle($flag, 0,120,600,150,$blue);



header('Content-Type: image/png');
imagepng($flag);