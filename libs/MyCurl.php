<?php
class MyCurl
{
    protected $html;
    protected $text;
    protected $div;
    protected $useragent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1';

    public function processURL($url)
    {
        if(empty($url || !isset($url)))
        {
            return false;
        }else
        {
            $url = str_replace(' ', '+', $url);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_USERAGENT, $this->useragent);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $this->html = curl_exec($ch);
            curl_close($ch);
            return $this->html;
        }
        return false;


    }

    public function getHtml($html)
    {
        if(empty($html || !isset($html)))
        {
            return false;

        }else {
            $document = phpQuery::newDocument($html);
            $this->text = $document->find('.g');
            foreach ($this->text as $el) {
                $pq = pq($el);
                $pq->find('table')->remove();
                $pq->find('img')->remove();
            }

            return $this->text;
        }
        return false;
    }
}