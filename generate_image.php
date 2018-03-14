<?php
// require __DIR__.'/../vendor/autoload.php';
require 'vendor/autoload.php';
$name = $_POST['name'];
$story = $_POST['story'];
$template = $_POST['template'];

use GDText\Box;
use GDText\Color;

// $im = imagecreatetruecolor(500, 500);
// $backgroundColor = imagecolorallocate($im, 0, 18, 64);
// imagefill($im, 0, 0, $backgroundColor);
// if(isset($template)) {
  $im = imagecreatefromjpeg($template);
// } else {
//   $im = imagecreatefromjpeg('images/template_1.jpg');
// }

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
$box->draw($story);

$box = new Box($im);
$box->setFontFace('fonts/OpenSans-Regular.ttf');
$box->setFontSize(30);
$box->setFontColor(new Color(148, 212, 1));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(60, 60, 960, 960);
$box->setTextAlign('left', 'bottom');
$box->draw($name);

// header("Content-type: image/png");
imagepng($im, "save-images/download.jpg");
imagedestroy($im);
echo "<img src='save-images/download.jpg' style='width:100%'>";
?>
