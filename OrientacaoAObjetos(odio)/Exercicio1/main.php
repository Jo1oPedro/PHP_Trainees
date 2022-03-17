<?php

require 'calculadora.php';

$calculadora = new Calculadora();

$calculadora->somar(4);
$calculadora->somar(3);
$calculadora->subtrair(0);
$calculadora->multiplicar(2);
$calculadora->dividir(2);
echo "O total é: " . $calculadora->total() . "<br/> <br/>";

$calculadora->limpar();