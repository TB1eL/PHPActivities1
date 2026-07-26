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

echo "<br><br><a href='index.php'>Voltar</a>";

?>