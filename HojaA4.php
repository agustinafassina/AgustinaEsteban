<?php

namespace TestPHP;

class HojaA4 implements PapelInterface
{
    private $content;

    public function setContent(String $info)
    {
       $this->content = $info;
    }

    public function getContent()
    {
        return $this->content;
    }

}