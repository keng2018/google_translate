<?php

require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'zh-cn';
$target = 'en';
$text = $_POST['q'];

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

$source = 'en';
$target = 'zh-cn';
$trans = new GoogleTranslate();
$res = $trans->translate($source,$target,$result);

echo $res;
?>