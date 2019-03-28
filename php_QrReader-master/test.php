<?php
include_once('./lib/QrReader.php');
$qrcode = new QrReader('./code.png');  //图片路径
$text = $qrcode->text(); //返回识别后的文本
echo $text;