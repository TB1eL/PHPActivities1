<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O HTML</title>
</head>
<body>
    <!-- Atividade 11 -->
    <h1>--- Atividade 11 ---</h1>
    <form action="process.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" step="0.01" required><br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <br><br>

    <!-- Atividade 12 -->
    <h1>--- Atividade 12 ---</h1>
    <form action="process.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>
        <input type="submit" name="operacao" value="Somar">
        <input type="submit" name="operacao" value="Subtrair">
        <input type="submit" name="operacao" value="Multiplicar">
        <input type="submit" name="operacao" value="Dividir">
    </form>
</body>
</html>