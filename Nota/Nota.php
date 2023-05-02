<?php
$nome = $_POST['name'];
$notas = $_POST['nota'];

$media = array_sum($notas) / count($notas);
echo "$nome, sua média é: " . round($media, 2);
if ($media >= 7) {
        echo " | Parabéns, você foi aprovado!";
} else {
    echo " | Infelizmente você foi reprovado. Estude mais na próxima vez.\n";
}
