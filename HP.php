<?php

include 'ImpresoraInterface.php';

class HP implements ImpresoraInterface
{
    public function imprimir($papel)
    {
       var_dump($papel->getContent());   
    }
}