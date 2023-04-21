<?php

namespace Src\EstadosOrcamentos;

use Src\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamento reprovado não pode receber desconto');
    }
}
