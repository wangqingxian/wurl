<?php

namespace Wangqingxian\Wurl;

class Gethtml
{
    public $html = ' ';

    public $content = '';

    /**
     * Gethtml constructor.
     */
    public function __construct()
    {
        return $this->html;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param string $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}