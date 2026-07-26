<?php

// Atividade 11
echo "<h1>--- Atividade 11 ---</h1>";
$peso = $_POST['peso'];
$altura = $_POST['altura'];

if ($altura > 0) {
    $imc = $peso / ($altura * $altura);
    echo "<p>Seu IMC é: " . round($imc, 2) . "</p>";
} else {
    echo "<p>A altura deve ser maior que zero!</p>";
}

// Atividade 12
echo "<h1>--- Atividade 12 ---</h1>";
$numero1  = $_POST['numero1'];
$numero2  = $_POST['numero2'];
$operacao = $_POST['operacao'];

switch ($operacao) {
    case "Somar":
        echo "<p>A soma de $numero1 e $numero2 é: " . ($numero1 + $numero2) . "</p>";
        break;
    case "Subtrair":
        echo "<p>A subtração de $numero1 e $numero2 é: " . ($numero1 - $numero2) . "</p>";
        break;
    case "Multiplicar":
        echo "<p>A multiplicação de $numero1 e $numero2 é: " . ($numero1 * $numero2) . "</p>";
        break;
    case "Dividir":
        if ($numero2 != 0) {
            echo "<p>A divisão de $numero1 e $numero2 é: " . ($numero1 / $numero2) . "</p>";
        } else {
            echo "<p>Não é possível dividir por zero!</p>";
        }
        break;
}

// Atividade 13
echo "<h1>--- Atividade 13 ---</h1>";
$nome  = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$sexo = $_POST['sexo'];
$curso = $_POST['curso'];
$observacoes = $_POST['observacoes'];

echo "<p>Nome: $nome</p>";
echo "<p>Email: $email</p>";
echo "<p>Telefone: $telefone</p>";
echo "<p>Data de Nascimento: $data_nascimento</p>";
echo "<p>Cidade: $cidade</p>";
echo "<p>Estado: $estado</p>";
echo "<p>Sexo: $sexo</p>";
echo "<p>Curso: $curso</p>";
echo "<p>Observações: $observacoes</p>";

echo "<br><br><a href='index.php'>Voltar</a>";

?>