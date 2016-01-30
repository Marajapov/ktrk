<?php
include('class.GDFConverter.php');
$converter=new GDFConvertor();

$data_font=$converter->GenerateGdfFromTTF('css/fonts/roboto/roboto-regular.ttf', 12);
file_put_contents('css/fonts/roboto.gdf', $data_font);

header ("Content-type: image/png");

//Get string info
$font_size = isset($_GET['font_size']) ? $_GET['font_size'] : 3;
$string = $_GET['string'];
$string = urldecode(($_GET['string']));

//if (!preg_match('//u', $string)) {
//    $result = iconv("UTF-8","UTF-8",$string);
//}
//$string = iconv("Windows-1250", "Latin2", $string);

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
//imagettftext($img, 9, 0, 10, 0, $text_color, 'css/fonts/roboto/roboto-regular.ttf', "Hello");
//Output the image
imagepng($img);
imagedestroy($img);
?>