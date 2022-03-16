<?php

$array = [
    'nome' => 'Cascata',
    'idade' => 20,
    'empresa' => 'B7Web',
    'cor' => 'Azul',
    'profissao' => 'CascataJob'
];

$chaves = array_keys($array); // torna cada elemento as chaves do array no parametro(não altera o array original)
print_r($chaves);

echo "<br/> <br/>";

$valores = array_values($array); // torna cada elemento os valores do array no parametro(não altera o array original)
print_r($valores);