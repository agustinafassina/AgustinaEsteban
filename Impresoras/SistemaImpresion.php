<?php

namespace TestPHP\Impresoras;

use TestPHP\ImpresoraInterface;

class SistemaImpresion implements ImpresoraInterface
{
    public function imprimir($papel){
        echo $papel->getContent();
    }
    
}
