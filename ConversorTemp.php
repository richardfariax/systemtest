<?php
echo "Sistema Conversor de temperatura\n\n";
// Mostra as opções de conversão disponíveis para o usuário
echo "Escolha o tipo de conversão:\n";
echo "1. Celsius para Fahrenheit\n";
echo "2. Fahrenheit para Celsius\n";

// Lê a opção escolhida pelo usuário
$opcao = trim(fgets(STDIN));

// Verifica qual opção foi escolhida e executa a conversão correspondente
if ($opcao == 1) {
    // Celsius para Fahrenheit
    echo "Digite a temperatura em graus Celsius: ";
    $celsius = trim(fgets(STDIN));
    $fahrenheit = ($celsius * 9 / 5) + 32;
    echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2) . " °F\n";
} elseif ($opcao == 2) {
    // Fahrenheit para Celsius
    echo "Digite a temperatura em graus Fahrenheit: ";
    $fahrenheit = trim(fgets(STDIN));
    $celsius = ($fahrenheit - 32) * 5 / 9;
    echo "A temperatura em Celsius é: " . number_format($celsius, 2) . " °C\n";
} else {
    // Opção inválida
    echo "Opção inválida\n";
}

