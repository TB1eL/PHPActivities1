<?php

// Atividade 1
echo "--- Atividade 1 ---" . "\n";

$idade = 0;
if ($idade >= 18) {
    echo "Você eh maior de idade!" . "\n";
} else {
    echo "Você eh menor de idade!" . "\n";
}

// Atividade 2
echo "--- Atividade 2 ---" . "\n";

$dinheiro = 5;

echo "Você tem R$" . $dinheiro . ", é um...\n";
switch ($dinheiro) {
    case $dinheiro < 100:
        echo "Pobre!" . "\n";
        break;
    case $dinheiro >= 100 && $dinheiro < 1000:
        echo "Classe Média!" . "\n";
        break;
    case $dinheiro >= 1000 && $dinheiro < 1000000:
        echo "Riquinho!" . "\n";
        break;
    case $dinheiro >= 1000000000 && $dinheiro < 1000000000000:
        echo "Ricão!" . "\n";
        break;
    case $dinheiro >= 1000000000000:
        echo "Elon Musk!" . "\n";
        break;
    default:
        echo "Nem dinheiro você tem!" . "\n";
}

// Atividade 3
echo "--- Atividade 3 ---" . "\n";

$numero1  = 20;
$numero2  = 10;
$operacao = "soma";

switch ($operacao) {
    case "soma":
        echo "A soma de $numero1 e $numero2 é: " . ($numero1 + $numero2) . "\n";
        break;
    case "subtracao":
        echo "A subtração de $numero1 e $numero2 é: " . ($numero1 - $numero2) . "\n";
        break;
    case "multiplicacao":
        echo "A multiplicação de $numero1 e $numero2 é: " . ($numero1 * $numero2) . "\n";
        break;
    case "divisao":
        if ($numero2 != 0) {
            echo "A divisão de $numero1 e $numero2 é: " . ($numero1 / $numero2) . "\n";
        } else {
            echo "Não é possível dividir por zero!" . "\n";
        }
        break;
    default:
        echo "Operação inválida!" . "\n";
}

// Atividade 4
echo "--- Atividade 4 ---" . "\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}