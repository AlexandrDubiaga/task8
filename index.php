<?php
include ('libs/MyCurl.php');
include ('config.php');
include 'libs/simple_html_dom.php';

if (isset($_POST['search']))
{
    $obj = new MyCurl();
    $string =  str_replace(' ', '+', path.$_POST['WhatFind']);
    echo $string;
    $html = $obj->resultCurlData($string);
}
include 'template/index.php';
?>