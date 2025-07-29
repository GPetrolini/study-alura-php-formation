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

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Interestelar";

$anoLancamento = 2015;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Interestelar" => "ficção",
    "Gente Grande" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Interestelar",
    "ano" => 2015,
    "nota" => 9.9,
    "genero" => "ficção",
];


echo $filme["ano"];
