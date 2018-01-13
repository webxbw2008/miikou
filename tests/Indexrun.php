<?php
namespace Test;






use miikou\src\tool\Tool;

require '../vendor/autoload.php';



//$book = new Words();
//$res = $book->mergeWords("我今天开着最牛公安上班");
//var_dump($res);


$tool = new Tool();
echo $tool->getIp();