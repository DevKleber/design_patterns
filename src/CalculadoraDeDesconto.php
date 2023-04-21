<?php

namespace Src;

use Src\Descontos\DescontoMaisDe500Reais;
use Src\Descontos\DescontoMaisDe5Itens;
use Src\Descontos\SemDesconto;

class CalculadoraDeDesconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );
        var_dump($cadeiaDescontos);

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}
