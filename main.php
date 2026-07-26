<?php

// Atividade 1
$idade = 0;
if ($idade >= 18) {
    echo "Você eh maior de idade!" . "\n";
} else {
    echo "Você eh menor de idade!" . "\n";
}

// Atividade 2
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