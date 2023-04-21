<?php

namespace Src;

use Src\Descontos\DescontoMaisDe500Reais;
use Src\Descontos\DescontoMaisDe5Itens;

class CalculadoraDeDesconto
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $desconto5Itens = new DescontoMaisDe5Itens();
        $desconto = $desconto5Itens->calculaDesconto($orcamento);

        if ($desconto == 0) {
            $desconto500Reais = new DescontoMaisDe500Reais();
            $desconto = $desconto500Reais->calculaDesconto($orcamento);
        }

        return $desconto;
    }
}
