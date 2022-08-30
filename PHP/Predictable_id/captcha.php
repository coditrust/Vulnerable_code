<?php
session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['code'] = $captcha_num;

$img_width = 120;
$img_height = 30;

header('Content-type: image/jpeg');

$image = imagecreate($img_width, $img_height);
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, 5, 5, 5, $captcha_num, $text_color);
imagejpeg($image);
?>
