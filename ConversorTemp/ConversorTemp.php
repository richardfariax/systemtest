<?php
if (!isset($_POST['opcao']) || !isset($_POST['temperatura'])) {
    header("Location: conversor.html");
    exit;
}

$opcao = $_POST['opcao'];
$temperatura = $_POST['temperatura'];

if ($opcao == 1) {
    $fahrenheit = ($temperatura * 9 / 5) + 32;
    echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2) . " °F\n";
} elseif ($opcao == 2) {
    $celsius = ($temperatura - 32) * 5 / 9;
    echo "A temperatura em Celsius é: " . number_format($celsius, 2) . " °C\n";
} else {
    echo "Opção inválida\n";
}
