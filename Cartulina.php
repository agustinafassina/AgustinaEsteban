<?php

include_once 'PapelInterface.php';

class Cartulina implements PapelInterface
{
    private $canvas;

    public function rayar(String $rayones)
    {
        $this->canvas = $rayones;
    }

    public function getContent()
    {
        return $this->canvas;
    }
    
}
