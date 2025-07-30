<?php

use ScreenMatch\src\Modelo\Filme;

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

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme
{

    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->genero = $genero;
    $filme->nota = $nota;

    return $filme;

}