<?php
//引入需要的类
include_once('./lib/QrReader.php');
// 将我们要识别的二维码放进去
$qrcode = new QrReader('./code.png');  //图片路径
//返回识别后的文本
$text = $qrcode->text(); 
echo $text;