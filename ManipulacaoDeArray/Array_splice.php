<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

print_r($array);
echo "<br/> <br/>";

array_splice($array, 2, 1); // modifica o array no 1° parametro, 2° parametro posicao na qual ele vai comecar, 3° parametro numero de elementos que ele vai retirar 

print_r($array);
echo "<br/> <br/>";

array_splice($array, 1);

print_r($array);
echo "<br/> <br/>";

array_splice($array, 0, 1, ['K','O']); // o 4° parametro serve para substituir algum elemento no array  alvo

print_r($array);