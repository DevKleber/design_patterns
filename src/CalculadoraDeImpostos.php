<?php

namespace Src;

use Src\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $nomeImposto): float
    {
        return $nomeImposto->calculaImposto($orcamento);
    }
}
