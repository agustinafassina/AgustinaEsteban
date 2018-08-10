<?php

namespace TestPHP\Impresoras;


class HP extends SistemaImpresion
{
    public function imprimir($papel)
    {
        echo $papel->getContent().' - Serial HP 12421';
    }

}