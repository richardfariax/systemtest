<?php
echo "Sistema de Cálculo de IMC\n\n";

$name = readline("Qual seu nome? :");
$peso = readline("$name, favor informar seu peso em KG: ");
$altura = readline("$name, favor informar sua altura em CM: ");

$imc = $peso / pow($altura / 100, 2);

echo "$name, seu IMC é: " . number_format($imc) . "\n";

$mensagens = [
    18.5 => "Você está abaixo do peso.",
    25 => "Seu peso está dentro do normal.",
    30 => "Você está com sobrepeso.",
    35 => "Você está com obesidade grau I.",
    40 => "Você está com obesidade grau II (severa).",
    INF => "Você está com obesidade grau III (mórbida).",
];

foreach ($mensagens as $limite => $mensagem) {
    if ($imc < $limite) {
        break;
    }
}

echo $mensagem;

