<?php

namespace Src\Descontos;

use Src\Orcamento;

/**
 * Summary of Desconto.
 */
abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}
