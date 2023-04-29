<?php
if (!isset($_POST['opcao'])) {
    echo "Opção não selecionada.";
} else {
    $opcao = $_POST['opcao'];

    switch ($opcao) {
        case 1:
            require('..\Nota\Nota.html');
            break;
        case 2:
            require('..\ConversorTemp\ConversorTemp.html');
            break;
        case 3:
            require('..\IMC\IMC.php');
            break;
        case 4:
            require('..\Churrascometro\Churrascometro.html');
            break;
        default:
            echo "Opção inválida.";
    }
}
?>
