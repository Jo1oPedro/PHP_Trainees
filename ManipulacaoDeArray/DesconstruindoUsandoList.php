<?php

$array = ['Cascata', 90, 'café', 'azul'];

$nome = $array[0];
$idade = $array[1];
$bebida = $array[2];
$cor = $array[3];

list($nome2, $idade2, $bebida2, $cor2) = $array; // associa cada posição da lista a cada posição do array;
                                                 // essa list está desconstruindo array
echo $nome. " tem ".$idade." anos e gosta de tomar ".$bebida." com a cor ".$cor . "<br/> <br/>";

echo $nome2. " tem ".$idade2." anos e gosta de tomar ".$bebida2." com a cor ".$cor2;
