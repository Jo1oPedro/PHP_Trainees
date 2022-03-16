<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

$retorno = array_slice($array, 2, 2); // 1° parametro é o array alvo, 2° é da onde você pretende começar, 3° quantos elementos você quer pegar
                                      // para pegar todos os elementos a partir do 2° parametro, basta não colocar o 3° parametro na função

$retorno2 = array_slice($array, -2, 2);                
print_r($retorno);
echo "<br/> <br/>";
print_r($retorno2);