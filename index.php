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
    <br><br>

    <!-- Atividade 13 -->
    <h1>--- Atividade 13 ---</h1>
    <form action="process.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>       
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>        
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" required>        
        <br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>        
        <br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" required>        
        <br><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" required>        
        <br><br>

        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select><br><br>

        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" required>        
        <br><br>

        <label for="observacoes">Observações:</label>
        <textarea name="observacoes" id="observacoes"></textarea>        
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>