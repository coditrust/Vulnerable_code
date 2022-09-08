<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
        $captcha_num = rand(100, 999);
        $_SESSION['code'] = $captcha_num;
}

$font_size = 30;
$img_width = 120;
$img_height = 30;
 
header('Content-type: image/jpeg');
 
$image = imagecreate($img_width, $img_height);
imagecolorallocate($image, 255, 255, 255);
 
$text_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, 5, 5, 5, $_SESSION['code'], $text_color);

imagejpeg($image);
?>
