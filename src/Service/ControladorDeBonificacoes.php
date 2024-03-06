<?php

namespace Banco\Service;

use Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}
