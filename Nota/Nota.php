<?php
echo "Sistema de Cálculo de média\n\n";
$name = readline("Qual seu nome? :");
$notas = array();
while (true) {
    $nota = readline("$name, insira uma nota ou digite 'sair' para sair: ");
    if ($nota === "sair") {
        break;
    }
    if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        echo "Nota inválida. Insira uma nota entre 0 e 10.\n";
        continue;
    }
    $notas[] = $nota;
}
if (count($notas) === 0) {
    echo "Nenhuma nota válida inserida.\n";
    exit;
}
$media = array_sum($notas) / count($notas);
echo "Sua média é: " . round($media, 2) . PHP_EOL;
if ($media >= 7) {
    echo "Parabéns, você foi aprovado!\n";
} else {
    echo "Infelizmente você foi reprovado. Estude mais na próxima vez.\n";
}
