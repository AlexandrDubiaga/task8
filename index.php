<?php
include 'libs/simple_html_dom.php';
include 'libs/MyCurl.php';
include 'libs/phpQuery-onefile.php';
include 'config.php';


if(isset($_POST['search']))
{
   
    $doc = new DOMDocument();
    $doc->loadHTMLFile('path.$_POST['WhatFind']');
    echo $doc->saveHTML();
}
include ('template/index.php');
?>
