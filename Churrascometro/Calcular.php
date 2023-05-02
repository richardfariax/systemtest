<?php
$adultos = $_POST['adultos'];
$criancas = $_POST['criancas'];
$cerveja = $_POST['cerveja'];
$refrigerante = $_POST['refrigerante'];
$suco = $_POST['suco'];

function linguica($adultos, $criancas)
{
    $carne1 = $adultos * 0.150;
    $carne2 = $criancas * 0.050;

    return $carne1 + $carne2;
}

function carne($adultos, $criancas)
{
    $carne1 = $adultos * 0.400;
    $carne2 = $criancas * 0.150;

    return $carne1 + $carne2;
}

function bebidas($cerveja, $refrigerante, $suco)
{
    $latas = $cerveja * 5;
    $refrigerantes = $refrigerante * 1;
    $sucos = $suco * 0.700;

    return [$latas, $refrigerantes, $sucos];
}

if ($adultos) {
    echo "<div style='background-color: #f5f5f5; padding: 20px;'>";
    echo "<h2 style='margin-bottom: 10px;'>Resultado</h2>";
    list($total_cervejas, $total_refrigerantes, $total_sucos) = bebidas($cerveja, $refrigerante, $suco);
    echo "<p style='margin-bottom: 5px;'>Total de latas de cerveja: $total_cervejas</p>";
    echo "<p style='margin-bottom: 5px;'>Total de refrigerantes: $total_refrigerantes Litros</p>";
    echo "<p style='margin-bottom: 5px;'>Total de suco: $total_sucos Litros</p>";
    $total_carne = carne($adultos, $criancas);
    $total_linguica = linguica($adultos, $criancas);
    echo "<p style='margin-bottom: 5px;'>Total de Carne: $total_carne Kg</p>";
    echo "<p style='margin-bottom: 5px;'>Total de Linguiça: $total_linguica Kg</p>";
    echo "</div>";
}
?>
