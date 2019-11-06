<?php

require_once '../src/ImageText.php';

$bg = './img/benji.jpg';
$overlay = './img/paw.png';
$image = new PHPImage();
$image->setDimensionsFromImage($bg);
$image->draw($bg);
$image->resize(486, 540, true, true);
$image->draw($overlay);
$image->setAlignHorizontal('center');
$image->setAlignVertical('center');
$image->setFont('./font/arial.ttf');
$image->setTextColor(array(255, 255, 255));
$gutter = 50;
$image->rectangle($gutter, $gutter, $image->getWidth() - $gutter * 2, $image->getHeight() - $gutter * 2, array(255, 255, 255), 0.5);

$text = "This is the first line.\n\nThis is the second line, which is a bit longer and wrapped.\nThird\nFourth\n\nFifth with a gap";

$image->text([
    'text' => $text,
    'width' => $image->getWidth() - $gutter * 2,
    'height' => $image->getHeight() - $gutter * 2,
    'fontSize' => 16,
    'x' => $gutter,
    'y' => $gutter,
]);

$image->show();
