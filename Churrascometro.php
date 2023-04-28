<?php
echo 'Churrascômetro' . PHP_EOL;

$adultos = readline('Quantos adultos? ');
echo "\n";
$criancas = readline('Quantas crianças? ');
echo "\n";
$cerveja = readline('Quantos bebem cerveja? ');
echo "\n";
$refrigerante = readline('Quantos tomam refrigerante? ');
echo "\n";
$suco = readline('Quantos tomam suco? ');
echo "\n";


function carne($adultos, $criancas)
{
    $carne1 = $adultos * 0.400;
    $carne2 = $criancas * 0.150;

    return $carne1 + $carne2;
}

function bebidas($cerveja, $refrigerante, $suco)
{
    $latas = $cerveja * 4;
    $refrigerantes = $refrigerante * 1;
    $sucos = $suco * 0.700;

    return [$latas, $refrigerantes, $sucos];
}

list($total_cervejas, $total_refrigerantes, $total_sucos) = bebidas($cerveja, $refrigerante, $suco);

echo "Total de latas de cerveja: " . $total_cervejas . PHP_EOL;
echo "Total de refrigerantes: " . $total_refrigerantes . ' Litros' . PHP_EOL;
echo "Total de suco em litros: " . $total_sucos . ' Litros' . PHP_EOL;
$total_carne = carne($adultos, $criancas);
echo 'Total de Carne ' . $total_carne . ' Kg';





