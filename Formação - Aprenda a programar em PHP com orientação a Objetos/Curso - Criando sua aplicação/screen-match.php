<?php

echo "Bem vindo(a) ao screen-match!";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Interestelar"; // nesse caso, vari�vel n se sobrescreve
$nomeFilme = "Gente Grande"; // � valid� apenas a ultima nesse caso "Gente Grande"

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
echo "Ano de lan�amento:" . $anoLancamento . "\n";

echo 'Texto' . "\n";

// -- Uma forma de fazer --

//echo "Nome do filme";
//echo $nomeFilme;
//echo "\n";
//echo "Nota do filme";
//echo $notaFilme;

if ($anoLancamento > 2022)
{
    echo "Esse filme � um lan�amento";
} elseif($anoLancamento > 2022 && $anoLancamento <= 2022) {
    echo "Esse filme ainda � novo";
} else {
    echo "Esse filme n�o � um lan�amento";
}

$genero = match ($nomeFilme)
{
  "Top gun - Maverick" => "a��o",
  "Interestelar" => "fic��o",
  "Gente Grande" => "com�dia",
    default => "genero desconhecido"
};

echo "O genero do filme �: " . $genero . "\n";

$filme = [
    "nome" => "Interestelar",
    "anoLancamento" => 2020,
    "nota" => 8.0,
    "genero" => "fic��o"
];

echo $filme['nome'];