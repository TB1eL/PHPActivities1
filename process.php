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

echo "<br><br><a href='index.php'>Voltar</a>";

?>