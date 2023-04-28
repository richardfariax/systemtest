<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <title>Churrascômetro</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 28px;
            color: #333;
        }

        form {
            width: 40%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
            width: 100%;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
            border: 2px solid #ddd;
            width: 100%;
            margin-bottom: 20px;
            transition: border-color 0.3s ease;
            outline: none;
        }

        input[type="number"]:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            outline: none;
            margin: 0 auto;
            display: block;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }


        .result h2 {
            margin-top: 0;
            font-size: 20px;
            color: #333;
        }

        .result p {
            margin-bottom: 20px;
            color: #666;
        }
    </style>
</head>
<body>
<h1>Churrascômetro</h1>
<form method="post" action="Calcular.php">
    <label for="adultos">Quantos adultos?</label>
    <input type="number" name="adultos" id="adultos" required>
    <label for="criancas">Quantas crianças?</label>
    <input type="number" name="criancas" id="criancas" required>
    <label for="cerveja">Quantos bebem cerveja?</label>
    <input type="number" name="cerveja" id="cerveja" required>
    <label for="refrigerante">Quantos tomam refrigerante?</label>
    <input type="number" name="refrigerante" id="refrigerante" required>
    <label for="suco">Quantos tomam suco?</label>
    <input type="number" name="suco" id="suco" required>
    <input type="submit" value="Calcular">
</form>
</body>
</html>
<?php
$adultos = $_POST['adultos'];
$criancas = $_POST['criancas'];
$cerveja = $_POST['cerveja'];
$refrigerante = $_POST['refrigerante'];
$suco = $_POST['suco'];

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

if ($adultos) {
    echo "<div style='background-color: #f5f5f5; padding: 20px;'>";
    echo "<h2 style='margin-bottom: 10px;'>Resultado</h2>";
    list($total_cervejas, $total_refrigerantes, $total_sucos) = bebidas($cerveja, $refrigerante, $suco);
    echo "<p style='margin-bottom: 5px;'>Total de latas de cerveja: $total_cervejas</p>";
    echo "<p style='margin-bottom: 5px;'>Total de refrigerantes: $total_refrigerantes Litros</p>";
    echo "<p style='margin-bottom: 5px;'>Total de suco em litros: $total_sucos Litros</p>";
    $total_carne = carne($adultos, $criancas);
    echo "<p style='margin-bottom: 5px;'>Total de Carne: $total_carne Kg</p>";
    echo "</div>";
}
?>
