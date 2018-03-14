<?php
// require __DIR__.'/../vendor/autoload.php';
require 'vendor/autoload.php';

use GDText\Box;
use GDText\Color;

// $im = imagecreatetruecolor(500, 500);
// $backgroundColor = imagecolorallocate($im, 0, 18, 64);
// imagefill($im, 0, 0, $backgroundColor);
$im = imagecreatefromjpeg('images/template_1.jpg');

// $box = new Box($im);
// $box->setFontFace(__DIR__.'/Franchise-Bold-hinted.ttf'); // http://www.dafont.com/franchise.font
// $box->setFontColor(new Color(255, 75, 140));
// $box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
// $box->setFontSize(40);
// $box->setBox(20, 20, 460, 460);
// $box->setTextAlign('left', 'top');
// $box->draw("Franchise\nBold");

$box = new Box($im);
$box->setFontFace('fonts/OpenSans-Regular.ttf'); // http://www.dafont.com/pacifico.font
$box->setFontSize(40);
$box->setFontColor(new Color(255, 255, 255));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(60, 60, 960, 960);
$box->setTextAlign('center', 'center');
$box->draw("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

$box = new Box($im);
$box->setFontFace('fonts/OpenSans-Regular.ttf');
$box->setFontSize(30);
$box->setFontColor(new Color(148, 212, 1));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(60, 60, 960, 960);
$box->setTextAlign('left', 'bottom');
$box->draw("Samiul Alim Pratik");

// header("Content-type: image/png");
imagepng($im, "save-images/download.jpg");
imagedestroy($im);

echo "<img src='save-images/download.jpg' alt=''>"
?>
