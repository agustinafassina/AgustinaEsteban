<?php

include 'HP.php';
include 'Epson.php';
include 'HojaA4.php';
include 'Cartulina.php';

$Impresora = new Epson();

$papel = new Cartulina();

$papel->rayar('Estos son interfaces!');

$Impresora->imprimir($papel);