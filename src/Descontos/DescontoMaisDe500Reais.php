<?php

namespace Src\Descontos;

use Src\Orcamento;

class DescontoMaisDe500Reais
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.5;
        }

        return 0;
    }
}
