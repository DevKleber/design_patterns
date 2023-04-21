<?php

use Src\CalculadoraDeImpostos;
use Src\Impostos\Icms;
use Src\Impostos\Iss;
use Src\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;

print $calculadora->calcula($orcamento, new Iss());
print $calculadora->calcula($orcamento, new Icms());
