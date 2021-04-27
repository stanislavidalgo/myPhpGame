<?php
//
class UrlHelper
{
    public const DOMAIN = 'https://127.0.0.1:8001/';
    private $url;
    public function makeUrl($slug)
    {
        $this->url = self::DOMAIN . $slug; 
        return $this;
    }
    public function addParams($params)
    {
        foreach ($params as $key => $value) {
            $this->url .= '?' . $key . '=' . $value;
        }
        return $this;
    }
    public function getUrl()
    {
        return $this->url;
    }
}
