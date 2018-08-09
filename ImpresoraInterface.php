<?php

include_once 'PapelInterface.php';

interface ImpresoraInterface
{
    public function imprimir(PapelInterface $papel);
}