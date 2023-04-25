<?php
echo "feito por Richard Farias\n\n";

// Mostra as opções de conversão disponíveis para o usuário
echo "Escolha o sistema:\n";
echo "1. HSNota (Calcula média do boletim.)\n";
echo "2. HSTemp (Conversor de temperatura.)\n";
echo "3. HSPeso (Calculo de IMC)\n";

$opcao = trim(fgets(STDIN));

if ($opcao == 1) {
    require ('Nota.php');
}
elseif ($opcao == 2) {
 require ('ConversorTemp.php');
}
elseif ($opcao == 3) {
    require ('IMC.php');
}

