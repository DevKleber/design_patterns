<?php

namespace Src\EstadosOrcamentos;

use Src\Orcamento;

abstract class EstadoOrcamento
{
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException('Orcamento não pode ser aprovado.');
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException('Orcamento não pode ser aprovado.');
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \DomainException('Orcamento não pode ser aprovado.');
    }
}
