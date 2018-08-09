<?php

include_once 'ImpresoraInterface.php';

class Epson  implements ImpresoraInterface
{
    public function  imprimir($papel)
    {
        echo $papel->getContent();
    }
    
}
