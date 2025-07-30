<?php

use ScreenMatch\src\Modelo\Filme;

function exibeMensagemLancamento(int $ano)
{
    if ($ano > 2022)
    {
        echo "Esse filme � um lan�amento";
    } elseif($ano > 2022 && $ano <= 2022) {
        echo "Esse filme ainda � novo";
    } else {
        echo "Esse filme n�o � um lan�amento";
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