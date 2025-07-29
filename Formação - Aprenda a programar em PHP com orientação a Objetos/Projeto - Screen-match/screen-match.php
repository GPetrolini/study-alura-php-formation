<?php

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
echo "Ano de lan�amento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "a��o",
    "Interestelar" => "fic��o",
    "Gente Grande" => "com�dia",
    default => "g�nero desconhecido",
};

echo "O g�nero do filme �: $genero\n";

$filme = [
    "nome" => "Interestelar",
    "ano" => 2015,
    "nota" => 9.9,
    "genero" => "fic��o",
];


echo $filme["ano"];
