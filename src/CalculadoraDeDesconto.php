<?php

namespace Alura\DesignPattern;

class CalculadoraDeDesconto
{
    public function calcula(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return 0;
    }
}
