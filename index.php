<?php
include 'libs/simple_html_dom.php';
include 'libs/MyCurl.php';

define('path','https://www.google.ru/search?q=');
if(isset($_POST['search']))
{
    $myCurl = new MyCurl();
    $url = $myCurl->processURL(path.$_POST['WhatFind']);
    $html = str_get_html($url);
  
}

include ('template/inxdex.php');

?>
<FORM ACTION="#" METHOD="POST">
    <INPUT type=text name="WhatFind">
    <INPUT type=submit name="search" value="Поиск">
</FORM>

