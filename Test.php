<?php

include 'vendor/autoload.php';

use TestPHP\Impresoras;
use TestPHP\Cartulina;

$Impresora = new Impresoras\Epson();

$papel = new Cartulina();

$papel->rayar('Estos son interfaces!');

$Impresora->imprimir($papel);