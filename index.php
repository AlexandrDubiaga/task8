<?php
include 'libs/simple_html_dom.php';
include 'libs/MyCurl.php';
include 'libs/phpQuery-onefile.php';
include 'config.php';


if(isset($_POST['search']))
{
    $myCurl = new MyCurl();
    $url = $myCurl->processURL(path.$_POST['WhatFind']);
    if($url)
    {
        $normalQuery = NORMAL_QUERY;

    }
    $doc = new DOMDocument();
    $doc->loadHTMLFile("$url");
    echo $doc->saveHTML();
}
include ('template/index.php');
?>
