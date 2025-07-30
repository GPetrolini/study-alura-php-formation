<?php

function exibeMensagemLancamento(int $ano)
{
    if ($ano > 2022)
    {
        echo "Esse filme é um lançamento";
    } elseif($ano > 2022 && $ano <= 2022) {
        echo "Esse filme ainda é novo";
    } else {
        echo "Esse filme não é um lançamento";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): array
{
    return [
        'nome' => $nome,
        'ano' => $anoLancamento,
        'nota' => $nota,
        'genero' => $genero
    ];
}