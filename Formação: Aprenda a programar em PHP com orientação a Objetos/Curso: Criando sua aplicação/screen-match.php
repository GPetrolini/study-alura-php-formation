<?php

echo "Bem vindo(a) ao screen-match!";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Interestelar"; // nesse caso, variável n se sobrescreve
$nomeFilme = "Gente Grande"; // é validá apenas a ultima nesse caso "Gente Grande"

$anoLancamento = $argv[1];
//$anoLancamento = 2022;

//$somaDeNotas = 9 + 6 + 8 + 10 + 5.5 + 8;

//$somaDeNotas = 9;
//$somaDeNotas = 10;
//$somaDeNotas .= 7;
//$somaDeNotas .= 8;
//$somaDeNotas .= 7.5;
//$somaDeNotas .= 6;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc;$contador .= 1 ) {
    $somaDeNotas .= $argv[$contador];
}

for ($contador = 1; $contador < $argc;$contador .= 1 ) {
    $somaDeNotas .= $argv[$contador];
}

$contador =1;
while ($argv[$contador] != 0) {
    $somaDeNotas .= $argv[$contador++];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;

$planoPrime = true;
$incluindoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme:" . $nomeFilme . "\n";
echo "Nota do filme: . $notaFilme\n";
echo "Ano de lançamento:" . $anoLancamento . "\n";

echo 'Texto' . "\n";

// -- Uma forma de fazer --

//echo "Nome do filme";
//echo $nomeFilme;
//echo "\n";
//echo "Nota do filme";
//echo $notaFilme;

if ($anoLancamento > 2022)
{
    echo "Esse filme é um lançamento";
} elseif($anoLancamento > 2022 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo";
} else {
    echo "Esse filme não é um lançamento";
}

$genero = match ($nomeFilme)
{
  "Top gun - Maverick" => "ação",
  "Interestelar" => "ficção",
  "Gente Grande" => "comédia",
    default => "genero desconhecido"
};

echo "O genero do filme é: " . $genero . "\n";

$filme = [
    "nome" => "Interestelar",
    "anoLancamento" => 2020,
    "nota" => 8.0,
    "genero" => "ficção"
];

echo $filme['nome'];