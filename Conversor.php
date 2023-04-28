<?php
if (!isset($_POST['opcao'])) {
    echo "Opção não selecionada.";
} else {
    $opcao = $_POST['opcao'];

    switch ($opcao) {
        case 1:
            require('Nota.php');
            break;
        case 2:
            require('ConversorTemp.php');
            break;
        case 3:
            require('IMC.php');
            break;
        case 4:
            require('Churrascometro.php');
            break;
        default:
            echo "Opção inválida.";
    }
}
?>
