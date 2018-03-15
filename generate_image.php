<?php
// require __DIR__.'/../vendor/autoload.php';
require 'vendor/autoload.php';
$name = $_POST['name'];
$story = $_POST['story'];
$template = $_POST['template'];
$align = $_POST['align'];
$position = $_POST['position'];
$nameFontSize = $_POST['nameFontSize'];
$storyFontSize = $_POST['storyFontSize'];

use GDText\Box;
use GDText\Color;


if(empty($template)) {
  $im = imagecreatefromjpeg('images/template_1.jpg');
} else {
  $im = imagecreatefromjpeg($template);
}

// inserting text in the center of the image
$box = new Box($im);
$box->setFontFace('fonts/century-gothic-regular.ttf');
$box->setFontSize($storyFontSize);
$box->setFontColor(new Color(255, 255, 255));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(60, 60, 960, 960);
$box->setTextAlign($align, $position);
$box->draw($story);

// inserting text in the left-bottom corner of the image...
$box = new Box($im);
$box->setFontFace('fonts/century-gothic-regular.ttf');
$box->setFontSize($nameFontSize);
$box->setFontColor(new Color(148, 212, 1));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(0, 0, 1080, 1080);
$box->setTextAlign('left', 'bottom');
$box->draw($name);

// header("Content-type: image/png");
imagepng($im, "save-images/download.jpg");
imagedestroy($im);
echo "success";
?>
