<?php
include('class.GDFConverter.php');
$converter=new GDFConvertor();

$data_font=$converter->GenerateGdfFromTTF('css/fonts/roboto/roboto-regular.ttf', 12);
file_put_contents('css/fonts/roboto.gdf', $data_font);

header ("Content-type: image/png");

//Get string info
$font_size = isset($_GET['font_size']) ? $_GET['font_size'] : 3;
$string = urldecode(base64_decode($_GET['string']));

//Get the size of the string
$width = imagefontwidth($font_size) * strlen($string);
$height = imagefontheight($font_size);

//Create the image
$img = @imagecreatetruecolor($width+20, $height)
or die("Cannot Initialize new GD image stream");

//Make it transparent
imagesavealpha($img, true);
$trans_colour = imagecolorallocatealpha($img, 0, 0, 0, 63);
imagefill($img, 0, 0, $trans_colour);

$font_res=imageloadfont('css/fonts/roboto.gdf');

//Get the text color
$text_color = isset($_GET['R'], $_GET['G'], $_GET['B']) ?
    imagecolorallocate($img, hexdec($_GET['R']), hexdec($_GET['G']), hexdec($_GET['B'])) :
    imagecolorallocate($img, 0, 0, 0);

//Draw the string
imagestring($img, $font_size, 10, 0,  $string, $text_color);

//Output the image
imagepng($img);
imagedestroy($img);
?>