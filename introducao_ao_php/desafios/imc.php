<?php

$peso = 70.0;
$altura = 1.88 ** 2;

$imc = $peso / $altura;


echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";