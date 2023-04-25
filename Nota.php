<?php
echo "Sistema de Cálculo de média\n\n";

// Pede o nome do usuário
$name = readline("Qual seu nome? :");

// Inicializa um array vazio para armazenar as notas
$notas = array();

// Loop para receber as notas do usuário
while (true) {
    // Pede uma nota ou a opção para sair
    $nota = readline("$name, insira uma nota ou digite 'sair' para sair: ");

    // Verifica se o usuário escolheu sair
    if ($nota === "sair") {
        break;
    }

    // Verifica se a nota é válida
    if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        echo "Nota inválida. Insira uma nota entre 0 e 10.\n";
        continue;
    }

    // Adiciona a nota ao array de notas
    $notas[] = $nota;
}

// Verifica se o usuário inseriu alguma nota válida
if (count($notas) === 0) {
    echo "Nenhuma nota válida inserida.\n";
    exit;
}

// Calcula a média das notas
$media = array_sum($notas) / count($notas);

// Exibe a média
echo "Sua média é: " . round($media, 2) . PHP_EOL;

// Verifica se o usuário foi aprovado ou reprovado
if ($media >= 7) {
    echo "Parabéns, você foi aprovado!\n";
} else {
    echo "Infelizmente você foi reprovado. Estude mais na próxima vez.\n";
}
