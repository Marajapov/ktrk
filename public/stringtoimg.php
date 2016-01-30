<?php

function win_uni ($in) {
    $in = convert_cyr_string($in ,"w","i");
    $out = "";
    for ($i=0; $i < strlen($in); $i++) {
        $char = ord($in[$i]);
        $out .= ($char > 175)?"&#".(1040+($char-176)).";":$in[$i]; }
    return $out;
}

header ("Content-type: image/png");

//Get string info
$font_size = isset($_GET['font_size']) ? $_GET['font_size'] : 3;
$string = urldecode($_GET['string']);
//$string = urldecode(base64_decode($_GET['string']));

//Get the size of the string
$width = strlen($string)*3;
$height = 15;

//Create the image
$img = @imagecreatetruecolor($width+20, $height)
or die("Cannot Initialize new GD image stream");

//Make it transparent
imagesavealpha($img, true);
$trans_colour = imagecolorallocatealpha($img, 0, 0, 0, 63);
imagefill($img, 0, 0, $trans_colour);

$font_res=imageloadfont('css/fonts/roboto.gdf');
$TTFfontPath = 'css/fonts/roboto/roboto-regular.ttf';

//Get the text color
$text_color = isset($_GET['R'], $_GET['G'], $_GET['B']) ?
    imagecolorallocate($img, hexdec($_GET['R']), hexdec($_GET['G']), hexdec($_GET['B'])) :
    imagecolorallocate($img, 0, 0, 0);
$font = 'css/fonts/roboto/roboto-regular.ttf';
//Draw the string
//imagestring($img, $font_size, 10, 0,  toUnicodeEntities($string), $text_color);
imagettftext($img, 8, 0, 7, 11, $text_color, $font, $string);
//Output the image
imagepng($img);
imagedestroy($img);
?>