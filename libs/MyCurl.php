<?php
class MyCurl
{
    public $xml;
    protected $useragent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1';
    function processURL($url)
    {
        $url = str_replace(' ', '+', $url);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->useragent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $this->xml = curl_exec($ch);
        curl_close($ch);
        return $this->xml;
    }
}