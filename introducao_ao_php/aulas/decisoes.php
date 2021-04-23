<?php


$idade = 16;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você não pode entrar." . PHP_EOL;
    echo "É uma pena";
}


echo PHP_EOL;
echo "Adeus!";

/* for ($i = 1; $i < 10; $i++) {
    echo $i . PHP_EOL;
}
 */

/* $idade = 15;
$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
echo $mensagem;
 */

