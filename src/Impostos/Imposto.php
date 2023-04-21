<?php

namespace Src\Impostos;

use Src\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
