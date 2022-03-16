<?php
$nome = 'Bonieky';
$sobrenome = 'Lacerda';
$idade = 90;

$frase = $nome.' '.$sobrenome.' '."tem $idade anos";
$nomeCompleto = "$nome $sobrenome". "<br>";
echo $frase . "<br>";
echo $nomeCompleto;
$frase .= ' '.$nomeCompleto;
echo $frase;