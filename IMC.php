<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Cálculo de IMC</title>
</head>
<body>
<h1>Sistema de Cálculo de IMC</h1>
<form method="post" action="Calculo_IMC.php">
    <label for="name">Qual seu nome?</label>
    <input type="text" name="name" id="name" required>
    <br><br>
    <label for="peso">Favor informar seu peso em KG:</label>
    <input type="number" name="peso" id="peso" min="0" step="0.01" required>
    <br><br>
    <label for="altura">Favor informar sua altura em CM:</label>
    <input type="number" name="altura" id="altura" min="0" step="0.01" required>
    <br><br>
    <input type="submit" value="Calcular">
</form>
</body>
</html>
