<?php
include 'libs/simple_html_dom.php';
include 'libs/MyCurl.php';
include 'libs/phpQuery-onefile.php';


define('path','https://www.google.ru/search?q=');
if(isset($_POST['search']))
{
    $myCurl = new MyCurl();
    $url = $myCurl->processURL(path.$_POST['WhatFind']);
    file_put_contents('file', $url);
    $html = file_get_html('file');
    $parceHtml = $myCurl->getHtml($html);
}
include ('template/inxdex.php');
?>
